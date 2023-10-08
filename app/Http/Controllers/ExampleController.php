<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        alert()->info('Title','Lorem Lorem Lorem');
        return view('example');
    }
}
