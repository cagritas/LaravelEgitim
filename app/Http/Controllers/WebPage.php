<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebPage extends Controller
{
    public function site()
    {
        $data["yazi1"]="CagriTas";
        $data["yazi2"]="Hello";

        return view('web',$data);
    }
}
