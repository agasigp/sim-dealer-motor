<div class="row">
    <div class="col-sm-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit PO</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form method="POST" role="form" name="user-form">
                {!! csrf_field() !!}
                <input type="hidden" name="id_po" value="{{ $po->id_po }}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="tipe">No PO</label>
                        <input type="text" name="no_po" class="form-control" value="{{ $po->no_po }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tgl_po">Tanggal PO</label>
                        <input type="date" name="tgl_po" class="form-control" value="{{ $po->tgl_po }}" required>
                    </div>
                    <div class="form-group">
                        <label for="supplier">Supplier</label>
                        <select class="form-control" name="supplier">
                            @foreach ($suppliers as $supplier)
                                <?php
                                    $selected = "";
                                    if ($supplier->id_supplier == $po->id_supplier) {
                                        $selected = "selected=\"selected\"";
                                    }
                                ?>
                            <option value="{{ $supplier->id_supplier }}" {{ $selected}} >{{ $supplier->supplier }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" value="{{ $po->keterangan }}">
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="button" class="btn btn-primary" onclick="edit_po('{{ url('pembelian/edit-po') }}')">Simpan</button>
                </div>
            </form>
        </div><!-- /.box -->
    </div>
</div>
