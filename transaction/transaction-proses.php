<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['detail-nama'];
    $nomor = $_POST['detail-nomor'];
    $alamat = $_POST['detail-alamat'];
    $kategori = $_POST['detail-kategori'];
    $harga = $_POST['detail-harga'];
    $status = $_POST['detail-status'];
    $tanggal = date('Y-m-d');

    $sql = "INSERT INTO tb_transaction VALUES(null, '$nama','$nomor','$alamat', '$kategori', '$harga', '$status','$tanggal' )";

    if (empty($nama) || empty($kategori) || empty($harga) ||  empty($nomor) || empty($alamat)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = '../index.php';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Transaction Berhasil');
                window.location = '../index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = '../index.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    // hapus transaksi
    $sql = "SELECT * FROM tb_transaction WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    

    $sql = "DELETE FROM tb_transaction WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Transaksi Berhasil Dihapus');
                window.location = 'transaction.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Transaksi Gagal Dihapus');
                window.location = 'transaction.php';
            </script>
        ";
    }
}else {
    header('location: transaction.php');
}


