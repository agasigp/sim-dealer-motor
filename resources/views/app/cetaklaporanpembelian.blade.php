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
                    <h4 style="text-align: center">Laporan Pembelian</h4>
                    <h4 style="text-align: center">Periode {{ $date1 }} - {{ $date2 }}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <table class="table table-bordered table-condensed">
                        <thead>
                            <tr>
                                <th>No PO</th>
                                <th>Tanggal PO</th>
                                <th>Suplier</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($beli_po as $po)
                            <tr>
                                <td>{{ $po->no_po }}</td>
                                <td>{{ $po->tgl_po }}</td>
                                <td>{{ $po->supplier }}</td>
                                <td>{{ $po->keterangan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
