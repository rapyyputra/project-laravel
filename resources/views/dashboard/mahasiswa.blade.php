<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://kit.fontawesome.com/a2e5e6fa4c.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 font-sans">

<div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg p-6 flex flex-col">
        <h1 class="text-2xl font-bold text-blue-700 mb-10">📘 SIAKAD</h1>
        <nav class="flex-1 space-y-4 text-gray-700">
            <a href="#" class="flex items-center gap-3 px-2 py-2 rounded-lg hover:bg-blue-100">
                <i class="fas fa-home"></i> Dashboard
            </a>
            <a href="{{ route('frs.index') }}" class="flex items-center gap-3 px-2 py-2 rounded-lg hover:bg-blue-100">
                <i class="fas fa-file-alt"></i> FRS
            </a>
            <a href="{{ route('jadwal.mahasiswa') }}" class="flex items-center gap-3 px-2 py-2 rounded-lg hover:bg-blue-100">
                <i class="fas fa-calendar-alt"></i> Jadwal Kuliah
            </a>
            <a href="{{ route('nilai.mahasiswa') }}" class="flex items-center gap-3 px-2 py-2 rounded-lg hover:bg-blue-100">
                <i class="fas fa-graduation-cap"></i> Nilai
            </a>
        </nav>
        <form method="POST" action="{{ route('logout') }}" class="pt-10">
            @csrf
            <button class="w-full text-left text-red-500 hover:text-red-700 flex items-center gap-2">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </aside>

    <!-- Main -->
    <main class="flex-1 p-8 overflow-auto">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="text-3xl font-bold text-gray-800">Selamat Datang, {{ auth()->user()->name }}</h2>
                <p class="text-gray-500 mt-1">(Mahasiswa)</p>
            </div>
            <div class="flex items-center gap-4">
                <input type="text" placeholder="Cari..." class="px-3 py-2 rounded-lg border border-gray-300 w-48">
                <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white text-lg font-semibold">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
            </div>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <p class="text-sm text-gray-500">Semester Aktif</p>
                <h3 class="text-xl font-bold mt-2">Ganjil 2024</h3>
            </div>
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <p class="text-sm text-gray-500">Total SKS Diambil</p>
                <h3 class="text-xl font-bold mt-2">22 SKS</h3>
            </div>
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <p class="text-sm text-gray-500">IPK</p>
                <h3 class="text-xl font-bold text-green-600 mt-2">3.75</h3>
            </div>
        </div>

        <!-- Charts -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-xl shadow">
                <h4 class="text-lg font-semibold mb-4">Aktivitas Semester</h4>
                <canvas id="barChart"></canvas>
            </div>
            <div class="bg-white p-6 rounded-xl shadow flex flex-col items-center justify-center">
                <h4 class="text-lg font-semibold mb-4">Progress Kelulusan</h4>
                <div class="relative w-40 h-40">
                    <canvas id="circleChart" width="160" height="160"></canvas>
                    <div class="absolute inset-0 flex items-center justify-center text-xl font-bold text-blue-600">
                        75%
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- Chart Scripts -->
<script>
    new Chart(document.getElementById('barChart').getContext('2d'), {
        type: 'bar',
        data: {
            labels: ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'],
            datasets: [{
                label: 'Jumlah Tugas',
                data: [3, 5, 2, 4, 6, 7, 5, 4, 3, 6, 2, 1],
                backgroundColor: '#4b6cb7'
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    new Chart(document.getElementById('circleChart').getContext('2d'), {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [75, 25],
                backgroundColor: ['#4b6cb7', '#e4e4e7'],
                borderWidth: 0
            }]
        },
        options: {
            cutout: '70%',
            plugins: { legend: { display: false } }
        }
    });
</script>

</body>
</html>
