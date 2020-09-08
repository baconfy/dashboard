<?php

namespace Baconfy\Dashboard\Ui\Web\Routes;

use Baconfy\Routing\HttpRouter;
use Illuminate\Contracts\Routing\Registrar as Router;

class Dashboard extends HttpRouter
{
    /**
     * Router middlewares
     *
     * @var array
     */
    public $middlewares = ['auth'];

    /**
     * @inheritDoc
     */
    public function map(Router $router): void
    {
        $router->get('dashboard', 'HomeController@index')->name('home');
    }

    /**
     * @param array $middlewares
     * @return array
     */
    public function getMiddlewares($middlewares = []): array
    {
        $middlewares = !is_array($middlewares) ? [$middlewares] : $middlewares;

        return array_merge($middlewares, $this->middlewares);
    }
}
