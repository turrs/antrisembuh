<?php

namespace App\Http\Controllers;

use App\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dokter = Dokter::all();
        return view('doctors',['dokter'=>$dokter]);
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
        
        $dokter = new Dokter;
        $dokter->nama = $request->nama;
        $dokter->spesialis = $request->spesialis;
        $dokter->jadwal = $request->jadwal;
        $dokter->no_telp = $request->no_telp;
        
        $dokter->save();

        return redirect('/dokter')->with('status', 'Data Berhasil Ditambahkan !');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show(Dokter $dokter)
    {
        return $dokter;
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit(Dokter $dokter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dokter $dokter)
    {
        $dokter::where('id', $dokter->id)
                ->update([
                    'nama' => $request -> nama,
                    'spesialis' => $request -> spesialis,
                    'jadwal' => $request -> jadwal,
                    'no_telp' => $request-> no_telp,

                ]);

                return redirect('/dokter')->with('status', 'Data Berhasil Diubah !');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokter $dokter)
    {
        $dokter::destroy($dokter->id);
      
        return redirect('/dokter')->with('status', 'Data Berhasil Dihapus !');
        //
        //
    }
}
