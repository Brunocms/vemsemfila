<?=$header?>
<?=$topo?>
<div id="content">
<div id="middle">
<h1>Cadastro de usuÁrio:</h1><img src="/assets/img/linha_tit_home.gif" width="734" height="1" />
<div id="txt">Preenchar o formulário abaixo para se cadastrar e ter acesso ao nosso serviço tanto no seu computador quanto no seu smartphone.<br /><br />O Número de Celular é necessário para podermos enviar notificações do seu check-in na fila por sms.<br /><br />
    <a href="<?=$login_fb?>"><img style="
    width: 35px;
    float: right;
" src='/assets/img/icon_facebook_login.png' /></a>
    <form action="<?=base_url('cadastro')?>" method="POST" id="cadastroForm">
      <table width="500px" border="0" cellspacing="3" cellpadding="8">
        <tr>
          <td height="24" colspan="4" bgcolor="#CECECE" class="table"><strong>INFORMAÇÕES OBRIGATÓRIAS:</strong></td>
          </tr>
        <tr>
            <td width="106" bgcolor="#DFDFDF" class="table">Nome</td>
            <td width="174" bgcolor="#DFDFDF" class="table">
                <input type="text" value="<?=(isset($user_profile['name'])) ? $user_profile['name'] : ''?>" name="nome"  class="field" />
            </td>
            <td bgcolor="#DFDFDF" class="table">Email</td>
            <td bgcolor="#DFDFDF" class="table">
                <input type="text" name="email"  class="field" />
            </td>
        </tr>
        <tr>
          <td width="106" bgcolor="#DFDFDF" class="table">*Senha</td>
          <td width="174" bgcolor="#DFDFDF" class="table">
          <input type="password" name="senha"  id='senha' class="field" />
            </td>
          <td bgcolor="#DFDFDF" class="table">*Confirmar senha</td>
          <td bgcolor="#DFDFDF" class="table">
              <input type="password" name="confirmasenha"  class="field" />
          </td>
        </tr>
        <tr>
          <td height="24" colspan="4" bgcolor="#CECECE" class="table"><strong>INFORMAÇÕES COMPLEMENTARES:</strong></td>
        </tr>
        <tr>
          <td bgcolor="#DFDFDF" class="table">Celular</td>
          <td bgcolor="#DFDFDF" class="table"><input type="text" name="telefone" id="textfield5" class="field" /></td>
          <td bgcolor="#DFDFDF" class="table">Sexo</td>
          <td bgcolor="#DFDFDF" class="table"><input type="radio" id="radio3" value="radio" />
            <label for="radio3"></label>
            Masculino
            <input type="radio" name="sexo" id="radio4" value="radio" />
            Feminino
    </td>
        </tr>
        <tr>
          <td bgcolor="#DFDFDF" class="table">Data de Nasc. </td>
          <td bgcolor="#DFDFDF" class="table"><input type="text"  id="textfield7" class="field" /></td>
          <td bgcolor="#DFDFDF" class="table">UF</td>
          <td bgcolor="#DFDFDF" class="table"><input type="text" name="estado" value="<?=(isset($endereco[1])) ? $endereco[1] : ''?>" id="textfield8" class="field" /></td>
        </tr>
        <tr>
          <td bgcolor="#DFDFDF" class="table">Cidade</td>
          <td bgcolor="#DFDFDF" class="table"><input type="text" name="cidade" value="<?=(isset($endereco[0])) ? $endereco[0] : ''?>" id="textfield9" class="field" /></td>
          <td bgcolor="#DFDFDF" class="table">Bairro</td>
          <td bgcolor="#DFDFDF" class="table"><input type="text" name="bairro" id="textfield10" class="field" /></td>
        </tr>
        <tr>
          <td bgcolor="#DFDFDF" class="table">Logradouro</td>
          <td bgcolor="#DFDFDF" class="table"><input type="text" name="logradouro" id="textfield6" class="field" /></td>
          <td align="left" bgcolor="#DFDFDF" class="table">Endereço</td>
          <td align="left" bgcolor="#DFDFDF" class="table"><input type="radio" name="" id="radio" value="radio" />
            <label for="radio"></label>
    Comercial
    <input type="radio" name="" id="radio2" value="radio" />
    Residencial</td>
          </tr>
        <tr>
          <td colspan="4" bgcolor="#DFDFDF" class="table">Observação<br />
            <label for="textarea"></label>
            <textarea name="obs" id="textarea" class="field2"></textarea></td>
        </tr>
        <tr>
          <td height="51" class="table">&nbsp;</td>
          <td class="table">&nbsp;</td>
          <td colspan="2" align="right" class="table"><input type="submit" name="enviar" id="enviar" value="Enviar" class="send" /></td>
        </tr>
      </table>
        </form>
</div>
<div id="divider"><img src="/assets/img/divider.png" width="734" height="1" /></div>
<div id="destaques"><a href="#"><img src="/assets/img/box_downloadapp_home.jpg" width="237" height="109" alt="download app" /></a> <a href="cadastro_rest.html"><img src="/assets/img/box_cadastrorest_home.jpg" width="237" height="109" alt="cadastro restaurante" hspace="5" /></a> <a href="reserva.html"><img src="/assets/img/box_reserva_home.jpg" width="237" height="109" alt="reserva mesa" hspace="5" /></a></div>
</div>

<div id="publicidade">
  <a href="#"><img src="/assets/img/pub01.jpg" width="173" height="292" alt="pub01" /></a><br />
  <a href="#"><img src="/assets/img/pub02.jpg" width="173" height="260" alt="pub02" vspace="5" /></a><br />
</div>

</div>
<?=$footer?>