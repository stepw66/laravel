<?php

namespace App\Http\Controllers;

use App\Phone;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getIndex(){
        $phones = Phone::all();
        var_dump($phones);
    }
}
