<?php

namespace Ipsum\Http\Controllers;

use Illuminate\Http\Request;
use Webcraft\Random\RandomFacade;
use Storage; 
use Random; 

class UsergenController extends Controller
{
    public function get(Request $request)
    {
        #return "Hello from function getIpsumForm from IpsumController.php";  
        return view('usergen.get');

    }

    public function post(Request $request)
    {
        $content = Storage::disk('local')->get('ipsum.txt');
        $profilelist = explode("\n\n", $content);

        $content = Storage::disk('local')->get('names.txt'); 
        $namelist = explode("\n", $content);

        $request["users"] = array(); 
        
        $users = array(); 
        
        for ($i = 0; $i < $request["number"]; $i++) { 

            $thisuser = array() ; 
            $int = Random::generateInt(0, sizeof($namelist)-1); 
            $lastint = Random::generateInt(0, sizeof($namelist)-1); 
            $thisuser["name"] = $namelist[$int] . " ". $namelist[$lastint]; 

            $year = Random::generateInt(1940, 2000); 
            $month = Random::generateInt(1, 12); 
            $day = Random::generateInt(1, 30); 
            $thisuser["birthday"] = $year . "-" . $month . "-". $day; 

            $int = Random::generateInt(0, sizeof($profilelist)-1); 
            $thisuser["profile"] = $profilelist[$int]; 
            
            array_push($users, $thisuser);      
        } 

        $request["users"] = $users ;
        $_request["users"] = array(
            array(
                "name" => "Lu Wang", 
                "birthday" => "1989-03-20",
                "profile" => "Just trying her best",
                ), 
            array(
                "name" => "Lin Wang",
                "birthday" => "1993-03-20",
                "profile" => "Just trying her best",
                ), 
            ); 
        return view('usergen.post')->withRequest($request);
    }

}
