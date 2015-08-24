function load_content(url, title) {
    $(document).ajaxStart(function () {
        $('#wait').css('display', 'block');
    });

    $(document).ajaxComplete(function () {
        $('#wait').css('display', 'none');
    });

    $('#page-header').text(title);
    $('.content').load(url);
}

function load_laporan_penjualan(url, title) {
    var bulan = $('select[name="bulan"]').val(),
        tahun = $('input[name="tahun"]').val();
    
    $(document).ajaxStart(function () {
        $('#wait').css('display', 'block');
    });

    $(document).ajaxComplete(function () {
        $('#wait').css('display', 'none');
    });

    $('#page-header').text(title);
    $('.content').load(url + '/' + bulan + '/' + tahun);
}

function load_laporan_pembelian(url, title) {
    var date1 = $('input[name="date1"]').val(),
        date2 = $('input[name="date2"]').val();
    
    $(document).ajaxStart(function () {
        $('#wait').css('display', 'block');
    });

    $(document).ajaxComplete(function () {
        $('#wait').css('display', 'none');
    });

    $('#page-header').text(title);
    $('.content').load(url + '/' + date1 + '/' + date2);
}

function load_laporan_penggajian(url, title) {
    var bulan = $('select[name="bulan"]').val(),
        tahun = $('input[name="tahun"]').val();
    
    $(document).ajaxStart(function () {
        $('#wait').css('display', 'block');
    });

    $(document).ajaxComplete(function () {
        $('#wait').css('display', 'none');
    });

    $('#page-header').text(title);
    $('.content').load(url + '/' + bulan + '/' + tahun);
}

function save_user(url) {
    $(document).ajaxStart(function () {
        $('#wait').css('display', 'block');
    });

    $(document).ajaxComplete(function () {
        $('#wait').css('display', 'none');
    });

    $.post(url, {
        name: $('input[name="name"]').val(),
        email: $('input[name="email"]').val(),
        group: $('select[name="group"]').val(),
        gaji_pokok: $('input[name="gaji_pokok"]').val(),
        password: $('input[name="password"]').val(),
        _token: $('input[name="_token"]').val()
    }, function (formData) {
        // place success code here
        var succes = "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                "Data berhasil disimpan!</div>";

        console.log(formData);
        $('input[name="name"]').val('');
        $('input[name="email"]').val('');
        $('input[name="gaji_pokok"]').val('');
        $('input[name="password"]').val('');
        $('.box-primary').append(succes);
    })
            .fail(function (data) {
                // place error code here
                var succes = "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                        "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                        "<strong>Error!</strong> Data tidak berhasil disimpan.</div>";
                console.log(data);
                $('.box-primary').append(succes);
            });
}

function edit_user(url) {
    $(document).ajaxStart(function () {
        $('#wait').css('display', 'block');
    });

    $(document).ajaxComplete(function () {
        $('#wait').css('display', 'none');
    });

    $.post(url, {
        id: $('input[name="id"]').val(),
        name: $('input[name="name"]').val(),
        email: $('input[name="email"]').val(),
        group: $('select[name="group"]').val(),
        gaji_pokok: $('input[name="gaji_pokok"]').val(),
        password: $('input[name="password"]').val(),
        _token: $('input[name="_token"]').val()
    }, function (formData) {
        // place success code here
        var succes = "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                "Data berhasil disimpan!</div>";

        console.log(formData);
        $('.box-primary').append(succes);
    })
            .fail(function (data) {
                // place error code here
                var succes = "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                        "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                        "<strong>Error!</strong> Data tidak berhasil disimpan.</div>";
                console.log(data);
                $('.box-primary').append(succes);
            });
}

function save_supplier(url) {
    $(document).ajaxStart(function () {
        $('#wait').css('display', 'block');
    });

    $(document).ajaxComplete(function () {
        $('#wait').css('display', 'none');
    });

    $.post(url, {
        supplier: $('input[name="nama"]').val(),
        alamat: $('input[name="alamat"]').val(),
        _token: $('input[name="_token"]').val()
    }, function (formData) {
        // place success code here
        var succes = "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                "Data berhasil disimpan!</div>";

        console.log(formData);
        $('input[name="nama"]').val('');
        $('input[name="alamat"]').val('');
        $('.box-primary').append(succes);
    })
            .fail(function (data) {
                // place error code here
                var succes = "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                        "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                        "<strong>Error!</strong> Data tidak berhasil disimpan.</div>";
                console.log(data);
                $('.box-primary').append(succes);
            });
}

function edit_supplier(url) {
    $(document).ajaxStart(function () {
        $('#wait').css('display', 'block');
    });

    $(document).ajaxComplete(function () {
        $('#wait').css('display', 'none');
    });

    $.post(url, {
        id: $('input[name="id"]').val(),
        supplier: $('input[name="nama"]').val(),
        alamat: $('input[name="alamat"]').val(),
        _token: $('input[name="_token"]').val()
    }, function (formData) {
        // place success code here
        var succes = "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                "Data berhasil disimpan!</div>";

        console.log(formData);
        $('.box-primary').append(succes);
    })
            .fail(function (data) {
                // place error code here
                var succes = "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                        "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                        "<strong>Error!</strong> Data tidak berhasil disimpan.</div>";
                console.log(data);
                $('.box-primary').append(succes);
            });
}

