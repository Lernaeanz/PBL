<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
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
        <div class="h-[120px] w-screen bg-[#25283f]">
          
        </div>
    </div>

            <!-- login -->
           
           <div>
            <h2 class=" right-[560px]  text-white absolute top-[225px] ">LOGIN</h2>
           </div>
            
           
            <div class="absolute right-[470px] top-[300px]">
              
                  <div class="">
                    <label for="username" class="block text-sm font-medium text-white">NIK :</label>
                    <input
                      type="text"
                      id="username"
                      name="username"
                      class="w-64 px-3 py-2 border rounded-lg"
                    />
                  </div>
                  <div class="">
                    <label for="password" class="block text-sm font-medium text-white">password :</label>
                    <input
                        type="password"
                        id="password"
                        name="password" 
                        class="w-64 px-3 py-2 border rounded-lg"/>
                  </div>
                   
                    <label for="pilihan" class="block text-sm font-medium text-white">Masuk sebagai</label>
                    <a href="login admin.php" class="text-red-600 absolute top-[150px]  text-decoration-none">ADMIN</a>
                    <a href="login superadmin.php" class="text-red-600  left-[80px] top-[150px] absolute text-decoration-none">SUPER ADMIN</a> 
                    <a href="alternatif login user.php" class="text-red-600  left-[200px] top-[150px] absolute text-decoration-none">USER</a>
                    
                        <!-- button login -->
                        <div class="absolute right-[85px] top-[200px]  bg-white rounded-lg">
                            <button type="submit" class="text-black text-decoration-none font-mono font-bold px-4 py-2 rounded-lg hover:bg-sky-800">
                                <a href="dashboard admin.php" class="text-black text-decoration-none">Login</a>
                            </button>
                        </div>

        </div>
     </div>
     
</body>
</html>