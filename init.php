<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('BASE_PATH',__DIR__);

include 'autoloder.php';

Service_Config::getInstance()->config = include 'config.php';
