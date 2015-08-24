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
        <title>Print Penjualan</title>
    </head>
    <body onload="window.print()">
        <div class="container">
            <div class="row">
                <div class="col-xs-3">
                    <img src="{{ asset('dist/img/tunasjaya.jpg') }}">
                </div>
                <div class="col-xs-9">
                    <h4 style="text-align: center">Laporan Penjualan</h4>
                    <?php
                    $bln = ["Januari", "Februari", "Maret", "April",
                        "Mei", "Juni", "Juli", "Agustus", "September", "Oktober",
                        "November", "Desember"];
                    ?>
                    <h4 style="text-align: center">Periode {{ $bln[$bulan - 1]." ".$tahun }}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <table class="table table-bordered table-condensed">
                        <thead>
                            <tr>
                                <th>Motor</th>
                                <th>Warna</th>
                                <th>Unit Terjual</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penjualans as $penjualan)
                            <tr>
                                <td>{{ $penjualan->nama." ".$penjualan->tipe }}</td>
                                <td>{{ $penjualan->warna }}</td>
                                <td>{{ $penjualan->count }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
