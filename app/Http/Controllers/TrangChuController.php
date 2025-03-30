<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;

class TrangChuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sanphams = Sanpham::inRandomOrder()->take(6)->get();

        return view('trangchu', compact('sanphams'));
    }
}
