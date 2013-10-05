<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Vem sem fila</title>
    <meta name="description" content="Vem sem fila" />
    <meta name="keywords" content="vem sem fila, restaurante, rio de janeiro" />
    <link rel="SHORTCUT ICON" href="/assets/img/favicon.ico"/>
    
    <link href="/assets/css/grid.css" rel="stylesheet" type="text/css" />
    
    <link href="/assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/nivo-slider.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="/assets/js/jquery-1.6.1.min.js"></script>

    <script type="text/javascript" src="/assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/assets/js/cadastro.js"></script>

    <script type="text/javascript" src="/assets/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        // $('#slider').nivoSlider();
    });
    </script>

    <script type="text/javascript">

        $(document).ready(function() {

            $('a[name=modal]').click(function(e) {
                e.preventDefault();

                var id = $(this).attr('href');

                var maskHeight = $(document).height();
                var maskWidth = $(window).width();

                $('#mask').css({'width':maskWidth,'height':maskHeight});

                $('#mask').fadeIn(1000);
                $('#mask').fadeTo("slow",0.8);

                //Get the window height and width
                var winH = $(window).height();
                var winW = $(window).width();

                $(id).css('top',  winH/2-$(id).height()/2);
                $(id).css('left', winW/2-$(id).width()/2);

                $(id).fadeIn(2000);

            });

            $('.window .close').click(function (e) {
                e.preventDefault();

                $('#mask').hide();
                $('.window').hide();
            });

            $('#mask').click(function () {
                $(this).hide();
                $('.window').hide();
            });

        });

    </script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>