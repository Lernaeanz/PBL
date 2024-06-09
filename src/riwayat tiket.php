<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Tiket</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-gray-300 box-border flex-shrink-0 h[9.5rem]">
    <div class="logo">
        <p class="text-white text-5xl absolute top-0 left-0 mx-60 my-8 font-serif">HELPDESK</p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Logo_Universitas_Brawijaya.svg/2036px-Logo_Universitas_Brawijaya.svg.png" alt="Logo UB" class="w-15 h-16 absolute top-0 left-10 mx-3 my-4">
        <img src="https://ehub.kemenkopukm.go.id/storage/collaborators/logo/80/1696863312_rebranding-vokasi-logo-04.png" alt="Logo vokasi" class="w-15 h-16 absolute top-0 left-12 mx-20 my-4">
        <div class="h-[120px] w-screen bg-[#233f87]"></div>
    </div>
    <!-- sidebar -->
    <div class="flex flex-col lg:flex-row">
        <div class=" h-screen w-[200px] bg-[#dd8500] p-[20px]">
            <nav class="space-y-2">
                <a href="faq.php" class="block rounded-md text-decoration-none p-3 text-white hover:bg-[#003366] font-serif">Faq</a>
                <a href="tiket.php" class="block rounded-md text-decoration-none p-3 text-white hover:bg-[#003366] font-normal">Tiket</a>
                <a href="cek tiket.php" class="block rounded-md text-decoration-none p-3 text-white hover:bg-[#003366] font-normal">Cek Tiket</a>
                <a href="riwayat tiket.php" class="block rounded-md text-decoration-none p-3 absolute text-white hover:bg-[#003366] font-normal">Riwayat Tiket</a>
            </nav>
        </div>

        <!-- logout logo -->
        <div class="right-[1150px] top-[600px] absolute">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
            </svg>
        </div>

        <!-- Riwayat Tiket -->
        <div class="right flex-grow p-[20px]">
            <h1 class="text-black text-2xl font-bold">Riwayat Tiket</h1>

            <div class="flex items-center space-x-4 mb-4">
                <!-- Search Input -->
                <div class="relative pl-[700px]">
                    <form action="" method="get">
                        <input type="text" placeholder="   Cari tiket ..." class="w-[200px] h-[40px] border border-gray-300 rounded-md" name="key">
                        <input type="submit" value="cari">
                    </form>
                </div>
                <?php 
                if(isset($_GET['key'])) {
                    $keyword = $_GET['key'];
                }
                ?>

                <!-- logo refresh -->
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                        <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                    </svg>
                </div>

                <!-- logo filter -->
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-filter-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path d="M6 11.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </div>
            </div>

            <!-- tabel -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white  border-gray-300">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 px-4 py-2">Nomor</th>
                            <th class="border border-gray-300 px-4 py-2">ID Tiket</th>
                            <th class="border border-gray-300 px-4 py-2">Pertanyaan</th>
                            <th class="border border-gray-300 px-4 py-2">Kategori</th>
                            <th class="border border-gray-300 px-4 py-2">Tanggal</th>
                        </tr>
                    </thead>
                    <!-- isi tabel -->
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        if ($keyword !== "" && isset($keyword)) {
                            $query = mysqli_query($koneksi, "SELECT * FROM tiket WHERE tiket_id='$keyword'");
                        } else {
                            $query = mysqli_query($koneksi, "SELECT * FROM tiket");
                        }
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2"><?php echo $no ?></td>
                                <td class="border border-gray-300 px-4 py-2"><?php echo $data['tiket_id'] ?></td>
                                <td class="border border-gray-300 px-4 py-2"><?php echo $data['pertanyaan'] ?></td>
                                <td class="border border-gray-300 px-4 py-2"><?php echo $data['kategori'] ?></td>
                                <td class="border border-gray-300 px-4 py-2"><?php echo $data['tanggal'] ?></td>
                            </tr>
                        <?php $no++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>