<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Warna List</h3>
                <div class="box-tools pull-right">
                    <a href="#" onclick="load_content('{{ url('warna/add') }}', 'warna')"><span class="glyphicon glyphicon-plus"></span></a>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Warna</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($warnas as $warna)
                        <tr>
                            <td>{{ $warna->warna }}</td>
                            <td>
                                <a href="#" onclick="load_content('{{ url('warna/edit/'.$warna->id_warna) }}', 'warna')"><span class="glyphicon glyphicon-edit"></span></a> |
                                <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Warna</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>

<script type="text/javascript">
$(function () {
    $("#example1").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": true
    });
});
</script>