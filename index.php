<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>X-TOOLS SOSMED - Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Ramabhadra&family=Tilt+Neon&display=swap" rel="stylesheet"> 
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  .fade-in-up {
    animation: fadeInUp 0.8s ease-out forwards;
  }

  @keyframes spin {
    to { transform: rotate(360deg); }
  }
  .animate-spin-slow {
    animation: spin 1.5s linear infinite;
  }
</style>
</head>
<body class="bg-gradient-to-br from-gray-800 via-gray-900 to-black text-gray-200" style="font-family: 'Tilt Neon', sans-serif;">
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
<div id="loader" class="fixed inset-0 flex items-center justify-center bg-black z-[99999]">
  <div class="flex flex-col items-center">
    <img src="assets/loading.gif" alt="Loading..." class="w-24 h-24">
    <p class="mt-4 text-white font-semibold text-lg animate-pulse">
      Memuat Dashboard...
    </p>
  </div>
</div>
<a href="https://wa.me/6285751951018" target="_blank" 
   class="fixed bottom-6 right-6 z-[99999] bg-green-500 hover:bg-green-600 text-white 
          w-14 h-14 rounded-full flex items-center justify-center shadow-lg transition 
          transform hover:scale-110">
  <i class="fab fa-whatsapp text-3xl"></i>
</a>
  <main class="pt-24 max-w-6xl mx-auto px-4 pb-10">
    <div class="bg-gradient-to-r from-blue-300 to-blue-500 border-l-4 border-blue-700 rounded-lg shadow-lg text-white p-6 mb-6">
      <h2 class="text-2xl font-bold">Dashboard</h2>
      <p class="text-sm mt-1 opacity-90">
        Ringkasan dari total pesanan dan deposit yang telah dilakukan.
        Informasi ini membantu Anda memantau layanan sosmed Anda dengan lebih baik.
      </p>
    </div>
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
      <a href="../order" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-gray-700 transition transform hover:scale-[1.02] border border-gray-700">
        <div class="relative">
          <i class="fas fa-cart-shopping text-xl"></i>
        </div>
        <div>
          <span class="text-white font-semibold">Order</span>
          <p class="text-gray-400 text-xs group-hover:text-gray-200">Membuat orderan sosmed anda</p>
        </div>
      </a>
      <a href="/history" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-gray-700 transition transform hover:scale-[1.02] border border-gray-700">
        <div class="relative">
          <i class="fas fa-history text-xl"></i>
          <span class="absolute -top-1 -right-2 bg-red-500 text-white text-xs px-1 rounded-full">3</span>
        </div>
        <div>
          <span class="text-white font-semibold">History</span>
          <p class="text-gray-400 text-xs group-hover:text-gray-200">Lihat riwayat transaksi Anda</p>
        </div>
      </a>
      <a href="/topup" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-gray-700 transition transform hover:scale-[1.02] border border-gray-700">
        <i class="fa-solid fa-credit-card text-xl"></i>
        <div>
          <span class="text-white font-semibold">TopUp</span>
          <p class="text-gray-400 text-xs group-hover:text-gray-200">Topup limit akun anda</p>
        </div>
      </a>
      <a href="/status" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-gray-700 transition transform hover:scale-[1.02] border border-gray-700">
        <i class="fa-solid fa-clipboard-list text-xl"></i>
        <div>
          <span class="text-white font-semibold">Status Order</span>
          <p class="text-gray-400 text-xs group-hover:text-gray-200">Check status orderan sosmed</p>
        </div>
      </a>    
      <a href="/redem" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-gray-700 transition transform hover:scale-[1.02] border border-gray-700">
        <i class="fa-solid fa-gift text-xl"></i>
        <div>
          <span class="text-white font-semibold">Redem Voucher</span>
          <p class="text-gray-400 text-xs group-hover:text-gray-200">Dapatkan limit gratis</p>
        </div>
      </a>
      <a href="/informasi" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-gray-700 hover:text-black transition transform hover:scale-[1.02] border border-gray-700">
        <i class="fas fa-circle-info text-xl"></i>
        <div>
          <span class="text-white font-semibold group-hover:text-black">Informasi</span>
          <p class="text-gray-400 text-xs group-hover:text-black">Informasi tentang tools</p>
        </div>
      </a>
       <a href="/tutorial" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-gray-700 hover:text-black transition transform hover:scale-[1.02] border border-gray-700">
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
      <a href="assets/logout.php" class="group flex items-center gap-4 py-3 px-4 rounded-lg bg-gray-800 hover:bg-red-500 hover:text-black transition transform hover:scale-[1.02] border border-gray-700">
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

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-gray-900 p-5 rounded-lg shadow flex items-center justify-between border border-gray-700">
        <div>
          <p class="text-gray-400 text-sm">Status Layanan</p>
          <p class="font-bold text-lg text-green-400">Aktif</p>
        </div>
        <i class="fa-solid fa-circle-check text-green-400 text-2xl"></i>
      </div>

      <div class="bg-gray-900 p-5 rounded-lg shadow flex items-center justify-between border border-gray-700">
        <div>
          <p class="text-gray-400 text-sm">Status Server</p>
          <p class="font-bold text-lg text-blue-400">Normal</p>
        </div>
        <i class="fa-solid fa-server text-blue-400 text-2xl"></i>
      </div>

      <div class="bg-gray-900 p-5 rounded-lg shadow flex items-center justify-between border border-gray-700">
        <div>
          <p class="text-gray-400 text-sm">Pesanan Sukses</p>
          <p class="font-bold text-lg">1 / Rp 400</p>
        </div>
        <i class="fa-solid fa-cart-shopping text-green-400 text-2xl"></i>
      </div>

      <div class="bg-gray-900 p-5 rounded-lg shadow flex items-center justify-between border border-gray-700">
        <div>
          <p class="text-gray-400 text-sm">Total Deposit</p>
          <p class="font-bold text-lg">Rp 400</p>
        </div>
        <i class="fa-solid fa-money-bill text-yellow-400 text-2xl"></i>
      </div>
    </div>

