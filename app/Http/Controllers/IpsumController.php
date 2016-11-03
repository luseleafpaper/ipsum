<?php
namespace Ipsum\Http\Controllers;
use Illuminate\Http\Request;
use Ipsum\Http\Requests;
use Ipsum\Http\Controllers\Controller;

class IpsumController extends Controller
{
    public function getIpsumForm(Request $request)
    {
        #return "Hello from function getIpsumForm from IpsumController.php";  
        return view('ipsum.index'); 
        
    }

    public function postIpsumForm(Request $request) 
    {   
        return view('ipsum.show')->withRequest($request); 
    } 
}
