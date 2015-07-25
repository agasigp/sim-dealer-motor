<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Supplier;

class SupplierController extends Controller {

    public function getList()
    {
        $suppliers = Supplier::all();

        return view('app.supplierlist', ['suppliers' => $suppliers]);
    }

    public function getAdd()
    {
        return view('app.supplieradd');
    }

    public function postAdd(Request $request)
    {
        $supplier           = new Supplier;
        $supplier->supplier = $request->input('supplier');
        $supplier->alamat   = $request->input('alamat');
        $supplier->save();

        return "success!";
    }

    public function getEdit($id)
    {
        $supplier = Supplier::find($id);

        return view('app.supplieredit', ['supplier' => $supplier]);
    }

    public function postEdit(Request $request)
    {
        $supplier           = Supplier::find($request->input('id'));
        $supplier->supplier = $request->input('supplier');
        $supplier->alamat   = $request->input('alamat');
        $supplier->save();

        return "Success";
    }
}