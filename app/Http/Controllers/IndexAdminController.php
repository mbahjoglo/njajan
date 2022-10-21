<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Makanan;
use App\Models\Minuman;
use App\Models\Pasar;
use App\Models\Penjual;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Home::all();
        $data_pasars = Pasar::all();
        $data_makanans = Makanan::all();
        $data_minumans = Minuman::all();
        $hitungmakanans = Makanan::count();
        $hitungminumans = Minuman::count();
        $hitungpenjuals = Penjual::count();
        $hitungpasars = Pasar::count();
        $hitungtestimonis = Testimoni::count();
        $datamakanans = DB::table('makanan')->join('penjual', 'makanan.penjual', '=', 'penjual.id_penjual')->get();
        $dataminumans = DB::table('minuman')->join('penjual', 'minuman.penjual', '=', 'penjual.id_penjual')->get();
        return view('admin/index', compact('homes', 'hitungmakanans', 'hitungminumans', 'hitungpenjuals', 'hitungpasars', 'data_pasars', 'hitungtestimonis', 'data_makanans', 'data_minumans', 'datamakanans', 'dataminumans'));
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
