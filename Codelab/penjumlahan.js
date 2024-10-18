// Fungsi untuk menghitung penjumlahan
function hitung() {
    var bil1 = parseFloat(document.getElementById("num1").value);
    var bil2 = parseFloat(document.getElementById("num2").value);
    var hasil = bil1 + bil2;
    document.getElementById("hasil").innerText = hasil;
}

// Fungsi untuk mereset form
function resetForm() {
    document.getElementById("num1").value = '';
    document.getElementById("num2").value = '';
    document.getElementById("hasil").innerText = '0';
}
