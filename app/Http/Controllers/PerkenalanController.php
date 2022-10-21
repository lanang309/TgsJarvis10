<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerkenalanController extends Controller
{
    function perkenalan() {
        $data = [
            "name" => "Muhammad Ramadhan Putra Prayoga",
            "gender" => "Laki-laki",
            "age" => "19",
            "status" => "Mahasiswa",
            "religion" => "Islam",
            "address" => "Jl Karet Kp Gedong Rt01/19 no 34 ",
        ];
    
        return response()->json($data);
    }
}
