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
                        <input type="text" name="tipe" class="form-control" value="{{ $produk->tipe }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Nama Produk</label>
                        <input type="text" name="nama" class="form-control" value="{{ $produk->nama }}" required>
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
                        <label for="harga">Harga Beli</label>
                        <input type="number" name="harga_beli" class="form-control" value="{{ $produk->harga_beli }}" min="0" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Jual</label>
                        <input type="number" name="harga_jual" class="form-control" value="{{ $produk->harga_jual }}" min="0" required>
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" name="stok" class="form-control" value="{{ $produk->stok }}" min="0" required>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="button" class="btn btn-primary" onclick="edit_produk('{{ url('produk/edit') }}')">Simpan</button>
                </div>
            </form>
        </div><!-- /.box -->
    </div>
</div>
