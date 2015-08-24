<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">PO List</h3>
                <div class="box-tools pull-right">
                    <a href="#" onclick="load_content('{{ url('pembelian/add-po') }}', 'PO')"><span class="glyphicon glyphicon-plus"></span></a>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                @if (! is_null($module))


                @endif

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No PO</th>
                            <th>Tanggal PO</th>
                            <th>Suplier</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($beli_po as $po)
                        <tr>
                            <td><a href="#" onclick="load_content('{{ url('pembelian/list-po-detail/'.$po->id_po) }}', 'PO Detail')">{{ $po->no_po }}</a></td>
                            <td>{{ $po->tgl_po }}</td>
                            <td>{{ $po->supplier }}</td>
                            <td>{{ $po->keterangan }}</td>
                            <td>
                                @if (! is_null($module))
                                <a href="#" onclick="load_content('{{ url('pembelian/add-penerimaan/'.$po->id_po) }}', 'Penerimaan')"><span class="glyphicon glyphicon-plus-sign"></span></a>
                                @else
                                <a href="#" onclick="load_content('{{ url('pembelian/edit-po/'.$po->id_po) }}', 'PO')"><span class="glyphicon glyphicon-edit"></span></a> |
                                <a href="#" onclick="load_content('{{ url('pembelian/add-po-detail/'.$po->id_po) }}', 'PO Detail')"><span class="glyphicon glyphicon-plus"></span></a>
                                @endif                               
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No PO</th>
                            <th>Tanggal PO</th>
                            <th>Suplier</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>