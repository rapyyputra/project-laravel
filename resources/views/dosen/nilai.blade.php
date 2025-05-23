<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Input Nilai Mahasiswa</title>
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

  <div class="max-w-3xl mx-auto glass-card p-8">
    <h1 class="text-3xl font-bold text-purple-700 mb-6 text-center">Input Nilai Mahasiswa</h1>

    <form>
      <div class="mb-6">
        <label class="block text-sm font-medium mb-2 text-gray-700">Nama Mahasiswa</label>
        <input type="text" class="w-full rounded-lg px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Contoh: Andi Saputra">
      </div>

      <div class="mb-6">
        <label class="block text-sm font-medium mb-2 text-gray-700">NRP</label>
        <input type="text" class="w-full rounded-lg px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Contoh: 12345678">
      </div>

      <div class="mb-6">
        <label class="block text-sm font-medium mb-2 text-gray-700">Nilai</label>
        <input type="number" class="w-full rounded-lg px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Contoh: 85">
      </div>

      <div class="text-center">
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 transition text-white px-6 py-2 rounded-lg font-semibold shadow-md">
          Simpan Nilai
        </button>
      </div>
    </form>
  </div>

</body>
</html>
