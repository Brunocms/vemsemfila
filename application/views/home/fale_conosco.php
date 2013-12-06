<?=$header?>
<?=$topo?>

    <div class="container_24" id="cadastro-leads">
        <div class="grid_24">

            <div class="grid_19 alpha">

                <h1>FALE CONOSCO</h1>

                <p>
                    Entre em contato conosco pelo telefone <b>2222-2222</b> ou pelo e-mail contato@vemsemfila.com.br.

                    Se preferir, preencha o formulário abaixo para nos enviar dúvidas, críticas ou sugestões.
                </p>
                <?=validation_errors()?>
                <?=$this->session->flashdata('info')?>
                <form action="" method="post" name="form">
                    <table width="609" border="0" cellspacing="3" cellpadding="8">
                        <tbody><tr>
                            <td height="24" colspan="4" bgcolor="#CECECE" class="table"><strong>Preencha o formulário abaixo:</strong></td>
                        </tr>
                        <tr>
                            <td width="58" bgcolor="#DFDFDF" class="table">*Nome</td>
                            <td width="224" bgcolor="#DFDFDF" class="table"><label for="nome"></label>
                                <input type="text" name="nome" class="field" value=""></td>
                            <td width="48" bgcolor="#DFDFDF" class="table">*E-mail</td>
                            <td width="215" bgcolor="#DFDFDF" class="table"><input type="text" name="email" value="" class="field"></td>
                        </tr>
                        <tr>
                            <td bgcolor="#DFDFDF" class="table">*Assunto</td>
                            <td bgcolor="#DFDFDF" class="table"><input type="text" name="assunto" value="" class="field"></td>
                            <td bgcolor="#DFDFDF" class="table">Empresa</td>
                            <td bgcolor="#DFDFDF" class="table"><input type="text" name="empresa" value="" class="field"></td>
                        </tr>
                        <tr>
                            <td bgcolor="#DFDFDF" class="table">Telefone</td>
                            <td bgcolor="#DFDFDF" class="table"><input type="text" name="telefone" value="" class="field"></td>
                            <td bgcolor="#DFDFDF" class="table">Celular</td>
                            <td bgcolor="#DFDFDF" class="table"><input type="text" name="celular" value="" class="field"></td>
                        </tr>
                        <tr>
                            <td colspan="4" bgcolor="#DFDFDF" class="table">Mensagem<br>
                                <label for="textarea"></label>
                                <textarea name="mensagem" class="field2"></textarea></td>
                        </tr>
                        </tbody>

                    </table>
                    <input style="float: right" type="submit" name="enviar" id="enviar" value="Enviar" class="send">
                </form>

                <div id="download_app"><a href="#"><img src="/assets/img/banner_app_home.png" width="737" height="77" alt="baixe aqui nosso app!" title="baixe aqui nosso app!" /></a></div>

            </div>

            <div class="grid_4 prefix_1 omega">
                <a href="#"><img src="/assets/img/pub01.jpg" width="173" height="292" alt="pub01" /></a><br />
                <a href="#"><img src="/assets/img/pub02.jpg" width="173" height="260" alt="pub02" vspace="5" /></a><br />
                <a href="#"><img src="/assets/img/pub03.jpg" width="173" height="171" alt="pub03" vspace="5" /></a><br />
            </div>

        </div>
    </div>

<?=$footer?>