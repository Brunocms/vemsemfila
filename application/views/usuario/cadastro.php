<?=$header?>
<?=$topo?>

<div class="container_24" id="cadastro-usuario">
    <div class="grid_24">
  
        <div class="grid_19 alpha">

          <h1>Cadastro de usuário:</h1>

          <p>
            Preenchar o formulário abaixo para se cadastrar e ter acesso ao nosso serviço tanto no seu computador quanto no seu smartphone.<br />
            O Número de Celular é necessário para podermos enviar notificações do seu check-in na fila por sms.
          </p>

          <form>
          <fieldset>
              <table cellspacing="3" cellpadding="0">
              <colgroup>
                <col width="10%">
                <col width="40%">
                <col width="20%">
                <col width="30%">
              </colgroup>
              
              <tr>
                  <td colspan="4" class="title">INFORMAÇÕES OBRIGATÓRIAS:</td>
              </tr>
              <tr>
                  <td>*Nome</td>
                  <td>
                    <input type="text" value="<?=(isset($user_profile['name'])) ? $user_profile['name'] : ''?>" name="nome"  />
                  </td>
                  <td>*Sobrenome</td>
                  <td>
                      <input type="text" name="sobrenome" />
                  </td>
              </tr>
              <tr>
                  <td>*Email</td>
                  <td colspan="3">
                      <input type="text" name="email" id='email' />
                  </td>
              </tr>
              <tr>
                  <td>*Senha</td>
                  <td>
                      <input type="password" name="senha" id='senha' />
                  </td>
                  <td>*Confirmar senha</td>
                  <td>
                      <input type="password" name="confirmasenha" />
                  </td>
              </tr>
              <tr>
                  <td colspan="4" class="title">INFORMAÇÕES COMPLEMENTARES:</td>
              </tr>
              <tr>
                  <td>Celular</td>
                  <td><input type="text" name="celular" id="celular" /></td>

                  <td>CEP</td>
                  <td> <input type="text" id="cep" name="cep" /> </td>
              </tr>
              <tr>
                  <td>País</td>
                  <td><select><option>Brasil</option></select></td>

                  <td>Estado</td>
                  <td><select><option>RJ</option></select></td>
              </tr>
              <tr>
                  <td>Cidade</td>
                  <td><select><option>Rio de Janeiro</option></select></td>

                  <td>Bairro</td>
                  <td><select><option>Barra da Tijuca</option></select></td>
              </tr>
              <tr>
                  <td>Logradouro</td>
                  <td><input type="text" id="logradouro" name="logradouro"></td>

                  <td>Nº <input type="text" id="num" name="num" class="smart"></td>
                  <td>Complemento <input type="text" id="complemento" name="complemento" class="medium"></td>
              </tr>
              </table>

              <a href="#" class="bt">ENVIAR</a>
          </fieldset>
          </form>

        </div>

    </div>
</div>

<?=$footer?>