<?php

namespace Baconfy\Dashboard\Ui\Web\Routes;

use Baconfy\Dashboard\Ui\Web\Controllers\DashboardController;
use Illuminate\Contracts\Routing\Registrar as Router;
use Baconfy\Routing\HttpRouter;

class General extends HttpRouter
{
    /**
     * Router middlewares
     *
     * @var array
     */
    protected $middlewares = ['auth', 'verified'];

    /**
     * @param Router $router
     */
    public function map(Router $router): void
    {
        $router->get('/dashboard', [DashboardController::class, 'create'])->name('dashboard.index');
    }
}