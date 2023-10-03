<?php

namespace App\Http\Controllers;

use App\Models\Jastip;
use Illuminate\Http\Request;

class DaftarJastipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('daftarjastip');
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
        $request->file('foto')->storeAs('jastip', $gambar);
        $data_jastip = new Jastip();
        $data_jastip->nama = $request->nama;
        $data_jastip->alamat = $request->alamat;
        $data_jastip->email = $request->email;
        $data_jastip->nomor = $request->nomor;
        $data_jastip->status = '0';
        $data_jastip->foto = $request->file('foto')->getClientOriginalName();
        $data_jastip->save();

        return redirect('notification');
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
        //
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

    public function terimaJastip($id)
    {
        $jastip = Jastip::find($id);
        $jastip->status = 1;
        $jastip->save();

        return back();
    }
}
