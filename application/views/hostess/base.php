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
    <script type="application/javascript" src="/assets/js/jquery-1.10.2.min.js"></script>
    <script type="application/javascript" src="/assets/js/hostess.js"></script>
</head>
<body>

<div class="container_20" id="gestao-fila">

    <div class="grid_20">

    	<div class="grid_2 menu">
    		<ul>
    			<li class="disabled"><img src="/assets/img/icones/hostess/ico-vemsemfila.png" width="65" height="47"><br><br>VemSemFila</li>
    			<li class="selected"><a href="<?=base_url('hostess/index')?>"><img src="/assets/img/icones/hostess/ico-gestao-fila.png" width="51" height="50"><br><br>Gestão de Fila</a></li>
    			<li><a href="<?=base_url('hostess/reservas')?>"><img src="/assets/img/icones/hostess/ico-reservas.png" width="41" height="41"><br><br>Reservas</a></li>
    			<li><a href="<?=base_url('hostess/clientes')?>"><img src="/assets/img/icones/hostess/ico-clientes.png" width="41" height="51"><br><br>Clientes</a></li>
    			<li><a href="<?=base_url('hostess/abrir_fila')?>"><img src="/assets/img/icones/hostess/ico-fechar-fila.png" width="38" height="49"><br><br>Fechar Fila</a></li>
    			<li><a href="<?=base_url('usuario/logout')?>"><img src="/assets/img/icones/hostess/ico-logout.png" width="43" height="41"><br><br>Logout</a></li>
    		</ul>
    	</div>


    	<div class="grid_18">
    		<div class="header">
    			<div class="grid_4 nome-estabelecimento">Restaurante Ráscal Shopping Leblon</div>
    			<div class="grid_12 title">RESERVAS</div>
    			<div class="grid_4 date-and-location">Rio de Janeiro, 30 de junho de 2013</div>
    		</div>
            <div class="content">
              <?=$content?>
    	    </div>

	    </div>
    </div>
</div>

</body>