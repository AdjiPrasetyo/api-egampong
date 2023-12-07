<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Meninggal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MeninggalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->whereIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
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
        $data = Meninggal::where('ktp_id' , '=', $request->ktp_id)->first();
        //cek data
        if($data){
            return response()->json([
                'status' => false,
                'message' => 'Data sudah ada',
                'data' => $data['id']. ' Sudah terdata !',
            ]);
        }else{

            $dataMeninggal = new Meninggal;

            $rules = [
                'ktp_id' => 'required',
            ];

            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Data gagal ditambahkan',
                    'data' => $validator->errors()
                ]);
            }
            $dataMeninggal->ktp_id = $request->ktp_id;

            $post = $dataMeninggal->save();
    
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
        $data = Meninggal::find($id);
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
        $dataMeninggal = Meninggal::find($id);
        if(!$dataMeninggal){
            return response()->json([
                'status' => false,
                'message' => 'data tidak ada'
            ], 404);
        }

        $rules = [
            // 'id' => 'required',
            'ktp_id' => 'required',
            // 'tempat' => 'required',
            // 'tanggal' => 'required',
            // 'umur' => 'required',
            // 'sebab' => 'required',
            // 'makam' => 'required',
            // 'nama_pelapor' => 'required',
            // 'hubungan_pelapor' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Data gagal diupdate',
                'data' => $validator->errors()
            ]);
        }
        $dataMeninggal->id = $request->id;
        $dataMeninggal->ktp_id = $request->ktp_id;
        $dataMeninggal->tempat = $request->tempat;
        $dataMeninggal->tanggal = $request->tanggal;
        $dataMeninggal->umur = $request->umur;
        $dataMeninggal->sebab = $request->sebab;
        $dataMeninggal->makam = $request->makam;
        $dataMeninggal->nama_pelapor = $request->nama_pelapor;
        $dataMeninggal->hubungan_pelapor = $request->hubungan_pelapor;
        $put = $dataMeninggal->save();

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
        $dataMeninggal = Meninggal::find($id);
        if (!$dataMeninggal) {
            return response()->json([
                'status' => false,
                'message' => 'data tidak ada'
            ], 404);
        }

        $destroy = $dataMeninggal->delete();
        return response()->json([
            'status' => true,
            'message' => 'Sukses hapus data'
        ], 200);
    }
}
