<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ</title>
    <link rel="stylesheet" href="../dist/output.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body class="bg-[#D6DFE8] box-border flex-shrink-0 h[9.5rem]">
    <div class="logo">
      <p
        class="text-white text-5xl absolute top-0 left-0 mx-60 my-8 font-serif z-10"
      >
        HELPDESK
      </p>
      <img
        src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Logo_Universitas_Brawijaya.svg/2036px-Logo_Universitas_Brawijaya.svg.png"
        alt="Logo UB"
        class="w-15 h-16 absolute top-0 left-10 mx-3 my-4 z-10"
      />
      <img
        src="https://ehub.kemenkopukm.go.id/storage/collaborators/logo/80/1696863312_rebranding-vokasi-logo-04.png"
        alt="Logo vokasi"
        class="w-15 h-16 absolute top-0 left-12 mx-20 my-4 z-10"
      />
      <div class="h-[120px] w-screen bg-[#233f87] absolute"></div>
    </div>

    <h1 class="text-2xl font-bold text-black absolute top-[175px] left-[575px]">FAQ</h1>
    <!-- dropdown pertanyaan -->

    <div class="wrapper w-5/6 left-[100px] top-[300px] absolute z-10">
      <div class="tab mb-2 bg-white shadow-lg rounded-md relative">
        <input type="checkbox" id="input" class="absolute peer opacity-0" />
        <label
          for="input"
          class="font-bold tracking-[1px] mx-[20px] h-[50px] flex items-center"
          >Keuangan</label
        >
        <div
          class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-500"
        >
          <ion-icon name="chevron-down-outline"></ion-icon>
        </div>
        <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
          <div>
            <ul class="px-4 py-1 hover:bg-slate-500 border-b">
              Pertanyaan : Bagaimana cara mengajukan keringanan UKT?
              <li>Keringanan pembayaran UKT bisa melalui SIBAKU UB yang bisa diakses di https://sibaku.ub.ac.id/</li>
            </ul>
            <ul class="px-4 py-1 hover:bg-slate-500 border-b">
              Bagaimana cara mengajukan cicilan pembayaran Iuran Pengembangan Institusi (IPI)?
              <li>Pengajuan pembayaran IPI bisa diaujkan melalui SIBAKU UB yang dapat diakses di https://sibaku.ub.ac.id/</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="tab mb-2 bg-white shadow-lg rounded-md relative">
        <input type="checkbox" id="input1" class="absolute peer opacity-0" />
        <label
          for="input1"
          class="font-bold tracking-[1px] mx-[20px] h-[50px] flex items-center"
          >Kelas</label
        >
        <div
          class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-500"
        >
          <ion-icon name="chevron-down-outline"></ion-icon>
        </div>
        <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
          <div>
            <div>
              <ul class="px-4 py-1 hover:bg-slate-500 border-b">
                Perlengkapan di dalam kelas tidak lengkap ?
                <li>bisa menghubungi bagian tenaga kerja</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="tab mb-2 bg-white shadow-lg rounded-md relative">
        <input type="checkbox" id="input2" class="absolute peer opacity-0" />
        <label
          for="input2"
          class="font-bold tracking-[1px] mx-[20px] h-[50px] flex items-center"
          >Prestasi</label
        >
        <div
          class="absolute top-[15px] right-[30px] rotate-0 peer-checked:rotate-180 duration-500"
        >
          <ion-icon name="chevron-down-outline"></ion-icon>
        </div>
        <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
          <div>
            <div>
              <ul class="px-4 py-1 hover:bg-slate-500 border-b">
                bagaimana pengajuan reward dana?
                <li>pengajuan bisa melalui SIAM</li>
              </ul>
              <ul class="px-4 py-1 hover:bg-slate-500 border-b">
                bagaimana cara memasukan data presetasi?
                <li>data presetasi bisa melalui siam di kolom prestasi</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
    <p class="text-1xl text-black absolute top-[600px] left-[500px]">
      Anda belum menemukan jawaban?
    </p>
    <!-- Add an ID to the button for easier selection -->
    <button
      type="submit"
      id="submitBtn"
      class="absolute top-[650px] left-[570px]"
    >
      <a
        href="login user.php"
        class="text-decoration-none bg-[#dd8500] text-white px-4 py-2 rounded hover:bg-blue-600"
        >klik disini</a
      >
    </button>

    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Get all checkboxes and labels
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        const labels = document.querySelectorAll("label");

        // Add click event listener to each label
        labels.forEach((label, index) => {
          label.addEventListener("click", function () {
            // Close all other questions
            checkboxes.forEach((checkbox, i) => {
              if (i !== index) {
                checkbox.checked = false;
              }
            });
          });
        });
      });
    </script>
  </body>
</html>