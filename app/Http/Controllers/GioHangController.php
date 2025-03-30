<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;
use Cart;


class GioHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coTheBanSeThich = Sanpham::coTheBanSeThich()->get();
        return view('giohang')->with('coTheBanSeThich', $coTheBanSeThich);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cart::add($request->masp, $request->tensp, 1, $request->giasp)
                ->associate(sanpham::class);
        return redirect()->route('giohang.index')->with('success_message', 'Da them mon do vao gio hang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cart::remove($id);

        return back()->with('success_message', 'Xoa thanh cong');
    }
}
