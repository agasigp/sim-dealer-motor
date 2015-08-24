@section('sidebar')
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">Menu Utama</li>
                <!-- Optionally, you can add icons to the links -->
<!--                <li class="active"><a href="#"><i class='fa fa-link'></i> <span>Link</span></a></li>
                <li><a href="#"><i class='fa fa-link'></i> <span>Another Link</span></a></li>-->
                @if (\Auth::user()->group == "admin")
                <li class="treeview">
                    <a href="#"><i class='fa fa-link'></i> <span>Data Master</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#" onclick="load_content('{{ url('user/list') }}', 'User')">User</a></li>
                        <li><a href="#" onclick="load_content('{{ url('supplier/list') }}', 'Supplier')">Supplier</a></li>
                        <li><a href="#" onclick="load_content('{{ url('warna/list') }}', 'Warna')">Warna</a></li>
                        <li><a href="#" onclick="load_content('{{ url('produk/list') }}', 'Produk')">Produk</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><i class='fa fa-link'></i> <span>Pembelian</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#" onclick="load_content('{{ url('pembelian/list-po') }}', 'PO')">PO</a></li>
                        <li><a href="#" onclick="load_content('{{ url('pembelian/list-po/penerimaan') }}', 'Penerimaan')">Penerimaan</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><i class='fa fa-link'></i> <span>Penjualan</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#" onclick="load_content('{{ url('penjualan/list') }}', 'PO')">Penjualan</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><i class='fa fa-link'></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#" onclick="load_content('{{ url('pembelian/laporan') }}', 'Laporan Penerimaan')">Laporan Pembelian</a></li>
                        <li><a href="#" onclick="load_content('{{ url('penjualan/laporan') }}', 'Laporan Penjualan')">Laporan Penjualan</a></li>
                        <li><a href="#" onclick="load_content('{{ url('laporan/laporan-stok') }}', 'Laporan Penjualan')">Laporan Stok</a></li>
                        <li><a href="#" onclick="load_content('{{ url('laporan/laporan-gaji') }}', 'Laporan Penjualan')">Laporan Penggajian</a></li>
                    </ul>
                </li>
                @elseif (\Auth::user()->group == "sales")
                <li class="treeview">
                    <a href="#"><i class='fa fa-link'></i> <span>Penjualan</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#" onclick="load_content('{{ url('penjualan/list') }}', 'PO')">Penjualan</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><i class='fa fa-link'></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#" onclick="load_content('{{ url('pembelian/laporan') }}', 'Laporan Penerimaan')">Laporan Pembelian</a></li>
                        <li><a href="#" onclick="load_content('{{ url('penjualan/laporan') }}', 'Laporan Penjualan')">Laporan Penjualan</a></li>
                        <li><a href="#" onclick="load_content('{{ url('laporan/laporan-stok') }}', 'Laporan Penjualan')">Laporan Stok</a></li>
                        <li><a href="#" onclick="load_content('{{ url('laporan/laporan-gaji') }}', 'Laporan Penjualan')">Laporan Penggajian</a></li>
                    </ul>
                </li>
                @else
                <li class="treeview">
                    <a href="#"><i class='fa fa-link'></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#" onclick="load_content('{{ url('pembelian/laporan') }}', 'Laporan Penerimaan')">Laporan Pembelian</a></li>
                        <li><a href="#" onclick="load_content('{{ url('penjualan/laporan') }}', 'Laporan Penjualan')">Laporan Penjualan</a></li>
                        <li><a href="#" onclick="load_content('{{ url('laporan/laporan-stok') }}', 'Laporan Penjualan')">Laporan Stok</a></li>
                        <li><a href="#" onclick="load_content('{{ url('laporan/laporan-gaji') }}', 'Laporan Penggajian')">Laporan Penggajian</a></li>
                    </ul>
                </li>
                @endif
                
                
            </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
@endsection
