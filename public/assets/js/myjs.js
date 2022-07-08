// mengambil table dengan data yang lengkap
function getTable(url){
    $.ajax({
        url: url,
        type: 'post',
        dataType: 'json',
        success: function (data){
            $("#table").html(data)
            // console.log(data)
        }
    });
}

// menampilkan form tamah / Ubah
function tampilForm(classCardForm){
    $("." + classCardForm).slideToggle()
    $('.bg-blur').fadeToggle()
    $(".judulForm").text('Tambah Staff')
}

// reset password
function resetErrors(){
    $('input').removeClass('is-invalid')
    $('textarea').removeClass('is-invalid')
    $('select').removeClass('is-invalid')
}

// menghilangkan form tamah / Ubah
function hilangForm(classCardForm){
    resetErrors()
    $('input').val('')
    $('textarea').val('')
    $("." + classCardForm).slideToggle()
    $('.bg-blur').fadeToggle()
}

// menampilkan button untuk menampilkan form ubah
function formEdit(){
    $(".opsiEdit").toggle()
}

// menampilkan form Ubah
function tampilFormEdit(url, classCardForm, idForm){
    $("#id").val(idForm)
    $(".judulForm").text('Edit Staff')
    $("." + classCardForm).slideToggle()
    $('.bg-blur').fadeToggle()

    $.ajax({
        url: url,
        type: 'post',
        dataType: 'json',
        success: function(data){
            // console.log(data)
            $("#nama").val(data.nama)
            $("#kota").val(data.kota)
            $("#devisi").val(data.devisi)
            $("#alamat").val(data.alamat)
        }
    });
}

// menampilkan button Hapus
function formHapus(){
    $(".opsiHapus").toggle()
}

// menghapus staff
function hapusStaff(url, linkTable){
    Swal.fire({
        icon: 'question',
        title: 'Hapus?',
        text: 'Yakin Untuk Menghapus staff?',
        showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: 'Hapus',
        // denyButtonText: `Don't save`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                url: url,
                type: 'post',
                dataType: 'json',
                success: function(data){
                    console.log(data)
                    if(data.status == 200){
                        Swal.fire(
                            'Berhasil',
                            data.pesan,
                            'success'
                          )
                          getTable(linkTable)
                    }
                }
            });
        }
      })
}

// menyimpan data dari form tambah dan ubah
function simpanStaff(url, classForm){
    Swal.fire({
        icon: 'question',
        title: 'Konfirmasi?',
        text: 'Sudah yakin dengan data staff?',
        showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: 'Konfirmasi',
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                url: url,
                type: 'post',
                data: $("." + classForm).serialize(),
                dataType: 'json',
                success: function (data){
                    console.log(data)                    
                    if(data.status == 200){
                          Swal.fire('Berhasil', data.pesan, 'success')
                          getTable(`Home/getTable`)
                          hilangForm('Form')
                          resetErrors()
                    }
                    if(data.status == 500){
                        Swal.fire({
                            icon: 'error',
                            title: 'Errors!!',
                            text: 'Terdapat Kesalahan dalam pengisian form'
                        })
                        if(data.pesan.nama){
                            $("#nama").addClass('is-invalid')
                            $('.invalid-nama').text(data.pesan.nama)
                        }
                        if(data.pesan.kota){
                            $("#kota").addClass('is-invalid')
                            $('.invalid-kota').text(data.pesan.kota)
                        }
                        if(data.pesan.devisi){
                            $("#devisi").addClass('is-invalid')
                            $('.invalid-devisi').text(data.pesan.devisi)
                        }
                        if(data.pesan.alamat){
                            $("#alamat").addClass('is-invalid')
                            $('.invalid-alamat').text(data.pesan.alamat)
                        }
                    }
                }
            });
        } else if (result.isDenied) {
          Swal.fire('Changes are not saved', '', 'info')
        }
      })
}

// menampilkan pilihan filter
function tampilFilter(classInputFilter){
    $('.' + classInputFilter).toggle()
}

// mencari staff berdasarkan devisi tertentu
function cariDevisi(url){
    // console.log(url, id)
    $.ajax({
        url: url,
        type: 'post',
        dataType: 'json',
        success: function(data){
            // console.log(data)
            $("#table").html(data)
        }
    });
}