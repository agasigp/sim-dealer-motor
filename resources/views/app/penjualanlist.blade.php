<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Penjualan List</h3>
                <div class="box-tools pull-right">
                    <a href="#" onclick="load_content('{{ url('penjualan/add') }}', 'Penjualan')"><span class="glyphicon glyphicon-plus"></span></a>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No. Nota</th>
                            <th>No. Faktur</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tanggal Beli</th>
                            <th>Pembayaran</th>
                            <th>Uang Muka</th>
                            <th>Tenor</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penjualans as $penjualan)
                        <tr>
                            <td>{{ $penjualan->no_nota }}</td>
                            <td>{{ $penjualan->no_faktur }}</td>
                            <td>{{ $penjualan->nama }}</td>
                            <td>{{ $penjualan->alamat }}</td>
                            <td>{{ $penjualan->tgl_beli }}</td>
                            <td>
                                @if ($penjualan->pembayaran == 'C')
                                Cash
                                @else
                                Kredit
                                @endif
                            </td>
                            <td>{{ $penjualan->uang_muka }}</td>
                            <td>{{ $penjualan->tenor }}</td>
                            <td>
                                <a href="{{ url('penjualan/cetak-nota/'.$penjualan->id_pengeluaran) }}" target="_blank"><span class="glyphicon glyphicon-print"></span></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No. Nota</th>
                            <th>No. Faktur</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tanggal Beli</th>
                            <th>Pembayaran</th>
                            <th>Uang Muka</th>
                            <th>Tenor</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $("#example1").dataTable();
        
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": true
        });
    });
</script>