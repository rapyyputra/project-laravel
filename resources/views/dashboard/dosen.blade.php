<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Dosen - SIAKAD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

<div class="flex h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md flex flex-col">
        <div class="px-6 py-5 text-2xl font-bold text-blue-700">
            SIAKAD
        </div>
        <nav class="flex-1 px-4">
            <a href="{{ route('dashboard.dosen') }}" class="block py-2.5 px-4 rounded transition hover:bg-blue-100 text-gray-700 font-medium">Dashboard</a>
            <a href="{{ route('frs.acc') }}" class="block py-2.5 px-4 rounded transition hover:bg-blue-100 text-gray-700 font-medium">ACC FRS</a>
            <a href="{{ route('jadwal.dosen') }}" class="block py-2.5 px-4 rounded transition hover:bg-blue-100 text-gray-700 font-medium">Jadwal Mengajar</a>
            <a href="{{ route('nilai.input') }}" class="block py-2.5 px-4 rounded transition hover:bg-blue-100 text-gray-700 font-medium">Isi Nilai</a>
        </nav>
        <form method="POST" action="{{ route('logout') }}" class="p-4">
            @csrf
            <button class="w-full py-2 text-red-600 hover:text-white hover:bg-red-500 rounded font-semibold border border-red-500 transition">
                Logout
            </button>
        </form>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 p-8 overflow-y-auto">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-2xl font-semibold text-gray-800">Selamat Datang, {{ auth()->user()->name }}</h1>
                <p class="text-sm text-gray-500">(Dosen)</p>
            </div>
            <div>
                <input type="text" placeholder="Cari..." class="px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-300">
            </div>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-gray-500 mb-2">Mahasiswa Diampu</h2>
                <p class="text-3xl font-bold text-blue-600">36</p>
                <p class="text-sm text-green-500 mt-1">+12% dari semester lalu</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-gray-500 mb-2">Jumlah Kelas</h2>
                <p class="text-3xl font-bold text-indigo-600">4</p>
                <p class="text-sm text-red-500 mt-1">-5% dibanding tahun lalu</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-gray-500 mb-2">Progress Penilaian</h2>
                <div class="relative pt-2">
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full w-3/4"></div>
                    </div>
                    <div class="text-right text-sm mt-1 text-blue-600 font-semibold">75%</div>
                </div>
            </div>
        </div>

        <!-- Charts Placeholder -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            <div class="bg-white shadow rounded-lg p-6">
                <h3 class="text-lg font-medium mb-3">Aktivitas Semester</h3>
                <div class="h-48 flex items-center justify-center text-gray-400 text-sm">
                    [Chart aktivitas mahasiswa - gunakan Chart.js]
                </div>
            </div>
            <div class="bg-white shadow rounded-lg p-6">
                <h3 class="text-lg font-medium mb-3">Progress Pengisian Nilai</h3>
                <div class="h-48 flex items-center justify-center text-gray-400 text-sm">
                    [Donut chart progress nilai - gunakan Chart.js]
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
