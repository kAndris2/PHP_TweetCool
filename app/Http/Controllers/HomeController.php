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

    public function addTweet($username, $content) 
    {
        array_push
        (
            $tweets, 
            new Tweet ($username, $content)
        );
        return view("messageboard", $tweets);
    }

    public function gotoMessageBoard()
    {
        $tweets =  array();
       array_push
       (
           $tweets,
           new Tweet ('Jóska', 'fdsdgfsfd')
       );
        return view("messageboard")->with(array('tweets'=>$tweets)) ;
    }
}