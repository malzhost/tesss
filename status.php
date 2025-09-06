<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cek Status Order</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Ramabhadra&family=Tilt+Neon&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
        .animate-fadeIn { animation: fadeIn 0.8s ease-out; }
  </style>
</head>
<body class="bg-gradient-to-br from-gray-800 via-gray-900 to-black text-white min-h-screen flex items-center justify-center px-4" style="font-family: 'Ramabhadra', sans-serif; font-family: 'Tilt Neon', sans-serif; user-select: none;">
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

  <div onclick="window.location.href='../profile'" 
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
  <p class="mt-3 text-gray-400 text-xs italic">
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
      <a href="../withdraw" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-gray-700 transition transform hover:scale-[1.02] border border-gray-700">
        <i class="fa-solid fa-money-bill text-xl"></i>
        <div>
          <span class="text-white font-semibold">Withdraw</span>
          <p class="text-gray-400 text-xs group-hover:text-gray-200">Tarik saldo tools menjadi saldo kembali</p>
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
      <a href="owner.html" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-yellow-500 hover:text-black transition transform hover:scale-[1.02] border border-gray-700">
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

  <div class="bg-gray-900 text-white w-full max-w-sm p-6 rounded-xl shadow-lg animate-fadeIn">
    <h2 class="text-2xl font-bold mb-4 text-center">Cek Status Order</h2>
    <div class="bg-gray-800 rounded-lg p-4 mb-6 shadow-inner text-center">
      <i class="fa-solid fa-clipboard-list text-4xl text-indigo-400 mb-2"></i>
      <h3 class="text-lg font-semibold text-indigo-300">Pantau Pesananmu</h3>
      <p class="text-sm text-gray-400 mt-1 leading-relaxed">
        Masukkan <span class="text-yellow-300 font-medium">Order ID</span> kamu untuk melihat status terbaru dari pesanan.
      </p>
    </div>

    <form id="orderForm" class="space-y-4">
      <div class="relative">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
          <i class="fa-solid fa-user"></i>
        </span>
        <input
          type="text"
          id="username"
          name="username"
          value="oshitime"
          readonly
          class="w-full pl-10 pr-4 py-2 rounded-lg text-gray-900 bg-gray-100 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500"
        />
      </div>

      <div class="relative">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
          <i class="fa-solid fa-hashtag"></i>
        </span>
        <input
          type="text"
          id="order_id"
          name="order_id"
          placeholder="Masukkan Order ID (contoh: 1107)"
          class="w-full pl-10 pr-4 py-2 rounded-lg text-gray-900 bg-gray-100 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500"
        />
      </div>

      <button
        type="submit"
        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-lg transition duration-200"
      >
        Cek Status
      </button>
    </form>

    <p class="text-sm text-gray-400 text-center mt-4">
      Kamu bisa cek 1 atau beberapa ID sekaligus (pisahkan dengan koma).
    </p>
  </div>

  <script>
  $('#orderForm').on('submit', function (e) {
    e.preventDefault();
    const order_id = $('#order_id').val().trim();
    if (!order_id) {
      Swal.fire({
        icon: 'warning',
        title: 'Form Kosong!',
        text: 'Silakan masukkan Order ID terlebih dahulu.',
        background: '#1f2937',
        color: '#e5e7eb',
        confirmButtonColor: '#fbbf24'
      });
      return;
    }

    $.ajax({
      url: 'check_order.php',
      type: 'POST',
      data: { order_id },
      headers: { "X-Requested-With": "XMLHttpRequest" },
      success: function(res) {
        if(res.status){
          if(res.data){
            Swal.fire({
              icon: 'info',
              title: 'Status Order',
              html: `
                <div class="bg-gray-700 rounded-lg p-3 text-left space-y-1 text-sm text-gray-200">
                  <p><span class="text-gray-400">ID Order:</span> <span class="text-white font-semibold">${res.data.id}</span></p>
                  <p><span class="text-gray-400">Status:</span> <span class="text-yellow-300 font-semibold">${res.data.status}</span></p>
                </div>
              `,
              background: '#1f2937',
              color: '#e5e7eb',
              confirmButtonColor: '#4f46e5'
            });
          } else if(res.orders){
            let list = '';
            Object.keys(res.orders).forEach(k => {
              list += `<p><span class="text-indigo-400 font-semibold">#${k}</span> - ${res.orders[k]}</p>`;
            });
            Swal.fire({
              icon: 'info',
              title: 'Hasil Mass Check',
              html: `<div class="bg-gray-700 rounded-lg p-3 text-left space-y-1 text-sm text-gray-200">${list}</div>`,
              background: '#1f2937',
              color: '#e5e7eb',
              confirmButtonColor: '#4f46e5'
            });
          }
        } else {
          Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: res.msg || 'Tidak dapat menemukan order.',
            background: '#1f2937',
            color: '#e5e7eb',
            confirmButtonColor: '#ef4444'
          });
        }
      },
      error: function() {
        Swal.fire({
          icon: 'error',
          title: '🛑 Error',
          text: 'Gagal terhubung ke server.',
          background: '#1f2937',
          color: '#e5e7eb',
          confirmButtonColor: '#ef4444'
        });
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
