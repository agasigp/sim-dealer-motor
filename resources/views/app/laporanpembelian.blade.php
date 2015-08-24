<?php // dd($date1);  ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">PO List</h3>
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
                    <button type="button" class="btn btn-default" onclick="load_laporan_pembelian('{{ url('pembelian/laporan/') }}', 'Laporan Penerimaan');">Tampilkan</button>
                    <button type="button" class="btn btn-default" id="btn-cetak"><a href="{{ url('pembelian/cetak-laporan/'.$date1.'/'.$date2) }}" target="_blank">Cetak</a></button>
                </form>
                <table id="example1" class="table table-bordered table-striped">
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
                            <td><a href="#" onclick="load_content('{{ url('pembelian/list-po-detail/'.$po->id_po) }}', 'PO Detail')">{{ $po->no_po }}</a></td>
                            <td>{{ $po->tgl_po }}</td>
                            <td>{{ $po->supplier }}</td>
                            <td>{{ $po->keterangan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No PO</th>
                            <th>Tanggal PO</th>
                            <th>Suplier</th>
                            <th>Keterangan</th>
                        </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
