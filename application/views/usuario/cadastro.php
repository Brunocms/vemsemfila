<?=$header?>
<?=$topo?>

<div class="container_24" id="cadastro-usuario">
    <div class="grid_24">
  
        <div class="grid_19 alpha">

            <h1 style="font-weight: initial;font-size: 15px;">Crie seu cadastro no VemSemFila</h1>
            <?=validation_errors()?>
          <form id='cadastroForm' method="POST" action="#">
          <fieldset>
              <table cellspacing="3" cellpadding="0">
              <colgroup>
                <col width="10%">
                <col width="40%">
                <col width="20%">
                <col width="30%">
              </colgroup>
              
              <tr>
                  <td colspan="4" class="title">INFORMAÇÕES OBRIGATÓRIAS</td>
              </tr>
              <tr>
                  <td>Nome</td>
                  <td>
                    <input type="text" value="<?=(isset($user_profile['name'])) ? $user_profile['name'] : ''?>" name="nome"  />
                  </td>
                  <td>Sobrenome</td>
                  <td>
                      <input type="text" name="sobrenome" />
                  </td>
              </tr>
              <tr>
                  <td>Email</td>
                  <td colspan="3">
                      <input type="text" name="email" id='email' />
                  </td>
              </tr>
              <tr>
                  <td>Senha</td>
                  <td>
                      <input type="password" name="senha" id='senha' />
                  </td>
                  <td>Confirmar senha</td>
                  <td>
                      <input type="password" name="confirmasenha" />
                  </td>
              </tr>
              <tr>
                  <td colspan="4" class="title">INFORMAÇÕES COMPLEMENTARES</td>
              </tr>
              <tr>
                  <td>Celular</td>
                  <td><input type="text" name="telefone" id="telefone" /></td>

                  <td>CEP</td>
                  <td> <input type="text" id="cep" name="cep" /> </td>
              </tr>
              <tr>
                  <td>Estado</td>
                  <td><select><option>RJ</option></select></td>

                  <td>Cidade</td>
                  <td><select><option>Rio de Janeiro</option></select></td>
              </tr>
              <tr>
                  <td>Bairro</td>
                  <td><select><option>Barra da Tijuca</option></select></td>
              </tr>
              <tr>
                  <td>Endereço</td>
                  <td><input type="text" id="logradouro" name="logradouro"></td>

                  <td>Nº <input type="text" id="numero" name="numero" class="smart"></td>
                  <td>Complemento <input type="text" id="complemento" name="complemento" class="medium"></td>
              </tr>
              </table>
                <button type='submit'>Enviar</button>
          </fieldset>
          </form>

          <div id="download_app"><a href="#"><img src="/assets/img/banner_app_home.png" width="737" height="77" alt="baixe aqui nosso app!" title="baixe aqui nosso app!" /></a></div>

        </div>

        <div class="grid_4 prefix_1 omega sidebar">
           <h1 style="margin-bottom: 10px;font-weight: initial;font-size: 15px;">Cadastre-se com</h1>
           <p><a href="<?=$login_fb?>" class="facebook"><span class="fa fa-facebook-square"></span> Facebook </a></p>
      <!--     <p><a href="#" class="googleplus"><span class="fa fa-google-plus-square"></span> Google+ </a></p> -->
        </div>

    </div>
</div>

<?=$footer?>