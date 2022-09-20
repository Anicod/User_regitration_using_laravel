<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form extends Controller
{
    //
   function index(Request $request){
     $vir = $request->post('plan');
     echo "added $vir";
   }     
}