<div class="mt-8 bg-gray-900 p-6 rounded-lg shadow border border-gray-700">
  <h3 class="text-lg font-bold mb-4 text-white">Panduan Transaksi</h3>
  <ol class="list-decimal list-inside space-y-2 text-gray-300 text-sm">
    <li>Pilih layanan yang ingin digunakan (Followers, Likes, Views, dsb).</li>
    <li>Masukkan target (contoh: link akun atau video).</li>
    <li>Tentukan jumlah pesanan sesuai kebutuhan Anda.</li>
    <li>Lakukan pembayaran dengan saldo Anda.</li>
    <li>Tunggu beberapa menit, sistem akan memproses secara otomatis.</li>
    <li>Cek status pesanan di menu <span class="text-blue-400 font-semibold">Dashboard</span>.</li>
  </ol>
  <div class="mt-4 p-3 bg-blue-800/30 rounded-md border border-blue-700 text-blue-300 text-xs">
    <i class="fa-solid fa-circle-info mr-2"></i>
    Jika terjadi kendala, segera hubungi Admin melalui menu bantuan.
  </div>
</div>
<div class="mt-8 bg-gray-900 p-6 rounded-lg shadow border border-gray-700">
  <h3 class="text-lg font-bold mb-4 text-white">Top User Teraktif</h3>
    <div class="overflow-x-auto">
    <table class="w-full text-sm text-left border-collapse">
      <thead class="bg-blue-700 text-white uppercase text-xs">
        <tr>
          <th class="px-4 py-2">Rank</th>
          <th class="px-4 py-2">Username</th>
          <th class="px-4 py-2">Transaksi</th>
          <th class="px-4 py-2">Total Belanja</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-700 text-gray-300">
                  <tr class="hover:bg-gray-800/70">
            <td class="px-4 py-2 font-bold text-blue-400">#1</td>
            <td class="px-4 py-2 font-medium text-white">
              fr**            </td>
            <td class="px-4 py-2">8x</td>
            <td class="px-4 py-2 text-green-400">Rp 2.140</td>
          </tr>
                  <tr class="hover:bg-gray-800/70">
            <td class="px-4 py-2 font-bold text-blue-400">#2</td>
            <td class="px-4 py-2 font-medium text-white">
              ha***            </td>
            <td class="px-4 py-2">1x</td>
            <td class="px-4 py-2 text-green-400">Rp 1.500</td>
          </tr>
                  <tr class="hover:bg-gray-800/70">
            <td class="px-4 py-2 font-bold text-blue-400">#3</td>
            <td class="px-4 py-2 font-medium text-white">
              vin***            </td>
            <td class="px-4 py-2">1x</td>
            <td class="px-4 py-2 text-green-400">Rp 600</td>
          </tr>
                  <tr class="hover:bg-gray-800/70">
            <td class="px-4 py-2 font-bold text-blue-400">#4</td>
            <td class="px-4 py-2 font-medium text-white">
              va**            </td>
            <td class="px-4 py-2">1x</td>
            <td class="px-4 py-2 text-green-400">Rp 450</td>
          </tr>
                  <tr class="hover:bg-gray-800/70">
            <td class="px-4 py-2 font-bold text-blue-400">#5</td>
            <td class="px-4 py-2 font-medium text-white">
              esthero********            </td>
            <td class="px-4 py-2">1x</td>
            <td class="px-4 py-2 text-green-400">Rp 400</td>
          </tr>
              </tbody>
    </table>
  </div>
