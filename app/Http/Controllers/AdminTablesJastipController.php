<?php

namespace App\Http\Controllers;

use App\Models\Jastip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminTablesJastipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/tables-jastip', [
            'jastip_terima' => Jastip::where('status', 1)->get(),
            'jastip_belum_terima' => Jastip::where('status', 0)->get()
        ]);
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
        $data_jastip = Jastip::find($id);

        if ($request->foto == '') {
            // $data_makanans->fotomakanan = $request->fotolama;
        } else {
            $foto = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('jastip', $foto);
            Storage::delete('jastip/' . $request->fotolama);
            $data_jastip->foto = $request->file('foto')->getClientOriginalName();
        }

        $data_jastip->nama = $request->nama;
        $data_jastip->email = $request->email;
        $data_jastip->nomor = $request->nomor;
        $data_jastip->alamat = $request->alamat;
        $data_jastip->save();
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
        $data_jastip = Jastip::find($id);
        Storage::delete('jastip/' . $data_jastip->foto);
        $data_jastip->delete();
        return back();
    }
}
