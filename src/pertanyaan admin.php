<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pertanyaan Admin</title>
  <link rel="stylesheet" href="../dist/output.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
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

<body class="bg-gray-300 box-border flex-shrink-0 h[9.5rem]">
  <div class="logo">
    <p class="text-white text-5xl absolute top-0 left-0 mx-60 my-8 font-serif">
      HELPDESK
    </p>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Logo_Universitas_Brawijaya.svg/2036px-Logo_Universitas_Brawijaya.svg.png" alt="Logo UB" class="w-15 h-16 absolute top-0 left-10 mx-3 my-4" />
    <img src="https://ehub.kemenkopukm.go.id/storage/collaborators/logo/80/1696863312_rebranding-vokasi-logo-04.png" alt="Logo vokasi" class="w-15 h-16 absolute top-0 left-12 mx-20 my-4" />
    <div class="h-[120px] w-screen bg-[#25283f]"></div>
  </div>
  <!-- sidebar -->
  <div class="flex">
    <div class="left h-screen w-[200px] bg-[#dd8500] p-[20px]">
      <nav class="space-y-2">
        <a href="dashboard admin.php" class="block rounded-md text-decoration-none p-3 text-white hover:bg-[#003366]">Dashboard</a>
        <a href="pertanyaan admin.php" class="block rounded-md text-decoration-none p-3 text-white hover:bg-[#003366]">Pertanyaan</a>
      </nav>
    </div>

    <!-- Pertanyaan Admin -->
    <div class="right flex-grow p-[20px]">
      <h1 class="text-black text-2xl font-bold mb-4">Pertanyaan Admin</h1>
      <div class="flex items-center space-x-4 mb-4">
        <!-- Search Input -->
        <div class="relative pr-[5px]">
          <input type="text" placeholder="Cari tiket..." class="w-[200px] h-[40px] border border-gray-300 rounded-md" />
        </div>
        <div class="w-[200px] h-[80px] block bg-white absolute top-[145px] right-[230px]">
          <p class="font-bold absolute bottom-1 left-0 w-full text-center">
            1
          </p>
          <p class="font-bold absolute bottom-[40px] right-[63px] w-full text-center">
            terjawab:
          </p>
        </div>
        <div class="w-[200px] h-[80px] block bg-white absolute top-[145px] right-[20px]">
          <p class="font-bold absolute bottom-1 left-0 w-full text-center">
            1
          </p>
          <p class="font-bold absolute bottom-10 right-9 w-full text-center">
            belum terjawab:
          </p>
        </div>
        <!-- bootstrap Filter Logo -->
        <div class="rounded-lg border-black">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-filter-right" viewBox="0 0 16 16">
            <path d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
          </svg>
        </div>
      </div>
      <?php
      include 'koneksi.php';
      $query = mysqli_query($koneksi, "SELECT * FROM tiket");
      $no = 1;
      while ($data = mysqli_fetch_array($query)) {
      ?>
        <div class="overflow-x-auto">
          <table class="min-w-full bg-white border-gray-300">
            <thead>
              <tr>
                <th class="border border-gray-300 px-4 py-2">Nomor</th>
                <th class="border border-gray-300 px-4 py-2">ID Tiket</th>
                <th class="border border-gray-300 px-4 py-2">Pertanyaan</th>
                <th class="border border-gray-300 px-4 py-2">Kategori</th>
                <th class="border border-gray-300 px-4 py-2">Tanggal</th>
                <th class="border border-gray-300 px-4 py-2">level</th>
                <th class="border border-gray-300 px-4 py-2">aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="border border-gray-400 px-4 py-2"><?php echo $no++; ?></td>
                <td class="border border-gray-400 px-4 py-2"><?php echo $data['tiket_id']; ?></td>
                <td class="border border-gray-400 px-4 py-2"><?php echo $data['pertanyaan']; ?></td>
                <td class="border border-gray-400 px-4 py-2"><?php echo $data['kategori']; ?></td>
                <td class="border border-gray-400 px-4 py-2"><?php echo $data['tanggal']; ?></td>
                <td class="border border-gray-400 px-4 py-2"><?php echo $data['level']; ?></td>
                <td class="border border-gray-400 px-4 py-2">
                  <a href="" data-toggle="modal" data-target="#modal<?php echo $data['tiket_id'] ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    edit
                  </a>

                  <div class="modal fade" id="modal<?php echo $data['tiket_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Pertanyaan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="edit-pertanyaan.php" method="post">
                            <div class="form-group">
                              <input name="id" type="text" class="form-control p-2 bg-slate-100 shadow-sm border border-black rounded" value="<?php echo $data['tiket_id']; ?>">
                            </div>
                            <div class="form-group">
                              <label for="pertanyaan">Pertanyaan</label>
                              <textarea name="pertanyaan" rows="4" type="textarea" class="form-control p-2 bg-slate-100 shadow-sm border border-black rounded"><?php echo $data['pertanyaan']; ?></textarea>
                            </div>
                            <div class="form-group">
                              <label for="jawaban">Jawaban</label>
                              <textarea rows="4" name="jawaban" type="text" class="form-control p-2 bg-slate-100 shadow-sm border border-black rounded" placeholder="jawab disini..."><?php echo $data['jawaban'] ?></textarea>
                            </div>
                            <div class="form-group my-3">
                              <label class="bg-green-600 hover:bg-green-800 text-white font-bold py-2 px-4 rounded">
                                <input type="radio" name="level" id="LOW" value="LOW"> LOW
                              </label>
                              <label class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                                <input type="radio" name="level" id="MEDIUM" value="MEDIUM"> MEDIUM
                              </label>
                              <label class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-4 rounded">
                                <input type="radio" name="level" id="HIGH" value="HIGH"> HIGH
                              </label>
                            </div>
                            <div class="modal-footer">
                              <input type="submit" name="submit" class="btn btn-primary" value="Kirim">
                            </div>
                          </form>
                        </div>

                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        <?php } ?>




        </div>
    </div>
  </div>
  <!-- <script>
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
</script> -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>
</body>

</html>