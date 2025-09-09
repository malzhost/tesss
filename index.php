<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DASHBOARD || TOOLS</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Ramabhadra&family=Tilt+Neon&display=swap" rel="stylesheet"> 
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE edge">
    <link rel="canonical" href="index.php">
    <link rel="icon" href="" type="image/png">
    <meta name='description' itemprop='description' content='X-TOOLS SOSMED adalah sebuah website untuk membug atau membuat crash pada WhatsApp seseorang seperti riper/penipu, admin slot dll yang berkaitan kriminal di WhatsApp.'>
    <meta property="og:title" content="X-TOOLS SOSMED">
    <meta property="og:description" content="X-TOOLS SOSMED adalah sebuah website untuk membug atau membuat crash pada WhatsApp seseorang seperti riper/penipu, admin slot dll yang berkaitan kriminal di WhatsApp.">
    <meta property="og:url" content="index.php">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/thumbnail.jpg">
    <meta name="google-site-verification" content="3isfgCDptEv4HOn95IP1ZQj0B4LPmTHrwlMWPzWsgfY" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="627">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="index.php">
    <meta property="twitter:title" content="X-TOOLS SOSMED">
    <meta property="twitter:description" content="X-TOOLS SOSMED adalah sebuah website untuk membug atau membuat crash pada WhatsApp seseorang seperti riper/penipu, admin slot dll yang berkaitan kriminal di WhatsApp.">
    <meta property="twitter:image" content="assets/thumbnail.jpg">
    <link rel="icon" href="" type="image/png">
</head>
<body class="bg-slate-900 text-white min-h-screen p-4 pt-20" style="font-family: 'Tilt Neon', sans-serif;">

<nav class="fixed z-50 top-0 left-0 right-0 flex flex-wrap items-center justify-between bg-gray-800 p-2 mx-auto rounded-lg shadow-lg" style="margin: 5px;">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
    <i class="icon-dashboard"></i>
    <a href="#" class="ml-4 text-2xl font-bold bg bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-400  text-transparent bg-clip-text hover:text-white">DASHBOARD || TOOLS</a>
  </div>

  <div class="block lg:hidden">
    <button id="menu-toggle" class="px-4 py-2 border rounded-lg text-gray-200 border-gray-400 hover:text-white hover:border-white">
      <i class="fas fa-bars"></i>
    </button>
  </div>

  <div id="nav-menu" class="hidden w-full lg:flex lg:items-center lg:w-auto transition-all duration-300 ease-in-out">
    <div class="text-sm lg:flex-grow">
      <a href="/" class="block py-2 px-6 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white font-bold">⟩⟩ Home</a>
      <a href="#pairing" class="block py-2 px-6 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white font-bold">⟩⟩ Pairing</a>
    </div>
    <div class="mt-2 lg:mt-0">
      <a href="logout.php" class="inline-block px-6 py-2 rounded-full text-white bg-blue-500 hover:bg-blue-700 font-bold">
      <i class="fas fa-sign-out-alt"></i>
      LOGOUT
      </a>
    </div>
  </div>
</nav>

<script>
  document.getElementById('menu-toggle').addEventListener('click', function () {
    const menu = document.getElementById('nav-menu');
    menu.classList.toggle('hidden');
  });
</script>

<div id="dashboard" class="max-w-md mx-auto mt-6 rounded-xl shadow-xl text-center">
  <h2 class="text-2xl font-bold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-400 bg-clip-text text-transparent mb-2">
     
  </h2>
  <p class="text-sm text-gray-400 mb-4">
    Monitoring tools hosting untuk <span class="text-blue-400 font-semibold">tools cpanel</span>, <span class="text-green-400 font-semibold">respon otomatis</span>, atau <span class="text-yellow-400 font-semibold">edit password dan saldo</span>.
  </p>

 <div class="grid grid-cols-1 gap-4">
  <div class="bg-[#cfe6ff] p-4 rounded-xl text-black flex items-center justify-between">
    <div class="flex items-center gap-3">
      <div class="bg-white w-12 h-12 flex items-center justify-center rounded-xl text-blue-500 text-xl">
      <i class="fa-solid fa-server"></i>
      </div>
      <div>
        <div id="total-bug" class="text-2xl font-bold">Loading...</div>
        <div>Total Order user</div>
      </div>
    </div>
  </div>

