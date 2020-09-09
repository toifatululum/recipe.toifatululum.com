<?php 

global $config;
$config = array();

define("BASE","https://recipe.toifatululum.com");
define("BASEADMIN", BASE. "admin");
define("BASEDIR", __DIR__ . '/');
define("PUBLIC_DIR", __DIR__ . '/assets/images/uploads/');
define("PROJECTPATH", dirname(__DIR__) . '/html');

$config['dbname']= 'default_schema';
$config['host']= 'mysql';
$config['password']= 'user';
$config['dbuser']= 'user';

