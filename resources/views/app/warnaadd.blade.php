<div class="row">
    <div class="col-sm-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Tambah Warna</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form method="POST" role="form" name="user-form">
                {!! csrf_field() !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="warna">Warna</label>
                        <input type="text" name="warna" class="form-control" value="{{ old('warna') }}">
                    </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="button" class="btn btn-primary" onclick="save_warna('{{ url('warna/add') }}')">Simpan</button>
                    </div>
                </div><!-- /.box -->
            </form>

        </div>
    </div>
</div>