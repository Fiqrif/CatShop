<?php
	include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" href="assets/icon.png" />
	<title>Home</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
		rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
	<div class="container">
		<header>
			<nav>
				<div class="logo">
					<img src="assets/logo.png" alt="" />
				</div>
				<input type="checkbox" id="click" />
				<label for="click" class="menu-btn">
					<i class="fas fa-bars"></i>
				</label>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="categories/categories.php">Categories</a></li>
					<li><a href="login.php" class="btn_login">Login</a></li>
				</ul>
			</nav>
		</header>
		<main>
			<div class="jumbotron">
				<div class="jumbotron-text">
					<h1>Find Your New Little Cat, Make a New Friend</h1>
					<p> Teman barumu yang lucu menunggu mu, ayo temukan mereka sekarang
					</p>
					<button type="button" class="btn_getStarted">Get Started</button>
				</div>
				<div class="jumbotron-img">
					<img src="assets/jumbotron.png" alt="" />
				</div>
			</div>
			<div class="cards-categories">
				<h2>Cat Categories</h2>
				<div class="card-categories">
					<div class="card">
						<div class="card-image">
							<img src="assets/anggora.png" alt="gambar tidak ditemukan" />
						</div>
						<div class="card-content">
							<h5>Anggora</h5>
							<p class="description">Anggora turki adalah salah satu ras kucing domestik alami tertua. Ras
								ini berasal dari Ankara, Turki. Kucing ini sangat populer dan terkenal di Indonesia.</p>
							<p class="price"><span>Rp.</span>50,000</p>
							<button class="btn_belanja" type="submit" onclick="bukaModal('Anggora')">Beli</button>
						</div>
					</div>
					<div class="card">
						<div class="card-image">
							<img src="assets/persia.png" alt="gambar tidak ditemukan" />
						</div>
						<div class="card-content">
							<h5>Persia</h5>
							<p class="description">Kucing persia adalah ras kucing domestik berbulu panjang dengan
								karakter wajah bulat dan moncong pendek. Namanya mengacu pada Persia.</p>
							<p class="price"><span>Rp.</span>50,000</p>
							<button class="btn_belanja" type="submit" onclick="bukaModal('Persia')">Beli</button>
						</div>
					</div>
					<div class="card">
						<div class="card-image">
							<img src="assets/british.png" alt="gambar tidak ditemukan" />
						</div>
						<div class="card-content">
							<h5>British Shorthair</h5>
							<p class="description">Kucing bulu pendek britania adalah salah satu ras kucing tertua di
								inggris. Kucing ini adalah kucing berbadan sedang dengan bulu yang pendek. </p>
							<p class="price"><span>Rp.</span>50,000</p>
							<button class="btn_belanja" type="submit"
								onclick="bukaModal('British Shorthair')">Beli</button>
						</div>
					</div>
				</div>

			</div>
			<!--  Modal -->
			<div id="myModal" class="modal-container" onclick="tutupModal()">
				<div class="modal-dialog" onclick="event.stopPropagation()">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title " style="color:  #ffb72b;">Formulit Pembayaran</h1>
							<button type="button" class="btn-close" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<label class="labelmodal" for="recipient-name" class="col-form-label">Nama :</label>
									<input class="inputdata" type="text" class="form-control" id="recipient-name">
								</div>
								<div class="form-group">
									<label class="labelmodal" for="handphone" class="col-form-label">No. Hp :</label>
									<input class="inputdata" type="text" class="form-control" id="handphone">
								</div>
								<div class="form-group">
									<label class="labelmodal" for="alamat-text" class="col-form-label">Alamat:</label>
									<textarea class="inputalamat" class="form-control" id="alamat-text"></textarea>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" onclick="tutupModal()">Keluar</button>
							<button type="button" class="btn btn-yellow" onclick="bukaModal2()">Lanjutkan</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal 2 -->
			<div id="myModal2" class="modal-container" onclick="tutupModal2()">
				<div class="modal-dialog" onclick="event.stopPropagation()">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title" style="color:  #ffb72b;">Data Transaksi</h1>
							<button type="button" class="btn-close" aria-label="Close" onclick="tutupModal2()"></button>
						</div>
						<div class="modal-body">
							<form>
								<h4> Kategori</h4>
								<div class="form-group">
									<label class="labelmodal" for="detail-kategori" class="col-form-label">Kategori
										:</label>
									<input class="inputdata" type="text" class="form-control" id="detail-kategori"
										disabled>
								</div>
								<div class="form-group">
									<label class="labelmodal" for="detail-harga" class="col-form-label">Harga :</label>
									<input class="inputdata" type="text" class="form-control" id="detail-harga"
										disabled>
								</div>
								<h4>Pembeli</h4>
								<div class="form-group">
									<label class="labelmodal" for="detail-nama" class="col-form-label">Nama :</label>
									<input class="inputdata" type="text" class="form-control" id="detail-nama" disabled>
								</div>
								<div class="form-group">
									<label class="labelmodal" for="detail-nomorhp" class="col-form-label">No. Hp
										:</label>
									<input class="inputdata" type="text" class="form-control" id="detail-nomorhp"
										disabled>
								</div>
								<div class="form-group">
									<label class="labelmodal" for="detail-alamat" class="col-form-label">Alamat:</label>
									<textarea class="inputalamat" class="form-control" id="detail-alamat"
										disabled></textarea>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" onclick="kembaliKeModalPertama()">Kembali</button>
							<button type="button" class="btn btn-yellow" onclick="lakukanPembayaran()">Lakukan
								Pembayaran</button>
						</div>
					</div>
				</div>
			</div>

		</main>
		<footer>
			<h4>&copy; Lab Pemrograman Komputer 2024</h4>
		</footer>
	</div>
	<script src="js/index.js"></script>
</body>

</html>
