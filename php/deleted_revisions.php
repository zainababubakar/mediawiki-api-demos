<?php

//This file is autogenerated. See modules.json and autogenerator.py for details

/*
    deleted_revisions.php

    MediaWiki API Demos
    Demo of `Deletedrevisions` module: Get a list of deleted revisions for Talk:Main Page.

    MIT License
*/

$endPoint = "https://en.wikipedia.org/w/api.php";
$params = [
    "action" => "query",
    "titles" => "Talk:Main_Page",
    "prop" => "deletedrevisions",
    "drvprop" => "user|comment|content",
    "drvslots" => "*",
    "format" => "json"
];

$url = $endPoint . "?" . http_build_query( $params );

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$output = curl_exec( $ch );
curl_close( $ch );

$result = json_decode( $output, true );
var_dump( $result );
