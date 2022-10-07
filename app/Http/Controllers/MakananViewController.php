<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MakananViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_makanans = Makanan::all();
        return view('admin/pages-menu-makanan',compact('data_makanans'));
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
        //
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
        //
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
        $data_makanans = Makanan::find($id);
        
        if ($request->foto == '') {
            $data_makanans->foto = $request->fotolama;

        } else {
            $foto = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('makanan', $foto);
            Storage::delete('makanan/' . $request->fotolama);
            $data_makanans->foto = $request->file('foto')->getClientOriginalName();
        }

        $data_makanans->nama = $request->nama;
        $data_makanans->penjual = $request->penjual;
        $data_makanans->lokasi = $request->lokasi;
        $data_makanans->harga = $request->harga;
        $data_makanans->nomor = $request->nomor;
        $data_makanans->save();
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
        //
    }
}
