<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $var1="";
        $var2="";
        $var3="";
        if(!isset($_POST["var1"])){
            $var1="";
        }else{
            $var1=$_POST["var1"];
        }
        if(!isset($_POST["var2"])){
            $var2="";
        }else{
            $var2=$_POST["var2"];
        }
        if(!isset($_POST["var2"])||(!isset($_POST["var2"]))){
            $var3="";
        }else{
            $var3=$var1+$var2;
        }


        return view('form', compact('var1','var2','var3'));
    }

}
