<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function data(){
        $data = [
            "name" =>"Ajay Bharti",
            "age" =>25,
            "phone" =>8233846596,
            "email" =>"ajaybharti6998@gmail.com",
            "gender" =>"male"
    
    ];
         return $data;
    }
}
