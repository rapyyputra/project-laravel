<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md p-5">
        <h1 class="text-2xl font-bold text-blue-600 mb-6">SIAKAD</h1>
        <ul class="space-y-4 text-gray-700">
            <li><a href="#" class="flex items-center gap-2 hover:text-blue-600"><i class="fas fa-home"></i>Dashboard</a></li>
            <li><a href="{{ route('frs.index') }}" class="hover:text-blue-600">FRS</a></li>
            <li><a href="{{ route('jadwal.mahasiswa') }}" class="hover:text-blue-600">Jadwal Kuliah</a></li>
            <li><a href="{{ route('nilai.mahasiswa') }}" class="hover:text-blue-600">Nilai</a></li>
            <li class="pt-6">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-red-500 hover:text-red-700">Logout</button>
                </form>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Selamat Datang, {{ auth()->user()->name }}</h2>
            <div class="flex items-center gap-4">
                <input type="text" placeholder="Cari..." class="px-3 py-1 rounded-lg border border-gray-300">
                <div class="w-10 h-10 rounded-full bg-blue-400 flex items-center justify-center text-white">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
            </div>
        </div>

        <!-- Stat Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <p class="text-sm text-gray-500">Semester Aktif</p>
                <h3 class="text-2xl font-bold">Ganjil 2024</h3>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <p class="text-sm text-gray-500">Total SKS Diambil</p>
                <h3 class="text-2xl font-bold">22 SKS</h3>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <p class="text-sm text-gray-500">IPK</p>
                <h3 class="text-2xl font-bold text-green-500">3.75</h3>
            </div>
        </div>

        <!-- Charts -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Bar Chart -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h4 class="font-semibold mb-4">Aktivitas Semester</h4>
                <canvas id="barChart"></canvas>
            </div>

            <!-- Circular Progress -->
            <div class="bg-white p-6 rounded-lg shadow flex flex-col items-center justify-center">
                <h4 class="font-semibold mb-4">Progress Kelulusan</h4>
                <div class="relative w-40 h-40">
                    <canvas id="circleChart" width="160" height="160"></canvas>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-xl font-bold text-blue-600">75%</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- Font Awesome (optional) -->
<script src="https://kit.fontawesome.com/a2e5e6fa4c.js" crossorigin="anonymous"></script>

<script>
    // Bar Chart
    const ctxBar = document.getElementById('barChart').getContext('2d');
    new Chart(ctxBar, {
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

    // Circular Chart (progress)
    const ctxCircle = document.getElementById('circleChart').getContext('2d');
    new Chart(ctxCircle, {
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
            responsive: true,
            plugins: { legend: { display: false } }
        }
    });
</script>

</body>
</html>
