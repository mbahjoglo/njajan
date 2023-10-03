<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
use App\Models\Penjual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PenjualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_penjuals = Penjual::all();
        $pasar = Pasar::all();
        return view('admin/input-penjual', compact('data_penjuals', 'pasar'));
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
        $request->file('foto')->storeAs('penjual', $gambar);
        $data_penjuals = new Penjual();
        $data_penjuals->namapenjual = $request->namapenjual;
        $data_penjuals->alamat = $request->alamat;
        $data_penjuals->pasar = $request->pasar;
        $data_penjuals->nomor = $request->nomor;
        $data_penjuals->status = '1';
        $data_penjuals->foto = $request->file('foto')->getClientOriginalName();
        $data_penjuals->save();

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

    public function homePenjual(Request $request)
    {
        $gambar = $request->file('foto')->getClientOriginalName();
        $request->file('foto')->storeAs('penjual', $gambar);
        $data_penjuals = new Penjual();
        $data_penjuals->namapenjual = $request->namapenjual;
        $data_penjuals->alamat = $request->alamat;
        $data_penjuals->pasar = $request->pasar;
        $data_penjuals->nomor = $request->nomor;
        $data_penjuals->status = 0;
        $data_penjuals->foto = $request->file('foto')->getClientOriginalName();
        $data_penjuals->save();

        return redirect('notification');
    }
}
