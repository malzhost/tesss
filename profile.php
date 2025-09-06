<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Setting Profil</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ramabhadra&family=Tilt+Neon&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to   { opacity: 1; transform: scale(1); }
        }
        .animate-fadeIn { animation: fadeIn 0.8s ease-out; }
  </style>
</head>
<body class="bg-gradient-to-br from-gray-800 via-gray-900 to-black text-white min-h-screen px-4"
      style="font-family: 'Ramabhadra', sans-serif; font-family: 'Tilt Neon', sans-serif; user-select: none;">

<nav class="fixed z-50 top-0 left-0 right-0 flex items-center justify-between 
            backdrop-blur-md bg-gray-900/80 border border-gray-700 
            p-3 mx-auto rounded-2xl shadow-xl fade-in transition-all duration-500" 
     style="margin: 8px;">
  <div class="flex items-center flex-shrink-0 text-white">
    <a href="#" id="brand-text"
       class="ml-4 text-2xl font-extrabold text-white bg-gradient-to-r from-indigo-600 to-blue-500 
              hover:from-blue-600 hover:to-indigo-500 px-5 py-2 rounded-2xl shadow-md 
              transition-all duration-300 flex items-center gap-3 hover:scale-105"
       style="transform: rotate(-2deg); display: inline-block;">
      <i class="fas fa-server text-cyan-300 text-2xl animate-pulse"></i>
      <span id="brand-anim" class="tracking-wide">X-TOOLS SOSMED</span>
    </a>
  </div>
  <div class="block lg:hidden mr-3">
    <button id="menu-toggle" 
            class="px-4 py-2 border rounded-xl text-gray-200 border-gray-500 
                   bg-gray-800/70 hover:bg-gray-700 hover:border-gray-300 
                   hover:text-white shadow-md transition-all duration-300 hover:scale-105">
      <i class="fas fa-bars text-lg"></i>
    </button>
  </div>
</nav>
<div id="sidebar" class="fixed top-0 left-0 w-80 h-full bg-gray-900 shadow-2xl transform -translate-x-full transition-transform duration-300 z-[9999] flex flex-col">

  <div class="p-4 bg-gray-600 flex justify-between items-center shadow-md flex-shrink-0">
    <h2 class="text-lg font-semibold text-white">Dashboard Menu</h2>
    <button id="close-sidebar" class="text-white hover:text-red-300 text-2xl transition">
      <i class="fas fa-times"></i>
    </button>
  </div>

  <div class="flex-1 overflow-y-auto">
    <nav class="p-6 space-y-4">
       <a href="../" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-gray-700 transition transform hover:scale-[1.02] border border-gray-700">
        <div class="relative">
          <i class="fas fa-house text-xl"></i>
        </div>
        <div>
          <span class="text-white font-semibold">Home</span>
          <p class="text-gray-400 text-xs group-hover:text-gray-200">Kembali ke home</p>
        </div>
      </a>
      <a href="../history" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-gray-700 transition transform hover:scale-[1.02] border border-gray-700">
        <div class="relative">
          <i class="fas fa-history text-xl"></i>
          <span class="absolute -top-1 -right-2 bg-red-500 text-white text-xs px-1 rounded-full">3</span>
        </div>
        <div>
          <span class="text-white font-semibold">History</span>
          <p class="text-gray-400 text-xs group-hover:text-gray-200">Lihat riwayat transaksi Anda</p>
        </div>
      </a>
      <a href="../topup" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-gray-700 transition transform hover:scale-[1.02] border border-gray-700">
        <i class="fa-solid fa-credit-card text-xl"></i>
        <div>
          <span class="text-white font-semibold">TopUp</span>
          <p class="text-gray-400 text-xs group-hover:text-gray-200">Topup limit akun anda</p>
        </div>
      </a>
      <a href="../status" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-gray-700 transition transform hover:scale-[1.02] border border-gray-700">
        <i class="fa-solid fa-clipboard-list text-xl"></i>
        <div>
          <span class="text-white font-semibold">Status Order</span>
          <p class="text-gray-400 text-xs group-hover:text-gray-200">Check status orderan sosmed</p>
        </div>
      </a>       
      <a href="../redem" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-gray-700 transition transform hover:scale-[1.02] border border-gray-700">
        <i class="fa-solid fa-gift text-xl"></i>
        <div>
          <span class="text-white font-semibold">Redem Voucher</span>
          <p class="text-gray-400 text-xs group-hover:text-gray-200">Dapatkan limit gratis</p>
        </div>
      </a>
      <a href="../informasi" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-yellow-500 hover:text-black transition transform hover:scale-[1.02] border border-gray-700">
        <i class="fas fa-circle-info text-xl"></i>
        <div>
          <span class="text-white font-semibold group-hover:text-black">Informasi</span>
          <p class="text-gray-400 text-xs group-hover:text-black">Informasi tentang tools</p>
        </div>
      </a>
      <a href="../tutorial" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-gray-700 hover:text-black transition transform hover:scale-[1.02] border border-gray-700">
        <i class="fas fa-circle-question text-xl"></i>
        <div>
          <span class="text-white font-semibold group-hover:text-black">Tutorial</span>
          <p class="text-gray-400 text-xs group-hover:text-black">Tutorial penggunaan tools</p>
        </div>
      </a>
      <a href="../owner.html" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-yellow-500 hover:text-black transition transform hover:scale-[1.02] border border-gray-700">
        <i class="fas fa-user-alt text-xl"></i>
        <div>
          <span class="text-white font-semibold group-hover:text-black">Owner</span>
          <p class="text-gray-400 text-xs group-hover:text-black">Informasi pemilik aplikasi</p>
        </div>
      </a>
      <a href="../assets/logout.php" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-red-500 hover:text-black transition transform hover:scale-[1.02] border border-gray-700">
        <i class="fas fa-sign-out-alt text-white text-xl"></i>
        <div>
          <span class="text-white font-semibold group-hover:text-black">Logout</span>
          <p class="text-gray-400 text-xs group-hover:text-black">Keluar dari akun Anda</p>
        </div>
      </a>

      <div class="grid grid-cols-3 gap-2 mt-8 text-center text-xs">
        <div>
          <i class="fas fa-bolt text-yellow-400 text-lg"></i>
          <p class="text-gray-400 mt-1">Cepat</p>
        </div>
        <div>
          <i class="fas fa-shield-alt text-green-400 text-lg"></i>
          <p class="text-gray-400 mt-1">Aman</p>
        </div>
        <div>
          <i class="fas fa-check-circle text-blue-400 text-lg"></i>
          <p class="text-gray-400 mt-1">Terverifikasi</p>
        </div>
      </div>
    </nav>
  </div>

  <div class="flex-shrink-0 p-4 text-center text-gray-500 text-xs border-t border-gray-700">
    © 2025 xtools. All Rights Reserved.
  </div>
