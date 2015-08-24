<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LaporanController extends Controller
{

    public function getLaporanGaji($bulan = null, $tahun = null)
    {
        if (is_null($bulan)) {
            $bulan = date('n');
        }

        if (is_null($tahun)) {
            $tahun = date('Y');
        }

        $lap_gaji = \DB::select('SELECT (@id_users := us.id_users) AS id_users, us.name, us.`group`, us.gaji_pokok,
        (SELECT
        COUNT(pd.id_users) FROM pengeluaran_detail pd
        JOIN pengeluaran p ON p.id_pengeluaran = pd.id_pengeluaran
        WHERE pd.id_users = @id_users AND
        MONTH(p.tgl_beli) = ? AND
        YEAR(p.tgl_beli) = ?)
        AS total_jual FROM `users` AS `us`', [$bulan, $tahun]);

        return view('app.laporangaji',
            ['lap_gaji' => $lap_gaji, 'bulan' => $bulan, 'tahun' => $tahun]);
    }

    public function getCetakSlipGaji($id, $bulan, $tahun)
    {
        $gaji = \DB::table('users AS u')
            ->join('pengeluaran_detail AS pd', 'pd.id_users', '=', 'u.id_users')
            ->select(\DB::raw('COUNT(pd.id_users) AS penjualan, u.name, u.`group`, u.gaji_pokok'))
            ->where('u.id_users', '=', $id)
            ->first();

        return view('app.cetakslipgaji',
            ['gaji' => $gaji, 'bulan' => $bulan, 'tahun' => $tahun]);
    }

    public function getLaporanStok($date1 = null, $date2 = null)
    {
        if (is_null($date1)) {
            $date1 = date('Y-m-01');
        }

        if (is_null($date2)) {
            $date2 = date('Y-m-31');
        }

        $lap_stok = \DB::select('SELECT DISTINCT (@id_produk := p.id_produk) AS id_produk, p.tipe, p.nama, w.warna,p.stok,
            (SELECT SUM(penerimaan.kuantitas)
            FROM penerimaan WHERE penerimaan.id_produk = @id_produk
            AND penerimaan.tgl_terima BETWEEN ? AND ?)
            AS terima,
            (SELECT COUNT(pengeluaran_detail.id_produk)
            FROM pengeluaran_detail JOIN pengeluaran ON pengeluaran.id_pengeluaran = pengeluaran_detail.id_pengeluaran
            WHERE pengeluaran_detail.id_produk = @id_produk
            AND pengeluaran.tgl_beli BETWEEN ? AND ?)
            AS keluar
            FROM produk p
            JOIN warna w ON p.id_warna = w.id_warna
            LEFT JOIN pengeluaran_detail pd ON p.id_produk = pd.id_produk
            LEFT JOIN pengeluaran pg ON pg.id_pengeluaran = pd.id_pengeluaran',
                [$date1, $date2, $date1, $date2]);

        return view('app.laporanstok',
            ['lap_stok' => $lap_stok, 'date1' => $date1, 'date2' => $date2]);
    }

    public function getCetakLaporanStok($date1 = null, $date2 = null)
    {
        if (is_null($date1)) {
            $date1 = date('Y-m-01');
        }

        if (is_null($date2)) {
            $date2 = date('Y-m-31');
        }

        $lap_stok = \DB::select('SELECT DISTINCT (@id_produk := p.id_produk) AS id_produk, p.tipe, p.nama, w.warna,p.stok,
            (SELECT SUM(penerimaan.kuantitas)
            FROM penerimaan WHERE penerimaan.id_produk = @id_produk
            AND penerimaan.tgl_terima BETWEEN ? AND ?)
            AS terima,
            (SELECT COUNT(pengeluaran_detail.id_produk)
            FROM pengeluaran_detail JOIN pengeluaran ON pengeluaran.id_pengeluaran = pengeluaran_detail.id_pengeluaran
            WHERE pengeluaran_detail.id_produk = @id_produk
            AND pengeluaran.tgl_beli BETWEEN ? AND ?)
            AS keluar
            FROM produk p
            JOIN warna w ON p.id_warna = w.id_warna
            LEFT JOIN pengeluaran_detail pd ON p.id_produk = pd.id_produk
            LEFT JOIN pengeluaran pg ON pg.id_pengeluaran = pd.id_pengeluaran',
                [$date1, $date2, $date1, $date2]);

        return view('app.cetaklaporanstok',
            ['lap_stok' => $lap_stok, 'date1' => $date1, 'date2' => $date2]);
    }
}
