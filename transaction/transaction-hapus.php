<?php
  include '../koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'transaction.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM tb_transaction WHERE id = '$id'";
  $result = mysqli_query($koneksi, query: $sql);
  $data = mysqli_fetch_assoc($result);

	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}

    
?>
