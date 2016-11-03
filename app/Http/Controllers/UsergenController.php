<?php

namespace Ipsum\Http\Controllers;

use Illuminate\Http\Request;

class UsergenController extends Controller
{
    public function get(Request $request)
    {
        #return "Hello from function getIpsumForm from IpsumController.php";  
        return view('usergen.get');

    }

    public function post(Request $request)
    {
        return view('usergen.post')->withRequest($request);
    }

}
