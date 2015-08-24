<div class="row">
    <div class="col-sm-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Tambah PO</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form method="POST" role="form" name="user-form">
                {!! csrf_field() !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="tipe">No PO</label>
                        <input type="text" name="no_po" class="form-control" value="{{ old('no_po') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tgl_po">Tanggal PO</label>
                        <input type="date" name="tgl_po" class="form-control" value="{{ old('tgl_po') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="supplier">Supplier</label>
                        <select class="form-control" name="supplier">
                            @foreach ($suppliers as $supplier)
                            <option value="{{ $supplier->id_supplier }}">{{ $supplier->supplier }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" value="{{ old('keterangan') }}">
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="button" class="btn btn-primary" onclick="save_po('{{ url('pembelian/add-po') }}')">Simpan</button>
                </div>
            </form>
        </div><!-- /.box -->
    </div>
</div>
