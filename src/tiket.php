<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body class="bg-[#003366] box-border flex-shrink-0 h[9.5rem]">
    <div class="logo">
        <p class="text-white text-5xl absolute top-0 left-0 mx-60 my-8 font-serif">HELPDESK</p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Logo_Universitas_Brawijaya.svg/2036px-Logo_Universitas_Brawijaya.svg.png" 
            alt="Logo UB" class="w-15 h-16 absolute top-0 left-10 mx-3 my-4">
        <img src="https://ehub.kemenkopukm.go.id/storage/collaborators/logo/80/1696863312_rebranding-vokasi-logo-04.png" 
            alt="Logo vokasi" class="w-15 h-16 absolute top-0 left-12 mx-20 my-4">
        <div class="h-[120px] w-screen bg-[#233f87]"></div>
    </div>
    <!-- sidebar -->
    <div class="flex">
        <div class="left h-screen w-[200px] bg-[#dd8500] p-[20px] ">
            <nav class="space-y-2">
                <a href="faq.php" class=" block rounded-md text-decoration-none p-3 text-white hover:bg-[#003366]">Faq</a>
                <a href="tiket.php" class="block rounded-md text-decoration-none p-3 text-white hover:bg-[#003366]">Tiket</a>
                <a href="cek tiket.php" class="block rounded-md text-decoration-none p-3 text-white hover:bg-[#003366]">Cek Tiket</a>
                <a href="riwayat tiket.php" class="block rounded-md text-decoration-none p-3 text-white hover:bg-[#003366]">Riwayat Tiket</a>
                <button type="logout" class=" bottom-[20px] absolute">
                    <a href="faq.php" class="bg-red-600 text-white px-4 py-2 text-decoration-none rounded hover:bg-red-800 ">LOGOUT</a>
                </button>
            </nav>
        </div>
        

            <!-- Tiket -->
            <h2 class="text-white absolute top-[130px] right-[515px] ">Tiket</h2>
        

            <div>

            </div>

            <form action="konfirmasipertanyaan.php?action=kirim" method="post" class="max-w-md">
                <div class="absolute left-[220px] bottom-[300px] mb-4">
                    <label for="nama" class="block text-white">Nama:</label>
                    <input type="text" id="nama" name="nama" class="w-[350px] p-2 border border-white rounded">
                </div>
              
                <div class="absolute left-[800px] bottom-[300px] mb-4">
                    <label for="nim" class="block text-white">NIM:</label>
                    <input type="text" id="nim" name="nim" class="w-[350px] p-2 border border-white rounded">
                </div>
                <div class="absolute left-[220px] bottom-[200px] mb-4">
                    <label for="email" class="block text-white">Email:</label>
                    <input type="email" id="email" name="email" class="w-[350px] p-2 border border-white rounded">
                </div>
                <!-- kategori masalah -->
                <div class="left-[800px] bottom-[260px] absolute">
        <label for="pilihan" class="block text-sm font-medium text-white"
          >Kategori</label
        >
        <select
          id="pilihan"
          name="pilihan"
          class="absolute rounded-md w-[350px] h-[40px]"
        >
          <option value="pilihan1">Pilih Kategori</option>
          <option value="pilihan2">Keuangan</option>
          <option value="pilihan3">Permasalahan SIAM</option>
          <option value="pilihan4">Permasalahan Email</option>
          <option value="pilihan5">Lainnya</option>
        </select>
      </div>
                <div class="left-[520px] bottom-[40px] absolute mb-4">
                    <label for="pertanyaan" class="block text-white">Pertanyaan :</label>
                    <textarea id="pertanyaan" placeholder  ="ajukan pertanyaan (hanya bisa 1 pertanyaan)" name="pertanyaan" rows="4" class="w-80 p-2 border border-white rounded"></textarea>
                    
                </div>
                <button type="submit" class="left-[630px] bottom-[20px] absolute">
                    <a class="bg-[#dd8500] text-white px-4 py-2 text-decoration-none rounded hover:bg-blue-600 ">Submit</a>
                </button>
            </form>
        
    </div>
   

    <div id="popup" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-6 rounded shadow-lg border hidden">
        <p id="popupText" class="text-center"></p>
    </div>


    
</body>
</html>