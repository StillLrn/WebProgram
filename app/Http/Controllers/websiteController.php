<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class websiteController extends Controller
{
    public function useController(){
        if(isset($_GET["valk"])){
            $valk=$_GET["valk"];
        }
        else{
            $valk="";
        }
        return view("home",["valk"=>$valk]);
    }
}
