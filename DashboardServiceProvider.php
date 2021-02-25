<?php

namespace Baconfy\Dashboard;

use Baconfy\Traits\Loaders\ModuleProvider;

class DashboardServiceProvider extends ModuleProvider
{
    /**
     * @var string
     */
    protected $name = 'dashboard';

    /**
     * @var string
     */
    protected $namespace = __NAMESPACE__;
}