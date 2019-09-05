$(document).ready(function(){
    // Alert sliding
    $('div.alert').not('.alert-important').delay(5000).slideUp(300);

    // Hapus select dengan empty value dari URL.
    $("#form-pencarian").submit(function(){
        $("#id_dosen option[value='']")
        .attr("disabled", "disabled");
        $("#prodi option[value='']")
        .attr("disabled", "disabled");

        // Pastikan proses submit masih diturunkan.
        return true;
    })
});
