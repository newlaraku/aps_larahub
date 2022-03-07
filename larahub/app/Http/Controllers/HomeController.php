<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
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
        if (request()->user()->hasRole('travel')) {
            return view('travel.index');
        } else if 
            (request()->user()->hasRole('user')) {
                return view('user.index');
        } else if 
            (request()->user()->hasRole('admin')) {
            return view('admin.index');
        } else {
                return redirect('/');
            }
    }
}
