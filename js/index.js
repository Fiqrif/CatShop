// Fungsi Modal
function bukaModal(kategori) {
    document.getElementById("myModal").style.display = "flex";

    document.getElementById("kategori-detail").innerText = "Detail " + kategori;

    document.getElementById("nama").value = "";
    document.getElementById("nomorhp").value = "";
    document.getElementById("alamat").value = "";
}

function tutupModal() {
    document.getElementById("myModal").style.display = "none";
}

function tutupModal2() {
    document.getElementById("myModal2").style.display = "none";
}
function bukaModal2() {
    tutupModal(); // Tutup modal pertama
    document.getElementById("myModal2").style.display = "flex";

    var nama = document.getElementById("recipient-name").value;
    var nomorhp = document.getElementById("handphone").value;
    var alamat = document.getElementById("alamat-text").value;

    document.getElementById("detail-nama").value = nama;
    document.getElementById("detail-nomorhp").value = nomorhp;
    document.getElementById("detail-alamat").value = alamat;
}
function kembaliKeModalPertama() {
    tutupModal2();
    bukaModal();
}
function lakukanPembayaran() {
    alert("Pembayaran berhasil!");
    tutupModal2();
}