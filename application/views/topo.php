<body>

<div id="fb-root"></div>

<div id="boxes">
    <!-- Janela Modal com Bloco de Nota -->
    <div id="dialog2" class="window popin-login">
        <img src="/assets/img/logo_login.png" width="81" height="67" />
        <form action="<?=base_url('home/login')?>" method="POST">
            <span class="login">LOGIN</span><br /><input name="email" type="text" /><br /><br />
            <span class="login">SENHA</span><br /><input name="senha" type="password" />
            <br>
            <a href="#">Esqueceu sua senha, clique aqui</a><br><br>
            <button type="submit">Vem!</button>
        </form>
        <a href="#" class="facebook"><span class="fa fa-facebook-square"></span> Facebook </a> &nbsp;&nbsp;&nbsp;
        <a href="#" class="googleplus"><span class="fa fa-google-plus-square"></span> Google+ </a>
        <br><br>
        <p>AINDA NÃO É CADASTRADO? <a href="<?=base_url('cadastro')?>">CLIQUE AQUI</a></p>
    </div>

    <div id="popin-esqueceu-senha" class="window">
        <img src="/assets/img/logo_login.png" width="161" height="135" />
    
        <form action="<?=base_url('home/login')?>" method="POST">
            <span>DIGITE SEU EMAIL ABAIXO PARA RECUPERAR SUA SENHA:</span><br /><input name="email" type="text" /><br /><br />
            <a href="#" class="bt">Enviar!</a>
        </form>
        <span>Email enviado para pacca@vemsemfila.com.br para recuperar a senha</span>
    </div>
    <!-- Fim Janela Modal com Bloco de Nota -->
    <!-- M�scara para cobrir a tela -->
    <div id="mask"></div>
</div>

<div id="header" class="interno">
    <div id="header_top">
        <div class="container_24">
            <div id="logo"><a href="<?=base_url('home')?>"><img src="/assets/img/logo.png" width="154" height="136" alt="logo" /></a></div>
        </div>
    </div>
    
    <div id="menu">
        <div class="container_24">
            <ul class="grid_24">
                <li class="grid_4 prefix_5 alpha"><a href="<?=base_url('como_funciona')?>">Como funciona</a></li>
                <li class="grid_6 alpha"><a href="<?=base_url('restaurantes')?>">Enconte um restaurante <span class="fa fa-search"></span></a></li>
                <?php
                    if(!$this->user->validate_session()) :
                ?>
                    <li class="grid_6 alpha">
                        <div id="welcome"><a href="#dialog2" name="modal"><span class="fa fa-user"></span> Login</a> | <a class="bt" href="<?=base_url('cadastro')?>">Cadastre-se</a></div>
                    </li>
                <?php
                    else:
                ?>
                    <li class="grid_3 alpha"><a href="<?=base_url('cadastro')?>">Meus dados</a></li>
                    <li class="grid_3 alpha"><a href="<?=base_url('usuario/logout')?>">Sair <span class="fa fa-sign-out"></span></a></li>
                <?php
                    endif;
                ?>
            </ul>
        </div>
    </div>

</div>


<!-- NAO ESQUECER DE VOLTAR O SLIDESHOW PARA A HOME E OCULTAR QUANDO FOR NAS INTERNAS -->
    
<!-- <div id="slideshow">
    <div class="slider-wrapper theme-default">
        <div class="ribbon"></div>
        <div id="slider" class="nivoSlider">
        </div>
    </div>
</div>
 -->    




