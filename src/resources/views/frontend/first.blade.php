<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mentoring untuk Beasiswa Universitas Indonesia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Pendaftaran Mentoring untuk Beasiswa Universitas Indonesia</h1>
        <div class="buttons">
            <button onclick="showForm('mahasiswa')">Form Mahasiswa</button>
        </div>

        <div id="form-mahasiswa" class="form-container">
            <h2>Form Mahasiswa</h2>
            <form id="formData" action="{{ route('post_beasiswa') }}" method="POST">
                @csrf
                <label for="nama-mahasiswa">Nama:</label>
                <input type="text" id="nama-mahasiswa" name="nama" required>

                <label for="nim">NIM:</label>
                <input type="number" id="nim" name="nim" required>

                <label for="nomer-telpon-mahasiswa">Nomer Telpon:</label>
                <input type="number" id="nomer-telpon-mahasiswa" name="nomer_telpon" required>

                <label for="jenis-beasiswa">Jenis Beasiswa:</label>
                <select id="jenis-beasiswa" name="jenis_beasiswa" required>
                    <option value="">Pilih Jenis Beasiswa</option>
                    <option value="Beasiswa A">Beasiswa A</option>
                    <option value="Beasiswa B">Beasiswa B</option>
                    <option value="Beasiswa C">Beasiswa C</option>
                </select>

                <label for="mentor">Mentor:</label>
                <select id="mentor" name="mentor" required>
                    <option value="">Pilih Mentor</option>
                    <option value="rafi">Rafi</option>
                    <option value="fathan">Fathan</option>
                    <option value="noval">Noval</option>
                </select>
                
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
      document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('formData');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Kirim form data menggunakan AJAX
        const formData = new FormData(form);
        fetch(form.getAttribute('action'), {
            method: 'POST',
            body: formData,
            // Tambahkan ini untuk memastikan respons yang diterima adalah JSON
            headers: {
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            // Tampilkan sweet alert jika data berhasil disimpan
            Swal.fire({
                title: 'Terima kasih!',
                text: data.message,
                icon: 'success',
                confirmButtonText: 'OK'
            });

            // Kosongkan nilai dari elemen-elemen formulir setelah berhasil disimpan
            form.reset();
        })
        .catch(error => {
            console.error('Error:', error);
            Swal.fire({
                title: 'Error!',
                text: 'Something went wrong!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        });
    });
});
  </script>
</body>
</html>
