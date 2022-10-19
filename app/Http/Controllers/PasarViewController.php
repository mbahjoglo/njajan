<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PasarViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_pasars = Pasar::all();
        return view('admin/pages-pasar', compact('data_pasars'));
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
        $data_pasars = Pasar::find($id);

        if ($request->foto == '') {
            // $data_pasars->foto = $request->fotolama;
        } else {
            $foto = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('pasar', $foto);
            Storage::delete('pasar/' . $request->fotolama);
            $data_pasars->foto = $request->file('foto')->getClientOriginalName();
        }

        $data_pasars->namapasar = $request->namapasar;
        $data_pasars->alamat = $request->alamat;
        $data_pasars->save();
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
        $data_pasars = Pasar::find($id);
        Storage::delete('pasar/' . $data_pasars->foto);
        $data_pasars->delete();
        return back();
    }
}
