<div class="row">
    <div class="col-sm-10">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Tambah PO</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form method="POST" role="form" name="user-form">
                {!! csrf_field() !!}
                <input type="hidden" name="id_po" value="{{ $id_po }}">
                       <div class="box-body">
                    <div class="row">
                        <div class="col-xs-4">
                            <select class="form-control" name="produk">
                                @foreach ($produk as $motor)
                                <option value="{{ $motor->id_produk }}">{{ $motor->tipe.$motor->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xs-4">
                            <input type="number" class="form-control" placeholder="Jumlah" name="jumlah" min="0">
                        </div>
                        <div class="col-xs-4">
                            <input type="date" class="form-control" placeholder="Tanggal Terima" name="tgl_terima">
                        </div>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <!--<button type="button" class="btn btn-primary">Tambah Produk</button>-->
                    <button type="button" class="btn btn-primary" onclick="save_penerimaan('{{ url('pembelian/add-penerimaan') }}')">Simpan</button>
                </div>
            </form>
        </div><!-- /.box -->
    </div>
    <script>
                //    function tbh_produk() {
                //        $('.box-body').append($('row'))
                //    }
    </script>
