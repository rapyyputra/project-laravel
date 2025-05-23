<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Dosen - SIAKAD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans min-h-screen">

    <!-- Header -->
    <div class="bg-gradient-to-r from-gray-800 to-blue-900 text-white text-center py-6 rounded-b-xl shadow">
        <h2 class="text-2xl font-bold">Selamat Datang, {{ auth()->user()->name }}</h2>
        <p class="text-sm mt-1">(Dosen)</p>
    </div>

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto px-6 py-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- ACC FRS -->
            <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition transform hover:-translate-y-1">
                <h5 class="text-lg font-semibold mb-2">ACC FRS</h5>
                <p class="text-gray-600 mb-4">Lihat & Setujui FRS mahasiswa</p>
                <a href="{{ route('frs.acc') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">ACC FRS</a>
            </div>

            <!-- Jadwal Mengajar -->
            <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition transform hover:-translate-y-1">
                <h5 class="text-lg font-semibold mb-2">Jadwal Mengajar</h5>
                <p class="text-gray-600 mb-4">Lihat jadwal mengajar Anda</p>
                <a href="{{ route('jadwal.dosen') }}" class="inline-block px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">Lihat Jadwal</a>
            </div>

            <!-- Isi Nilai -->
            <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition transform hover:-translate-y-1">
                <h5 class="text-lg font-semibold mb-2">Isi Nilai</h5>
                <p class="text-gray-600 mb-4">Input nilai mahasiswa yang Anda ajar</p>
                <a href="{{ route('nilai.input') }}" class="inline-block px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition">Isi Nilai</a>
            </div>

        </div>
    </div>

</body>
</html>
