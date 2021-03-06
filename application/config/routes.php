<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['404_override'] = '';

$route['hostess/(:num)'] = 'hostess/index/$1';
$route['leads/cadastrado'] = 'restaurantes/lead_cadastrado';

// restaurantes
$route['cadastro'] = 'usuario/cadastro';
$route['reserva'] = 'restaurantes/reserva';
$route['admin'] = 'admin/home';
$route['leads'] = 'restaurantes/leads';
$route['como_funciona'] = 'home/como_funciona';
$route['fale_conosco'] = 'home/fale_conosco';
$route['faq'] = 'home/faq';
$route['quem_somos'] = 'home/quem_somos';
$route['termos'] = 'home/termos_de_uso';
$route['abrir_fila'] = 'restaurantes/abrir_fila';
$route['fila'] = 'restaurantes/fila';
$route['clientes'] = 'restaurantes/clientes';
$route['reservas'] = 'restaurantes/reservas';



/* End of file routes.php */
/* Location: ./application/config/routes.php */