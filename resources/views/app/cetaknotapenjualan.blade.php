<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"/>
        <title>Print Laporan</title>
    </head>
    <body onload="window.print()">
        <div class="container">
            <div class="row">
                <div class="col-xs-3">
                    <img src="{{ asset('dist/img/tunasjaya.jpg') }}">
                </div>
                <div class="col-xs-9">
                    <h2 style="text-align: center">Nota Penjualan</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    Nama : Tunas Jaya Motor<br>
                    Alamat : Jl. Mojali Yogyakarta <br>
                </div>
                <div class="col-xs-6">
                    Tanggal : {{ $penjualan->tgl_beli }} <br>
                    No. Nota : {{ $penjualan->no_nota }} <br>
                    Pembeli : {{ $penjualan->pembeli }} <br>
                    Alamat : {{ $penjualan->alamat }} <br>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12">
                    <table class="table table-bordered table-condensed">
                        <thead>
                            <tr>
                                <th style="text-align: center">Unit</th>
                                <th style="text-align: center">Type</th>
                                <th style="text-align: center">Harga / Unit</th>
                                <th style="text-align: center">Jumlah</th>
                            </tr>
                        </thead>
                        <?php
                        function buatrp($angka) {
                            $jadi = "Rp ".number_format($angka, 2, ',', '.');
                            return $jadi;
                        }
                        ?>
                        <tbody>
                            <tr>
                                <td style="text-align: center">1</td>
                                <td style="text-align: center">{{ $penjualan->nama_motor." ".$penjualan->tipe." ".$penjualan->warna }}</td>
                                <td style="text-align: center">{{ buatrp($penjualan->harga_jual) }}</td>
                                <td style="text-align: right">{{ buatrp($penjualan->harga_jual) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td style="text-align: center">Diskon</td>
                                <td style="text-align: right">{{ buatrp($penjualan->diskon) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td style="text-align: center">Total</td>
                                <td style="text-align: right">{{ buatrp($penjualan->harga_jual - $penjualan->diskon) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    Keterangan : <br>
                    Harga sudah termasuk jaket & helm
                </div>
                <div class="col-xs-6">
                    <table style="width: 100%">
                        <tr>
                            <td>Pembuat</td>
                            <td>Mengetahui</td>
                        </tr>
                        <tr>
                            <td><br><br><br></td>
                            <td><br><br><br></td>
                        </tr>
                        <tr>
                            <td>(..................)</td>
                            <td>(..................)</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
