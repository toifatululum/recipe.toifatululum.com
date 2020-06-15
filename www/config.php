<?php 

global $config;
$config = array();

define("BASE","https://recipe.toifatululum.com/");
define("BASEADMIN", BASE. "admin");
define("BASEDIR", __DIR__ . '/');
define("PUBLIC_DIR", __DIR__ . '/assets/images/uploads/');
define("PROJECTPATH", dirname(__DIR__) . '/html');

$config['dbname']= 'myDb';
$config['host']= 'db';
$config['password']= 'test';
$config['dbuser']= 'user';

