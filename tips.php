<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: #ffcc00;
      padding: 20px;
      text-align: center;
      color: #ffffff;
      font-size: 24px;
    }

    .illustration {
      text-align: center;
      margin: 20px;
    }

    .tips-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin: 20px;
    }

    .tip {
      width: 200px;
      margin: 10px;
      padding: 10px;
      background-color: #f2f2f2;
      border-radius: 5px;
      text-align: center;
      cursor: pointer;
    }

    .tip:hover {
      background-color: #e0e0e0;
    }

    .tip-icon {
      font-size: 48px;
      margin-bottom: 10px;
    }

    .chart {
      margin: 20px;
      text-align: center;
    }

    .action-button {
      display: block;
      width: 200px;
      margin: 20px auto;
      padding: 10px;
      background-color: #ffcc00;
      color: #ffffff;
      text-align: center;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
    }

    .tip-content {
      display: none;
      margin: 20px;
      background-color: #f2f2f2;
      padding: 10px;
      border-radius: 5px;
    }
  </style>
  <script>
    function toggleTip(tipId) {
      var tipContent = document.getElementById(tipId);
      if (tipContent.style.display === "none") {
        tipContent.style.display = "block";
      } else {
        tipContent.style.display = "none";
      }
    }
  </script>
</head>
<body>
  <div class="header">
  <h4 class="m-0 font-weight-bold text-primary">TIPS KESEHATAN</h4>
  </div>

  </div>

  <div class="tips-container">
    <div class="tip" onclick="toggleTip('tip1')">
      <span class="tip-icon">🏋️</span>
      <p>Tips olahraga</p>
    </div>
    <div class="tip" onclick="toggleTip('tip2')">
      <span class="tip-icon">🥦</span>
      <p>Tips nutrisi</p>
    </div>
    <div class="tip" onclick="toggleTip('tip3')">
      <span class="tip-icon">😴</span>
      <p>Tips tidur</p>
    </div>
    <!-- Tambahkan kotak tips lainnya sesuai kebutuhan -->
  </div>

  <div id="tip1" class="tip-content">
    <h3>Tips Olahraga</h3>
    <p>Berikut ini adalah beberapa contoh tips olahraga yang dapat Anda lakukan:<br>

1. Lakukan pemanasan sebelum berolahraga untuk mengurangi risiko cedera otot.<br>
2. Pilih olahraga yang Anda nikmati agar lebih termotivasi dan konsisten dalam melakukannya.<br>
3. Jadwalkan waktu untuk berolahraga secara rutin, minimal 3-5 kali seminggu.<br>
4. Variasikan jenis olahraga Anda untuk melibatkan berbagai kelompok otot dan menjaga kebugaran yang seimbang.<br>
5. Perhatikan postur tubuh yang benar saat berolahraga agar terhindar dari cedera.<br>
6. Tingkatkan intensitas dan durasi olahraga secara bertahap untuk mencapai peningkatan kebugaran secara bertahap.<br>
7. Jangan lupa untuk mengonsumsi air yang cukup selama berolahraga untuk menjaga hidrasi tubuh.<br>
8. Sisihkan waktu untuk pemulihan setelah latihan, termasuk pendinginan dan peregangan otot.<br>
9. Jika Anda memiliki kondisi kesehatan tertentu, konsultasikan dengan dokter sebelum memulai program olahraga yang intens.<br>
10. Cari teman atau bergabung dengan kelompok olahraga untuk meningkatkan motivasi dan kebersamaan.<br>

Pastikan untuk menyesuaikan tips olahraga ini dengan gaya hidup dan kebutuhan kesehatan Anda. Anda juga dapat menambahkan tips olahraga lainnya yang sesuai dengan preferensi dan tujuan kesehatan Anda.</p>
  </div>
  <div id="tip2" class="tip-content">
    <h3>Tips Nutrisi</h3>
    <p>Berikut adalah beberapa tips nutrisi untuk menjaga kesehatan:<br>

