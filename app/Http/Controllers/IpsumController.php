<?php
namespace Ipsum\Http\Controllers;
use Illuminate\Http\Request;
use Ipsum\Http\Requests;
use Ipsum\Http\Controllers\Controller;
use Storage;

class IpsumController extends Controller
{
    public function get(Request $request)
    {
        #return "Hello from function getIpsumForm from IpsumController.php";  
        return view('ipsum.get'); 
        
    }

    public function post(Request $request) 
    {   
        // Validate the user's form items 
        $this->validate($request, [
            "number" => 'required|integer|between:1,40',
        ]);

        $contents = Storage::disk('local')->get('ipsum.txt'); 

        $paragraphs = explode("\n\n", $contents); 
        
        $output = array() ; 

        for ($i=0; $i<$request['number']; $i++) { 
            $output[$i]= $paragraphs[$i]; 
        } 

        $request["paragraphs"]=$output; 

        return view('ipsum.post')->withRequest($request); 
    } 

    public function parseIpsum($number) 
    {
    } 
}
