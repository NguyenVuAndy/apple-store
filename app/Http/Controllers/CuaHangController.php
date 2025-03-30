<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;

class CuaHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sanphams = Sanpham::inRandomOrder()->take(6)->get();

        return view('cuahang', compact('sanphams'));
    }

    public function show($slug)
    {
        $sanpham = Sanpham::where('slug', $slug)->firstOrFail();
        $coTheBanSeThich = Sanpham::where('slug', '!=', $slug)->coTheBanSeThich()->get();

        return view('sanpham')->with([
                'sanpham'=> $sanpham,
                'coTheBanSeThich'=> $coTheBanSeThich,
            ]);
    }
}
