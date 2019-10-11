<?php

namespace App\Http\Controllers;

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
    public function index() {
  /*  {
        Request $request
      if(!$request->users()->hasAnyRole(['student','admin']))
      {
        return abort(401,"Not Allowed");

      } */
        return view('home');
    }
}
