<?php
namespace Ipsum\Http\Controllers;
use Illuminate\Http\Request;
use Ipsum\Http\Requests;
use Ipsum\Http\Controllers\Controller;

class IpsumController extends Controller
{
    public function get(Request $request)
    {
        #return "Hello from function getIpsumForm from IpsumController.php";  
        return view('ipsum.get'); 
        
    }

    public function post(Request $request) 
    {   
        return view('ipsum.post')->withRequest($request); 
    } 
}
