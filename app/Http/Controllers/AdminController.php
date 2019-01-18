<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;

class AdminController extends Controller
{
    //

    public function __construct()
    {
      $this->middleware('auth:admin', ['only' => 'index','edit']);
    }


    public function index()
    {
      return view('adminhome');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.adminregister');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, [
          'name'          => 'required',
          'username'      => 'required|unique:admins',
          'email'         => 'required',
          'password'      => 'required'
        ]);
        // store in the database
        $admins = new Admin;
        $admins->name = $request->name;
        $admins->email = $request->email;
        $admins->username = $request->username;
        $admins->password=bcrypt($request->password);
        $admins->save();
        return redirect()->route('admin.login');
    }

}
