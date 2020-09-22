<?php
session_start();

require "config.php";

if (empty($_SESSION["log"]) || !isset($_SESSION["log"])) {
    //Add information to the header to do a web request
    $context = stream_context_create(
        array(
            "http" => array(
                "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36"."\r\n",
            )
        )
    );

    //Make the web request to the API link and transform json format to an array
    $_SESSION["log"] = json_decode(file_get_contents($githubApiLink, false, $context), true);

}

$response = $_SESSION["log"];
?>