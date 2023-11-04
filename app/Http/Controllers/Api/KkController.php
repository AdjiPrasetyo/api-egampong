<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class KkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kk::orderBy('id', 'asc')->get();
        return response()->json([
            'status' => true,
            'massage' => 'Data ditemukan',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataKk = new Kk;
        $rules = [
            'id' => 'required',
            'alamat' => 'required'
        ];
        $validator = FacadesValidator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Data gagal ditambahkan',
                'data' => $validator->errors()
            ]);
        }

        $dataKk->id = $request->id;
        $dataKk->alamat = $request->alamat;


        $post = $dataKk->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses menambah data'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Kk::find($id);
        //Cek data
        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Data ditemukan',
                'data' => $data
            ], 200);
            //TODO belum jalan kondisi else
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataKk = Kk::find($id);
        if (!$dataKk) {
            return response()->json([
                'status' => false,
                'message' => 'data tidak ada'
            ], 404);
        }
        $rules = [
            'id' => 'required',
            'alamat' => 'required'
        ];
        $validator = FacadesValidator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Data gagal diupdate',
                'data' => $validator->errors()
            ]);
        }

        $dataKk->id = $request->id;
        $dataKk->alamat = $request->alamat;

        $put = $dataKk->save();
        return response()->json([
            'status' => true,
            'message' => 'Sukses update data'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataKk = Kk::find($id);
        if (!$dataKk) {
            return response()->json([
                'status' => false,
                'message' => 'data tidak ada'
            ], 404);
        }

        $put = $dataKk->delete();
        return response()->json([
            'status' => true,
            'message' => 'Sukses hapus data'
        ], 200);
    }
}
