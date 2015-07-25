<div class="row">
    <div class="col-sm-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Tambah Supplier</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form method="POST" role="form" name="user-form">
                {!! csrf_field() !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Nama Supplier</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}">
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="button" class="btn btn-primary" onclick="save_supplier('{{ url('supplier/add') }}')">Simpan</button>
                </div>
            </form>
        </div><!-- /.box -->
    </div>
</div>