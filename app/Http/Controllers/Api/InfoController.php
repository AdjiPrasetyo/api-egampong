<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Kk;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function infoJiwa()
    {
        $data = DB::table('ktp')
            ->join('meninggal', 'ktp.id', '!=', 'meninggal.ktp_id',)
            ->join('pindah', 'ktp.id', '!=', 'pindah.ktp_id',)
            ->select('ktp.id', 'nama_lengkap')
            ->get();
        return response()->json([
            'status' => true,
            'message' => 'data info',
            'data' => $data
        ], 200);
    }
    public function infoLakiLaki()
    {
        $data = DB::table('ktp')
            ->join('meninggal', 'ktp.id', '!=', 'meninggal.ktp_id',)
            ->join('pindah', 'ktp.id', '!=', 'pindah.ktp_id',)
            ->where('jenis_kelamin','=', 'LAKI-LAKI')
            ->select('ktp.id', 'nama_lengkap', 'jenis_kelamin')
            ->get();
        return response()->json([
            'status' => true,
            'message' => 'data info',
            'data' => $data
        ], 200);
    }
    public function infoPerempuan()
    {
        $data = DB::table('ktp')
            ->join('meninggal', 'ktp.id', '!=', 'meninggal.ktp_id',)
            ->join('pindah', 'ktp.id', '!=', 'pindah.ktp_id',)
            ->where('jenis_kelamin','=', 'PEREMPUAN')
            ->select('ktp.id', 'nama_lengkap', 'jenis_kelamin')
            ->get();
        return response()->json([
            'status' => true,
            'message' => 'data info',
            'data' => $data
        ], 200);
    }
    public function infoKk()
    {
        $data = Kk::all();
        return response()->json([
            'status' => true,
            'message' => 'data info',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function infoShow(string $id)
    {
        $data = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id')
        ->where('kk.id', '=', $id)
        ->select('ktp.*','kk.alamat')
        ->get();
        return response()->json([
            'status' => true,
            'message' => 'data info',
            'data' => $data
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
