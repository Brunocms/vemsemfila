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
                <form id='cadastroForm' method="POST" action="#">
                    <fieldset>
                        <table cellspacing="3" cellpadding="0">
                            <colgroup>
                                <col width="20%">
                                <col width="40%">
                                <col width="10%">
                                <col width="30%">
                            </colgroup>

                            <tr>
                                <td colspan="4" class="title">PREENCHA O FORMULÁRIO ABAIXO</td>
                            </tr>
                            <tr>
                                <td>Nome</td>
                                <td colspan="3">
                                    <input type="text" class="big" value="" name="nome"  />
                                </td>
                                <td>Email</td>
                                <td>
                                    <input type="text" name="email1" id='email1' />
                                </td>
                            </tr>
                            <tr class="cliente">
                                <td>*Email 1</td>
                                <td>
                                    <input type="text" name="email1" id='email1' />
                                </td>
                                <td>Email 2</td>
                                <td>
                                    <input type="text" name="email2" id='email2' />
                                </td>
                            </tr>
                            <tr class="cliente">
                                <td>*Tel 1</td>
                                <td>
                                    <input type="text" name="tel1" id='tel1' />
                                </td>
                                <td>Tel 2</td>
                                <td>
                                    <input type="text" name="tel2" id='tel2' />
                                </td>
                            </tr>
                            <tr class="cliente">
                                <td>Estado</td>
                                <td><select name='estado'><option>RJ</option></select>
                                </td>

                                <td>Cidade</td>
                                <td><select name='cidade'><option>Rio de Janeiro</option></select>
                                </td>
                            </tr>
                            <tr class="cliente">
                                <td>Bairro</td>
                                <td><select name='bairro'><option>Barra da Tijuca</option></select>
                                </td>
                            </tr>
                            <tr>
                                <td>Observação</td>
                                <td colspan="3"><textarea name='observacao' class="big"></textarea></td>
                            </tr>
                        </table>

                        <button type="submit">ENVIAR</button>
                    </fieldset>
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