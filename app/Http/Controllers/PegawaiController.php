<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;
use App\Models\Pegawai;
use App\Models\Provinsi;

class PegawaiController extends Controller
{
    
    public function index()
    {
        $data = Pegawai::with('kelurahan')->get();
        return view('pegawai.index',compact('data'));
    }

    public function create()
    {
        $kelurahan = Kelurahan::Active()->get();
        $provinsi = provinsi::Active()->get();
        return view('pegawai.create', compact('kelurahan', 'provinsi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payload = $request->all();
        Pegawai::create($payload);
        return redirect()->route('pegawai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pegawai::find($id);
        $kelurahan = Kelurahan::Active()->get();
        $provinsi = provinsi::Active()->get();
        return view('pegawai.edit', compact('data', 'kelurahan', 'provinsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $payload = $request->all();
        $data = Pegawai::find($id);
        $data->update($payload);
        return redirect()->route('pegawai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pegawai::find($id);
        $data->delete();
        return redirect()->route('pegawai.index');
    }
}
