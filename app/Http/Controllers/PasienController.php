<?php

namespace App\Http\Controllers;

use App\Pasien;
use App\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pasien = Pasien::all();
        return view('pasien',['pasien'=>$pasien]);
        //
    }
    public function tambahdata(Request $request)
    {
        $dokter = Dokter::all();
        return view('pasien.tambahdata',['dokter'=>$dokter]);
        //
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pasien = new Pasien;
        $pasien->nama = $request->nama;
        $pasien->alamat = $request->alamat;
        $pasien->no_telp = $request->no_telp;
        $pasien->dokter = $request->dokter;
        $pasien->riwayat_penyakit = $request->riwayat_penyakit;
        $pasien->biaya = $request->biaya;
        $pasien->metode_pembayaran = $request->metode_pembayaran;
        $pasien->save();

        return redirect('/pasien')->with('status', 'Data Berhasil Ditambahkan !');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien , Dokter $dokter)
    
    {
        return view('pasien.detail',['dokter'=>$dokter], ['pasien'=>$pasien]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $pasien = Pasien::all();
        return view('pasien.edit',['pasien'=>$pasien]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasien $pasien)
    {
        $pasien::where('id', $pasien->id)
                ->update([
                    'nama' => $request->nama,
                    'alamat' => $request->alamat,
                    'no_telp' => $request->no_telp,
                    'dokter' => $request->dokter,
                    'riwayat_penyakit' => $request->riwayat_penyakit,
                    'biaya' => $request->biaya,
                    'metode_pembayaran' => $request->metode_pembayaran,
                ]);

                return redirect('/pasien')->with('status', 'Data Berhasil Diubah !');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
        $pasien::destroy($pasien->id);
      
        return redirect('/pasien')->with('status', 'Data Berhasil Dihapus !');
        //
    }
}
