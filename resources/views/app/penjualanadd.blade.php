<form method="POST" role="form" name="user-form">
    {!! csrf_field() !!}
    <div class="row">
        <div class="col-sm-10">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Input Penjualan</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#identitas" aria-controls="identitas" role="tab" data-toggle="tab">Identitas</a></li>
                        <li role="presentation"><a href="#produk" aria-controls="produk" role="tab" data-toggle="tab">Produk</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active fade in" id="identitas">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label for="tipe" class="col-sm-2">No.Nota</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="no_nota" class="form-control" value="{{ old('no_nota') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2">No. Faktur</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="no_faktur" class="form-control" value="{{ old('no_faktur') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2">No. KTP</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="no_ktp" class="form-control" value="{{ old('no_ktp') }}" min="0" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2">Tanggal Beli</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tgl_beli" class="form-control" value="{{ old('tgl_beli') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2">Cara Bayar</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="pembayaran">
                                            <option value="C">Cash</option>
                                            <option value="K">Kredit</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2">Uang Muka</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="uang_muka" class="form-control" value="{{ old('uang_muka') }}" min="0" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2">Tenor</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="tenor" class="form-control" value="{{ old('tenor') }}" min="0" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2">Diskon</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="diskon" class="form-control" value="{{ old('diskon') }}" min="0" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="produk">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label for="tipe" class="col-sm-2">Tipe Kendaraan</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="motor">
                                            <option value="0">-- Pilih Motor --</option>
                                            @foreach ($motors as $motor)
                                            <option value="{{ $motor->id_produk }}">{{ $motor->tipe." ".$motor->nama." ".$motor->warna }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!--                                <div class="form-group">
                                                                    <label for="email" class="col-sm-2">Harga</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="harga" class="form-control" value="0" readonly>
                                                                    </div>
                                                                </div>-->
                                <div class="form-group">
                                    <label for="email" class="col-sm-2">No. Seri</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="no_seri" class="form-control" value="{{ old('no_seri') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2">No. Rangka</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="no_rangka" class="form-control" value="{{ old('no_rangka') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2">No. Mesin</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="no_mesin" class="form-control" value="{{ old('no_mesin') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2">Plat</label>
                                    <div class="col-sm-10">
                                        <label class="radio-inline">
                                            <input type="radio" name="plat" value="H"> Hitam
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="plat" value="M"> Merah
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2">Nama BPKB</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_bpkb" class="form-control" value="{{ old('nama_bpkb') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2">Alamat BPKB</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="alamat_bpkb" class="form-control" value="{{ old('alamat_bpkb') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2">Penerima BPKB</label>
                                    <div class="col-sm-10">
                                        <label class="radio-inline">
                                            <input type="radio" name="penerima_bpkb" value="1"> Pembeli
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="penerima_bpkb" value="2"> AN. BPKB
                                        </label>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="button" class="btn btn-primary" onclick="save_pengeluaran('{{ url('penjualan/add') }}')">Simpan</button>
                </div>
            </div><!-- /.box -->
        </div>
    </div>
</form>

<!--<script>
    $('select[name="motor"]').change(function () {
        var motor = $('select[name="motor"]').val();
        
        loo
        if (motor == 1) {
            $('input[name="harga"]').val('{{ $motors[0]->id_produk }}')
        }
        else if () {
            $('input[name="harga"]').val('{{ $motors[0]->id_produk }}')
        }
    });
</script>-->
