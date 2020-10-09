<?php 

define("ROOT", "http://localhost/multiple-filters");
define("SITE", "Multiple Filters");

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "multiple_filters",
    "username" => "vini",
    "passwd" => "Ralph@2411",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);


function url(string $uri = null) : string{
    if($uri){
        return ROOT."/{$uri}";
    }

    return ROOT;
}