<!-- Saldo Provider -->
<div class="bg-[#d9f6e1] p-4 rounded-xl text-black flex items-center justify-between">
  <div class="flex items-center gap-3">
    <div class="bg-white w-12 h-12 flex items-center justify-center rounded-xl text-green-500 text-xl">
      <i class="fas fa-wallet"></i>
    </div>
    <div>
      <div id="saldo-provider" class="text-2xl font-bold">Cek...</div>
      <div>Saldo Provider</div>
    </div>
  </div>
</div>

  <div class="bg-[#ffe4da] p-4 rounded-xl text-black flex items-center justify-between">
    <div class="flex items-center gap-3">
      <div class="bg-white w-12 h-12 flex items-center justify-center rounded-xl text-orange-500 text-xl">
        <i class="fas fa-user-check"></i>
      </div>
      <div>
        <div id="user-aktif" class="text-2xl font-bold">0</div>
        <div>User Terdaftar</div>
      </div>
    </div>
  </div>
</div>


  
<div class="backdrop-blur-md bg-white/10 border border-white/20 rounded-xl p-6 shadow-lg max-w-md mx-auto mt-6">
  <h2 class="text-white text-lg font-semibold mb-3">Server Performance</h2>
  <canvas id="serverChart" class="w-full h-40"></canvas>
</div>

<div class="mt-10 bg-gray-800 p-5 rounded-lg shadow-lg border border-gray-700">
  <h2 class="text-xl font-bold text-white mb-4">Daftar Pengguna</h2>
  <div class="overflow-x-auto">
    <table class="w-full min-w-[500px] text-sm text-left text-gray-300">
      <thead class="text-xs uppercase bg-gray-700 text-gray-400">
      <tr>
        <th class="px-4 py-2">#</th>
        <th class="px-4 py-2">Username</th>
        <th class="px-4 py-2">Password</th>
        <th class="px-4 py-2">Email</th>
        <th class="px-4 py-2">Verifikasi</th>
        <th class="px-4 py-2">Saldo</th>
        <th class="px-4 py-2">Aksi</th>
      </tr>
    </thead>
      <tbody id="userTableBody" class="bg-gray-900 divide-y divide-gray-700">
        <tr><td colspan="5" class="text-center py-4 text-gray-500">Memuat data...</td></tr>
      </tbody>
    </table>
  </div>

  <div class="flex justify-between items-center mt-4">
    <button id="prevBtn" onclick="prevPage()" class="bg-gray-700 px-4 py-2 rounded hover:bg-gray-600 text-sm">←</button>
    <span id="pageInfo" class="text-gray-300 text-sm"></span>
    <button id="nextBtn" onclick="nextPage()" class="bg-gray-700 px-4 py-2 rounded hover:bg-gray-600 text-sm">→</button>
  </div>
</div>
<div class="mt-10 bg-gray-800 p-5 rounded-lg shadow-lg border border-gray-700 max-w-md mx-auto">
  <h2 class="text-xl font-bold text-white mb-4">Atur saldo & Reset saldo</h2>
  <div class="space-y-3">
    <select id="userSelect"
      class="w-full px-4 py-2 rounded-md bg-gray-700 text-white placeholder-gray-400 focus:outline-none">
      <option disabled selected value="">Pilih Username</option>
    </select>

    <input type="number" id="saldoInput" placeholder="Jumlah saldo"
      class="w-full px-4 py-2 rounded-md bg-gray-700 text-white placeholder-gray-400 focus:outline-none" />

    <button onclick="tambahsaldo()" class="w-full bg-purple-700 border hover:bg-purple-800 text-white font-bold py-2 px-4 rounded">
     <i class="fa-solid fa-plus"></i> Tambah saldo
    </button>

    <button onclick="resetsaldo()" class="w-full bg-red-600 border hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
     <i class="fa fa-refresh" aria-hidden="true"></i> Reset saldo Pengguna
    </button>
  </div>
