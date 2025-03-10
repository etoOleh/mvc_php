<?php

namespace App\Application;

use App\Application\Config\Config;
use App\Application\Router\Router;
use App\Application\Router\Route;
use App\Application\Views\View;
use App\Exceptions\ComponetNotFoundException;
use App\Exceptions\ViewNotFoundException;

class App
{
    public function run(): void
    {
        try {
            $this->handle();
        } catch (ViewNotFoundException|ComponetNotFoundException $exception) {
            View::exception($exception);
//            dd($exception->getMessage());
        }
    }

    private function handle(): void
    {
        Config::init();
        require_once __DIR__ . '/../../routes/actions.php';
        require_once __DIR__ . '/../../routes/pages.php';
        $router = new Router();
        $router->handle(Route::list());
    }
}