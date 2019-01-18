<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Visit;
use Carbon\Carbon;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $count = count(Visit::whereDate('created_at', Carbon::today())->get());
        return view('home', ['cnt' => $count]);
    }
}