</div>

<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-30"></div>

<div class="mt-28 flex items-center justify-center">
  <div class="bg-gray-900 text-white w-full max-w-md p-6 rounded-2xl shadow-xl animate-fadeIn border border-gray-700 relative">
    <!-- Header -->
    <div class="bg-indigo-500 p-4 rounded-xl text-center shadow-md mb-6">
      <i class="fa-solid fa-user-circle text-5xl text-white drop-shadow-lg"></i>
      <h2 class="text-2xl font-bold mt-2">Pengaturan Profil</h2>
      <p class="text-gray-200 text-sm mt-1">Atur informasi akun kamu dengan mudah dan aman.</p>
    </div>
<div class="bg-gradient-to-r from-green-500 to-emerald-600 text-white p-4 rounded-xl shadow-lg mb-6 text-center">
  <h3 class="text-lg font-semibold">Saldo Akun</h3>
  <p class="text-2xl font-bold mt-2">Rp 0</p>
  <p class="text-sm mt-1 opacity-90">Gunakan saldo untuk melakukan transaksi.</p>
</div>

    <form id="profileForm" class="space-y-4">
  <div class="relative">
    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
      <i class="fa-solid fa-user"></i>
    </span>
    <input type="text" name="username" value="oshitime" readonly
      class="w-full pl-10 pr-4 py-2 rounded-lg text-gray-900 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
  </div>

  <div class="relative">
    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
      <i class="fa-solid fa-envelope"></i>
    </span>
    <input type="email" name="email" value="oshitimeofficial@gmail.com"
      class="w-full pl-10 pr-4 py-2 rounded-lg text-gray-900 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-pink-500">
  </div>

  <div class="relative">
    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
      <i class="fa-solid fa-key"></i>
    </span>
    <input type="password" name="old_password" placeholder="Password Lama" required
      class="w-full pl-10 pr-4 py-2 rounded-lg text-gray-900 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-red-500">
  </div>

  <div class="relative">
    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
      <i class="fa-solid fa-lock"></i>
    </span>
    <input type="password" name="new_password" placeholder="Password Baru"
      class="w-full pl-10 pr-4 py-2 rounded-lg text-gray-900 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-500">
  </div>

  <button type="submit"
    class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-semibold py-2 rounded-lg transition duration-200 shadow-lg">
    Simpan Perubahan
  </button>
</form>

    <div class="mt-6 border-t border-gray-700 pt-4 text-center">
      <p class="text-sm text-gray-400">Pastikan data kamu benar untuk keamanan akun.</p>
    </div>
  </div>

<script>
$('#profileForm').on('submit', function (e) {
  e.preventDefault();

  let formData = new FormData(this);

  $.ajax({
    url: 'update_profile.php',
    type: 'POST',
    data: formData,
    processData: false,
    contentType: false,
    success: function (res) {
      try {
        let json = JSON.parse(res);
        if (json.status === "success") {
          Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: json.message,
            confirmButtonColor: '#4f46e5'
          });
        } else {
          Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: json.message,
            confirmButtonColor: '#ef4444'
          });
        }
      } catch (e) {
        console.error("Error parsing response:", res);
      }
    }
  });
});
  $('#menu-toggle').on('click', ()=>{ 
    $('#sidebar').removeClass('-translate-x-full'); 
    $('#overlay').show(); 
  });
  $('#close-sidebar, #overlay').on('click', ()=>{ 
    $('#sidebar').addClass('-translate-x-full'); 
    $('#overlay').hide(); 
  });
</script>
</body>
</html>
