<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laporan Penggajian</h3>
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
                    <button type="button" class="btn btn-default" onclick="load_laporan_penjualan('{{ url('laporan/laporan-gaji/') }}', 'Laporan Penggajian');">Tampilkan</button>
                </form>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jabatan</th>     
                            <th>Gaji Pokok</th>
                            <th>Total Penjualan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lap_gaji as $gaji)
                        <tr>
                            <td>{{ $gaji->name }}</td>
                            <td>{{ $gaji->group }}</td>
                            <td>{{ $gaji->gaji_pokok }}</td>
                            <td>
                                <a href="#" onclick="load_content('{{ url('penjualan/penjualan-by-user/'.$gaji->id_users.'/'.$bulan.'/'.$tahun) }}')">{{ $gaji->total_jual }}</a>
                            </td>
                            <td><a href="{{ url('laporan/cetak-slip-gaji/'.$gaji->id_users.'/'.$bulan.'/'.$tahun) }}" target="_blank"><span class="glyphicon glyphicon-print"></span></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Gaji Pokok</th>
                            <th>Total Penjualan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
