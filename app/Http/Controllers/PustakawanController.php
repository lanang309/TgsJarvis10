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

    function pegawai(Request $request)
    {
        $created = Pustakawan::create([
            'name' => $request->name,
            'addres' => $request->addres,
            'age' => $request->age,
            'working_date' => $request->working_date
        ]);

        return response()->json([
            'message' => 'Resource created succesfuly',
            'status' => 201,
            'data' => $created,
        ], 201);
    }

    function show($id){
        $pustakawan = Pustakawan::find($id);

        //jika id tidak ditemukan
        if(!$pustakawan){
            return response()->json([
                'message' => 'Resource not found',
                'status' => 404,
            ], 404);
        }

        //return pustakawan resource
        return response()->json([
            'message' => 'Get detail resource',
            'status' => 200,
            'data' => $pustakawan
        ], 200);
    }

    function update($id, Request $request){
        //Menangkap id & data request body
        $pustakawan = Pustakawan::find($id);

        //jika id tidak ditemukan
        if(!$pustakawan){
            return response()->json([
                'message' => 'Resource not found',
                'status' => 404,
            ], 404);
        }

        $updated = $pustakawan->update([
            'name' => $request->name ?? $pustakawan->name,
            'addres' => $request->addres ?? $pustakawan->addres,
            'age' => $request->age ?? $pustakawan->age,
            'working_date' => $request->working_date ?? $pustakawan->working_date
        ]);

        if($updated){
            return response()->json([
                'message' => 'Data updated succesfully',
                'data' => $updated,
                'status' => 200
            ], 200);
        }
    }
}
