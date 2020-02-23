<?php

namespace Baconfy\Dashboard\Ui\Web\Routes;

use Baconfy\Routing\HttpRouter;
use Illuminate\Contracts\Routing\Registrar as Router;

class Dashboard extends HttpRouter
{
    /**
     * @inheritDoc
     */
    public function map(Router $router): void
    {
        $router->group(['middleware' => 'auth'], function (Router $router) {
            $router->get('home', 'HomeController@index')->name('home');
        });
    }
}
