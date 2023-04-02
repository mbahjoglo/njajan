<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index($slug)
    {
        return view('search', [
            'pasar' => Pasar::all(),
            'datamakanans' => DB::table('makanan')->join('pasar', 'makanan.id_pasar', '=', 'pasar.id_pasar')
                ->join('penjual', 'makanan.penjual', '=', 'penjual.id_penjual')
                ->where('slug', $slug)->get(),
            'slug' => $slug
        ]);
    }
    public function search(Request $request)
    {
        return view('search', [
            'pasar' => Pasar::all(),
            'datamakanans' => DB::table('makanan')->join('pasar', 'makanan.id_pasar', '=', 'pasar.id_pasar')
                ->join('penjual', 'makanan.penjual', '=', 'penjual.id_penjual')
                ->where('namamakanan', 'like', "%" . $request->cari . "%")->get(),
        ]);
    }
}
