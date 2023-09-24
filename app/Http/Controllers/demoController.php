<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
   function demo($fname){
    return $fname;
   }

   function multipara($fname,$mname,$lname){
    return "firstname:".$fname.
            "<br> midname:".$mname.
            "<br> lastname:".$lname
           
    ;
   }



   function multiparaview($fname,$mname,$lname){
    return view("demo",['fnamekey'=>$fname,'mnamekey'=>$mname,
                          'lnamekey'=>$lname ]) ;
   }



   function home(){
    return view("index");
   }
   function about(){
    return view("about");
   }

     function bladeView(){


        return $firstname="<script>alert('hello mishu')</script>";

        return view('demo',['fname'=>$firstname]);



     }


}