</div>
<div class="mt-10 bg-gray-800 p-5 rounded-lg shadow-lg border border-gray-700">  
  <h2 class="text-xl font-bold text-white mb-4">Riwayat Order User</h2>  

  <!-- Scroll container -->
  <div class="overflow-x-auto">
    <div class="max-h-60 overflow-y-auto"> <!-- dipendekin -->
      <table class="w-full min-w-[1000px] text-sm text-left text-gray-300 whitespace-nowrap">  
        <thead class="text-xs uppercase bg-gray-700 text-gray-400">  
          <tr>  
            <th class="px-4 py-2">#</th>  
            <th class="px-4 py-2">Username</th>  
            <th class="px-4 py-2">Order ID</th>  
            <th class="px-4 py-2">Service</th>  
            <th class="px-4 py-2">Target</th>  
            <th class="px-4 py-2">Qty</th>  
            <th class="px-4 py-2">Amount</th>  
            <th class="px-4 py-2">Status</th>  
            <th class="px-4 py-2">Tanggal</th>  
          </tr>  
        </thead>  
        <tbody id="logsTableBody" class="bg-gray-900 divide-y divide-gray-700"></tbody>  
      </table>  
    </div>
  </div>
</div>
<div class="mt-10 bg-gray-800 p-5 rounded-lg shadow-lg border border-gray-700">  
  <h2 class="text-xl font-bold text-white mb-4">Riwayat Topup User</h2>  

  <!-- Scroll container -->
  <div class="overflow-x-auto">
    <div class="max-h-60 overflow-y-auto"> <!-- dipendekin -->
      <table class="w-full min-w-[800px] text-sm text-left text-gray-300 whitespace-nowrap">  
        <thead class="text-xs uppercase bg-gray-700 text-gray-400">  
          <tr>  
            <th class="px-4 py-2">#</th>  
            <th class="px-4 py-2">Username</th>  
            <th class="px-4 py-2">Topup ID</th>  
            <th class="px-4 py-2">Amount</th>  
            <th class="px-4 py-2">Status</th>  
            <th class="px-4 py-2">Tanggal</th>  
          </tr>  
        </thead>  
        <tbody id="topupTableBody" class="bg-gray-900 divide-y divide-gray-700"></tbody>  
      </table>  
    </div>
  </div>
</div>

<div class="bg-gray-800 p-5 border rounded-lg shadow-lg max-w-md mx-auto mt-8 text-white border-gray-700 text-center">
  <h2 class="text-xl font-bold mb-4">Upload Gambar Profil</h2>

  <!-- Gambar Preview - Klik untuk Pilih Gambar -->
  <label for="image" class="cursor-pointer inline-block">
    <img
      src="/assets/default.jpg"
      alt="Gambar Profil"
      class="w-32 h-32 object-cover rounded-md border-2 border-gray-500 shadow mx-auto hover:opacity-80 transition"
      id="previewImage"
    >
  </label>

  <form id="uploadForm" enctype="multipart/form-data">
    <input type="file" name="image" id="image" accept="image/*" hidden>
  </form>
</div>
<div class="mt-6 bg-gray-800 p-5 rounded-lg shadow-lg border border-gray-700">
  <h2 class="text-xl font-bold text-white mb-3">Ganti APIKEY</h2>

  <input type="text" id="urlInput" 
         placeholder="Contoh: https://tools.domainkamu.id" 
         value="" 
         class="w-full p-3 rounded bg-gray-700 text-white mb-3" />

  <button onclick="gantiUrlUtama()" 
          class="w-full py-2 bg-blue-600 hover:bg-green-700 border rounded text-white font-semibold">
    <i class="fa-solid fa-globe mr-1"></i> Simpan URL Api
  </button>
</div>
<div class="mt-6 bg-gray-800 p-5 rounded-lg shadow-lg border border-gray-700">
 <h2 class="text-xl font-bold text-white mb-3">Ganti Password user</h2>
<button onclick="showChangePasswordForm()" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
  Ganti Password user
