<?php
$bln = ["Januari", "Februari", "Maret", "April",
    "Mei", "Juni", "Juli", "Agustus", "September", "Oktober",
    "November", "Desember"];

function buatrp($angka)
{
    $jadi = "Rp ".number_format($angka, 2, ',', '.');
    return $jadi;
}
?>
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
                    <h4 style="text-align: center">SLIP GAJI</h4>
                    <h4 style="text-align: center">TUNAS JAYA MOTOR</h4>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-6">
                    Nama : {{ $gaji->name }}<br>
                    Jabatan : {{ $gaji->group }}<br>
                    Periode : {{ $bln[$bulan - 1]." ".$tahun }}<br>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12">
                    <table class="table table-bordered table-condensed">
                        <tbody>
                            <tr>
                                <td>Gaji Pokok : </td>
                                <td></td>
                                <td style="text-align: right">{{ buatrp($gaji->gaji_pokok) }}</td>
                            </tr>
                            <tr>
                                <td>Hasil Penjualan :</td>
                                <td style="text-align: right">{{ $gaji->penjualan }} unit X {{ buatrp(150000) }} = </td>
                                <td style="text-align: right">{{ buatrp($gaji->penjualan * 150000) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Total/Take Home Pay</td>
                                <td style="text-align: right">{{ buatrp(($gaji->penjualan * 150000) + $gaji->gaji_pokok) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12">
                    <table style="width: 100%">
                        <tr>
                            <td></td>
                            <td style="text-align: right">{{ date('j')." ".$bln[$bulan - 1]." ".date('Y') }}</td>
                        </tr>
                        <tr>
                            <td>Disetujui Oleh:</td>
                            <td style="text-align: right">Diterima Oleh</td>
                        </tr>
                        <tr>
                            <td><br><br><br></td>
                            <td><br><br><br></td>
                        </tr>
                        <tr>
                            <td>(..................)</td>
                            <td style="text-align: right">(..................)</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
