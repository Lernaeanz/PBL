<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB superadmin</title>
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
<body class="bg-[#003366] box-border flex-shrink-0 h[9.5rem]">
  <div class="logo">
      <p class="text-white text-5xl absolute top-0 left-0 mx-60 my-8 font-serif">HELPDESK</p>
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Logo_Universitas_Brawijaya.svg/2036px-Logo_Universitas_Brawijaya.svg.png" 
          alt="Logo UB" class="w-15 h-16 absolute top-0 left-10 mx-3 my-4">
      <img src="https://ehub.kemenkopukm.go.id/storage/collaborators/logo/80/1696863312_rebranding-vokasi-logo-04.png" 
          alt="Logo vokasi" class="w-15 h-16 absolute top-0 left-12 mx-20 my-4">
      <div class="h-[120px] w-screen bg-[#25283f]">
        
      </div>
  </div>

<div class="flex">
            <!--  chceck Tiket -->
            <div class="h-[100px] w-[600px] absolute left-[90px] top-[150px] bg-slate-600 rounded p-4">
                <h1 class="text-white text-xl font-bold h-[325px] w-[500px] absolute left-[10px] top-[15px]">HAI, SELAMAT DATANG SUPER ADMIN HELPDESK</h1>
                <p class="text-white font-bold h-[325px] w-[500px] absolute left-[10px] top-[50px]">Atur hak akses admin dan pengelolaan database</p>
            </div>

            <div class="content pl-[500px] overflow-auto ">
                <form action="#" class="max-w-md">
                    <div class="overflow-x-auto">
                    <?php 
                      include 'koneksi.php';
                      $query = mysqli_query($koneksi,"SELECT * FROM super_admin ");
                      $no = 1;
                      while($data = mysqli_fetch_array($query)){
                      ?>
                        <table class="w-10/12 bg-white border-gray-300 absolute bottom-[60px] left-[90px] rounded">
                            <thead>
                              <tr>
                                <th class="border border-gray-300 px-4 py-2">NO</th>
                                        <th class="border border-gray-300 px-4 py-2">Nama</th>
                                        <th class="border border-gray-300 px-4 py-2">USERNAME</th>
                                        <th class="border border-gray-300 px-4 py-2">EMAIL</th>
                                        <th class="border border-gray-300 px-4 py-2">Edit</th>
                                    
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="border border-gray-400 px-4 py-2">1</td>
                                <td class="border border-gray-400 px-4 py-2">Salnan Ratih Asriningtias, ST.,MT</td>
                                <td class="border border-gray-400 px-4 py-2">2021118803042001</td>
                                <td class="border border-gray-400 px-4 py-2">salnan@gmail.com</td>
                                <td class="border border-gray-400 px-4 py-2"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded openPopup">
                                    edit
                                  </button></td>
                              </tr>
                              <tr>
                                <td class="border border-gray-400 px-4 py-2">2</td>
                                <td class="border border-gray-400 px-4 py-2">Rachmad Andri Atmoko, S.ST, M.T</td>
                                <td class="border border-gray-400 px-4 py-2">2021119102201001</td>
                                <td class="border border-gray-400 px-4 py-2">rachmadandri@gmail.com</td>
                                <td class="border border-gray-400 px-4 py-2"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded openPopup">
                                    edit
                                  </button></td>
                              </tr>
                              <tr>
                                <td class="border border-gray-400 px-4 py-2">3</td>
                                <td class="border border-gray-400 px-4 py-2">Novita Rosyida, S.Si., M.Si</td>
                                <td class="border border-gray-400 px-4 py-2">2014058711232002</td>
                                <td class="border border-gray-400 px-4 py-2">novitarosyida@gmail.com</td>
                                <td class="border border-gray-400 px-4 py-2"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded openPopup">
                                    edit
                                  </button></td>
                              </tr>
                              <!-- Add more rows as needed -->
                            </tbody>
                          </table>
                          <?php } ?>
                          <div id="myPopup" class="popup fixed absolute top-[120px] left-[320px] bg-white p-8 shadow-lg rounded-lg h-[250px] w-[700px]      ">
                            <p class="mb-4">edit disini</p>
                            <button id="closePopup" class="bg-red-500 hover:bg-red-700 absolute left-[600px] top-[200px] text-white font-bold py-2 px-4 rounded">
                              Close
                            </button>
                          </div>
                          <button type="logout" class=" bottom-[15px] left-[85px] absolute">
                    <a href="login user.php" class="bg-red-600 text-white px-4 py-2 text-decoration-none rounded hover:bg-red-800 ">LOGOUT</a>
                </button>
                
                </div>
        </div>
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