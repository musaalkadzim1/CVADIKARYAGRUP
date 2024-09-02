<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV ADI KARYA GRUP</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container text-center mt-5 p-4 bg-white rounded shadow">
    <div class="logo mb-3">
      <img src="img/CV.png" alt="CV ADI KARYA GRUP" class="img-fluid" style="max-width: 100px;">
    </div>
    <h1 class="mb-3">ADI KARYA GRUP</h1>
    <p class="mb-3 text-center">Cek Berkas Anda Melalui CV Adi Karya Grup</p>
    <form action="proses.php" method="GET">
      <div class="mb-3 text-start">
        <label for="kodeInput" class="form-label" style="font-size: 14px; color: #666;">Masukkan Nomer Berkas / NIK</label>
        <input type="text" id="kodeInput" name="kode" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary w-100 mb-2">Cek Resi</button>
      <button type="button" id="clearButton" class="btn btn-outline-secondary w-100">Batal</button>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById('clearButton').addEventListener('click', function() {
      document.getElementById('kodeInput').value = '';
    });
  </script>
</body>

</html>