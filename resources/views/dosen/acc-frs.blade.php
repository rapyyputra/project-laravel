<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>ACC FRS - Dosen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
    }

    .glass-card {
      background: linear-gradient(145deg, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.9));
      backdrop-filter: blur(10px);
      border-radius: 20px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1), 0 0 0 1px rgba(255, 255, 255, 0.2);
      animation: fadeInUp 0.7s ease-out;
    }

    .btn-approve {
      background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    }

    .btn-approve:hover {
      background: linear-gradient(135deg, #059669 0%, #047857 100%);
      transform: scale(1.05);
    }

    .btn-reject {
      background: linear-gradient(135deg, #ef4444 0%, #b91c1c 100%);
    }

    .btn-reject:hover {
      background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);
      transform: scale(1.05);
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body class="font-sans p-8 text-gray-800">

  <div class="max-w-5xl mx-auto glass-card p-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-purple-700">Daftar Pengajuan FRS</h1>

    <div class="overflow-x-auto rounded-xl shadow">
      <table class="table-auto w-full text-left border border-blue-100">
        <thead class="bg-blue-600 text-white text-sm uppercase">
          <tr>
            <th class="px-6 py-3">Nama Mahasiswa</th>
            <th class="px-6 py-3">NRP</th>
            <th class="px-6 py-3">Status</th>
            <th class="px-6 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody class="bg-white">
          <tr class="hover:bg-blue-50 transition">
            <td class="px-6 py-4 font-medium text-blue-900">Andi Saputra</td>
            <td class="px-6 py-4">12345678</td>
            <td class="px-6 py-4 text-yellow-600 font-semibold">Menunggu</td>
            <td class="px-6 py-4 space-x-2">
              <button class="px-4 py-2 rounded text-white font-semibold btn-approve transition">Setujui</button>
              <button class="px-4 py-2 rounded text-white font-semibold btn-reject transition">Tolak</button>
            </td>
          </tr>
          <!-- Tambahkan baris lainnya jika diperlukan -->
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
