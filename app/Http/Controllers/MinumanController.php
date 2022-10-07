<?php

namespace App\Http\Controllers;

use App\Models\Minuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MinumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/input-produk-minuman');
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
        $gambar = $request->file('foto')->getClientOriginalName();
        $request->file('foto')->storeAs('minuman',$gambar);
        $data_minumans = new Minuman();
        $data_minumans->nama = $request->nama;
        $data_minumans->penjual = $request->penjual;
        $data_minumans->lokasi = $request->lokasi;
        $data_minumans->harga = $request->harga;
        $data_minumans->nomor = $request->nomor;
        $data_minumans->foto = $request->file('foto')->getClientOriginalName();
        $data_minumans->save();

        return back();
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
        return view('admin/update-makanan');
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
        $gambar = $request->file('foto')->getClientOriginalName();
        $request->file('foto')->storeAs('minuman',$gambar);
        $data_minumans = Minuman::find($id);
        $data_minumans->nama = $request->nama;
        $data_minumans->penjual = $request->penjual;
        $data_minumans->lokasi = $request->lokasi;
        $data_minumans->harga = $request->harga;
        $data_minumans->foto = $request->file('foto')->getClientOriginalName();
        $data_minumans->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_minumans = Minuman::find($id);
        Storage::delete('minuman/' . $data_minumans->foto);
        $data_minumans->delete();
        return back();
    }
}
