function showEditForm(id) {
    // Dapatkan data dari PHP berdasarkan ID
    var nama = "Contoh Nama"; // Gantikan dengan data dari server
    var harga = 1000; // Gantikan dengan data dari server

    // Isi nilai form dengan data yang diperoleh
    document.getElementById('editNama').value = nama;
    document.getElementById('editHarga').value = harga;

    // Tampilkan modal edit
    $('#editModal').modal('show');
}

function simpanPerubahan() {
    // Lakukan pengiriman data ke server menggunakan AJAX
    // Gantikan URL dan data dengan data yang sesuai
    $.ajax({
        url: "{{ route('jenis-sampah.update', ['id' => $jenisSampah->id]) }}",
        type: "PUT",
        data: {
            _token: "{{ csrf_token() }}",
            nama: document.getElementById('editNama').value,
            harga: document.getElementById('editHarga').value
        },
        success: function(response) {
            // Tampilkan pesan berhasil
            alert('Perubahan berhasil disimpan');

            // Setelah itu, kembalikan tampilan tabel dan sembunyikan modal edit
            $('#editModal').modal('hide');
        },
        error: function(xhr) {
            // Tampilkan pesan error jika ada kesalahan
            alert('Terjadi kesalahan saat menyimpan perubahan');
        }
    });
}
