<?php

namespace App\Http\Controllers;

use App\Models\Pustakawan;
use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    function index()
    {
        //get all data in pustakawan table
        $pustakawan = Pustakawan::all();

        //send 204 if no data
        if(count($pustakawan) == 0){
            return response()->json([
                'message' => 'Get all resources',
                'status' => 204,
            ], 204);
        }

        return response()->json([
            'message' => 'Get all resources',
            'status' => 200,
            'data' => $pustakawan,
        ], 200);
    }
}
