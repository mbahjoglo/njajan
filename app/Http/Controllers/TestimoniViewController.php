<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class TestimoniViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_testimonis = Testimoni::all();
        return view('admin/tables-testimoni', compact('data_testimonis'));
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
        $data_testimonis = Testimoni::find($id);

        if ($request->foto == '') {
            // $data_testimonis->foto = $request->fotolama;
        } else {
            $foto = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('testimoni', $foto);
            Storage::delete('testimoni/' . $request->fotolama);
            $data_testimonis->foto = $request->file('foto')->getClientOriginalName();
        }

        $data_testimonis->nama = $request->nama;
        $data_testimonis->deskripsi = $request->deskripsi;
        $data_testimonis->jabatan = $request->jabatan;
        $data_testimonis->save();
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
        $data_testimonis = Testimoni::find($id);
        Storage::delete('testimoni/' . $data_testimonis->foto);
        $data_testimonis->delete();
        return back();
    }

    public function inputTestimoni(Request $request)
    {
        $testimoni = new Testimoni();
        $testimoni->nama = $request->nama;
        $testimoni->deskripsi = $request->deskripsi;

        $testimoni->save();

        return back()->with('success', 'Berhasil mengirimkan testimoni');
    }
}
