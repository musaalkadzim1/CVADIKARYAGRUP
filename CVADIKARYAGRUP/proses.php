<?php
if (isset($_GET['kode'])) {
  $kode = htmlspecialchars($_GET['kode']);

  // Data dummy untuk status transaksi
  $dataStatus = [
    ["tanggal" => "07 Mar 2024", "status" => "Dispenda", "detail" => "Online BPHTB"],
    ["tanggal" => "08 Mar 2024", "status" => "Desa", "detail" => "TTD Desa, Notaris, Cetak AJB"],
    ["tanggal" => "09 Mar 2024", "status" => "Permohonan", "detail" => "TTD Pemohon"],
    ["tanggal" => "10 Mar 2024", "status" => "Dispenda", "detail" => "Lobi", "icon" => "green"]
  ];
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Transaksi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="container mt-1 p-4 bg-white rounded shadow">
      <p class="text-left" style="margin: 5px 0;">Kode Transaksi<br>
        <span style="font-weight: bold; display: block; margin-top: 5px;"><?php echo $kode; ?></span>
      </p>
      <p class="text-left" style="margin: 5px 0;">Permohonan: <strong>Pemohon</strong></p>
      <p class="text-left" style="margin: 5px 0;">Letak Tanah: <strong>Letak Tanah</strong></p>
      <p class="text-left" style="margin: 5px 0 10px 0;">Estimasi Selesai: <strong>Estimasi Selesai</strong></p>


      <div class="status-box">
        <h3 class="mb-4">Detail Status</h3>
        <ul class="timeline">
          <?php foreach ($dataStatus as $status) { ?>
            <li class="d-flex mb-3">
              <span class="date me-3" style="font-size: 14px; color: #666; min-width: 80px;"><?php echo $status['tanggal']; ?></span>
              <div class="d-flex flex-column" style="flex-grow: 1;">
                <span class="status fw-bold" style="font-size: 16px; color: #333; margin-left: 5px;"><?php echo $status['status']; ?></span>
                <span class="detail text-muted" style="font-size: 14px; color: #999; margin-left: 5px;"><?php echo $status['detail']; ?></span>
              </div>
              <?php if (isset($status['icon']) && $status['icon'] == 'green') { ?>
                <span class="icon green align-self-center" style="background-color: #28a745; width: 12px; height: 12px; border-radius: 50%;"></span>
              <?php } ?>
            </li>

          <?php } ?>
        </ul>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>

  </html>

<?php
} else {
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="container text-center mt-5 p-4 bg-white rounded shadow">
      <h1>Kode transaksi tidak ditemukan</h1>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>

  </html>
<?php
}
?>