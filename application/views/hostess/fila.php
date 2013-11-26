<div class="submenu">
    <div class="busca grid_5">
        <form>
            <fieldset>
                <input type="text" placeholder="Faça sua busca aqui..."> <span class="fa fa-search"></span>
            </fieldset>
        </form>
    </div>
    <div class="grid_4">
        <a href="#" class="bt medium yellow"><span class="fa fa-plus"></span> ADICIONAR NA FILA </a>
    </div>
    <div class="grid_4">
        <a href="#" class="bt medium orange"><span class="fa fa-plus"></span> ADICIONAR PRIORIDADE </a>
    </div>
    <div class="grid_6">
        <div class="tempo-mesa">
            TEMPO QUE A ÚLTIMA MESA SENTOU: 25 MINUTOS
        </div>
    </div>
</div>

<div class="mesas-configuradas">
    <table class="opcoes-mesas" cellspacing="1" cellpadding="0" width="100%">
        <colgroup>
            <?php
                $width = 100 / count($filas);
            ?>
            <?php
                foreach ($filas as $key=>$fila):
            ?>
            <col width="<?=$width?>%">
            <?php
                endforeach;
            ?>
        </colgroup>
        <tbody>
            <tr>
                <?php
                    foreach ($filas as $key=>$fila):
                ?>
                <td onclick="mudarFila(<?=$fila->id_fila?>);" id="botao_<?=$fila->id_fila?>" id_fila="<?=$fila->id_fila?>" class="tab-mesas <?=($key == 0) ? 'selected' : '' ?>"><a href="#"><?=($fila->qnt_pessoas == 0) ? 'GRUPO' : 'MESA P/ ' . $fila->qnt_pessoas?></a></td>
                <?php
                    endforeach;
                ?>
            </tr>
        </tbody>
    </table>
</div>
<table cellpadding="0" cellspacing="0" width="100%">
    <colgroup>
        <col width="3%">
        <col width="20%">
        <col width="5%">
        <col width="20%">
        <col width="20%">
        <col width="20%">
        <col width="11%">
    </colgroup>
    <thead>
        <tr>
            <th>#</th>
            <th>NOME</th>
            <th>PESSOAS</th>
            <th>TELEFONE</th>
            <th>TIPO DE CHECK-IN</th>
            <th>HORA DO CHECK-IN</th>
            <th></th>
        </tr>
    </thead>
    <tbody id="tabela_fila">
        <tr>
            <td>01</td>
            <td>Fulano de Tal</td>
            <td>3</td>
            <td>(21) 91234-1234</td>
            <td>PRIORIDADE</td>
            <td>22H15</td>
            <td><a href="#" class="bt small green">CHAMAR</a></td>
        </tr>
        <tr>
            <td>01</td>
            <td>Fulano de Tal</td>
            <td>3</td>
            <td>(21) 91234-1234</td>
            <td>PRIORIDADE</td>
            <td>22H15</td>
            <td><a href="#" class="bt small gray">CHAMAR</a></td>
        </tr>
        <tr>
            <td>01</td>
            <td>Fulano de Tal</td>
            <td>3</td>
            <td>(21) 91234-1234</td>
            <td>PRIORIDADE</td>
            <td>22H15</td>
            <td><a href="#" class="bt small orange">SENTOU</a></td>
        </tr>
        <tr>
            <td>01</td>
            <td>Fulano de Tal</td>
            <td>3</td>
            <td>(21) 91234-1234</td>
            <td>PRIORIDADE</td>
            <td>22H15</td>
            <td><a href="#" class="bt small green">CHAMAR</a></td>
        </tr>
        <tr>
            <td>01</td>
            <td>Fulano de Tal</td>
            <td>3</td>
            <td>(21) 91234-1234</td>
            <td>PRIORIDADE</td>
            <td>22H15</td>
            <td><a href="#" class="bt small green">CHAMAR</a></td>
        </tr>
        <tr class="special">
            <td>01</td>
            <td>Fulano de Tal</td>
            <td>3</td>
            <td>(21) 91234-1234</td>
            <td>PRIORIDADE</td>
            <td>22H15</td>
            <td><a href="#" class="bt small gray">CHAMAR</a></td>
        </tr>
        <tr>
            <td>01</td>
            <td>Fulano de Tal</td>
            <td>3</td>
            <td>(21) 91234-1234</td>
            <td>PRIORIDADE</td>
            <td>22H15</td>
            <td><a href="#" class="bt small gray">CHAMAR</a></td>
        </tr>
        <tr>
            <td>01</td>
            <td>Fulano de Tal</td>
            <td>3</td>
            <td>(21) 91234-1234</td>
            <td>PRIORIDADE</td>
            <td>22H15</td>
            <td><a href="#" class="bt small green">CHAMAR</a></td>
        </tr>
    </tbody>
</table>
