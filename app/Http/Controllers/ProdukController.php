<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Warna;

class ProdukController extends Controller {

    public function getList()
    {
        $produks = Produk::all();

        return view('app.produklist', ['produks' => $produks]);
    }

    public function getAdd()
    {
        $warnas = Warna::all();

        return view('app.produkadd', ['warnas' => $warnas]);
    }

    public function postAdd(Request $request)
    {
        $produk           = new Produk;
        $produk->id_warna = $request->input('warna');
        $produk->tipe     = $request->input('tipe');
        $produk->nama     = $request->input('nama');
        $produk->harga    = $request->input('harga');
        $produk->stok     = $request->input('stok');
//        dd($request->input('warna'));
        $produk->save();

        return "success!";
    }

    public function getEdit($id)
    {
        $warnas = Warna::all();
        $produk = Produk::find($id);

        return view('app.produkedit', ['produk' => $produk, 'warnas' => $warnas]);
    }

    public function postEdit(Request $request)
    {
        $produk           = Produk::find($request->input('id'));
        $produk->id_warna = $request->input('warna');
        $produk->tipe     = $request->input('tipe');
        $produk->nama     = $request->input('nama');
        $produk->harga    = $request->input('harga');
        $produk->stok     = $request->input('stok');
        $produk->save();

        return "Success";
    }
}