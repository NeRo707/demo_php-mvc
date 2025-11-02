<?php
// Load Composer's autoloader - that's it! No more require_once!
require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\TaskController;

$router = new Router();

// Define Routes
$router->add('GET', '/', HomeController::class, 'index');
$router->add('GET', '/tasks', TaskController::class, 'index');
$router->add('GET', '/task', TaskController::class, 'show');
$router->add('GET', '/api/tasks', TaskController::class, 'api');

// Dispatch
$router->dispatch();
