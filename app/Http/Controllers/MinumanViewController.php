<?php

namespace App\Http\Controllers;

use App\Models\Minuman;
use App\Models\Penjual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function GuzzleHttp\Promise\all;

class MinumanViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjual = Penjual::all();
        $dataminumans = DB::table('minuman')->join('penjual', 'minuman.penjual', '=', 'penjual.id_penjual')->get();
        return view('admin/pages-menu-minuman', compact('dataminumans', 'penjual'));
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
    public function update(Request $request, $id_minuman)
    {
        $dataminumans = Minuman::find($id_minuman);

        if ($request->fotominuman == '') {
            // $data_makanans->fotominuman = $request->fotolama;
        } else {
            $fotominuman = $request->file('fotominuman')->getClientOriginalName();
            $request->file('fotominuman')->storeAs('minuman', $fotominuman);
            Storage::delete('minuman/' . $request->fotolama);
            $dataminumans->fotominuman = $request->file('fotominuman')->getClientOriginalName();
        }

        $dataminumans->namaminuman = $request->namaminuman;
        $dataminumans->harga = $request->harga;
        $dataminumans->save();
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
        $data_minumans = Minuman::find($id);
        Storage::delete('minuman/' . $data_minumans->fotominuman);
        $data_minumans->delete();
        return back();
    }
}
