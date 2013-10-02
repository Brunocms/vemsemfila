<body>
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
<div id="wrapper">
    <div id="logo"><a href="<?=base_url('home')?>"><img src="/assets/img/logo.png" width="154" height="136" alt="logo" /></a></div>
    <div id="header">
        <div id="header_top">
            <div id="welcome"><a href="#dialog2" name="modal">Faça seu Login aqui!</a></div>
            <div id="midias_sociais"><a href="#"><img src="/assets/img/icon_youtube.png" width="19" height="20" alt="youtube" /></a> <a href="#"><img src="/assets/img/icon_twitter.png" width="19" height="20" alt="twitter" /></a> <a href="#"><img src="/assets/img/icon_facebook.png" width="19" height="20" alt="facebook" /></a></div>
        </div>
        <div id="menu">
            <ul>
                <li><a href="<?=base_url('home')?>">Home</a></li>
                <li><a href="<?=base_url('quem_somos')?>">Quem somos</a></li>
                <li><a href="<?=base_url('como_funciona')?>">Como funciona</a></li>
                <li><a href="<?=base_url('restaurantes')?>">Restaurantes</a></li>
                <li><a href="<?=base_url('faq')?>">FAQ</a></li>
                <li><a href="<?=base_url('cadastro')?>"">Cadastre-se</a></li>
                <li><a href="<?=base_url('fale_conosco')?>">Fale Conosco</a></li>
            </ul>
        </div>
    </div>
    <div id="slider"><a href="<?=base_url('restaurantes')?>"><img src="/assets/img/slide01.jpg" width="1280" height="269" alt="slide" /></a></div>
