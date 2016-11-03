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
        $file = "/home/lu/code/ipsum/app/Http/Controllers/ipsum.txt"; 
        $paragraphs = array(); 
        $filep = fopen($file, 'r') ; 
        while(!feof($filep)) { 
            $line = fgets($filep); 
            if ( strlen($line) < 10 ) { 
                $foo = "bar"; 
            } else { 
                $paragraphs[] = $line; 
            } 
        } 
 
        $retval = ""; 

        for ($i=0; $i<$request['number']; $i++) { 
            $retval = $retval . $paragraphs[$i] . "<br><br>"; 
        } 

        echo  $retval; 

        return view('ipsum.post')->withRequest($request); 
    } 

    public function parseIpsum($number) 
    {
    } 
}
