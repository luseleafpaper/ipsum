<?php

namespace Ipsum\Http\Controllers;

use Illuminate\Http\Request;
use Webcraft\Random\RandomFacade;

class UsergenController extends Controller
{
    public function get(Request $request)
    {
        #return "Hello from function getIpsumForm from IpsumController.php";  
        return view('usergen.get');

    }

    public function post(Request $request)
    {
        $int = RandomFacade::generateInt(5, 15); 
        $request["int"]=$int; 
        return view('usergen.post')->withRequest($request);
    }

}
