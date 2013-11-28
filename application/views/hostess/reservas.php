<div id="boxes">
    <div id="popin-adicionar-na-fila" class="window">
        <h2>ADICIONAR NA FILA</h2>
    
        <form action="<?=base_url('home/login')?>" method="POST">

            <div class="left">
                <label>NOME:</label><br />
                <input name="nome" type="text" /><br /><br />

                <label>TELEFONE:</label><br />
                <input name="telefone" type="text" /><br /><br />

                <label>NÚMERO DE PESSOAS:</label><br />
                <input name="npessoas" type="text" class="mini" />
            </div>

            <div class="right">
                <label>SOBRENOME:</label><br />
                <input name="nome" type="text" /><br /><br />

                <label>EMAIL:</label><br />
                <input name="email" type="text" /><br /><br />

                <label>EMAIL PARA CADASTRO WEB:</label><br /><br />
                <input name="email" type="radio" /> Sim &nbsp;
                <input name="email" type="radio" /> Não

                <br /><br /><br /><br />
                <a href="#" class="bt green">CONFIRMAR</a>

            </div>            
            
        </form>
    </div>

    <div id="popin-adicionar-prioridade" class="window">
        <h2>ADICIONAR PRIORIDADE NA FILA</h2>
    
        <form action="<?=base_url('home/login')?>" method="POST">

            <div class="left">
                <label>NOME:</label><br />
                <input name="nome" type="text" /><br /><br />

                <label>TELEFONE:</label><br />
                <input name="telefone" type="text" /><br /><br />

                <label>NÚMERO DE PESSOAS:</label><br />
                <input name="npessoas" type="text" class="mini" />
            </div>

            <div class="right">
                <label>SOBRENOME:</label><br />
                <input name="nome" type="text" /><br /><br />

                <label>EMAIL:</label><br />
                <input name="email" type="text" /><br /><br />

                <label>EMAIL PARA CADASTRO WEB:</label><br /><br />
                <input name="email" type="radio" /> Sim &nbsp;
                <input name="email" type="radio" /> Não

                <br /><br /><br /><br />
                <a href="#" class="bt green">CONFIRMAR</a>

            </div>            
            
        </form>
    </div>

    <div id="popin-gestao" class="window">

        <ul>
            <li><span><strong>NOME:</strong> Bruno Santos</span></li>
            <li><strong>PESSOAS:</strong> 4</li>
            <li><strong>EMAIL:</strong> fulano@hotmail.com</li>
            <li><strong>CHECK-IN:</strong> 22h15</li>
            <li><strong>TIPO:</strong> PRESENCIAL</li>
        </ul>

        <a href="#" class="bt green left biggest"><span class="fa fa-check"></span> SENTOU</a>
        <a href="#" class="bt red right biggest"><span class="fa fa-times"></span> NO-SHOW</a>

    </div>

    <div id="mask"></div>
</div>



<div class="submenu">
    <div class="busca grid_12">
        <form>
            <fieldset>
                <input type="text" placeholder="Faça sua busca aqui..."> <span class="fa fa-search"></span>
            </fieldset>
        </form>
    </div>
    <div class="grid_4">
        <a href="#popin-adicionar-na-fila" name="modal" class="bt medium yellow"><span class="fa fa-plus"></span> ADICIONAR RESERVA </a>
    </div>
</div>

<a href="#popin-gestao" name="modal" class="bt biggest red">teste de gestao</a>

