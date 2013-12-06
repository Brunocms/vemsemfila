<?=$header?>
<?=$topo?>
<div class="container_24" id="cadastro-usuario">

    <div class="grid_24">



        <div class="grid_19 alpha">



            <h1 style="font-weight: initial;font-size: 15px;">Faça seu Login no VemSemFila</h1>

            <?=$this->session->flashdata('info')?>

            <form id='login' method="POST" action="<?=base_url('home/login')?>">

                <fieldset>

                    <table cellspacing="3" cellpadding="0">



                        <tr>

                            <td width="55%" align="left">Email:<br>
                                <input type="text" value="" name="email"  />                  <br>
                                <br>
                                Senha<br>
                                <input type="password" name="senha" id='senha' />
                                <a href="<?=base_url('usuario/recuperar')?>"><font color="#FF9900">(esqueceu sua senha?)</font></a><br><br><br>

                                <button type='submit' style="float:left">Enviar</button></td>

                            <td width="45%" align="right" valign="top"><h2>Não tem uma conta?</h2><br>
                                <a href="<?=base_url('cadastro')?>"><font color="#FF9900">Cadastre-se aqui</font></a></td>

                        </tr>

                    </table>



                </fieldset>

            </form>



        </div>



        <div class="grid_4 prefix_1 omega sidebar">

            <h1 style="margin-bottom: 10px;font-weight: initial;font-size: 15px;">Cadastre-se com</h1>

            <p><a href="https://www.facebook.com/dialog/oauth?client_id=582567695134094&redirect_uri=http%3A%2F%2Fhomolog.vemsemfila.com.br%2Fusuario%2Ffacebook_connect&state=703e612f610954c1640fdd83e602d998&scope=email%2Coffline_access%2Cuser_birthday%2Cuser_location%2Cuser_about_me%2Cuser_hometown" class="facebook"><span class="fa fa-facebook-square"></span> Facebook </a></p>

            <!--     <p><a href="#" class="googleplus"><span class="fa fa-google-plus-square"></span> Google+ </a></p> -->

        </div>



    </div>

</div>
<?=$footer?>