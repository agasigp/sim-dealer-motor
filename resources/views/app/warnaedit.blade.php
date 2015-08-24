<div class="row">
    <div class="col-sm-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Warna</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form method="POST" role="form" name="user-form">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{ $warna->id_warna }}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Nama Warna</label>
                        <input type="text" name="warna" class="form-control" value="{{ $warna->warna }}" required>
                    </div>

                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="button" class="btn btn-primary" onclick="edit_warna('{{ url('warna/edit') }}')">Simpan</button>
                </div>
            </form>
        </div><!-- /.box -->
    </div>
</div>
