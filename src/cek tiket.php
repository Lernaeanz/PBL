<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cek Tiket</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    /* Optional custom styles */
    .popup {
      display: none;
    }

    .popup.active {
      display: block;
    }
  </style>
</head>

<body class="bg-[#003366] box-border flex-shrink-0 h-[9.5rem]">
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
                <a href="faq.php" class="block rounded-md text-decoration-none p-3 text-white hover:bg-[#003366]">Faq</a>
                <a href="tiket.php" class="block rounded-md text-decoration-none p-3 text-white hover:bg-[#003366]">Tiket</a>
                <a href="cek tiket.php" class="block rounded-md text-decoration-none p-3 text-white hover:bg-[#003366]">Cek Tiket</a>
                <a href="riwayat tiket.php" class="block rounded-md text-decoration-none p-3 text-white hover:bg-[#003366]">Riwayat Tiket</a>
            </nav>
        </div>
        <!-- Check Tiket -->
        <div class="h-[325px] w-[500px] absolute left-[500px] top-[250px] bg-slate-600 bg-opacity-50 p-4">
            <h1 class="text-white text-3xl font-bold">Cek Tiket</h1>
        </div>
        <div class="content pl-[500px] overflow-auto">
            <form action="" class="max-w-md" method="get">
                <div class="absolute left-[600px] top-[350px]">
                    <label class="block text-white">Tiket:</label>
                    <input type="number" class="w-[300px] p-2 border-white" name="id">
                </div>
                <button type="submit" class="bg-[#dd8500] text-white absolute top-[500px] px-4 py-2 rounded hover:bg-blue-600" value="submit">
                    Submit
                </button>
            </form>
        </div>
        <?php
        include 'koneksi.php';
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $query = mysqli_query($koneksi, "SELECT pertanyaan, jawaban FROM tiket WHERE tiket_id='$id'");
            $data = $query->fetch_assoc();
        }
        ?>
        <?php if (isset($data)) { ?>
            <div id="myPopup" class="popup fixed absolute top-[120px] left-[320px] bg-white p-8 shadow-lg rounded-lg h-[550px] w-[700px] active">
                <div class="mb-4 absolute top-[200px] left-[30px]">
                    <label for="pertanyaan" class="block text-black font-bold">jawaban :</label>
                    <div class="w-[636px] h-[110px] p-2 bg-slate-100 shadow-sm border border-black rounded absolute"><?php echo $data['jawaban'] ?></div>
                </div>
                <div class="mb-4 absolute top-[30px] left-[30px]">
                    <label for="pertanyaan" class="block text-black font-bold">pertanyaan :</label>
                    <div class="w-[636px] h-[110px] p-2 bg-slate-100 shadow-sm border border-black rounded absolute"><?php echo $data['pertanyaan'] ?></div>
                </div>
                <button id="closePopup" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded absolute bottom-[20px] right-[40px]">
                    Close
                </button>
            </div>
        <?php } ?>
    </div>

    <script>
    const openPopupButtons = document.querySelectorAll('.openPopup');
    const closePopupButton = document.getElementById('closePopup');
    const popup = document.getElementById('myPopup');

    openPopupButtons.forEach(button => {
      button.addEventListener('click', () => {
        popup.classList.add('active');
      });
    });

    closePopupButton.addEventListener('click', () => {
      popup.classList.remove('active');
    });
  </script>
</body>

</html>