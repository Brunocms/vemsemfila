<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Vem sem fila</title>
    <meta name="description" content="Vem sem fila" />
    <meta name="keywords" content="vem sem fila, restaurante, rio de janeiro" />
    <link rel="SHORTCUT ICON" href="/assets/img/favicon.ico"/>
    <link href="/assets/css/main.css" rel="stylesheet" type="text/css" />

    <!--[if lt IE 7.]>
    <script defer type="text/javascript" src="js/pngfix.js"></script>
    <![endif]-->

    <!--[if IE 6]>
    <script src="/js/DD_belatedPNG.js"></script>
    <script> DD_belatedPNG.fix('img, .new');</script>
    <![endif]-->

    <script type="text/javascript" src="/assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/assets/js/cadastro.js"></script>

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

</head>