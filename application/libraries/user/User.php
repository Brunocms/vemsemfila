<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* User Auth Class
*
* @author	 	Waldir Bertazzi Junior
* @link			http://waldir.org/
*/

/*
* This constant is used to make the login 
* keep the last login on the database.
*/
define('DONT_UPDATE_LOGIN', false);

define('PASSWORD_IS_HASHED', true);
define('PASSWORD_IS_NOT_HASHED', false);


class User {
	
	/**
	* User Data - This variable holds all user data after session validation
	*
	* @var array
	*/
	public $user_data = array();
    public $user_database = 'tb_usuario';
    public $user_database_password = 'senha';
	private $CI;

	/**
	* Constructor
	* 
	* Loads the session and crypt library.
	* Also gets a instance of CI class.
	* 
	*/
	function __construct(){
		$this->CI =& get_instance();
		
		// checks if the database library is loaded
		if(!isset($this->CI->db)){
			show_error("Database library isn't loaded, please load it. It's recommended that you autoload it. Click <a href='http://codeigniter.com/user_guide/general/autoloader.html'>here</a> for more information about Codeigniter's autoloader.");
		}
		// load session and bcrypt library.
		$this->CI->load->library(array('session', 'user/bcrypt'));

		// autoload user if it exists
		$this->validate_session();
	}
	
	/**
	* Get ID - return the logged user id.
	* 
	* @return int
	*/
	function get_id(){
		if (isset($this->CI->session->userdata('data')->id_usuario))
			return $this->CI->session->userdata('data')->id_usuario;
		else
			return false;
	}
	
	/**
	* Get Email - return the logged user email.
	* 
	* @return string
	*/
	function get_email(){
		if (isset($this->user_data->email))
			return $this->user_data->email;
		else
			return false;
	}
	
	/**
	* Get username - return the logged user username.
	* 
	* @return string
	*/
	function get_login(){
		return $this->CI->session->userdata('login');
	}
	
	/**
	* Get name - return the logged user name.
	* 
	* @return string
	*/
	function get_name(){
		if (isset($this->user_data->name))
			return $this->user_data->name;
		else
			return false;
	}
	
	
	/**
	* 
	* On Invalid Session - Simple redirect if the user is not
	* already logged in. Make it easy to create login only pages.
	* 
	* @param string $destiny - the destiny to the user is not logged in
	* 
	*/
	function on_invalid_session($destiny){
		if(!$this->validate_session()){
			$this->CI->session->set_flashdata('error_message', 'Invalid session.');
			redirect($destiny);
		}
	}
	
	/**
	* On Valid Session - Simple redirect the user
	* if its already logged in. Make it easy to create login pages.
	* 
	* @param string $destiny - the destiny to the user is logged in
	*
	*/
	function on_valid_session($destiny){
		if($this->validate_session()) {
			// if its not logged we must clear the flashdata because it was filled on validate
			$this->CI->session->set_flashdata('error_message', '');
			redirect($destiny);
		}
	}
	
	/**
	* Validate Session - Return true if the session stills valid
	* otherwise returns false. It also "generates" the user_data variable.
	* 
	* @return boolean
	*/
	function validate_session(){
		// This function doesnt need to update the last_login on database.
		if($this->login(['email' => $this->CI->session->userdata('email'), 'senha' => $this->CI->session->userdata('pw'), 'hash' => true])){
			return true;
		}
		return false;
	}
	
	/**
	* Login - Receives the user and the password, verifies it
	* and create a new session.
	* 
	* @param string $login - The login to validate 
	* @param string $password - The password to validate
	* @param bool $update_last_login - set if this login will update the last login field or not
	* @param bool $hashed_password - notifies the function that the received password is already hashed.
	*/
	public function login($data = []){
        $hash = (isset($data['hash']) && $data['hash'] == true) ? true : false;
        $login = $data['email'];
        $password = $data['senha'];

        $user_query = $this->CI->db->get_where('tb_usuario', array('email'=>$login));
		
		if($user_query->num_rows()==1){
			// get user from the database
			$user_query = $user_query->row();
			
			// checks if user is active or not
			if($user_query->status == 0) return false;

			// validates hash
			$valid_password = false;

            if ($hash)
            {
                $valid_password = ($password == $user_query->senha) ? true : false;
            }else{
                $valid_password = $valid_password || $this->CI->bcrypt->compare($password, $user_query->senha);
            }

			if($valid_password){
				// save the user data
				$this->user_data = $user_query;

				//loads the user permissions
				//$this->_load_permission($this->user_data->id);

				// create the user session
				$this->_create_session($login, $user_query->senha, $user_query);


				return true;
			} else {
				// invalid password
				return false;
			}
		} else {
			// Invalid login
			return false;
		}
	}
	
		
	/**
	* Match Password - returns true if the
	* argument is the same to the logged user
	*
	* @param string - the password to match
	* @return boolean
	*/
	function match_password($password_string){
		return $this->CI->bcrypt->compare($password_string, $this->user_data->password);
	}
	
	/**
	* Update Last Login - update the last login of the current user with the current date 
	*
	* @return boolean - the result of the operation
	*/
	function update_last_login(){
		$this->CI->db->where(array('id'=>$this->get_id()));
		return $this->CI->db->update('users', array('last_login' => date('Y-m-d')));
	}

	/**
	* Has Permission - returns true if the user has the received
	* permission. Simply pass the name of the permission.
	* 
	* @param string $permission_name - The name of the permission
	* @return boolean
	*/
	function has_permission($permission_name){
		if( ! $this->CI->session->userdata('logged')){
			return false;
		} else if (in_array($permission_name, $this->user_permission)) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	* Update Login - update the login where it is needed.
	* note: it also updates the database
	* 
	* @param string $new_pw the new login
	* @return boolean
	*/
	function update_login($new_login){
		// updates the session
		$this->CI->session->set_userdata(array('email'=>$new_login));
		$this->user_data->login = $new_login;
		
		// update the database
		$sts = $this->CI->db->update('user', array('email'=>$new_login));
		
		return $sts;
	}
	
	/**
	* Update Password - In the case you made a form for the user to change its
	* password, this function will change everything needed to maintain
	* the user logged in. IT MUST BE HASHED.
	*
	* @param string $new_pw the new password
	* @return boolean
	*/
	function update_pw($new_pw){
		// updates the session
		$this->CI->session->set_userdata(array('pw'=>$new_pw));

        $pass = $this->CI->bcrypt->hash($new_pw);
		// update the database
		$sts = $this->CI->db->update($this->user_database, array($this->user_database_password=>$pass));
		
		return $sts;
	}
	
	
	/**
	* Destroy User - Destroy all the user session where is needed.
	* 
	* @return boolean
	*/
	function destroy_user(){
		// remove everything from the session
		$this->CI->session->set_userdata(array('email'=>"", 'pw'=>"", 'logged'=>false, 'data' => null));
		$this->CI->session->sess_destroy();
		unset($this->user_data);
		return true;
	}

	/**
	* Create session - creates the session with valid data
	* its used by the validate function.
	* 
	* @param string $login - The login to save
	* @param string $password - The password to save
	*
	*/
	private function _create_session($login, $password, $data){
		$this->CI->session->set_userdata(array('email'=>$login, 'pw'=>$password, 'logged'=>true, 'data' => $data));
	}
}
?>
