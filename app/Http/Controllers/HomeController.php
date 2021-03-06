<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function addTweet(Request $request) 
    {
        date_default_timezone_set("Europe/Budapest");
        Tweet::create([
            'username' => $request['username'],
            'content' => $request['message'],
            'date' => date("Y-m-d H:i:s")
        ]);
        return $this->gotoMessageBoard();
    }

    public function gotoMessageBoard()
    {
        return view("messageboard")->with(array('tweets'=>Tweet::get()));
    }
}