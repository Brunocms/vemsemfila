<?=$header?>
<?=$topo?>
<div id="content">
<div id="middle">
<h1>Cadastro de Restaurante:</h1><img src="img/linha_tit_home.gif" width="734" height="1" />
<div id="txt">Preenchar o formulário abaixo para se cadastrar e ter acesso ao nosso serviço tanto no seu computador quanto no seu smartphone.<br /><br />O Número de Celular é necessário para podermos enviar notificações do seu check-in na fila por sms.<br /><br />
  <form action="<?=base_url('admin/restaurante/new')?>" method="POST">
      <table width="651" border="0" cellspacing="3" cellpadding="8">
          <tr>
              <td height="24" colspan="4" bgcolor="#CECECE" class="table"><strong>INFORMAÇÕES:</strong></td>
          </tr>
          <tr>
              <td width="102" bgcolor="#DFDFDF" class="table">*Nome do Rest.</td>
              <td width="184" bgcolor="#DFDFDF" class="table"><label for="textfield"></label>
                  <input type="text" name="nome" id="textfield" class="field" /></td>
              <td width="100" bgcolor="#DFDFDF" class="table">*CNPJ</td>
              <td width="186" bgcolor="#DFDFDF" class="table"><input type="text" name="cnpj" id="textfield2" class="field" /></td>
          </tr>
          <tr>
              <td bgcolor="#DFDFDF" class="table">*Razão Social</td>
              <td bgcolor="#DFDFDF" class="table"><input type="text" name="razao_social" id="textfield3" class="field" /></td>
              <td bgcolor="#DFDFDF" class="table">*Enderço</td>
              <td bgcolor="#DFDFDF" class="table"><input type="text" id="textfield4" class="field" /></td>
          </tr>
          <tr>
              <td bgcolor="#DFDFDF" class="table">*Nome do Contato</td>
              <td bgcolor="#DFDFDF" class="table"><input type="text" name="responsavel" id="textfield11" class="field" /></td>
              <td bgcolor="#DFDFDF" class="table">*E-mail</td>
              <td bgcolor="#DFDFDF" class="table"><input type="text" name="email1" id="textfield12" class="field" /></td>
          </tr>
          <tr>
              <td bgcolor="#DFDFDF" class="table">*Tel 1</td>
              <td bgcolor="#DFDFDF" class="table"><input type="text" name="tel1" id="textfield17" class="field" /></td>
              <td bgcolor="#DFDFDF" class="table">Tel 2</td>
              <td bgcolor="#DFDFDF" class="table"><input type="text" name="tel2" id="textfield18" class="field" /></td>
          </tr>
          <tr>
              <td colspan="2" bgcolor="#DFDFDF" class="table">*Categoria:
                  <input type="radio" name="categoria" id="radio8" value="0" />
                  <label for="radio8"></label>
                  Matriz
                  <input type="radio" name="categoria" id="radio9" value="1" />
                  <label for="radio9"></label>
                  Filial
                  <input type="radio" name="categoria" id="radio10" value="2" />
                  <label for="radio10"></label>
                  Franquia </td>
              <td colspan="2" bgcolor="#DFDFDF" class="table">Cadastrar Filial agora?
                  <input type="radio" id="radio" value="radio5" />
                  Sim
                  <input type="radio"  id="radio2" value="radio5" />
                  Não</td>
          </tr>
          <tr>
              <td bgcolor="#DFDFDF" class="table">*Senha</td>
              <td bgcolor="#DFDFDF" class="table"><input type="text" id="textfield5" class="field" /></td>
              <td bgcolor="#DFDFDF" class="table">*Confirmar senha</td>
              <td bgcolor="#DFDFDF" class="table"><input type="text"id="textfield6" class="field" /></td>
          </tr>
          <tr>
              <td colspan="4" bgcolor="#DFDFDF" class="table">Observação<br />
                  <label for="textarea"></label>
                  <textarea name="observacao" id="textarea" class="field2"></textarea></td>
          </tr>
          <tr>
              <td colspan="4" align="right" class="table"><input type="submit" id="enviar" value="Enviar" class="send" /></td>
          </tr>
      </table>
  </form>

</div>
<div id="divider"><img src="img/divider.png" width="734" height="1" /></div>
<div id="destaques"><a href="#"><img src="img/box_downloadapp_home.jpg" width="237" height="109" alt="download app" /></a> <a href="cadastro_rest.html"><img src="img/box_cadastrorest_home.jpg" width="237" height="109" alt="cadastro restaurante" hspace="5" /></a> <a href="reserva.html"><img src="img/box_reserva_home.jpg" width="237" height="109" alt="reserva mesa" hspace="5" /></a></div>
</div>

<div id="publicidade">
  <a href="#"><img src="img/pub01.jpg" width="173" height="292" alt="pub01" /></a><br />
  <a href="#"><img src="img/pub02.jpg" width="173" height="260" alt="pub02" vspace="5" /></a><br />
</div>

</div>
<?=$footer?>