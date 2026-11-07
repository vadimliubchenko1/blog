<?php

declare(strict_types=1);

use App\Controllers\CategoryController;
use App\Controllers\HomeController;
use App\Controllers\PostController;
use App\Core\Router;

return static function (Router $router): void {
    // Публичные маршруты
    $router->get('/', [HomeController::class, 'index']);
    $router->get('/category/{slug}', [CategoryController::class, 'show']);
    $router->get('/post/{slug}', [PostController::class, 'show']);

    // Панель управления (Дашборд)

    // Управление категориями

    // Управление статьями
};
