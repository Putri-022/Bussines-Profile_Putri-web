<?php
include("config.php");

if( isset($_GET['id']) ) {
    header('Location: list-siswa.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ) {
    die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pembelian produk di toko my queen</title>
</head>
<body>
    <header>
        <h3>Pembelian Bouqet</h3>
    </header>

    <form action="proses-edit.php" method="POST">
        <fieldset>
            <p>
                <input type="hidden" name="id" value="<?php echo $pembeli['id'] ?>" />
            </p>
            <p>
                <label for="Code">Code: </label>
                <input type="text" name="Code" placeholder="Code" value="<?php echo $pembeli['Code'] ?>" />
            </p>
            <p>
                <label for="Nama_Pembeli">Nama Pembeli: </label>
                <input type="text" name="Nama_Pembeli" placeholder="Nama Pembeli" value="<?php echo $pembeli['Nama_Pembeli'] ?>" />
            </p>
            <p>
                <label for="Email">Email</label>
                <textarea name="Email"><?php echo $siswa['Email'] ?></textarea>
            </p>
            <p>
                <label for="Macam_Ukuran">Macam_Ukuran: </label>
                <?php $Macam-Macam Ukuran = $pembeli['Macam_Ukuran']; ?>
                <label><input type="radio" name="Macam_Ukuran" value="Small Bouqet" <?php echo ($Macam_ukuran == 'Small Bouqet') ? "checked" : "" ?>>Small Bouqet</label>
                <label><input type="radio" name="Macam_Ukuran" value="Medium Bouqet" <?php echo ($jenis_Ukuran == 'Medium Bouqet') ? "checked" : "" ?>> Medium Bouqet</label>
                <label><input type="radio" name="Macam_Ukuran" value="Medium Bouqet" <?php echo ($jenis_Ukuran == 'Big Bouqet') ? "checked" : "" ?>> Big Bouqet</label>
            </p>
            <p>
                <label for="agama">Produk: </label>
                <?php $agama = $pembeli['Produk']; ?>
                <select name="Produk">
                    <option <?php echo ($Produk == 'buket bunga') ? "selected" : "" ?>>buket bunga</option>
                    <option <?php echo ($Produk == 'buket coklat') ? "selected" : "" ?>>buket coklat</option>
                    <option <?php echo ($Produk == 'buket uang') ? "selected" : "" ?>>buket uang</option>
                    <option <?php echo ($Produk == 'Buket boneka+bunga') ? "selected" : "" ?>>buket boneka+bunga</option>
                    <option <?php echo ($Produk == 'bisa riques') ? "selected" : "" ?>> bisa riques</option>
                </select>
            </p>
            <p>
                <label for="Alamat">Alamat: </label>
                <input type="text" name="Alamat" placeholder="Alamat" value="<?php echo $pembeli['Alamat'] ?>" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>
</html>