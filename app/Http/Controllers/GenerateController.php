<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateController extends Controller
{
    //
    public function go()
    {
        return request("name");
    }

    public function index(Request $request)
    {
      $request->validate([
        'name' => 'required',
        'url' => 'required'
      ]);
      return view('test', [ 'name' => request("name"), 'url' => request("url") ]);
    }

    public function store(Request $request){
      $request->validate([
        'name' => 'required',
        'url' => 'required'
      ]);
    }

    public function create_s(Request $request)
    {
      $request->validate([
        'name' => 'required',
        'url' => 'required'
      ]);
      return view('standard', [ 'name' => request("name"), 'url' => request("url") ]);
    }

    public function create_w(Request $request)
    {
      $request->validate([
        'name' => 'required',
        'url' => 'required',
        'logo' => 'required|max:2048'
      ]);

      $logo = $request->file('logo')->store('logo');

      return view('test', [ 'name' => request("name"), 'url' => request("url"), 'logo' => $logo ]);
    }

}
