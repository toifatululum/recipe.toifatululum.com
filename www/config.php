<?php 

global $config;
$config = array();

define("BASE","http://159.65.141.210:6001");
define("BASEADMIN", BASE. "admin");
define("BASEDIR", __DIR__ . '/');
define("PUBLIC_DIR", __DIR__ . '/assets/images/uploads/');
define("PROJECTPATH", dirname(__DIR__) . '/html');

$config['dbname']= 'myDb';
$config['host']= 'db';
$config['password']= 'test';
$config['dbuser']= 'user';

