<?php

namespace structural\proxy;

require(__DIR__ . '/../../autoloader.php');

session_start();

$provider = new FileProvider();
$fileAuth = new AuthFile($provider);

$fileAuth->add("test-file.png", "/home/ubuntu");
$fileAuth->remove("test-file.png");
$fileAuth->get("test-file.png");

$auth = new User();
$auth->login("Jan");

$fileAuth->add("test-file.png", "/home/ubuntu");
$fileAuth->remove("test-file.png");
$fileAuth->get("test-file.png");

$auth->logOut();
$auth->login("BB");

$fileAuth->add("test-file.png", "/home/ubuntu");
$fileAuth->remove("test-file.png");
$fileAuth->get("test-file.png");
session_destroy();
