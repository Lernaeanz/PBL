<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
</head>
<body class="bg-[#C2CCD7] box-border flex-shrink-0 h[9.5rem]">
    <div class="logo">
        <p class="text-white text-5xl absolute top-0 left-0 mx-60 my-8 font-serif">HELPDESK</p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Logo_Universitas_Brawijaya.svg/2036px-Logo_Universitas_Brawijaya.svg.png" 
            alt="Logo UB" class="w-15 h-16 absolute top-0 left-10 mx-3 my-4">
        <img src="https://ehub.kemenkopukm.go.id/storage/collaborators/logo/80/1696863312_rebranding-vokasi-logo-04.png" 
            alt="Logo vokasi" class="w-15 h-16 absolute top-0 left-12 mx-20 my-4">
        <div class="h-[120px] w-screen bg-[#233f87]">
          
        </div>
    </div>

            <!-- login -->
           
           <div>
            <h2 class=" left-[600px] text-black absolute top-[250px] ">LOGIN</h2>
           </div>
            
           <div class="">
            <div class="absolute left-[530px] top-[300px]">


              <form action="konfirmasilogin.php" method="post">
                  <div class="">
                    <label for="username" class="block text-sm font-medium text-black">Username :</label>
                    <input
                      type="text"
                      id="username"
                      name="username"
                      class="w-64 px-3 py-2 border rounded-lg"
                    />
                  </div>
                  <div class="">
                    <label for="email" class="block text-sm font-medium text-black">Email :</label>
                    <input
                        type="text"
                        id="email"
                        name="email"
                        class="w-64 px-3 py-2 border rounded-lg"
                    />
                </div>
                    <!-- kategori masuk -->
                    <label for="pilihan" class="block text-sm font-medium text-black">Masuk sebagai</label>
                    <select id="pilihan" name ="pilihan" class="border rounded-lg mb-4">
                        <option value="user">USER</option> 
                        <option value="admin">ADMIN</option>
                        <option value="superadmin">SUPER ADMIN</option>
                    </select>
                        <!-- button login -->
                        <div class="absolute right-[85px] top-[200px]  bg-yellow-600 rounded-lg">
                            <button type="submit" name="login" value="login" class="text-white text-decoration-none font-mono font-bold px-4 py-2 rounded-lg hover:bg-sky-800">
                                <a>Login</a>
                            </button>
                        </div>
                      
                </form>
          </div>
           </div>
     </div>
     
</body>
</html>