function save_warna(url) {
    $(document).ajaxStart(function () {
        $('#wait').css('display', 'block');
    });

    $(document).ajaxComplete(function () {
        $('#wait').css('display', 'none');
    });

    $.post(url, {
        warna: $('input[name="warna"]').val(),
        _token: $('input[name="_token"]').val()
    }, function (formData) {
        // place success code here
        var succes = "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                "Data berhasil disimpan!</div>";

        console.log(formData);
        $('input[name="warna"]').val('');
        $('.box-primary').append(succes);
    })
            .fail(function (data) {
                // place error code here
                var succes = "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                        "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                        "<strong>Error!</strong> Data tidak berhasil disimpan.</div>";
                console.log(data);
                $('.box-primary').append(succes);
            });
}

function edit_warna(url) {
    $(document).ajaxStart(function () {
        $('#wait').css('display', 'block');
    });

    $(document).ajaxComplete(function () {
        $('#wait').css('display', 'none');
    });

    $.post(url, {
        id: $('input[name="id"]').val(),
        warna: $('input[name="warna"]').val(),
        _token: $('input[name="_token"]').val()
    }, function (formData) {
        // place success code here
        var succes = "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                "Data berhasil disimpan!</div>";

        console.log(formData);
        $('.box-primary').append(succes);
    })
            .fail(function (data) {
                // place error code here
                var succes = "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                        "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                        "<strong>Error!</strong> Data tidak berhasil disimpan.</div>";
                console.log(data);
                $('.box-primary').append(succes);
            });
}

function save_produk(url) {
    $(document).ajaxStart(function () {
        $('#wait').css('display', 'block');
    });

    $(document).ajaxComplete(function () {
        $('#wait').css('display', 'none');
    });

    $.post(url, {
        tipe: $('input[name="tipe"]').val(),
        warna: $('select[name="warna"]').val(),
        nama: $('input[name="nama"]').val(),
        harga_beli: $('input[name="harga_beli"]').val(),
        harga_jual: $('input[name="harga_jual"]').val(),
        stok: $('input[name="stok"]').val(),
        _token: $('input[name="_token"]').val()
    }, function (formData) {
        // place success code here
        var succes = "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                "Data berhasil disimpan!</div>";

        console.log(formData);
        $('input[name="tipe"]').val();
        $('input[name="nama"]').val();
        $('input[name="harga"]').val();
        $('input[name="stok"]').val();
        $('.box-primary').append(succes);
    })
            .fail(function (data) {
                // place error code here
                var succes = "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                        "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                        "<strong>Error!</strong> Data tidak berhasil disimpan.</div>";
                console.log(data);
                $('.box-primary').append(succes);
            });
}

function edit_produk(url) {
    $(document).ajaxStart(function () {
        $('#wait').css('display', 'block');
    });

    $(document).ajaxComplete(function () {
        $('#wait').css('display', 'none');
    });

    $.post(url, {
        id: $('input[name="id"]').val(),
        tipe: $('input[name="tipe"]').val(),
        warna: $('select[name="warna"]').val(),
        nama: $('input[name="nama"]').val(),
        harga_beli: $('input[name="harga_beli"]').val(),
        harga_jual: $('input[name="harga_jual"]').val(),
        stok: $('input[name="stok"]').val(),
        _token: $('input[name="_token"]').val()
    }, function (formData) {
        // place success code here
        var succes = "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                "Data berhasil disimpan!</div>";

        console.log(formData);
        $('input[name="tipe"]').val('');
        $('input[name="nama"]').val('');
        $('input[name="harga"]').val('');
        $('input[name="stok"]').val('');
        $('.box-primary').append(succes);
    })
            .fail(function (data) {
                // place error code here
                var succes = "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                        "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                        "<strong>Error!</strong> Data tidak berhasil disimpan.</div>";
                console.log(data);
                $('.box-primary').append(succes);
            });
}

function save_po(url) {
    $(document).ajaxStart(function () {
        $('#wait').css('display', 'block');
    });

    $(document).ajaxComplete(function () {
        $('#wait').css('display', 'none');
    });

    $.post(url, {
        no_po: $('input[name="no_po"]').val(),
        tgl_po: $('input[name="tgl_po"]').val(),
        supplier: $('select[name="supplier"]').val(),
        keterangan: $('input[name="keterangan"]').val(),
        _token: $('input[name="_token"]').val()
    }, function (formData) {
        // place success code here
        var succes = "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                "Data berhasil disimpan!</div>";

        $('input[name="no_po"]').val('');
        $('input[name="tgl_po"]').val('');
        $('input[name="supplier"]').val('');
        $('input[name="keterangan"]').val('');
        $('.box-primary').append(succes);
    })
            .fail(function (data) {
                // place error code here
                var succes = "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                        "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                        "<strong>Error!</strong> Data tidak berhasil disimpan.</div>";
                console.log(data);
                $('.box-primary').append(succes);
            });
}

