<div class="row">
    <div class="col-sm-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Supplier</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form method="POST" role="form" name="user-form">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{ $supplier->id_supplier }}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Nama Supplier</label>
                        <input type="text" name="nama" class="form-control" value="{{ $supplier->supplier }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{ $supplier->alamat }}">
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="button" class="btn btn-primary" onclick="edit_supplier('{{ url('supplier/edit') }}')">Simpan</button>
                </div>
            </form>
        </div><!-- /.box -->
    </div>
</div>