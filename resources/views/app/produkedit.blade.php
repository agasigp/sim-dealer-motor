<div class="row">
    <div class="col-sm-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Produk</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form method="POST" role="form" name="user-form">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{ $produk->id_produk }}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="tipe">Tipe</label>
                        <input type="text" name="tipe" class="form-control" value="{{ $produk->tipe }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Nama Produk</label>
                        <input type="text" name="nama" class="form-control" value="{{ $produk->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="warna">Warna</label>
                        <select class="form-control" name="warna">
                            @foreach ($warnas as $warna)
                            <option value="{{ $warna->id_warna }}">{{ $warna->warna }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" value="{{ $produk->harga }}">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" name="stok" class="form-control" value="{{ $produk->stok }}">
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="button" class="btn btn-primary" onclick="edit_produk('{{ url('produk/edit') }}')">Simpan</button>
                </div>
            </form>
        </div><!-- /.box -->
    </div>
</div>