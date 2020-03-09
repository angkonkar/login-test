<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    public function login(Request $Request)
    {
    	// dd($Request->all());
    	return $Request->email;
    }
}