</div>
<div id="notif-container" class="fixed bottom-5 left-5 z-[9999] space-y-2"></div>

<script>
const notifData = [{"username":"fr**","order_id":23383597,"service":"1342","target":"@sanzdev","amount":440,"created_at":"2025-09-06 12:33:06"},{"username":"fr**","order_id":23381409,"service":"5922","target":"https://vm.tiktok.com/ZSHtgkembqN9L-b9BwC","amount":100,"created_at":"2025-09-06 07:51:27"},{"username":"vin***","order_id":23374013,"service":"5857","target":"https://www.tiktok.com/@xcyvinzz?_t=ZS-8zTIPMYSVFg&_r=1","amount":600,"created_at":"2025-09-05 10:43:58"},{"username":"ba**","order_id":23373647,"service":"5853","target":"bayuwww.id","amount":500,"created_at":"2025-09-05 10:01:02"},{"username":"va**","order_id":23370900,"service":"5857","target":"@panggillsja.revan","amount":450,"created_at":"2025-09-05 05:54:21"},{"username":"estherol*******","order_id":23370655,"service":"5519","target":"https://whatsapp.com/channel/0029Vb77wuo7IUYeC3hkt70W","amount":400,"created_at":"2025-09-05 05:35:54"},{"username":"Re**","order_id":23370419,"service":"5881","target":"@aldixdstore","amount":840,"created_at":"2025-09-05 05:11:09"},{"username":"Ce*","order_id":23370212,"service":"5881","target":"@aldixdstore","amount":900,"created_at":"2025-09-05 04:48:26"},{"username":"S","order_id":23370144,"service":"5857","target":"@aldixdstore","amount":750,"created_at":"2025-09-05 04:37:55"},{"username":"As*","order_id":23370128,"service":"5857","target":"@aldixdstore","amount":630,"created_at":"2025-09-05 04:34:49"},{"username":"Ama**","order_id":23370104,"service":"5857","target":"@aldixdstore","amount":510,"created_at":"2025-09-05 04:31:26"},{"username":"gusty****","order_id":23370031,"service":"5875","target":"https://vm.tiktok.com/ZSHtXjVo9wpqm-XYjte/","amount":870,"created_at":"2025-09-05 04:22:32"},{"username":"Kon***","order_id":23369992,"service":"5857","target":"@aldixdstore","amount":510,"created_at":"2025-09-05 04:18:40"},{"username":"fr**","order_id":23369613,"service":"5876","target":"https://vm.tiktok.com/ZSHtXR8QeQF1W-ewrab","amount":100,"created_at":"2025-09-05 03:36:31"},{"username":"de*","order_id":23368582,"service":"5857","target":"https://www.tiktok.com/@depannnn777?_t=ZS-8zSZopOPjvk&_r=1","amount":600,"created_at":"2025-09-05 00:35:09"},{"username":"hal**","order_id":23367609,"service":"5897","target":"https://www.instagram.com/p/DN3BnRZ5NuS/?igsh=MTB2dGNvYXAzNDA3ZQ==","amount":1500,"created_at":"2025-09-04 17:28:14"},{"username":"Pusatp******","order_id":23365613,"service":"5519","target":"https://whatsapp.com/channel/0029VbAsgEzAzNbug16js512","amount":1000,"created_at":"2025-09-04 12:49:55"},{"username":"gat**","order_id":23365468,"service":"5857","target":"@piklienotdev","amount":570,"created_at":"2025-09-04 12:29:00"},{"username":"fr**","order_id":23353216,"service":"5857","target":"@sanzdev","amount":300,"created_at":"2025-09-03 05:20:28"},{"username":"hanzst******","order_id":23351849,"service":"5875","target":"https://vt.tiktok.com/ZSAGYmvqy/","amount":500,"created_at":"2025-09-03 02:25:23"},{"username":"fr**","order_id":23351411,"service":"5876","target":"https://vm.tiktok.com/ZSHtPGj5cngVt-6Nz2B","amount":100,"created_at":"2025-09-03 01:12:31"},{"username":"oshi****","order_id":23347984,"service":"5875","target":"https://vt.tiktok.com/ZSAsdkjmV/","amount":400,"created_at":"2025-09-02 12:14:20"},{"username":"fr**","order_id":23347955,"service":"5857","target":"@sanzdev","amount":300,"created_at":"2025-09-02 12:09:08"},{"username":"fr**","order_id":1108,"service":"views_tiktok","target":"https://tiktok.com/video/xxx","amount":500,"created_at":"2025-08-30 21:30:12"},{"username":"fr**","order_id":1107,"service":"followers_instagram","target":"https://instagram.com/akun_target","amount":300,"created_at":"2025-08-30 20:11:54"}];
console.log("NotifData:", notifData);
let notifIndex = 0;

