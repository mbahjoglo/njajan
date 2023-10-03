<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Makanan;
use App\Models\Minuman;
use App\Models\Pasar;
use App\Models\Penjual;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class ViewAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view_abouts = About::all();
        $testimonis = Testimoni::all();
        $hitungmakanans = Makanan::count();
        $hitungminumans = Minuman::count();
        $hitungpenjuals = Penjual::count();
        $hitungpasars = Pasar::count();
        $hitungulasans = Testimoni::count();
        return view('about', compact('view_abouts', 'testimonis', 'hitungmakanans', 'hitungminumans', 'hitungpenjuals', 'hitungpasars', 'hitungulasans'));
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
}
