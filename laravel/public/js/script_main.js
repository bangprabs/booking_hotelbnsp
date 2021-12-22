$(document).ready(function () {
    var date_input = $('input[name="date"]');
    var container =
        $(".bootstrap-iso form").length > 0
            ? $(".bootstrap-iso form").parent()
            : "body";
    var options = {
        format: "dd/mm/yyyy",
        container: container,
        todayHighlight: true,
        autoclose: true,
    };
    date_input.datepicker(options);
});

$(document).ready(function () {
    $("#tipeKamar").change(function () {
        var tipeKamar = $(this).val();
        if (tipeKamar == "Kamar Standard") {
            $("#hargaKamar").val("320000");
        } else if (tipeKamar == "Kamar Deluxe") {
            $("#hargaKamar").val("850000");
        } else if (tipeKamar == "Kamar Family") {
            $("#hargaKamar").val("1250000");
        } else if (tipeKamar == "") {
            $("#hargaKamar").val("Harga Kamar");
        }
    });
});

$(document).ready(function () {
    // show the alert
    setTimeout(function () {
        $(".alert").alert("close");
    }, 2000);
});

$("#formPesanKamar").validate({
    rules: {
        nama: {
            required: true,
        },
        nomor_identitas: {
            required: true,
            minlength: 16,
        },
        durasi_menginap: {
            required: true,
            digits: true,
        },
        nomor_identitas: {
            required: true,
            minlength: 16,
        },
        jenis_kelamin: {
            required: true,
        },
    },
    messages: {
        nama: {
            required: "Harap input Nama",
        },
        nomor_identitas: {
            required: "Harap Masukkan Nomor Identitas",
            minlength: "Nomor Identitas Harus setidaknya 16 Digit",
        },
        jenis_kelamin: {
            required: "Harap Pilih jenis kelamin",
        },
        durasi_menginap: {
            required: "Harap masukkan durasi menginap",
            digits: "Harap masukkan angka",
        },
    },
});
