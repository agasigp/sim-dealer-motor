<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Purchase_Order;
use App\Models\Purchase_Order_Detail;
use App\Models\Supplier;
use App\Models\Produk;
use App\Models\Penerimaan;
use App\Models\Stok;

class PembelianController extends Controller
{

    public function getListPo($module = null)
    {
        $beli_po = \DB::table('purchase_order as po')
            ->join('supplier as sp', 'sp.id_supplier', '=', 'po.id_supplier')
            ->select('po.id_po', 'sp.supplier', 'po.no_po', 'po.tgl_po',
                'po.keterangan')
            ->get();

        return view('app.pembelianlistpo',
            ['beli_po' => $beli_po, 'module' => $module]);
    }

    public function getAddPo()
    {
        $suppliers = Supplier::all();

        return view('app.pembelianaddpo', ['suppliers' => $suppliers]);
    }

    public function postAddPo(Request $request)
    {
        $pembelian = new Purchase_Order;

        $pembelian->no_po       = $request->input('no_po');
        $pembelian->tgl_po      = $request->input('tgl_po');
        $pembelian->id_supplier = $request->input('supplier');
        $pembelian->keterangan  = $request->input('keterangan');
        $pembelian->id_user     = $request->user()->id_users;
        $pembelian->save();

        return "success!";
    }

    public function getEditPo($id)
    {
        $po        = Purchase_Order::find($id);
        $suppliers = Supplier::all();

        return view('app.pembelianeditpo',
            ['po' => $po, 'suppliers' => $suppliers]);
    }

    public function postEditPo(Request $request)
    {
        $pembelian              = Purchase_Order::find($request->input('id_po'));
        $pembelian->no_po       = $request->input('no_po');
        $pembelian->tgl_po      = $request->input('tgl_po');
        $pembelian->id_supplier = $request->input('supplier');
        $pembelian->keterangan  = $request->input('keterangan');
        $pembelian->id_user     = $request->user()->id_users;
        $pembelian->save();

        return "Success";
    }

    public function getAddPoDetail($id)
    {
        $produk = Produk::all();

        return view('app.pembelianaddpodetail',
            ['produk' => $produk, 'id_po' => $id]);
    }

    public function postAddPoDetail(Request $request)
    {
        \DB::transaction(function ($request) use ($request) {
            $po_detail            = new Purchase_Order_Detail;
            $po_detail->id_po     = $request->input('id_po');
            $po_detail->id_produk = $request->input('produk');
            $po_detail->kuantitas = $request->input('jumlah');
            $po_detail->save();

            $motor       = Produk::find($request->input('produk'));
            $motor->stok = $motor->stok + $request->input('jumlah');
            $motor->save();
        });

        return "Success!";
    }

    public function getListPoDetail($id, $module = null)
    {
        $po_detail = \DB::table('purchase_order_detail AS po_detail')
            ->join('purchase_order AS po', 'po.id_po', '=', 'po_detail.id_po')
            ->join('produk AS p', 'p.id_produk', '=', 'po_detail.id_produk')
            ->select('p.nama', 'p.tipe', 'po_detail.kuantitas', 'p.harga_beli')
            ->where('po_detail.id_po', '=', $id)
            ->get();

        return view('app.pembelianlistpodetail',
            ['po_detail' => $po_detail, 'module' => $module]);
    }

    public function getAddPenerimaan($id)
    {
        $produk = Produk::all();

        return view('app.pembelianaddpenerimaan',
            ['produk' => $produk, 'id_po' => $id]);
    }

    public function postAddPenerimaan(Request $request)
    {
        \DB::transaction(function ($request) use ($request) {
            $penerimaan             = new Penerimaan;
            $penerimaan->id_po      = $request->input('id_po');
            $penerimaan->id_produk  = $request->input('produk');
            $penerimaan->kuantitas  = $request->input('jumlah');
            $penerimaan->tgl_terima = $request->input('tgl_terima');
            $penerimaan->id_user    = $request->user()->id_users;
            $penerimaan->save();

            $produk = Produk::find($request->input('produk'));
            $produk->stok += $request->input('jumlah');
            $produk->save();

            $stok                = new Stok;
            $stok->id_penerimaan = $penerimaan->id_penerimaan;
            $stok->jumlah        = $request->input('jumlah');
            $stok->stok          = $produk->stok;
            $stok->save();
        });

        return "Success!";
    }

    public function getLaporan($date1 = null, $date2 = null)
    {

        if (is_null($date1) || is_null($date2)) {
            $date1 = date('Y-m-01');
            $date2 = date('Y-m-31');
        }

        $beli_po = \DB::table('purchase_order as po')
            ->join('supplier as sp', 'sp.id_supplier', '=', 'po.id_supplier')
            ->select('po.id_po', 'sp.supplier', 'po.no_po', 'po.tgl_po',
                'po.keterangan')
            ->whereBetween('po.tgl_po', [$date1, $date2])
            ->get();

        return view('app.laporanpembelian',
            ['beli_po' => $beli_po,
            'date1' => $date1,
            'date2' => $date2]);
    }

    public function getCetakLaporan($date1 = null, $date2 = null)
    {
        if (is_null($date1) || is_null($date2)) {
            $date1 = date('Y-m-d');
            $date2 = date('Y-m-d');
        }

        $beli_po = \DB::table('purchase_order as po')
            ->join('supplier as sp', 'sp.id_supplier', '=', 'po.id_supplier')
            ->select('po.id_po', 'sp.supplier', 'po.no_po', 'po.tgl_po',
                'po.keterangan')
            ->whereBetween('po.tgl_po', [$date1, $date2])
            ->get();

        return view('app.cetaklaporanpembelian',
            ['beli_po' => $beli_po,
            'date1' => $date1,
            'date2' => $date2]);
    }
}
