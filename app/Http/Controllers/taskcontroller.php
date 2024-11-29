<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class taskcontroller extends Controller
{
    public function form1(Request $result){
        $a = $result->name;
        $b = $result->email;
        $c = $result->password;

        
        

    }

    public function form2(Request $result){
        $a = $result->number;
        $b = $result->city;

        
    }


}
