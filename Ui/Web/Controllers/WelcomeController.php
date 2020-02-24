<?php

namespace Baconfy\Dashboard\Ui\Web\Controllers;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Show the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard::welcome');
    }
}
