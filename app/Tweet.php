<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    public $userName;
    public $message;
    public $date;

    function __construct($username, $content) {
        $this->userName = $username;
        $this->message = $content;
        $this->date = date("Y-m-d h:i:sa");
    }
}