<?php // dd($lap_stok);  ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laporan Stok</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form class="form-inline">
                    <div class="form-group">
                        <label for="exampleInputName2">Tanggal 1</label>
                        <input type="date" name="date1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Tanggal 2</label>
                        <input type="date" name="date2" class="form-control">
                    </div>
                    <button type="button" class="btn btn-default" onclick="load_laporan_pembelian('{{ url('laporan/laporan-stok') }}', 'Laporan Penerimaan');">Tampilkan</button>
                    <button type="button" class="btn btn-default" id="btn-cetak"><a href="{{ url('laporan/cetak-laporan-stok/'.$date1.'/'.$date2) }}" target="_blank">Cetak</a></button>
                </form>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Motor</th>
                            <th>Warna</th>
                            <th>Penerimaan</th>
                            <th>Pengeluaran</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lap_stok as $stok)
                        <tr>
                            <td>{{ $stok->tipe." ".$stok->nama }}</td>
                            <td>{{ $stok->warna }}</td>
                            <td>
                                @if (is_null($stok->terima))
                                0
                                @else
                                {{ $stok->terima }}
                                @endif
                            </td>
                            <td>{{ $stok->keluar }}</td>
                            <td>{{ $stok->stok }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Motor</th>
                            <th>Warna</th>
                            <th>Penerimaan</th>
                            <th>Pengeluaran</th>
                            <th>Stok</th>
                        </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
