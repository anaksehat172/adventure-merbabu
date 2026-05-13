
document.getElementById('formPendaftaran').addEventListener('submit', function(e) {
    e.preventDefault(); // Stop halaman agar tidak refresh

    // 1. Ambil elemen tombol & status
    const btnSubmit = document.getElementById('btnSubmit');
    const btnText = document.getElementById('btnText');
    const btnLoader = document.getElementById('btnLoader');
    const statusDiv = document.getElementById('statusPesan');

    // 2. Mulai Animasi Loading
    btnSubmit.disabled = true; // Matikan tombol agar tidak diklik 2x
    btnText.innerText = "Sedang Mengirim...";
    btnLoader.classList.remove('d-none'); // Munculkan muter-muter

    // 3. Ambil Data
    const formData = new FormData();
    formData.append('nama', document.getElementById('nama').value);
    formData.append('tanggal', document.getElementById('tanggal').value);
    formData.append('jalur', document.getElementById('jalur').value);

    // 4. Kirim ke proses.php (XAMPP)
    fetch('proses.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        // Balikin tombol ke semula
        btnSubmit.disabled = false;
        btnText.innerText = "Kirim Pendaftaran";
        btnLoader.classList.add('d-none');

        if (data.trim() === "sukses") {
            statusDiv.innerHTML = "<div class='alert alert-success'>✅ Berhasil disimpan ke database!</div>";
            document.getElementById('formPendaftaran').reset();
        } else {
            statusDiv.innerHTML = "<div class='alert alert-danger'>❌ Gagal: " + data + "</div>";
        }
    })
    .catch(error => {
        btnSubmit.disabled = false;
        btnText.innerText = "Kirim Pendaftaran";
        btnLoader.classList.add('d-none');
        console.error('Error:', error);
    });
});
