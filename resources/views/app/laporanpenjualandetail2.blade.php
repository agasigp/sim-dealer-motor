<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Penjualan Detail</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form class="form-inline">
                    <div class="form-group">
                        <label for="exampleInputName2">Bulan</label>
                        <select name="bulan" class="form-control">
                            <?php
                            $bln      = ["Januari", "Februari", "Maret", "April",
                                "Mei", "Juni", "Juli", "Agustus", "September", "Oktober",
                                "November", "Desember"];
                            $jml_bln  = count($bln);
                            ?>
                            @for ($a = 0; $a < $jml_bln; $a+=1)
                            <?php
                            if ($a + 1 == $bulan) {
                                $selected = "selected=\"selected\"";
                            } else {
                                $selected = "";
                            }
                            ?>
                            <option value="{{ $a+1 }}" {{ $selected }}>{{ $bln[$a] }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Tahun</label>
                        <input type="text" name="tahun" class="form-control" value="{{ $tahun }}">
                    </div>
                </form>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Motor</th>
                            <th>Warna</th>
                            <th>Pembeli</th>
                            <th>Tanngal Pembelian</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($laporans as $laporan)
                        <tr>
                            <td>{{ $laporan->motor." ".$laporan->tipe }}</td>
                            <td>{{ $laporan->warna }}</td>
                            <td>{{ $laporan->nama }}</td>
                            <td>{{ $laporan->tgl_beli }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Motor</th>
                            <th>Warna</th>
                            <th>Pembeli</th>
                            <th>Tanngal Pembelian</th>
                        </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
