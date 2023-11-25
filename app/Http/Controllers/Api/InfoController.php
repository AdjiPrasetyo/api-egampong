<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Kk;
use App\Models\Pindah;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataJiwa = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();

        $dataKk = Kk::all();

        $dataLaki = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->where('jenis_kelamin','=', 'LAKI-LAKI',)
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();

        $dataPerempuan = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->where('jenis_kelamin','=', 'PEREMPUAN',)
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();


        // info Dusun

        $sukaDamaiJiwa = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->where('kk.alamat','=', 'SUKA DAMAI')
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();

        $sukaDamaiKk = Kk::all()->where('alamat','=','SUKA DAMAI');


        $sukaDamaiLaki = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->where('kk.alamat', '=', 'SUKA DAMAI',)
        ->where('jenis_kelamin','=', 'LAKI-LAKI',)
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();

        $sukaDamaiPerempuan = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->where( 'kk.alamat', '=', 'SUKA DAMAI',)
        ->where('jenis_kelamin','=', 'PEREMPUAN',) 
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();

        $kebunBaruJiwa = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->where('kk.alamat','=', 'KEBUN BARU') 
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();

        $kebunBaruKk = Kk::all()->where('alamat','=','KEBUN BARU');

        $kebunBaruLaki = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->where('kk.alamat', '=', 'KEBUN BARU', )
        ->where('ktp.jenis_kelamin', '=', 'LAKI-LAKI',)
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();

        $kebunBaruPerempuan = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->where('kk.alamat', '=', 'KEBUN BARU',)
        ->where('ktp.jenis_kelamin','=', 'PEREMPUAN',)
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();

        $rejoSariJiwa = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->where('kk.alamat','=', 'REJO SARI')
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();

        $rejoSariKk = Kk::all()->where('alamat','=','REJO SARI');


        $rejoSariLaki = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->where('kk.alamat', '=', 'REJO SARI', )
        ->where('ktp.jenis_kelamin', '=', 'LAKI-LAKI',)
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();

        $rejoSariPerempuan = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->where('kk.alamat', '=', 'REJO SARI',)
        ->where('ktp.jenis_kelamin','=', 'PEREMPUAN',)
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();

        $margoYosoJiwa = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->where('kk.alamat','=', 'MARGO YOSO')
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();

        $margoYosoKk = Kk::all()->where('alamat','=','MARGO YOSO');


        $margoYosoLaki = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->where('kk.alamat', '=', 'MARGO YOSO', )
        ->where('ktp.jenis_kelamin', '=', 'LAKI-LAKI',)
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();

        $margoYosoPerempuan = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->where('kk.alamat', '=', 'MARGO YOSO',)
        ->where('ktp.jenis_kelamin','=', 'PEREMPUAN',)
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();

        $payungRajaJiwa = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->where('kk.alamat','=', 'PAYUNG RAJA')
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();

        $payungRajaKk = Kk::all()->where('alamat','=','PAYUNG RAJA');


        $payungRajaLaki = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->where('kk.alamat', '=', 'PAYUNG RAJA', )
        ->where('ktp.jenis_kelamin', '=', 'LAKI-LAKI',)
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();

        $payungRajaPerempuan = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->where('kk.alamat', '=', 'PAYUNG RAJA',)
        ->where('ktp.jenis_kelamin','=', 'PEREMPUAN',)
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();


        return response()->json([
            'status' => true,
            'message' => 'data info',
            'jiwa' => $dataJiwa->count(),
            'kk'    => $dataKk->count(),
            'laki-laki'    => $dataLaki->count(),
            'perempuan'    => $dataPerempuan->count(),
            'sukaDamaiJiwa'    => $sukaDamaiJiwa->count(),
            'sukaDamaiKk'    => $sukaDamaiKk->count(),
            'sukaDamaiLaki'    => $sukaDamaiLaki->count(),
            'sukaDamaiPerempuan'    => $sukaDamaiPerempuan->count(),
            'kebunBaruJiwa'    => $kebunBaruJiwa->count(),
            'kebunBaruKk'    => $kebunBaruKk->count(),
            'kebunBaruLaki'    => $kebunBaruLaki->count(),
            'kebunBaruPerempuan'    => $kebunBaruPerempuan->count(),
            'rejoSariJiwa'    => $rejoSariJiwa->count(),
            'rejoSariKk'    => $rejoSariKk->count(),
            'rejoSariLaki'    => $rejoSariLaki->count(),
            'rejoSariPerempuan'    => $rejoSariPerempuan->count(),
            'margoYosoJiwa'    => $margoYosoJiwa->count(),
            'margoYosoKk'    => $margoYosoKk->count(),
            'margoYosoLaki'    => $margoYosoLaki->count(),
            'margoYosoPerempuan'    => $margoYosoPerempuan->count(),
            'payungRajaJiwa'    => $payungRajaJiwa->count(),
            'payungRajaKk'    => $payungRajaKk->count(),
            'payungRajaLaki'    => $payungRajaLaki->count(),
            'payungRajaPerempuan'    => $payungRajaPerempuan->count(),
        ], 200);
    }
    public function infoJiwa()
    {
        $data = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->select('ktp.*','alamat')
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
        ->where('jenis_kelamin','=', 'LAKI-LAKI')
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->select('ktp.*','alamat')
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
        ->where('jenis_kelamin','=', 'PEREMPUAN')
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->select('ktp.*','alamat')
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

    public function validasi(){
        
        // $data = DB::table('ktp')
        // ->join('meninggal', 'ktp.id', '!=', 'meninggal.ktp_id',)
        // ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        // ->select('ktp.*')
        // ->get();
        $data = DB::table('kk')
        ->join('ktp', 'kk.id', '=', 'ktp.kk_id',)
        ->whereNotIn('ktp.id', DB::table('pindah')->select('ktp_id'))
        ->whereNotIn('ktp.id', DB::table('meninggal')->select('ktp_id'))
        ->select('ktp.*','alamat')
        ->get();



            return response()->json([
                'status' => true,
                'message' => 'data validasi',
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
