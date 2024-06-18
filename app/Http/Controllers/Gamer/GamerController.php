<?php

namespace App\Http\Controllers\Gamer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GamerController extends Controller
{
    function index() {
        
        return view('home.index');
        
    }
}