</button>
</div>
<div class="mt-10 bg-gray-800 p-5 rounded-lg shadow-lg border border-gray-700 max-w-md mx-auto">
  <h2 class="text-2xl font-bold mb-6 text-center">Tambah Pengumuman</h2>

  <form id="pengumumanForm">
    <div>
      <label class="block mb-2">Judul</label>
      <input type="text" name="judul" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-white" placeholder="Juduh contoh: Update TopUp" required>
    </div>
    <div>
      <label class="block mb-2">Isi Pengumuman</label>
      <textarea name="isi" rows="5" class="w-full p-2 rounded bg-gray-700 border border-gray-600 text-white" placeholder="masukan informasi" required></textarea>
    </div>
    <button type="submit" class="w-full bg-purple-700 border hover:bg-purple-800 text-white font-bold py-2 px-4 rounded">Tambah</button>
  </form>
</div>

<script>
document.getElementById("pengumumanForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch("tambah_pengumuman.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        Swal.fire({
            icon: data.status === "success" ? "success" : "error",
            title: data.status === "success" ? "Berhasil!" : "Gagal!",
            text: data.message,
            confirmButtonColor: data.status === "success" ? "#2563eb" : "#dc2626"
        });

        if (data.status === "success") {
            this.reset();
        }
    })
    .catch(err => {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Terjadi error di server!"
        });
    });
});
</script>
 <script>
let users = [];
let currentPage = 1;
const usersPerPage = 3;

fetch('data/data.php')
  .then(res => res.json())
  .then(data => {
    users = data.users || [];
    renderTable();
  })
  .catch(err => {
    document.getElementById("userTableBody").innerHTML = `<tr><td colspan="5" class="text-center py-4 text-red-400">Gagal memuat data.</td></tr>`;
    console.error(err);
  });

function renderTable() {
  const tbody = document.getElementById("userTableBody");
  tbody.innerHTML = "";

  if (users.length === 0) {
    tbody.innerHTML = `<tr><td colspan="5" class="text-center py-4 text-gray-400">Belum ada data pengguna.</td></tr>`;
    return;
  }

  const start = (currentPage - 1) * usersPerPage;
  const end = start + usersPerPage;
  const pageUsers = users.slice(start, end);

  pageUsers.forEach((user, i) => {
  tbody.innerHTML += `
    <tr>
      <td class="px-4 py-2">${start + i + 1}</td>
      <td class="px-4 py-2 text-green-400 font-medium">${user.username}</td>
      <td class="px-4 py-2 text-yellow-400 font-medium">${user.password}</td>
      <td class="px-4 py-2 text-white font-medium">${user.email}</td>
      <td class="px-4 py-2 text-white font-medium">${user.verified}</td>
      <td class="px-4 py-2 text-white text-sm">Rp ${user.saldo?.toLocaleString("id-ID") || 0}</td>
      <td class="px-4 py-2">
        <button onclick="copyToClipboard('${user.password}')" class="text-blue-400 hover:text-blue-300 text-xs">
          <i class="fas fa-copy"></i> Salin
        </button>
      </td>
    </tr>
  `;
});

  const totalPages = Math.ceil(users.length / usersPerPage);
  document.getElementById("pageInfo").textContent = `page ${currentPage} from ${totalPages}`;
  
  document.getElementById("prevBtn").disabled = currentPage === 1;
  document.getElementById("nextBtn").disabled = currentPage === totalPages;
}

function nextPage() {
  const totalPages = Math.ceil(users.length / usersPerPage);
  if (currentPage < totalPages) {
    currentPage++;
    renderTable();
  }
}

function prevPage() {
  if (currentPage > 1) {
    currentPage--;
    renderTable();
  }
}

