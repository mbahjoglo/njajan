<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\Pasar;
use App\Models\Penjual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_makanans = Makanan::all();
        $penjual = Penjual::all();
        $pasar = Pasar::all();
        return view('admin/input-produk-makanan', compact('data_makanans', 'penjual', 'pasar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gambar = $request->file('fotomakanan')->getClientOriginalName();
        $request->file('fotomakanan')->storeAs('makanan', $gambar);
        $data_makanans = new Makanan();
        $data_makanans->namamakanan = $request->namamakanan;
        $data_makanans->penjual = $request->penjual;
        $data_makanans->harga = $request->harga;
        $data_makanans->fotomakanan = $request->file('fotomakanan')->getClientOriginalName();
        $data_makanans->save();

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $data_makanans = Makanan::find($id);
        $data_makanans->namamakanan = $request->namamakanan;
        $data_makanans->penjual = $request->penjual;
        $data_makanans->harga = $request->harga;
        $data_makanans->foto = $request->file('foto')->getClientOriginalName();
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
        $data_makanans = Makanan::find($id);
        Storage::delete('makanan/' . $data_makanans->foto);
        $data_makanans->delete();
        return back();
    }
}
