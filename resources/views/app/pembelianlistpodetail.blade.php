<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">PO No List Detail</h3>
                <div class="box-tools pull-right">
                    <a href="#" onclick="load_content('{{ url('pembelian/add-po') }}', 'PO')"><span class="glyphicon glyphicon-plus"></span></a>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Harga Beli</th>
                            <th>Jumlah</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sum = 0;
                            $qty = 0;
                        ?>
                        @foreach ($po_detail as $po)
                        <tr>
                            <td>{{ $po->nama." ".$po->tipe }}</td>
                            <td>{{ $po->harga_beli }}</td>
                            <td>{{ $po->kuantitas }}</td>
                            <td>{{ $po->harga_beli * $po->kuantitas }}</td>
                            <?php 
                                $qty += $po->kuantitas;
                                $sum += $po->harga_beli * $po->kuantitas;
                            ?>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="2">Total</td>
                            <td>{{ $qty }}</td>
                            <td>{{ $sum }}</td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>