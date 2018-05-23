<?php
require "predis/autoload.php";
Predis\Autoloader::register();

try {
    
    $redis = new Predis\Client(array(
        "scheme" => "tcp",
        "host" => "redis",
        "port" => 6379
    ));

    $redis->set("hello_world", "Hi from php!");
    $value = $redis->get("hello_world");

    var_dump($value);

    echo ($redis->exists("Santa Claus")) ? "true" : "false";
}
catch (Exception $e) {
	die($e->getMessage());
}