function edit_po(url) {
    $(document).ajaxStart(function () {
        $('#wait').css('display', 'block');
    });

    $(document).ajaxComplete(function () {
        $('#wait').css('display', 'none');
    });

    $.post(url, {
        id_po: $('input[name="id_po"]').val(),
        no_po: $('input[name="no_po"]').val(),
        tgl_po: $('input[name="tgl_po"]').val(),
        supplier: $('select[name="supplier"]').val(),
        keterangan: $('input[name="keterangan"]').val(),
        _token: $('input[name="_token"]').val()
    }, function (formData) {
        // place success code here
        var succes = "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                "Data berhasil disimpan!</div>";

        console.log(formData);
        $('input[name="tipe"]').val('');
        $('input[name="nama"]').val('');
        $('input[name="harga"]').val('');
        $('input[name="stok"]').val('');
        $('.box-primary').append(succes);
    })
            .fail(function (data) {
                // place error code here
                var succes = "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                        "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                        "<strong>Error!</strong> Data tidak berhasil disimpan.</div>";
                console.log(data);
                $('.box-primary').append(succes);
            });
}

function save_po_detail(url) {
    $(document).ajaxStart(function () {
        $('#wait').css('display', 'block');
    });

    $(document).ajaxComplete(function () {
        $('#wait').css('display', 'none');
    });

    $.post(url, {
        id_po: $('input[name="id_po"]').val(),
        produk: $('select[name="produk"]').val(),
        jumlah: $('input[name="jumlah"]').val(),
        _token: $('input[name="_token"]').val()
    }, function (formData) {
        // place success code here
        var succes = "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                "Data berhasil disimpan!</div>";

        $('input[name="jumlah"]').val('');
        $('.box-primary').append(succes);
    })
            .fail(function (data) {
                // place error code here
                var succes = "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                        "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                        "<strong>Error!</strong> Data tidak berhasil disimpan.</div>";
                console.log(data);
                $('.box-primary').append(succes);
            });
}

function save_penerimaan(url) {
    $(document).ajaxStart(function () {
        $('#wait').css('display', 'block');
    });

    $(document).ajaxComplete(function () {
        $('#wait').css('display', 'none');
    });

    $.post(url, {
        id_po: $('input[name="id_po"]').val(),
        produk: $('select[name="produk"]').val(),
        jumlah: $('input[name="jumlah"]').val(),
        tgl_terima: $('input[name="tgl_terima"]').val(),
        _token: $('input[name="_token"]').val()
    }, function (formData) {
        // place success code here
        var succes = "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                "Data berhasil disimpan!</div>";

        $('input[name="jumlah"]').val('');
        $('input[name="tgl_terima"]').val('');
        $('.box-primary').append(succes);
    })
            .fail(function (data) {
                // place error code here
                var succes = "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                        "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                        "<strong>Error!</strong> Data tidak berhasil disimpan.</div>";
                console.log(data);
                $('.box-primary').append(succes);
            });
}

function save_pengeluaran(url) {
    $(document).ajaxStart(function () {
        $('#wait').css('display', 'block');
    });

    $(document).ajaxComplete(function () {
        $('#wait').css('display', 'none');
    });

    $.post(url, {
        no_nota: $('input[name="no_nota"]').val(),
        no_faktur: $('input[name="no_faktur"]').val(),
        no_ktp: $('input[name="no_ktp"]').val(),
        nama: $('input[name="nama"]').val(),
        alamat: $('input[name="alamat"]').val(),
        tgl_beli: $('input[name="tgl_beli"]').val(),
        cara_bayar: $('select[name="pembayaran"]').val(),
        uang_muka: $('input[name="uang_muka"]').val(),
        tenor: $('input[name="tenor"]').val(),
        diskon: $('input[name="diskon"]').val(),
        motor: $('select[name="motor"]').val(),
        no_seri: $('input[name="no_seri"]').val(),
        no_rangka: $('input[name="no_rangka"]').val(),
        no_mesin: $('input[name="no_mesin"]').val(),
        plat: $('input[name="plat"]').val(),
        nama_bpkb: $('input[name="nama_bpkb"]').val(),
        alamat_bpkb: $('input[name="alamat_bpkb"]').val(),
        penerima_bpkb: $('input[name="penerima_bpkb"]').val(),
        _token: $('input[name="_token"]').val()
    }, function (formData) {
        // place success code here
        var succes = "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                "Data berhasil disimpan!</div>";

        $('input[name="jumlah"]').val('');
        $('input[name="tgl_terima"]').val('');
        $('.box-primary').append(succes);
    })
            .fail(function (data) {
                // place error code here
                var succes = "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"" +
                        "aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>" +
                        "<strong>Error!</strong> Data tidak berhasil disimpan.</div>";
                console.log(data);
                $('.box-primary').append(succes);
            });
}
