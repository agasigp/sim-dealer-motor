<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pengeluaran;
use App\Models\Pengeluaran_Detail;
use App\Models\Produk;
use App\Models\Stok;

class PenjualanController extends Controller
{

    public function getList()
    {
        $penjualans = Pengeluaran::all();

        return view('app.penjualanlist', ['penjualans' => $penjualans]);
    }

    public function getAdd()
    {
        $motor = Produk::all();
        return view('app.penjualanadd', ['motors' => $motor]);
    }

    public function postAdd(Request $request)
    {
        \DB::transaction(function($request) use ($request) {
            $penjualan             = new Pengeluaran;
            $penjualan->no_nota    = $request->input('no_nota');
            $penjualan->no_faktur  = $request->input('no_faktur');
            $penjualan->no_ktp     = $request->input('no_ktp');
            $penjualan->nama       = $request->input('nama');
            $penjualan->alamat     = $request->input('alamat');
            $penjualan->tgl_beli   = $request->input('tgl_beli');
            $penjualan->pembayaran = $request->input('cara_bayar');
            $penjualan->tenor      = $request->input('tenor');
            $penjualan->uang_muka  = $request->input('uang_muka');
            $penjualan->user_id    = $request->user()->id_users;
            $penjualan->save();

            $penjualan_detail                 = new Pengeluaran_Detail;
            $penjualan_detail->id_pengeluaran = $penjualan->id_pengeluaran;
            $penjualan_detail->id_produk      = $request->input('motor');
            $penjualan_detail->no_seri        = $request->input('no_seri');
            $penjualan_detail->no_rangka      = $request->input('no_rangka');
            $penjualan_detail->no_mesin       = $request->input('no_mesin');
            $penjualan_detail->plat           = $request->input('plat');
            $penjualan_detail->nama_bpkb      = $request->input('nama_bpkb');
            $penjualan_detail->alamat_bpkb    = $request->input('alamat_bpkb');
            $penjualan_detail->penerima_bpkb  = $request->input('penerima_bpkb');
            $penjualan_detail->diskon         = $request->input('diskon');
            $penjualan_detail->save();

            $motor       = Produk::find($request->input('motor'));
            $motor->stok = $motor->stok - 1;
            $motor->save();

            $stok                        = new Stok;
            $stok->id_pengeluaran_detail = $penjualan_detail->id_pengeluaran_detail;
            $stok->jumlah                = 1;
            $stok->stok                  = $motor->stok;
            $stok->save();
        });

        return "success!";
    }

    public function getEdit($id)
    {
        $penjualan = Pengeluaran::find($id);

        return view('app.penjualanedit', ['penjualan' => $penjualan]);
    }

    public function postEdit(Request $request)
    {
        $penjualan            = Pengeluaran::find($request->input('id'));
        $penjualan->penjualan = $request->input('penjualan');
        $penjualan->save();

        return "Success";
    }

    public function getCetakNota($id)
    {
        $penjualan = \DB::table('pengeluaran AS p')
            ->join('pengeluaran_detail AS pd', 'p.id_pengeluaran', '=',
                'pd.id_pengeluaran')
            ->join('produk AS motor', 'pd.id_produk', '=', 'motor.id_produk')
            ->join('warna AS w', 'motor.id_warna', '=', 'w.id_warna')
            ->select('p.nama AS pembeli', 'p.no_nota', 'p.alamat', 'p.tgl_beli',
                'pd.diskon', 'motor.tipe', 'motor.nama AS nama_motor',
                'w.warna', 'motor.harga_jual')
            ->where('p.id_pengeluaran', '=', $id)
            ->first();

        return view('app.cetaknotapenjualan', ['penjualan' => $penjualan]);
    }

