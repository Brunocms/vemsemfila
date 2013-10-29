<body>

<div id="fb-root"></div>

<div id="boxes">
    <!-- Janela Modal com Bloco de Nota -->
    <div id="dialog2" class="window">
        <img src="/assets/img/logo_login.png" width="161" height="135" />
    
        <form action="<?=base_url('home/login')?>" method="POST">
            <span class="login">LOGIN</span><br /><input name="email" type="text" /><br /><br />
            <span class="login">SENHA</span><br /><input name="senha" type="password" /><span class="login2"> <a href="#">(Esqueceu?)</a></span>
            <button type="submit" class="bt">Vem!</button>
        </form>
        <span class="cadastro2">AINDA NÃO É CADASTRADO? <a href="<?=base_url('cadastro')?>">CLIQUE AQUI</a></span>
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

<div id="header">
    <div id="header_top">
        <div class="container_24">
            <div id="logo"><a href="<?=base_url('home')?>"><img src="/assets/img/logo.png" width="154" height="136" alt="logo" /></a></div>
        </div>
    </div>
    
    <div id="menu">
        <div class="container_24">
            <ul class="grid_24">
                <li class="grid_4 prefix_5 alpha"><a href="<?=base_url('como_funciona')?>">Como funciona</a></li>
                <li class="grid_3 alpha"><a href="<?=base_url('restaurantes')?>">Restaurantes</a></li>
                <?php
                    if(!$this->user->validate_session()) :
                ?>
                    <li class="grid_6 alpha">
                        <div id="welcome"><a href="#dialog2" name="modal">Login</a> | <a href="<?=base_url('cadastro')?>">Cadastre-se</div>
                    </li>
                <?php
                    else:
                ?>
                    <li class="grid_3 alpha"><a href="<?=base_url('cadastro')?>">Meus dados</a></li>
                    <li class="grid_3 alpha"><a href="<?=base_url('usuario/logout')?>">Sair</a></li>
                <?php
                    endif;
                ?>
            </ul>
        </div>
    </div>

</div>

    
<div id="slideshow">
    <div class="slider-wrapper theme-default">
        <div class="ribbon"></div>
        <div id="slider" class="nivoSlider">
        </div>
    </div>
</div>
    




