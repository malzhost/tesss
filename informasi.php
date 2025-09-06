<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>X-TOOLS SOSMED || Informasi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Ramabhadra&family=Tilt+Neon&display=swap" rel="stylesheet"> 
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gradient-to-br from-gray-800 via-gray-900 to-black text-gray-200" style="font-family: 'Tilt Neon', sans-serif;">

<!-- 🔹 Navbar -->
<nav class="fixed z-50 top-0 left-0 right-0 flex items-center justify-between 
            backdrop-blur-md bg-gray-900/80 border border-gray-700 
            p-3 mx-auto rounded-2xl shadow-xl fade-in transition-all duration-500" 
     style="margin: 8px;">
  <div class="flex items-center flex-shrink-0 text-white">
    <a href="/dashboard" 
       class="ml-4 text-2xl font-extrabold text-white bg-gradient-to-r from-indigo-600 to-blue-500 
              hover:from-blue-600 hover:to-indigo-500 px-5 py-2 rounded-2xl shadow-md 
              transition-all duration-300 flex items-center gap-3 hover:scale-105"
       style="transform: rotate(-2deg); display: inline-block;">
      <i class="fas fa-server text-cyan-300 text-2xl animate-pulse"></i>
      <span class="tracking-wide">X-TOOLS SOSMED</span>
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

<!-- 🔹 Overlay Sidebar -->
<div id="sidebar" class="fixed top-0 left-0 w-80 h-full bg-gray-900 shadow-2xl transform -translate-x-full transition-transform duration-300 z-[9999] flex flex-col">

  <div onclick="window.location.href='/profile'" 
     class="p-6 bg-gradient-to-r from-gray-800 to-gray-700 rounded-b-2xl shadow-lg flex-shrink-0 cursor-pointer hover:bg-gray-600 transition">
  <div class="flex items-center gap-4">
    <img src="/assets/profile_1757160087.jpg" alt="Profil" 
         class="w-14 h-14 rounded-full shadow-md">
    <div>
      <h2 class="text-xl font-bold text-white">oshitime</h2>
      <p class="text-gray-300 text-sm flex items-center gap-1">
        <i class="fa-solid fa-wallet text-green-400"></i> 
        <span>Rp 0</span>
      </p>
    </div>
  </div>
  <p class="mt-3 text-gray-400 text-xs">
    Selamat datang kembali, semoga harimu menyenangkan!
  </p>
</div>

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
          <i class="fas fa-house text-white text-xl"></i>
        </div>
        <div>
          <span class="text-white font-semibold">Home</span>
          <p class="text-gray-400 text-xs group-hover:text-gray-200">Kembali ke home</p>
        </div>
      </a>
      <a href="../order" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-gray-700 transition transform hover:scale-[1.02] border border-gray-700">
        <div class="relative">
          <i class="fas fa-cart-shopping text-xl"></i>
        </div>
        <div>
          <span class="text-white font-semibold">Order</span>
          <p class="text-gray-400 text-xs group-hover:text-gray-200">Membuat orderan sosmed anda</p>
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

<div class="pt-24 max-w-4xl mx-auto px-4 pb-10">
  <section class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-xl shadow-md p-6 mb-6 text-center">
    <h2 class="text-2xl font-bold">Informasi & Berita Terbaru</h2>
    <p class="mt-2 text-sm">Update terbaru mengenai layanan <b>X-TOOLS SOSMED</b></p>
  </section>

            <div class="bg-gray-900 rounded-xl shadow-md border border-gray-700 overflow-hidden mb-6">
        <div class="bg-gray-800 px-4 py-2 border-b border-gray-700 flex items-center gap-2">
          <i class="fa-solid fa-bullhorn text-yellow-400"></i>
          <h3 class="font-semibold">Layanan</h3>
        </div>
        <div class="p-4 leading-relaxed text-gray-300">
          <p>🚧Layanan sedang maintenance sampai waktu yang tidak ditentukan</p>
          <p class="text-xs text-gray-500 mt-3">Diposting: 2025-09-06 20:03</p>
        </div>
      </div>
          <div class="bg-gray-900 rounded-xl shadow-md border border-gray-700 overflow-hidden mb-6">
        <div class="bg-gray-800 px-4 py-2 border-b border-gray-700 flex items-center gap-2">
          <i class="fa-solid fa-bullhorn text-yellow-400"></i>
          <h3 class="font-semibold">Update TopUp</h3>
        </div>
        <div class="p-4 leading-relaxed text-gray-300">
          <p>Sekarang kalian tidak perlu khawatir jika topup saldo tidak masuk karena sudah kami fix, kenyamanan kalian adalah prioritas bagi kami. 😊</p>
          <p class="text-xs text-gray-500 mt-3">Diposting: 2025-09-06 20:01</p>
        </div>
      </div>
          <div class="bg-gray-900 rounded-xl shadow-md border border-gray-700 overflow-hidden mb-6">
        <div class="bg-gray-800 px-4 py-2 border-b border-gray-700 flex items-center gap-2">
          <i class="fa-solid fa-bullhorn text-yellow-400"></i>
          <h3 class="font-semibold">Flash Sale</h3>
        </div>
        <div class="p-4 leading-relaxed text-gray-300">
          <p>Akan hadir fitur Flash Sale Paket Sosmed tiap akhir bulan!</p>
          <p class="text-xs text-gray-500 mt-3">Diposting: 2025-09-07 12:00</p>
        </div>
      </div>
          <div class="bg-gray-900 rounded-xl shadow-md border border-gray-700 overflow-hidden mb-6">
        <div class="bg-gray-800 px-4 py-2 border-b border-gray-700 flex items-center gap-2">
          <i class="fa-solid fa-bullhorn text-yellow-400"></i>
          <h3 class="font-semibold">Update Sistem</h3>
        </div>
        <div class="p-4 leading-relaxed text-gray-300">
          <p>Server X-TOOLS SOSMED telah diperbarui agar lebih cepat &amp; stabil.</p>
          <p class="text-xs text-gray-500 mt-3">Diposting: 2025-09-06 16:10</p>
        </div>
      </div>
      </div>

<footer class="text-center text-gray-500 text-sm py-6 border-t border-gray-800">
  © 2025 X-TOOLS SOSMED - Semua Hak Dilindungi
</footer>

<script>
  $("#menu-toggle").click(function() {
    $("#sidebar").removeClass("-translate-x-full");
    $("#overlay").removeClass("hidden");
  });
  $("#close-sidebar, #overlay").click(function() {
    $("#sidebar").addClass("-translate-x-full");
    $("#overlay").addClass("hidden");
  });
</script>
</body>
</html>
