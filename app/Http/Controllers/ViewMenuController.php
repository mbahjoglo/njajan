<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\Pasar;
use App\Models\Penjual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datamakanans = Makanan::join('penjual', 'makanan.penjual', '=', 'penjual.id_penjual');
        if (request('search')) {
            $datamakanans->where('namamakanan', 'like', '%' . request('search') . '%');
        }
        $dataminumans = DB::table('minuman')->join('penjual', 'minuman.penjual', '=', 'penjual.id_penjual')->get();
        return view('menu', [
            'datamakanans' => $datamakanans->get(),
            'pasar' => Pasar::all(),
            'penjual' =>  Penjual::all(),
            'dataminumans' => $dataminumans
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
