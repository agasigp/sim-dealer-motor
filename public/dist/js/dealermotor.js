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
        harga: $('input[name="harga"]').val(),
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
        harga: $('input[name="harga"]').val(),
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