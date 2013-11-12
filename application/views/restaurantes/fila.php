<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Vem sem fila: Gestão de Fila</title>
    <meta name="description" content="Vem sem fila" />
    <meta name="keywords" content="vem sem fila, restaurante, rio de janeiro" />
    <link rel="SHORTCUT ICON" href="/assets/img/favicon.ico"/>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/grid_fluid.css" rel="stylesheet">
</head>
<body>

<div class="container_20" id="gestao-fila">

    <div class="grid_20">

    	<div class="grid_2 menu">
    		<ul>
    			<li><a href="#"><img src="/assets/img/icones/hostess/ico-vemsemfila.png" width="65" height="47"><br><br>VemSemFila </a></li>
    			<li class="selected"><a href="#"><img src="/assets/img/icones/hostess/ico-gestao-fila.png" width="51" height="50"><br><br>Gestão de Fila</a></li>
    			<li><a href="#"><img src="/assets/img/icones/hostess/ico-reservas.png" width="41" height="41"><br><br>Reservas</a></li>
    			<li><a href="#"><img src="/assets/img/icones/hostess/ico-clientes.png" width="41" height="51"><br><br>Clientes</a></li>
    			<li><a href="#"><img src="/assets/img/icones/hostess/ico-fechar-fila.png" width="38" height="49"><br><br>Fechar Fila</a></li>
    			<li><a href="#"><img src="/assets/img/icones/hostess/ico-logout.png" width="43" height="41"><br><br>Logout</a></li>
    		</ul>
    	</div>


    	<div class="grid_18">
    		<div class="header">
    			<div class="grid_4 nome-estabelecimento">Restaurante Ráscal Shopping Leblon</div>
    			<div class="grid_12 title">GESTÃO DE FILA</div>
    			<div class="grid_4 date-and-location">Rio de Janeiro, 30 de junho de 2013</div>
    		</div>
            <div class="content">
                
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
                    <ul>
                        <li class="grid_7">MESA P/ 2</li>
                        <li class="grid_6 selected">MESA P/ 4</li>
                        <li class="grid_7">MESA P/ 6</li>
                    </ul>
                </div>
                <table cellpadding="0" cellspacing="0" width="100%">
                    <colgroup>
                        <col width="1%">
                        <col width="2%">
                        <col width="20%">
                        <col width="5%">
                        <col width="20%">
                        <col width="20%">
                        <col width="20%">
                        <col width="10%">
                        <col width="1%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th></th>
                            <th>#</th>
                            <th>NOME</th>
                            <th>PESSOAS</th>
                            <th>TELEFONE</th>
                            <th>TIPO DE CHECK-IN</th>
                            <th>HORA DO CHECK-IN</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>01</td>
                            <td>Fulano de Tal</td>
                            <td>3</td>
                            <td>(21) 91234-1234</td>
                            <td>PRIORIDADE</td>
                            <td>22H15</td>
                            <td><a href="#" class="bt small green">CHAMAR</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>01</td>
                            <td>Fulano de Tal</td>
                            <td>3</td>
                            <td>(21) 91234-1234</td>
                            <td>PRIORIDADE</td>
                            <td>22H15</td>
                            <td><a href="#" class="bt small gray">CHAMAR</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>01</td>
                            <td>Fulano de Tal</td>
                            <td>3</td>
                            <td>(21) 91234-1234</td>
                            <td>PRIORIDADE</td>
                            <td>22H15</td>
                            <td><a href="#" class="bt small gray">CHAMAR</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>01</td>
                            <td>Fulano de Tal</td>
                            <td>3</td>
                            <td>(21) 91234-1234</td>
                            <td>PRIORIDADE</td>
                            <td>22H15</td>
                            <td><a href="#" class="bt small green">CHAMAR</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>01</td>
                            <td>Fulano de Tal</td>
                            <td>3</td>
                            <td>(21) 91234-1234</td>
                            <td>PRIORIDADE</td>
                            <td>22H15</td>
                            <td><a href="#" class="bt small green">CHAMAR</a></td>
                            <td></td>
                        </tr>
                        <tr class="special">
                            <td></td>
                            <td>01</td>
                            <td>Fulano de Tal</td>
                            <td>3</td>
                            <td>(21) 91234-1234</td>
                            <td>PRIORIDADE</td>
                            <td>22H15</td>
                            <td><a href="#" class="bt small gray">CHAMAR</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>01</td>
                            <td>Fulano de Tal</td>
                            <td>3</td>
                            <td>(21) 91234-1234</td>
                            <td>PRIORIDADE</td>
                            <td>22H15</td>
                            <td><a href="#" class="bt small gray">CHAMAR</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>01</td>
                            <td>Fulano de Tal</td>
                            <td>3</td>
                            <td>(21) 91234-1234</td>
                            <td>PRIORIDADE</td>
                            <td>22H15</td>
                            <td><a href="#" class="bt small green">CHAMAR</a></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

            </div>
    	</div>

	</div>
</div>

</body>