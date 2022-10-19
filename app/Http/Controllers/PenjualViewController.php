<?php

namespace App\Http\Controllers;

use App\Models\Penjual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PenjualViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_penjuals = Penjual::all();
        return view('admin/tables-penjual', compact('data_penjuals'));
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
        $gambar = $request->file('foto')->getClientOriginalName();
        $request->file('foto')->storeAs('makanan', $gambar);
        $data_penjuals = Penjual::find($id);
        $data_penjuals->namapenjual = $request->namapenjual;
        $data_penjuals->alamat = $request->alamat;
        $data_penjuals->pasar = $request->pasar;
        $data_penjuals->nomor = $request->nomor;
        $data_penjuals->foto = $request->file('foto')->getClientOriginalName();
        $data_penjuals->save();
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
        $data_penjuals = Penjual::find($id);
        Storage::delete('makanan/' . $data_penjuals->foto);
        $data_penjuals->delete();
        return back();
    }
}
