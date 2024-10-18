function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;
    var errorMessage = document.getElementById("errorMessage");

    // Validasi input nama
    if (name == "") {
        errorMessage.innerText = "Nama harus diisi!";
        alert("Nama tidak boleh kosong!");
        return false;
    }

    // Validasi input email
    if (email == "") {
        errorMessage.innerText = "Email harus diisi!";
        alert("Email tidak boleh kosong!");
        return false;
    }

    // Validasi input alamat lengkap
    if (address == "") {
        errorMessage.innerText = "Alamat lengkap harus diisi!";
        alert("Alamat lengkap tidak boleh kosong!");
        return false;
    }

    // Jika semua validasi lulus, kirim form
    errorMessage.innerText = "";
    alert("Berhasil mendaftar!");
    return true;
}
