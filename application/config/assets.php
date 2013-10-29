<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
//base de carregamento de arquivos CSS
$config['css'] = [
    'grid',
    'main',
    'nivo-slider.css'
];

//iniciados no footer das páginas
$config['js'] = [
    'jquery-1.6.1.min',
    'jquery.validate.min',
    'jquery.nivo.slider.pack'
];

$config['jsAdmin'] = [
    'admin/metro/jquery-1.8.3.min',
    'admin/metro/jquery.nicescroll',
    'admin/metro/common-scripts',
    'admin/shadowbox/shadowbox',
    'admin/base'
    
];

$config['jsPlugins'] = [
    'bootstrap/js/bootstrap.min',
];

$config['cssAdmin'] = [
    'base',
    'admin/metro/style',
    'admin/metro/style-responsive',
    'admin/metro/style-default',
    'admin/shadowbox'
];

$config['cssPlugins'] = [
    'bootstrap/css/bootstrap.min',
    'bootstrap/css/bootstrap-responsive.min',
    'bootstrap/css/bootstrap-fileupload'
];