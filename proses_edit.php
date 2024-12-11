<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['simpan'])){

    // ambil data dari form
    $id = $_POST['id'];
    $Code = $_POST['Code'];
    $Nama_Pembelian= $_POST['Nama_Pembelian'];
    $Email = $_POST['Email'];
    $Macam_Ukuran= $_POST['Macam_Ukuran'];
    $Produk = $_POST['Produk'];
    $Alamat = $_POST['Alamat'];

    // buat query update
    $sql = "UPDATE Pembelian Bouqet SET Code='$Code', Nama_Pembeli='$Nama_Pemebeli', Email='$Email', 
            Macam_Ukuran='$Macam_Ukuran', Produk='$Produk', Alamat='$Alamat' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if($query) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list_Pembeli.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}
?>