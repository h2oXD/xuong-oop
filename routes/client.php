<?php

//Các phương thức: get , post , put , path , delete , option , head

use Fixbu\XuongOop\Controllers\Client\AboutController;
use Fixbu\XuongOop\Controllers\Client\ContactController;
use Fixbu\XuongOop\Controllers\Client\HomeController;
use Fixbu\XuongOop\Controllers\Client\ProductController;

$router->get('/',               HomeController::class    . '@index');

$router->get('/about',          AboutController::class   . '@index');

$router->get('/contact',        ContactController::class . '@index');
$router->post('/contact',       ContactController::class . '@store');

$router->get('/products',       ProductController::class . '@index');
$router->get('/products/{id}',  ProductController::class . '@detail');
