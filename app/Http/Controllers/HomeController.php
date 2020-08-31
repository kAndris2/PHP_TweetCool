<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

class HomeController extends Controller
{
    private $tweets = array();

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
        array_push
        (
            $this->tweets, 
            new Tweet ($request['username'], $request['message'])
        );
        return view("messageboard")->with(array('tweets'=>$this->tweets));
    }

    public function gotoMessageBoard()
    {
        return view("messageboard")->with(array('tweets'=>$this->tweets));
    }
}