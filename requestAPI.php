<?php
session_start();

require "config.php";

$fileCache = './cache.json';
$currentCache = json_decode(file_get_contents($fileCache), true);

$cache = array();

if (time() - $currentCache['time'] > 60) {
    //Add information to the header to do a web request
    $context = stream_context_create(
        array(
            "http" => array(
                "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36"."\r\n",
            )
        )
    );

    $newCache = array('time' => time(), 'log' => array());

    //Make the web request to the API link and transform json format to an array
    $newCache["log"] = json_decode(file_get_contents($githubApiLink, false, $context), true);

    $cache = $newCache;

    file_put_contents($fileCache, json_encode($newCache));



} else {
    $cache = $currentCache;
}

$response = $cache['log'];
?>