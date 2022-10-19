<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\Penjual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $penjual = Penjual::all();
        $datamakanans = DB::table('makanan')->join('penjual', 'makanan.penjual', '=', 'penjual.id')->get();
        return view('admin/pages-menu-makanan', compact('datamakanans', 'penjual'));
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
        $datamakanans = Makanan::find($id);

        if ($request->fotomakanan == '') {
            // $data_makanans->fotomakanan = $request->fotolama;
        } else {
            $fotomakanan = $request->file('fotomakanan')->getClientOriginalName();
            $request->file('fotomakanan')->storeAs('makanan', $fotomakanan);
            Storage::delete('makanan/' . $request->fotolama);
            $datamakanans->fotomakanan = $request->file('fotomakanan')->getClientOriginalName();
        }

        $datamakanans->namamakanan = $request->namamakanan;
        $datamakanans->harga = $request->harga;
        $datamakanans->save();
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
        $datamakanans = Makanan::find($id);
        Storage::delete('makanan/' . $datamakanans->fotomakanan);
        $datamakanans->delete();
        return back();
    }
}
