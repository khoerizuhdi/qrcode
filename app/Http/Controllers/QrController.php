<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrController extends Controller
{
    //
    public function index()
    {
      return view('test', ['name' => 'Name', 'url' => 'http://aerotech.com/', 'logo' => 'tokped.png' ]);
    }

    public function standard()
    {
      return view('standard', ['name' => 'Name', 'url' => 'http://aerotech.com/']);
    }

    public function withlogo()
    {
      return view('withlogo', ['name' => 'Name', 'url' => 'http://aerotech.com/']);
    }
}