1. Makanlah beragam jenis buah dan sayuran setiap harinya untuk memenuhi kebutuhan nutrisi tubuh.<br>
2. Konsumsilah makanan kaya serat seperti biji-bijian, kacang-kacangan, dan sayuran hijau.<br>
3. Batasi konsumsi gula tambahan, seperti dalam minuman manis dan makanan olahan.<br>
4. Pilihlah sumber protein sehat seperti ikan, daging tanpa lemak, tahu, tempe, dan kacang-kacangan.<br>
5. Perhatikan asupan lemak sehat seperti lemak tak jenuh tunggal dan lemak tak jenuh ganda yang terdapat dalam alpukat, ikan salmon, minyak zaitun, dan kacang-kacangan.<br>
6. Minumlah cukup air putih setiap harinya untuk menjaga kecukupan hidrasi.<br>
7. Hindari makanan cepat saji dan makanan tinggi garam dan lemak jenuh.<br>
8. Pertahankan pola makan yang seimbang dengan mengatur porsi makan dan menghindari makan berlebihan.<br>
9. Kurangi konsumsi makanan olahan dan kemasan yang mengandung banyak bahan tambahan seperti pengawet dan pewarna buatan.<br>
10. Konsultasikan dengan ahli gizi atau dokter untuk mendapatkan panduan nutrisi yang sesuai dengan kebutuhan individu Anda.<br>

Pastikan untuk selalu memperhatikan kebutuhan nutrisi tubuh Anda dan mengonsumsi makanan yang seimbang dan bervariasi untuk menjaga kesehatan secara optimal.</p>
  </div>
  <div id="tip3" class="tip-content">
    <h3>Tips Tidur</h3>
    <p>Berikut adalah beberapa tips untuk tidur yang baik:<br>

1. Tetapkan jadwal tidur yang teratur dengan waktu tidur yang konsisten, baik saat hari kerja maupun akhir pekan.<br>
2. Buatlah lingkungan tidur yang nyaman dengan suhu ruangan yang sejuk, kebisingan minimal, dan pencahayaan yang redup.<br>
3. Hindari mengonsumsi kafein dan minuman beralkohol beberapa jam sebelum tidur, karena dapat mengganggu kualitas tidur.<br>
4. Batasi penggunaan layar elektronik, seperti smartphone, tablet, dan televisi, sebelum tidur karena cahaya biru yang dipancarkan dapat mengganggu produksi melatonin, hormon yang mengatur tidur.<br>
5. Lakukan aktivitas relaksasi sebelum tidur, seperti meditasi, pernapasan dalam, atau membaca buku, untuk membantu menenangkan pikiran dan tubuh.<br>
6. Hindari makan makanan berat atau berlemak secara berlebihan sebelum tidur, karena dapat menyebabkan gangguan pencernaan dan mengganggu tidur.<br>
7. Tetapkan rutinitas sebelum tidur, seperti mandi hangat atau minum segelas susu hangat, yang dapat memberikan sinyal tubuh untuk bersiap tidur.<br>
8. Gunakan tempat tidur hanya untuk tidur dan aktivitas intim, sehingga tubuh dan pikiran terkondisikan untuk tidur saat berada di tempat tidur.<br>
9. Cobalah teknik relaksasi seperti yoga atau pijat untuk mengurangi stres dan meningkatkan kualitas tidur.<br>
10. Jaga konsistensi dan kualitas tidur dengan menjaga gaya hidup yang sehat secara keseluruhan, termasuk pola makan yang seimbang dan aktif secara fisik.<br>

Setiap individu mungkin memiliki kebutuhan tidur yang berbeda, namun menjaga rutinitas tidur yang baik dan menciptakan lingkungan tidur yang nyaman dapat membantu meningkatkan kualitas tidur dan memastikan Anda bangun dengan perasaan segar dan bugar. Jika Anda memiliki masalah tidur yang serius atau kronis, penting untuk berkonsultasi dengan dokter atau ahli tidur untuk evaluasi dan penanganan yang tepat.</p>
  </div>
</body>
</html>
