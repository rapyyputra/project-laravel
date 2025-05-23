<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard Dosen - SIAKAD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .gradient-bg {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .gradient-card {
      background: linear-gradient(135deg, #ffffff 0%, #f8faff 100%);
    }
    .gradient-text {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    .sidebar-gradient {
      background: linear-gradient(180deg, #ffffff 0%, #f1f5ff 100%);
    }
    .card-hover {
      transition: all 0.3s ease;
    }
    .card-hover:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(102, 126, 234, 0.15);
    }
    .chart-gradient {
      background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
    }
  </style>
</head>
<body class="gradient-bg min-h-screen font-sans text-gray-800">

<div class="flex h-screen">

  <!-- Sidebar -->
  <aside class="w-64 sidebar-gradient shadow-xl flex flex-col border-r border-blue-100">
    <div class="px-6 py-6">
      <h2 class="text-3xl font-bold gradient-text">SIAKAD</h2>
      <p class="text-sm text-blue-400 mt-1">Sistem Akademik</p>
    </div>
    <nav class="flex-1 px-4 space-y-1">
      <a href="{{ route('dashboard.dosen') }}" class="block py-3 px-4 rounded-lg transition-all duration-200 hover:bg-blue-100 text-gray-700 font-medium">Dashboard</a>
      <a href="{{ route('frs.acc') }}" class="block py-3 px-4 rounded-lg transition-all duration-200 hover:bg-blue-100 text-gray-700 font-medium">Acc Frs</a>
      <a href="{{ route('jadwal.dosen') }}" class="block py-3 px-4 rounded-lg transition-all duration-200 hover:bg-blue-100 text-gray-700 font-medium">Jadwal Mengajar</a>
      <a href="{{ route('nilai.input') }}" class="block py-3 px-4 rounded-lg transition-all duration-200 hover:bg-blue-100 text-gray-700 font-medium">Isi</a>
    </nav>
    <div class="p-4">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="w-full py-3 text-red-600 hover:text-white hover:bg-red-500 rounded-lg font-semibold border border-red-400 hover:border-red-500 transition">
          Logout
        </button>
      </form>
    </div>
  </aside>

  <!-- Main Content -->
  <div class="flex-1 p-8 overflow-y-auto">
    <!-- Header -->
    <div class="mb-8">
      <h1 class="text-3xl font-bold text-white mb-2">Selamat Datang, {{ auth()->user()->name }}</h1>
      <p class="text-blue-100 text-lg">(Dosen)</p>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
      <div class="gradient-card shadow-xl rounded-2xl p-6 card-hover border border-blue-100">
        <h2 class="text-gray-600 mb-2 font-medium">Mahasiswa Diampu</h2>
        <p class="text-3xl font-bold gradient-text">36</p>
        <p class="text-sm text-green-500 mt-2">+12% dari semester lalu</p>
      </div>
      <div class="gradient-card shadow-xl rounded-2xl p-6 card-hover border border-blue-100">
        <h2 class="text-gray-600 mb-2 font-medium">Jumlah Kelas</h2>
        <p class="text-3xl font-bold gradient-text">4</p>
        <p class="text-sm text-red-400 mt-2">-5% dibanding tahun lalu</p>
      </div>
      <div class="gradient-card shadow-xl rounded-2xl p-6 card-hover border border-blue-100">
        <h2 class="text-gray-600 mb-2 font-medium">Progress Penilaian</h2>
        <div class="w-full bg-gray-200 rounded-full h-2.5">
          <div class="bg-blue-500 h-2.5 rounded-full w-3/4"></div>
        </div>
        <p class="text-right text-sm mt-2 text-blue-600 font-semibold">75%</p>
      </div>
    </div>

    <!-- Charts -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="gradient-card shadow-xl rounded-2xl p-6 card-hover border border-blue-100">
        <h3 class="text-xl font-semibold mb-4 gradient-text">Aktivitas Semester</h3>
        <div class="chart-gradient h-48 rounded-xl flex items-center justify-center border border-blue-200">
          <p class="text-blue-500">[Chart aktivitas mahasiswa - Gunakan Chart.js]</p>
        </div>
      </div>
      <div class="gradient-card shadow-xl rounded-2xl p-6 card-hover border border-blue-100">
        <h3 class="text-xl font-semibold mb-4 gradient-text">Progress Pengisian Nilai</h3>
        <div class="chart-gradient h-48 rounded-xl flex items-center justify-center border border-blue-200">
          <p class="text-blue-500">[Donut chart progress nilai - Gunakan Chart.js]</p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