    public function getLaporan($bulan = null, $tahun = null)
    {
        if (is_null($bulan)) {
            $bulan = date('n');
        }

        if (is_null($tahun)) {
            $tahun = date('Y');
        }

        $penjualans = \DB::table('produk AS p')
            ->join('warna AS w', 'w.id_warna', '=', 'p.id_warna')
            ->leftJoin('pengeluaran_detail AS pd', 'pd.id_produk', '=',
                'p.id_produk')
            ->join('pengeluaran AS pg', 'pg.id_pengeluaran', '=',
                'pd.id_pengeluaran')
            ->select(\DB::raw('DISTINCT (@id_produk := p.id_produk) AS id_produk,  p.tipe, p.nama, w.warna,
	(SELECT COUNT(pengeluaran_detail.id_produk) FROM pengeluaran_detail WHERE pengeluaran_detail.id_produk = @id_produk) AS count'))
            ->whereRaw('MONTH(pg.tgl_beli) = ?', [$bulan])
            ->whereRaw('YEAR(pg.tgl_beli) = ?', [$tahun])
            ->get();

        return view('app.laporanpenjualan',
            ['penjualans' => $penjualans,
            'bulan' => $bulan,
            'tahun' => $tahun]);
    }

    public function getDetailLaporan($id, $bulan, $tahun)
    {
        $laporans = \DB::table('pengeluaran_detail AS pd')
            ->join('produk AS prd', 'prd.id_produk', '=', 'pd.id_produk')
            ->join('warna AS w', 'prd.id_warna', '=', 'w.id_warna')
            ->join('pengeluaran AS png', 'png.id_pengeluaran', '=', 'pd.id_pengeluaran')
            ->join('users AS u', 'u.id_users', '=', 'pd.id_users')
            ->select('u.name', 'prd.tipe', 'prd.nama AS motor', 'w.warna', 'png.nama', 'png.tgl_beli')
            ->whereRaw('MONTH(png.tgl_beli) = ?', [$bulan])
            ->whereRaw('YEAR(png.tgl_beli) = ?', [$tahun])
            ->where('prd.id_produk', '=', $id)
            ->get();

        return view('app.laporanpenjualandetail',
            ['laporans' => $laporans,
            'bulan' => $bulan,
            'tahun' => $tahun
        ]);
    }

    public function getPenjualanByUser($id, $bulan, $tahun)
    {
        $laporans = \DB::table('pengeluaran_detail AS pd')
            ->join('produk AS prd', 'prd.id_produk', '=', 'pd.id_produk')
            ->join('warna AS w', 'prd.id_warna', '=', 'w.id_warna')
            ->join('pengeluaran AS png', 'png.id_pengeluaran', '=', 'pd.id_pengeluaran')
            ->select('prd.tipe', 'prd.nama AS motor', 'w.warna', 'png.nama', 'png.tgl_beli')
            ->whereRaw('MONTH(png.tgl_beli) = ?', [$bulan])
            ->whereRaw('YEAR(png.tgl_beli) = ?', [$tahun])
            ->where('pd.id_users', '=', $id)
            ->get();

        return view('app.laporanpenjualandetail2',
            ['laporans' => $laporans,
            'bulan' => $bulan,
            'tahun' => $tahun
        ]);
    }

    public function getCetakLaporan($bulan = null, $tahun = null)
    {
        if (is_null($bulan)) {
            $bulan = date('n');
        }

        if (is_null($tahun)) {
            $tahun = date('Y');
        }

        $penjualans = \DB::table('produk AS p')
            ->join('warna AS w', 'w.id_warna', '=', 'p.id_warna')
            ->leftJoin('pengeluaran_detail AS pd', 'pd.id_produk', '=',
                'p.id_produk')
            ->join('pengeluaran AS pg', 'pg.id_pengeluaran', '=',
                'pd.id_pengeluaran')
            ->select(\DB::raw('DISTINCT (@id_produk := p.id_produk) AS id_produk, p.tipe, p.nama, w.warna,
	(SELECT COUNT(pengeluaran_detail.id_produk) FROM pengeluaran_detail WHERE pengeluaran_detail.id_produk = @id_produk) AS count'))
            ->whereRaw('MONTH(pg.tgl_beli) = ?', [$bulan])
            ->whereRaw('YEAR(pg.tgl_beli) = ?', [$tahun])
            ->get();

        return view('app.cetaklaporanpenjualan',
            ['penjualans' => $penjualans,
            'bulan' => $bulan,
            'tahun' => $tahun]);
    }
}
