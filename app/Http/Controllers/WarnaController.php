<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Warna;

class WarnaController extends Controller {

    public function getList()
    {
        $warnas = Warna::all();

        return view('app.warnalist', ['warnas' => $warnas]);
    }

    public function getAdd()
    {
        return view('app.warnaadd');
    }

    public function postAdd(Request $request)
    {
        $warna         = new Warna;
        $warna->warna  = $request->input('warna');
        $warna->save();

        return "success!";
    }

    public function getEdit($id)
    {
        $warna = Warna::find($id);

        return view('app.warnaedit', ['warna' => $warna]);
    }

    public function postEdit(Request $request)
    {
        $warna         = Warna::find($request->input('id'));
        $warna->warna  = $request->input('warna');
        $warna->save();

        return "Success";
    }
}