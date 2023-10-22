function tampilkanHasil() {
    var nama = document.getElementById("nama").value;
    var tanggal = document.getElementById("tanggal").value;
    var pesan = document.getElementById("pesan").value;
    document.getElementById("hasilNama").innerHTML = nama;
    document.getElementById("hasilTanggal").innerHTML = tanggal;
    document.getElementById("hasilPesan").innerHTML = pesan;
}