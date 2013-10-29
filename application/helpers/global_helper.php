<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function checkRemoteFile($url) {
    if (ENVIRONMENT == 'production' OR ENVIRONMENT == 'testing') {
        $ch = curl_init();
        curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_NOBODY => 1, CURLOPT_CONNECTTIMEOUT => 1));

        curl_exec($ch);
        $res = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($res == 200)
            return true;

        $res = 0;
        return false;
    }
    return false;
}

function loadAssets($method = NULL) {
    //força o carregamento da instância do CI
    $ci = & get_instance();

    //carrega a biblioteca da cdn
    $ci->load->config('assets');

    $metaData = [
        'css' => $ci->config->item('css' . $method),
        'js' => $ci->config->item('js' . $method),
    ];
    return $metaData;
}

function loadPlugins($metaData, $method = NULL) {
    //força o carregamento da instância do CI
    $ci = & get_instance();

    //carrega a biblioteca da cdn
    $ci->load->config('assets');

    $cssPlugin = $ci->config->item('cssPlugins' . $method);
    $jsPlugins = $ci->config->item('jsPlugins' . $method);

    return array_merge_recursive($metaData, ['cssPlugin' => $cssPlugin], ['jsPlugin' => $jsPlugins]);
}

function addCSS($metaData, $fileName) {
    if (count($fileName) > 1) {
        $arrayCss = array();
        foreach ($fileName as $cssFile) {
            $arrayCss = array_merge_recursive($arrayCss, ['css' => $cssFile]);
        }
        return array_merge_recursive($metaData, ['css' => $arrayCss['css']]);
    }
    return array_merge_recursive($metaData, ['css' => $fileName]);
}

function addJS($metaData, $fileName) {
    if (count($fileName) > 1) {
        $arrayjs = array();
        foreach ($fileName as $jsFile) {
            $arrayjs = array_merge_recursive($arrayjs, ['js' => $jsFile]);
        }
        return array_merge_recursive($metaData, ['js' => $arrayjs['js']]);
    }
    return array_merge_recursive($metaData, ['js' => $fileName]);
}

function imgPath($path) {
    return CDN_ASSETS . "/assets/img/" . $path;
}

function formatTimeStamp($value) {
    date_default_timezone_set("America/Sao_Paulo");
    return strftime("%d/%m/%Y às %H:%Mh", strtotime($value));
}

function formatDate($value) {
    date_default_timezone_set("America/Sao_Paulo");
    return strftime("%d/%m/%Y", strtotime($value));
}

/* End of file slugID_helper.php */
/* Location: ./application/helpers/ */