function copyToClipboard(text) {
  navigator.clipboard.writeText(text)
    .then(() => {
      Swal.fire({
        toast: true,
        position: 'top-end',
        icon: 'success',
        title: 'Password disalin!',
        showConfirmButton: false,
        timer: 1500,
        background: '#1e293b',
        color: '#e2e8f0'
      });
    });
}

  fetch('data/data.php')
    .then(res => res.json())
    .then(data => {
      const select = document.getElementById("userSelect");
      const users = data.users || [];

      users.forEach(user => {
        const option = document.createElement("option");
        option.value = user.username;
        option.textContent = user.username;
        select.appendChild(option);
      });
    });

  function tambahsaldo() {
    const username = document.getElementById("userSelect").value;
    const saldo = parseInt(document.getElementById("saldoInput").value);

    if (!username || isNaN(saldo)) {
      Swal.fire("Lengkapi!", "Username dan saldo wajib diisi!", "warning");
      return;
    }

    fetch('../sistem.php', {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({
        action: "tambah-saldo",
        username,
        saldo
      })
    })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        Swal.fire("Berhasil!", data.message, "success");
      } else {
        Swal.fire("Gagal", data.message || "Terjadi kesalahan.", "error");
      }
    })
    .catch(err => {
      Swal.fire("Error", err.message, "error");
    });
  }

  function resetsaldo() {
    const username = document.getElementById("userSelect").value;

    if (!username) {
      Swal.fire("Pilih Username!", "Silakan pilih username yang ingin di-reset saldo-nya.", "warning");
      return;
    }

    fetch('../sistem.php', {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({
        action: "reset-saldo-user",
        username
      })
    })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        Swal.fire("Berhasil!", data.message, "success");
      } else {
        Swal.fire("Gagal", data.message || "Terjadi kesalahan.", "error");
      }
    })
    .catch(err => {
      Swal.fire("Error", err.message, "error");
    });
  }
let logs = [];

fetch('data/data.php')
  .then(res => res.json())
  .then(data => {
    logs = [];
    (data.users || []).forEach(user => {
      if (user.logs && Array.isArray(user.logs)) {
        user.logs.forEach(log => {
          logs.push({
            username: user.username,
            ...log
          });
        });
      }
    });

    // Urutkan terbaru dulu
    logs.sort((a, b) => new Date(b.created_at) - new Date(a.created_at));
    renderTable1();
  })
  .catch(err => {
    document.getElementById("logsTableBody").innerHTML =
      `<tr><td colspan="9" class="text-center py-4 text-red-400">Gagal memuat data.</td></tr>`;
    console.error(err);
  });

function renderTable1() {
  const tbody = document.getElementById("logsTableBody");
  tbody.innerHTML = "";

  if (logs.length === 0) {
    tbody.innerHTML = `<tr><td colspan="9" class="text-center py-4 text-gray-400">Belum ada riwayat order.</td></tr>`;
    return;
  }

  logs.forEach((log, i) => {
    tbody.innerHTML += `
      <tr>
        <td class="px-4 py-2">${i + 1}</td>
        <td class="px-4 py-2 text-green-400 font-medium">${log.username}</td>
        <td class="px-4 py-2 text-yellow-400 font-medium">${log.order_id}</td>
        <td class="px-4 py-2 text-white font-medium">${log.service}</td>
        <td class="px-4 py-2 text-white font-medium break-all">${log.target}</td>
        <td class="px-4 py-2 text-white font-medium">${log.quantity}</td>
        <td class="px-4 py-2 text-white font-medium">Rp ${log.amount?.toLocaleString("id-ID") || 0}</td>
        <td class="px-4 py-2 text-white font-medium">${log.msg}</td>
        <td class="px-4 py-2 text-gray-400 text-sm">${log.created_at}</td>
      </tr>
    `;
  });
}
let topups = [];

fetch('data/topup.php')
  .then(res => res.json())
  .then(data => {
    topups = data || [];

    topups.sort((a, b) => new Date(b.date) - new Date(a.date));
    renderTopupTable();
  })
  .catch(err => {
    document.getElementById("topupTableBody").innerHTML =
      `<tr><td colspan="6" class="text-center py-4 text-red-400">Gagal memuat data.</td></tr>`;
    console.error(err);
  });

