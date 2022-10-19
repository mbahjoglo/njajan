<?php

namespace App\Http\Controllers;

use App\Models\Minuman;
use App\Models\Pasar;
use App\Models\Penjual;
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
        $data_minumans = Minuman::all();
        $penjual = Penjual::all();
        $pasar = Pasar::all();
        return view('admin/input-produk-minuman', compact('data_minumans', 'penjual', 'pasar'));
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
        $gambar = $request->file('fotominuman')->getClientOriginalName();
        $request->file('fotominuman')->storeAs('minuman', $gambar);
        $data_minumans = new Minuman();
        $data_minumans->namaminuman = $request->namaminuman;
        $data_minumans->penjual = $request->penjual;
        $data_minumans->harga = $request->harga;
        $data_minumans->fotominuman = $request->file('fotominuman')->getClientOriginalName();
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
