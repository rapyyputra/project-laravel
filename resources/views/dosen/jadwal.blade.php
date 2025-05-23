<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jadwal Dosen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

  <div class="max-w-4xl mx-auto glass-card p-8">
    <h1 class="text-3xl font-bold text-purple-700 mb-6 text-center">Jadwal Mengajar Dosen</h1>

    <div class="overflow-x-auto rounded-xl shadow">
      <table class="table-auto w-full text-left border border-blue-100">
        <thead class="bg-blue-600 text-white text-sm uppercase">
          <tr>
            <th class="px-6 py-3">Hari</th>
            <th class="px-6 py-3">Mata Kuliah</th>
            <th class="px-6 py-3">Waktu</th>
            <th class="px-6 py-3">Ruangan</th>
          </tr>
        </thead>
        <tbody class="bg-white">
          <tr class="hover:bg-blue-50 transition">
            <td class="px-6 py-4 font-medium text-blue-900">Senin</td>
            <td class="px-6 py-4">Pemrograman Web</td>
            <td class="px-6 py-4">08:00 - 10:00</td>
            <td class="px-6 py-4">Lab A</td>
          </tr>
          <!-- Tambahkan jadwal lainnya -->
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
