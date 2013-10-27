<body>

<div id="fb-root"></div>

<div id="boxes">

    <!-- Janela Modal com Bloco de Nota -->
    <div id="dialog2" class="window">
        <span class="logo_login">
            <img src="/assets/img/logo_login.png" width="161" height="135" />
        </span><br /><br />
        <span class="pontilhado">.............................................................................................</span>
        <br /><br />
        <form action="<?=base_url('home/login')?>" method="POST">
            <span class="login">LOGIN</span><br /><input name="email" type="text" class="field6" /><br /><br />
            <span class="login">SENHA</span><br /><input name="senha" type="text" class="field7" /><span class="login2"> <a href="#">(Esqueceu?)</a></span><br /><br />
            <span class="bt_vem_login">
            <input type="submit" value="Vem!" style="background:url(/assets/img/bt_vem_login.png) no-repeat; width: 105; height: 47;" />
            </span><br /><br />
            <span class="pontilhado">.............................................................................................</span><br />
            <span class="cadastro2">AINDA NÃO É CADASTRADO? <a href="<?=base_url('cadastro')?>">CLIQUE AQUI</a></span>
        </form>
    </div>
    <!-- Fim Janela Modal com Bloco de Nota -->
    <!-- M�scara para cobrir a tela -->
    <div id="mask"></div>
</div>

<div id="header">
    <div id="header_top">
        <div class="container_24">
            <div id="logo"><a href="<?=base_url('home')?>"><img src="/assets/img/logo.png" width="154" height="136" alt="logo" /></a></div>
            <div class="grid_8 prefix_5">
                <?php
                    if($this->user->validate_session()) {
                ?>
                <a href="">Olá <?=$this->user->user_data->nome?>, seja bem vindo</a>
                <?php
                    }else{
                ?>
                <a href="#dialog2" name="modal">Faça seu login aqui!</a>
                <?php
                    }
                ?>
            </div>
            <div class="grid_2 push_9 omega">
                <p><a href="https://www.facebook.com/vemsemfila" target="_blank"><img src="/assets/img/icon_facebook.png" width="65" height="20" alt="facebook" /></a></p>
            </div>
        </div>
    </div>
    
    <div id="menu">
        <div class="container_24">
            <ul class="grid_24">
                <li class="grid_4 prefix_5 alpha"><a href="<?=base_url('como_funciona')?>">Como funciona</a></li>
                <li class="grid_3 alpha"><a href="<?=base_url('restaurantes')?>">Restaurantes</a></li>
                <li class="grid_3 alpha"><a href="<?=base_url('quem_somos')?>">Quem somos</a></li>
                <!--
                <li class="grid_2 alpha"><a href="< ?=base_url('faq')?>">FAQ</a></li>
                <li class="grid_3 alpha omega"><a href="< ?=base_url('fale_conosco')?>">Fale Conosco</a></li>
                -->
                <?php
                    if(!$this->user->validate_session()) :
                ?>
                        <li class="grid_3 alpha"><a href="<?=base_url('cadastro')?>">Cadastre-se</a></li>
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
              <a href="<?=base_url('restaurantes')?>"><img src="/assets/img/slide01.jpg" width="1280" height="269" alt="" border="0" /></a> 
              <a href="http://www.apple.com" target="_blank"><img src="/assets/img/slide02.jpg" width="1280" height="269" alt="" border="0" /></a> 
        </div>
    </div>
</div>
    




