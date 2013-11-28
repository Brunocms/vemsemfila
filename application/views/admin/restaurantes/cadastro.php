<div class="grid_12">
    <div class="block-border">
        <div class="block-header">
            <h1>Cadastro de restaurante</h1>
        </div>
        <form id="validate-form" class="block-content form" action="#" method="post">
            <div class="_50">
                <p><label for="textfield">Nome</label><input id="nome" name="nome" class="required" type="text" value="<?=(isset($restaurante->nome)) ? $restaurante->nome : null?>" /></p>
            </div>

            <div class="_50">
                <p><label for="textfield">Responsável</label><input id="responsavel" name="responsavel" class="required" type="text" value="<?=(isset($restaurante->responsavel)) ? $restaurante->responsavel : null?>" /></p>
            </div>

            <div class="_50">
                <p><label for="textfield">Razão social</label><input id="razao_social" name="razao_social" class="required" type="text" value="<?=(isset($restaurante->razao_social)) ? $restaurante->razao_social : null?>" /></p>
            </div>

            <div class="_50">
                <p><label for="textfield">CNPJ</label><input id="cnpj" name="cnpj" class="required" type="text" value="<?=(isset($restaurante->cnpj)) ? $restaurante->cnpj : null?>" /></p>
            </div>

            <div class="_50">
                <p><label for="textfield">Email</label><input id="email1" name="email1" class="required" type="text" value="<?=(isset($restaurante->email1)) ? $restaurante->email1 : null?>" /></p>
            </div>

            <div class="_50">
                <p><label for="textfield">Email</label><input id="email2" name="email2" type="text" value="<?=(isset($restaurante->email2)) ? $restaurante->email2 : null?>" /></p>
            </div>

            <div class="_50">
                <p><label for="textfield">Telefone</label><input id="tel1" name="tel1" class="required" type="text" value="<?=(isset($restaurante->tel1)) ? $restaurante->tel1 : null?>" /></p>
            </div>

            <div class="_50">
                <p><label for="textfield">Telefone</label><input id="tel2" name="tel2" type="text" value="<?=(isset($restaurante->tel2)) ? $restaurante->tel2 : null?>" /></p>
            </div>

            <div class="_25">
                <p>
                    <label for="select">Categoria</label>
                    <select class="required" name='categoria' id='categoria'>
                        <option value="Matriz">Matriz</option>
                        <option value="Filial">Filial</option>
                        <option value="Franquia">Franquia</option>
                    </select>
                </p>
            </div>

            <div class="_25">
                <p>
                    <label for="select">Estado</label>
                    <select>
                        <option>Lorem Ipsum</option>
                        <option>Consetetur Sadipscing</option>
                        <option>Eirmod Tempor</option>
                    </select>
                </p>
            </div>

            <div class="_25">
                <p>
                    <label for="select">Cidade</label>
                    <select>
                        <option>Lorem Ipsum</option>
                        <option>Consetetur Sadipscing</option>
                        <option>Eirmod Tempor</option>
                    </select>
                </p>
            </div>

            <div class="_50">
                <p><label for="textfield">Logradouro</label><input id="logradouro" name="logradouro" class="required" type="text" value="<?=(isset($restaurante->logradouro)) ? $restaurante->logradouro : null?>" /></p>
            </div>

            <div class="_25">
                <p><label for="textfield">Nº</label><input id="numero" name="numero" class="required" type="text" value="<?=(isset($restaurante->numero)) ? $restaurante->numero : null?>" /></p>
            </div>

            <div class="_25">
                <p><label for="textfield">Complemento</label><input id="complemento" name="complemento" type="text" value="<?=(isset($restaurante->complemento)) ? $restaurante->complemento : null?>"></p>
            </div>

            <div class="_50">
                <p><label for="textarea">Observações</label><textarea id="observacao" name="observacao" rows="5" cols="40"><?=(isset($restaurante->observacao)) ? $restaurante->observacao : null?></textarea></p>
            </div>

            <div class="_50">
                <p>
                    <?php
                        if (isset($mesas)){
                            foreach ($mesas as $mesa){
                                $arrayMesas[] = $mesa->tipo_mesa;
                            }
                        }
                    ?>
                    <label for="textfield">Tipos de mesa <small>(Separe com uma vírgula. Utilize 0 para grupos)</small></label>
                    <input id="mesas" name="mesas" type="text" value="<?=(isset($mesas)) ? implode(',', $arrayMesas) : null?>">
                </p>
            </div>

            <div class="clear"></div>
            <div class="block-actions">
                <ul class="actions-left">
                    <li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
                </ul>
                <ul class="actions-right">
                    <li><input type="submit" class="button" value="Enviar!"></li>
                </ul>
            </div>
        </form>
    </div>
</div>