<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->intended($this->redirectPath());
    }

    private function redirectPath()
    {
        if (\Auth::User()->name=="chiboko"){
            return '/admin_index';
        }
        return'/';
    }
}
