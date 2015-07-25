<div class="row">
    <div class="col-sm-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Tambah Produk</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form method="POST" role="form" name="user-form">
                {!! csrf_field() !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="tipe">Tipe</label>
                        <input type="text" name="tipe" class="form-control" value="{{ old('tipe') }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Nama Produk</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                    </div>
                    <div class="form-group">
                        <label for="warna">Warna</label>
                        <select class="form-control" name="warna">
                            @foreach ($warnas as $warna)
                                <option value="{{ $warna->id }}">{{ $warna->warna }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" value="{{ old('harga') }}">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" name="stok" class="form-control" value="{{ old('stok') }}">
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="button" class="btn btn-primary" onclick="save_produk('{{ url('produk/add') }}')">Simpan</button>
                </div>
            </form>
        </div><!-- /.box -->
    </div>
</div>