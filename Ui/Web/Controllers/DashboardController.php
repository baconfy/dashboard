<?php

namespace Baconfy\Dashboard\Ui\Web\Controllers;

use Baconfy\Http\Controller;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display the login view.
     *
     * @return View
     */
    public function create(): View
    {
        return view('dashboard::index');
    }
}
