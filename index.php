<?php

use Fixbu\XuongOop\Commons\Helper;

session_start();

require_once __DIR__."./vendor/autoload.php";

$dotenv = (Dotenv\Dotenv::createImmutable(__DIR__))->load();

require_once __DIR__."./routes/index.php";

// Helper::debug([2,3,41,23,456]);