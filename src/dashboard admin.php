<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="../dist/output.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="grafik.js"></script>
</head>

<body class="bg-gray-400 box-border  h-[200px] w-screen">
  <div class="logo">
    <p class="text-white text-5xl absolute top-0 left-0 mx-60 my-8 font-serif">HELPDESK</p>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Logo_Universitas_Brawijaya.svg/2036px-Logo_Universitas_Brawijaya.svg.png" alt="Logo UB" class="w-15 h-16 absolute top-0 left-10 mx-3 my-4">
    <img src="https://ehub.kemenkopukm.go.id/storage/collaborators/logo/80/1696863312_rebranding-vokasi-logo-04.png" alt="Logo vokasi" class="w-15 h-16 absolute top-0 left-12 mx-20 my-4">
    <div class="h-[120px] w-screen bg-[#25283f]"></div>
  </div>
  <!-- sidebar -->
  <div class="flex">
    <div class="left h-screen w-[200px] bg-[#dd8500] p-[20px]">
      <nav class="space-y-2">
        <a href="dashboard admin.php" class="block rounded-md text-decoration-none p-3 text-white hover:bg-[#003366]">Dashboard</a>
        <a href="pertanyaan admin.php" class="block rounded-md text-decoration-none p-3 text-white hover:bg-[#003366]">Pertanyaan</a>
        <button type="logout" class=" bottom-[20px] absolute">
          <a href="faq.php" class="bg-red-600 text-white px-4 py-2 text-decoration-none rounded hover:bg-red-800 ">LOGOUT</a>
        </button>
      </nav>
    </div>
  </div>
  <!-- grafik -->
  <div class="w-[850px] h-[400px] bg-white p-8 rounded-md shadow-md absolute left-[250px] top-[300px]">
    <canvas id="myChart"></canvas>
  </div>
  <div class="absolute bottom-[270px] left-[250px]">
    <h1 class="text-white text-3xl font-bold mb-4">Total Tiket</h1>
  </div>

  <div class="bg-white left-[250px] rounded-md bottom-[350px] h-[100px] w-[175px] absolute">
    <h2 class="text-lg absolute text-black left-[10px]">Terjawab </h2>
  </div>
  <div class="bg-white left-[450px] rounded-md bottom-[350px] h-[100px] w-[175px] absolute">
    <h2 class="text-lg absolute text-black left-[10px]">Belum Terjawab</h2>
  </div>

  <?php
  include 'koneksi.php';
  $query = mysqli_query($koneksi, "SELECT
      DATE_FORMAT(tanggal, '%M') AS bulan,
      SUM(CASE WHEN level = 'LOW' THEN jumlah ELSE 0 END) AS lowData,
      SUM(CASE WHEN level = 'MEDIUM' THEN jumlah ELSE 0 END) AS mediumData,
      SUM(CASE WHEN level = 'HIGH' THEN jumlah ELSE 0 END) AS highData
  FROM (
      SELECT
          tanggal,
          level,
          COUNT(*) AS jumlah
      FROM
          tiket
      GROUP BY
          tanggal, level
  ) AS subquery
  GROUP BY
      bulan
  ORDER BY
      bulan;");

  while($result = mysqli_fetch_array($query)) {
    $dataBulan[] = $result['bulan'];
    $dataLow[] = $result['lowData'];
    $dataMedium[] = $result['mediumData'];
    $dataHigh[] = $result['highData'];
  }
  ?>
  <script>
    // Sample data
    const data = {
      labels: <?php echo json_encode($dataBulan); ?>,
      datasets: [{
          label: 'Low',
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 3,
          data: <?php echo json_encode($dataLow); ?>
        },
        {
          label: 'Medium',
          backgroundColor: 'rgba(255, 206, 86, 0.2)',
          borderColor: 'rgba(255, 206, 86, 1)',
          borderWidth: 3,
          data: <?php echo json_encode($dataMedium); ?>
        },
        {
          label: 'High',
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 3,
          data: <?php echo json_encode($dataHigh); ?>
        }
      ]
    };

    // Chart configuration
    const config = {
      type: 'bar',
      data: data,
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          x: {
            stacked: false, // Set to false for side-by-side bars
          },
          y: {
            stacked: false
          }
        }
      }
    };

    // Create the chart
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, config);
  </script>
</body>

</html>