function renderTopupTable() {
  const tbody = document.getElementById("topupTableBody");
  tbody.innerHTML = "";

  if (topups.length === 0) {
    tbody.innerHTML = `<tr><td colspan="6" class="text-center py-4 text-gray-400">Belum ada riwayat topup.</td></tr>`;
    return;
  }

  topups.forEach((log, i) => {
    tbody.innerHTML += `
      <tr>
        <td class="px-4 py-2">${i + 1}</td>
        <td class="px-4 py-2 text-green-400 font-medium">${log.username}</td>
        <td class="px-4 py-2 text-yellow-400 font-medium">${log.id}</td>
        <td class="px-4 py-2 text-white font-medium">Rp ${log.amount?.toLocaleString("id-ID") || 0}</td>
        <td class="px-4 py-2 ${log.status === 'Success' ? 'text-green-400' : 'text-red-400'} font-medium">${log.status}</td>
        <td class="px-4 py-2 text-gray-400 text-sm">${log.date}</td>
      </tr>
    `;
  });
}
document.getElementById("image").addEventListener("change", function () {
  const file = this.files[0];
  if (!file) return;

  const formData = new FormData();
  formData.append("image", file);

  const reader = new FileReader();
  reader.onload = function (e) {
    document.getElementById("previewImage").src = e.target.result;
  };
  reader.readAsDataURL(file);

  Swal.fire({
    title: "Mengupload...",
    text: "Silakan tunggu sebentar.",
    allowOutsideClick: false,
    didOpen: () => Swal.showLoading()
  });

  fetch("upload-image.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    Swal.close();
    if (data.success) {
      Swal.fire("Berhasil!", data.message, "success");
    } else {
      Swal.fire("Gagal", data.message, "error");
    }
  })
  .catch(err => {
    Swal.fire("Error", err.message, "error");
  });
});

function kirimVerifikasiTertunda() {
  fetch('auto-verifikasi.php')
    .then(res => res.json())
    .then(data => {
      console.log('[AUTO VERIFIKASI]', data.message);
    })
    .catch(err => {
      console.error('[FETCH ERROR]', err);
    });
}
fetch('../sistem.php', {
   method: 'POST',
   headers: { 'Content-Type': 'application/json' },
   body: JSON.stringify({ action: 'cek-total' })
 })
 .then(res => res.json())
 .then(data => {
  document.getElementById('total-bug').textContent = data.total;
})
.catch(() => {
  document.getElementById('total-bug').textContent = 'Gagal';
});
fetch('../sistem.php', {
  method: 'POST',
  headers: { 'Content-Type': 'application/json' },
  body: JSON.stringify({ action: 'cek-apiutama-status' })
})
.then(res => res.json())
.then(data => {
  const el = document.getElementById('api-status');
  if (data.success && data.http === 200) {
    el.textContent = 'Aktif';
  } else {
    el.textContent = 'Tidak Aktif';
  }
})
.catch(() => {
  document.getElementById('api-status').textContent = 'Gagal';
});
fetch('../sistem.php', {
  method: 'POST',
  headers: { 'Content-Type': 'application/json' },
  body: JSON.stringify({ action: 'cek-total-user' })
})
.then(res => res.json())
.then(data => {
  document.getElementById('user-aktif').textContent = data.total;
})
.catch(() => {
  document.getElementById('user-aktif').textContent = 'Gagal';
});