function showNotif() {
  if (!notifData || notifData.length === 0) return;

  const order = notifData[notifIndex];
  const container = document.getElementById("notif-container");

  const notif = document.createElement("div");
  notif.className = "bg-gray-800 text-white px-4 py-3 rounded-lg shadow-lg border-l-4 border-blue-400 fade-in-up";
  notif.innerHTML = `
    <div class="flex items-center gap-3">
      <i class="fa-solid fa-bell text-yellow-400"></i>
      <div>
        <p class="text-sm font-semibold">${order.username}</p>
        <p class="text-xs text-gray-300">Order #${order.order_id} (${order.service})</p>
        <p class="text-xs text-green-400">Rp ${Number(order.amount).toLocaleString()}</p>
        <p class="text-xs text-gray-400">Tanggal: ${order.created_at}</p>
      </div>
    </div>
  `;

  container.appendChild(notif);

  setTimeout(() => notif.remove(), 3000);

  notifIndex = (notifIndex + 1) % notifData.length;
}

if (notifData.length > 0) {
  showNotif();
  setInterval(showNotif, 3500);
}
</script>
  </main>

  <footer class="text-center text-gray-500 text-sm py-6 border-t border-gray-800">
    © 2025 X-TOOLS SOSMED - Semua Hak Dilindungi
  </footer>
 <script>
  $(window).on('load', function(){
    setTimeout(()=>{
      $('#loader').fadeOut(500, ()=>{
        $('#main-content, nav, footer').removeClass('opacity-0').addClass('fade-in-up');
      });
    }, 900);
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