<table cellpadding="0" cellspacing="0" width="100%">
    <colgroup>
        <col width="3%">
        <col width="20%">
        <col width="5%">
        <col width="15%">
        <col width="15%">
        <col width="10%">
        <col width="10%">
        <col width="10%">
        <col width="11%">
    </colgroup>
    <thead>
        <tr>
            <th>#</th>
            <th>NOME</th>
            <th>PESSOAS</th>
            <th>TELEFONE</th>
            <th>EMAIL</th>
            <th>HORA DA RESERVA</th>
            <th>MESA</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody id="tabela_reservas">
        <tr>
            <td>01</td>
            <td>Fulano de Tal</td>
            <td>3</td>
            <td>(21) 91234-1234</td>
            <td>fulano@hotmail.com</td>
            <td>22h00</td>
            <td><img src="/assets/img/icones/hostess/ico-interrogacao.png" width="24" height="24"></td>
            <td><a href="#" class="bt small green">SENTOU</a></td>
            <td><a href="#" class="bt small red">CANCELOU</a></td>
        </tr>
        <tr>
            <td>01</td>
            <td>Fulano de Tal</td>
            <td>3</td>
            <td>(21) 91234-1234</td>
            <td>fulano@hotmail.com</td>
            <td>22h00</td>
            <td><img src="/assets/img/icones/hostess/ico-interrogacao.png" width="24" height="24"></td>
            <td><a href="#" class="bt small green">SENTOU</a></td>
            <td><a href="#" class="bt small red">CANCELOU</a></td>
        </tr>
        <tr>
            <td>01</td>
            <td>Fulano de Tal</td>
            <td>3</td>
            <td>(21) 91234-1234</td>
            <td>fulano@hotmail.com</td>
            <td>22h00</td>
            <td><img src="/assets/img/icones/hostess/ico-interrogacao.png" width="24" height="24"></td>
            <td><a href="#" class="bt small green">SENTOU</a></td>
            <td><a href="#" class="bt small red">CANCELOU</a></td>
        </tr>
        <tr>
            <td>01</td>
            <td>Fulano de Tal</td>
            <td>3</td>
            <td>(21) 91234-1234</td>
            <td>fulano@hotmail.com</td>
            <td>22h00</td>
            <td><img src="/assets/img/icones/hostess/ico-interrogacao.png" width="24" height="24"></td>
            <td><a href="#" class="bt small green">SENTOU</a></td>
            <td><a href="#" class="bt small red">CANCELOU</a></td>
        </tr>
        <tr>
            <td>01</td>
            <td>Fulano de Tal</td>
            <td>3</td>
            <td>(21) 91234-1234</td>
            <td>fulano@hotmail.com</td>
            <td>22h00</td>
            <td><img src="/assets/img/icones/hostess/ico-interrogacao.png" width="24" height="24"></td>
            <td><a href="#" class="bt small green">SENTOU</a></td>
            <td><a href="#" class="bt small red">CANCELOU</a></td>
        </tr>
        <tr class="special">
            <td>01</td>
            <td>Fulano de Tal</td>
            <td>3</td>
            <td>(21) 91234-1234</td>
            <td>fulano@hotmail.com</td>
            <td>22h00</td>
            <td><img src="/assets/img/icones/hostess/ico-interrogacao.png" width="24" height="24"></td>
            <td><a href="#" class="bt small green">SENTOU</a></td>
            <td><a href="#" class="bt small red">CANCELOU</a></td>
        </tr>
        <tr>
            <td>01</td>
            <td>Fulano de Tal</td>
            <td>3</td>
            <td>(21) 91234-1234</td>
            <td>fulano@hotmail.com</td>
            <td>22h00</td>
            <td><img src="/assets/img/icones/hostess/ico-interrogacao.png" width="24" height="24"></td>
            <td><a href="#" class="bt small green">SENTOU</a></td>
            <td><a href="#" class="bt small red">CANCELOU</a></td>
        </tr>
        <tr>
            <td>01</td>
            <td>Fulano de Tal</td>
            <td>3</td>
            <td>(21) 91234-1234</td>
            <td>fulano@hotmail.com</td>
            <td>22h00</td>
            <td><img src="/assets/img/icones/hostess/ico-interrogacao.png" width="24" height="24"></td>
            <td><a href="#" class="bt small green">SENTOU</a></td>
            <td><a href="#" class="bt small red">CANCELOU</a></td>
        </tr>
    </tbody>
</table>