function showChangePasswordForm() {
  Swal.fire({
    title: '<i class="fa-solid fa-lock text-indigo-300"></i> <span style="color:#c3dafe;">Ganti Password</span>',
    html: `
  <div style="background-color: #2d3748; padding: 20px; border-radius: 12px; color: white;">
    <div style="width: 100%; max-width: 350px; margin: auto;">
      <p style="font-size: 14px; color: #a0aec0; margin-bottom: 20px; text-align: center;">
        Demi keamanan akun kamu, pastikan password lama benar sebelum mengubah ke password baru.
      </p>

      <div style="margin-bottom: 12px; padding-left: 10px;">
        <label for="username" style="font-size: 13px; color: #cbd5e0;">Username</label><br/>
        <div style="position: relative;">
          <i class="fa fa-user" style="position: absolute; top: 50%; left: 10px; transform: translateY(-50%); color: #a0aec0;"></i>
          <input type="text" id="username" class="swal2-input" placeholder="Masukkan username" 
                 style="width: 95%; padding-left: 35px; background:#1a202c; color:white; border:none; border-radius:6px;">
        </div>
      </div>

      <div style="margin-bottom: 12px; padding-left: 10px;">
        <label for="oldPassword" style="font-size: 13px; color: #cbd5e0;">Password Lama</label><br/>
        <div style="position: relative;">
          <i class="fa fa-lock" style="position: absolute; top: 50%; left: 10px; transform: translateY(-50%); color: #a0aec0;"></i>
          <input type="password" id="oldPassword" class="swal2-input" placeholder="Masukkan password lama" 
                 style="width: 95%; padding-left: 35px; background:#1a202c; color:white; border:none; border-radius:6px;">
        </div>
      </div>

      <div style="margin-bottom: 0; padding-left: 10px;">
        <label for="newPassword" style="font-size: 13px; color: #cbd5e0;">Password Baru</label><br/>
        <div style="position: relative;">
          <i class="fa fa-key" style="position: absolute; top: 50%; left: 10px; transform: translateY(-50%); color: #a0aec0;"></i>
          <input type="password" id="newPassword" class="swal2-input" placeholder="Masukkan password baru" 
                 style="width: 95%; padding-left: 35px; background:#1a202c; color:white; border:none; border-radius:6px;">
        </div>
      </div>

    </div>
  </div>
`,
    confirmButtonText: 'Ganti',
    background: '#1e293b',
    showCancelButton: true,
    focusConfirm: false,
    customClass: {
      confirmButton: 'bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700',
      cancelButton: 'bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600'
    },
    preConfirm: () => {
      const username = document.getElementById('username').value.trim();
      const oldPassword = document.getElementById('oldPassword').value.trim();
      const newPassword = document.getElementById('newPassword').value.trim();

      if (!username || !oldPassword || !newPassword) {
        Swal.showValidationMessage('Semua kolom wajib diisi');
        return false;
      }

      return fetch('ganti-password.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({ username, oldPassword, newPassword })
      })
      .then(res => res.json())
      .then(data => {
        if (!data.success) throw new Error(data.message);
        return data;
      })
      .catch(err => {
        Swal.showValidationMessage(`Gagal: ${err.message}`);
      });
    }
  }).then(result => {
    if (result.isConfirmed && result.value?.success) {
      Swal.fire('Berhasil!', result.value.message, 'success');
    }
  });
}
document.addEventListener("DOMContentLoaded", () => {
  fetch("cek_saldo.php")
    .then(res => res.json())
    .then(data => {
      const el = document.getElementById("saldo-provider");
      if (data.status) {
        const rupiah = new Intl.NumberFormat("id-ID", { style: "currency", currency: "IDR" }).format(data.balance);
        el.textContent = rupiah;
      } else {
        el.textContent = "Gagal";
      }
    })
    .catch(err => {
      document.getElementById("saldo-provider").textContent = "Error";
      console.error("Fetch Error:", err);
    });
});
fetch('../sistem.php', {
  method: 'POST',
  headers: { 'Content-Type': 'application/json' },
  body: JSON.stringify({ action: 'cek-total-user' })
})
.then(res => res.json())
.then(data => {
  document.getElementById('user-aktif').textContent = data.total;
})
.catch(() => {
  document.getElementById('user-aktif').textContent = 'Gagal';
});

kirimVerifikasiTertunda();

setTimeout(() => {
  kompensasiLimit();
}, 5000);
  setInterval(updateClock, 1000);
  setInterval(checkSessionStatus, 10000);
  showInfo();
  updateClock();
  setInterval(loadCommandLimit, 10000);
</script>
<script>
const ctx = document.getElementById('serverChart').getContext('2d');
const chart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [],
    datasets: [
      {
        label: 'CPU Usage (%)',
        data: [],
        borderColor: '#3b82f6',
        backgroundColor: 'transparent',
        tension: 0.4
      },
      {
        label: 'Memory Usage (%)',
        data: [],
        borderColor: '#10b981',
        backgroundColor: 'transparent',
        tension: 0.4
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        labels: { color: '#fff' }
      }
    },
    scales: {
      x: {
        ticks: { color: '#ccc' }
      },
      y: {
        ticks: { color: '#ccc' },
        beginAtZero: true
      }
    }
  }
});

setInterval(() => {
  const now = new Date().toLocaleTimeString();
  const cpu = Math.floor(Math.random() * 50) + 30;
  const mem = Math.floor(Math.random() * 30) + 60;

  if (chart.data.labels.length > 10) {
    chart.data.labels.shift();
    chart.data.datasets[0].data.shift();
    chart.data.datasets[1].data.shift();
  }

  chart.data.labels.push(now);
  chart.data.datasets[0].data.push(cpu);
  chart.data.datasets[1].data.push(mem);

  chart.update();
}, 5000);
</script>
</body>
</html>
