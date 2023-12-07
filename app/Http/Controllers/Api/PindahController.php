<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pindah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PindahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->whereIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();
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
        $data = Pindah::where('ktp_id' , '=', $request->ktp_id)->first();
        //cek data
        if($data){
            return response()->json([
                'status' => false,
                'message' => 'Data sudah ada',
                'data' =>' Sudah terdata !',
            ]);
        }else{

            $dataPindah = new Pindah;

            $rules = [
                // 'id' => 'required',
                'ktp_id' => 'required',
                // 'keterangan' => 'required',
            ];

            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Data gagal ditambahkan',
                    'data' => $validator->errors()
                ]);
            }
            // $dataPindah->id = $request->id;
            $dataPindah->ktp_id = $request->ktp_id;
            // $dataPindah->keterangan = $request->keterangan;
            $post = $dataPindah->save();
    
            return response()->json([
                'status' => true,
                'message' => 'Sukses menambah data'
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Pindah::find($id);
        //Cek data
        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Data ditemukan',
                'data' => $data
            ], 200);
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
        $dataPindah = Pindah::find($id);
        if (!$dataPindah) {
            return response()->json([
                'status' => false,
                'message' => 'data tidak ada'
            ], 404);
        }

        $rules = [

            // 'id' => 'required',
            'ktp_id' => 'required',
            // 'keterangan' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Data gagal diupdate',
                'data' => $validator->errors()
            ]);
        }

        // $dataPindah->id = $request->id;
        $dataPindah->ktp_id = $request->ktp_id;
        // $dataPindah->keterangan = $request->keterangan;
        $put = $dataPindah->save();
    
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
        $dataPindah = Pindah::find($id);
        if (!$dataPindah) {
            return response()->json([
                'status' => false,
                'message' => 'data tidak ada'
            ], 404);
        }

        $destroy = $dataPindah->delete();
        return response()->json([
            'status' => true,
            'message' => 'Sukses hapus data'
        ], 200);
    }
}
