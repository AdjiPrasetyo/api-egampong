<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ktp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KtpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
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
        $data = Ktp::find($request->id);
        //Cek data
        
        if($data){
            return response()->json([
                'status' => false,
                'message' => 'Data sudah ada',
                'data' => $data['id']. ' Sudah terdata !',
            ]);
        }else{

            $dataKtp = new Ktp;
            $rules = [
                'id' => 'required',
                'kk_id' => 'required',
                'nama_lengkap' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required|date',
                'jenis_kelamin' => 'required',
                'agama' => 'required',
                'pendidikan' => 'required',
                'pekerjaan' => 'required',
                'status_perkawinan' => 'required',
                'status_keluarga' => 'required',
                'nama_ayah' => 'required',
                'nama_ibu' => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Data gagal ditambahkan',
                    'data' => $validator->errors()
                ]);
            }
    
            $dataKtp->id = $request->id;
            $dataKtp->kk_id = $request->kk_id;
            $dataKtp->nama_lengkap = $request->nama_lengkap;
            $dataKtp->tempat_lahir = $request->tempat_lahir;
            $dataKtp->tanggal_lahir = $request->tanggal_lahir;
            $dataKtp->jenis_kelamin = $request->jenis_kelamin;
            $dataKtp->agama = $request->agama;
            $dataKtp->pendidikan = $request->pendidikan;
            $dataKtp->pekerjaan = $request->pekerjaan;
            $dataKtp->status_perkawinan = $request->status_perkawinan;
            $dataKtp->status_keluarga = $request->status_keluarga;
            $dataKtp->nama_ayah = $request->nama_ayah;
            $dataKtp->nama_ibu = $request->nama_ibu;
    
    
            $post = $dataKtp->save();
    
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
        $data = Ktp::find($id);
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
        $dataKtp = Ktp::find($id);
        if (!$dataKtp) {
            return response()->json([
                'status' => false,
                'message' => 'data tidak ada'
            ], 404);
        }
        $rules = [
            // 'id' => 'required',
            'kk_id' => 'required',
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'status_perkawinan' => 'required',
            'status_keluarga' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Data gagal diupdate',
                'data' => $validator->errors()
            ]);
        }

        // $dataKtp->id = $request->id;
        $dataKtp->kk_id = $request->kk_id;
        $dataKtp->nama_lengkap = $request->nama_lengkap;
        $dataKtp->tempat_lahir = $request->tempat_lahir;
        $dataKtp->tanggal_lahir = $request->tanggal_lahir;
        $dataKtp->jenis_kelamin = $request->jenis_kelamin;
        $dataKtp->agama = $request->agama;
        $dataKtp->pendidikan = $request->pendidikan;
        $dataKtp->pekerjaan = $request->pekerjaan;
        $dataKtp->status_perkawinan = $request->status_perkawinan;
        $dataKtp->status_keluarga = $request->status_keluarga;
        $dataKtp->nama_ayah = $request->nama_ayah;
        $dataKtp->nama_ibu = $request->nama_ibu;

        $put = $dataKtp->save();
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
        $dataKtp = Ktp::find($id);
        if (!$dataKtp) {
            return response()->json([
                'status' => false,
                'message' => 'data tidak ada'
            ], 404);
        }

        $put = $dataKtp->delete();
        return response()->json([
            'status' => true,
            'message' => 'Sukses hapus data'
        ], 200);
    }
}
