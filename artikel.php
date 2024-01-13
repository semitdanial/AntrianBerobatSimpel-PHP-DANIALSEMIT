<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: #ffcc00;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .hero-section {
      background-color: #fff;
      padding: 20px;
      text-align: center;
      margin-bottom: 20px;
    }

    .tile-container {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 20px;
      max-width: 900px;
      margin: 0 auto;
    }

    .tile {
      background-color: #fff;
      padding: 20px;
      text-align: center;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .tile-icon {
      font-size: 48px;
      margin-bottom: 10px;
    }

    .tile-title {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .tile-description {
      margin-bottom: 20px;
    }

    .tile-data {
      background-color: #f2f2f2;
      padding: 10px;
    }

    .tile-data-label {
      font-weight: bold;
    }

    .tile-data-value {
      font-size: 18px;
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <div class="header">
  <h4 class="m-0 font-weight-bold text-primary">ARTIKEL KESEHTAN</h4>
  </div>

  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="img/1.jpg" alt="Article Image">
          <div class="card-body">
            <h5 class="card-title">Kesehatan Gigi</h5>
            <p class="card-text">Penggunaan baking soda untuk gigi memiliki beragam manfaat, salah satunya memutihkan gigi. Tidak heran bila baking soda kerap digunakan sebagai salah satu bahan dalam produk pasta gigi.</p>
            <a href="https://www.alodokter.com/cara-menggunakan-baking-soda-untuk-gigi-lebih-putih" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/2.jpg" alt="Article Image">
          <div class="card-body">
            <h5 class="card-title">Lebih Percaya Jamu Tradisional Ketimbang Resep Dokter?</h5>
            <p class="card-text">Dalam mempertimbangkan apakah lebih baik mempercayai jamu tradisional atau dokter, penting untuk memahami bahwa...</p>
            <a href="https://www.kompasiana.com/irdafebriyanti/648ab6094d498a5a4e3b59e3/lebih-percaya-jamu-tradisional-ketimbang-resep-dokter" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/3.jpg" alt="Article Image">
          <div class="card-body">
            <h5 class="card-title">Benarkah Rutin Makan Jamur Turunkan Risiko Kanker Prostat?</h5>
            <p class="card-text">Sebuah penelitian mempelajari efek bubuk jamur kancing putih pada pria yang mengalami kanker prostat berulang.</p>
            <a href="https://doktersehat.com/informasi/kanker/jamur-risiko-kanker-prostat/" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
