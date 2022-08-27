<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    //
    public function index()
    {
        $name = request('name');
        return Storage::download($name.'.png');
    }

    public function png($name)
    {
        return Storage::download($name.'.png');
    }

    public function svg($name)
    {
        return Storage::download($name.'.svg');
    }

    public function eps($name)
    {
        return Storage::download($name.'.eps');
    }
}
