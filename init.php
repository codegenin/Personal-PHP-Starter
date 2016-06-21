<?php

error_reporting(E_ALL);
date_default_timezone_set('Europe/London');

// Defined constants
define('SECURE', true);
define('ROOT', dirname(__FILE__) . '/');
define('VENDOR', dirname(__FILE__) . '/vendor/');
define('CONFIG', dirname(__FILE__) . '/config/');

include_once VENDOR . 'autoload.php';
include_once CONFIG . 'settings.php';

// Initialize database connection
$dbConn = new \Simplon\Mysql\Mysql(
    $configDatabase['host'],
    $configDatabase['user'],
    $configDatabase['pass'],
    $configDatabase['database']
);

// Initialize Smarty Engine
$smarty = new Smarty();
$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');