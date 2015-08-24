<div class="row">
    <div class="col-sm-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Tambah PO Detail</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form method="POST" role="form" name="user-form">
                {!! csrf_field() !!}
                <div class="box-body">
                    <input type="hidden" name="id_po" value="{{ $id_po }}">
                    <div class="row">
                        <div class="col-xs-6">
                            <select class="form-control" name="produk">
                                @foreach ($produk as $motor)
                                <option value="{{ $motor->id_produk }}">{{ $motor->tipe.$motor->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xs-6">
                            <input type="number" min="0" class="form-control" placeholder="Jumlah" name="jumlah" required>
                        </div>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="button" class="btn btn-primary">Tambah Produk</button>
                    <button type="button" class="btn btn-primary" onclick="save_po_detail('{{ url('pembelian/add-po-detail') }}')">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</div><!-- /.box -->
<script>
            //    function tbh_produk() {
            //        $('.box-body').append($('row'))
            //    }
</script>
