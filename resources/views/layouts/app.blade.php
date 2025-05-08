<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f1f5f9;
        }
        .sidebar {
            height: 100vh;
            background-color: #f8f9fa;
            padding-top: 1rem;
            border-right: 1px solid #dee2e6;
        }
        .sidebar a {
            color: #333;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            border-radius: 4px;
            margin-bottom: 5px;
        }
        .sidebar a.active, .sidebar a:hover {
            background-color: #6610f2;
            color: #fff;
        }
        .stat-box {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .stat-title {
            font-size: 1rem;
            color: #6b7280;
        }
        .stat-value {
            font-size: 2rem;
            font-weight: bold;
        }
        .chart-container {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar col-md-3 col-lg-2">
        <h4 class="text-center">SIAKAD</h4>
        <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}">Dashboard</a>
        <a href="{{ route('mahasiswa.index') }}" class="{{ request()->is('mahasiswa') ? 'active' : '' }}">Mahasiswa</a>
        <a href="#">Jadwal Kuliah</a>
        <a href="#">Tugas</a>
        <a href="#">Presensi</a>
        <a href="#">Nilai</a>
        <form method="POST" action="{{ route('logout') }}" class="mt-4 px-3">
            @csrf
            <button type="submit" class="btn btn-outline-danger w-100">Logout</button>
        </form>
    </div>

    <!-- Content -->
    <div class="flex-grow-1 p-4">
        <h2 class="mb-4">Dashboard</h2>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="stat-box">
                    <div class="stat-title">Total Mahasiswa</div>
                    <div class="stat-value text-primary">{{ \App\Models\Mahasiswa::count() }}</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box">
                    <div class="stat-title">Program Studi</div>
                    <div class="stat-value text-success">{{ \App\Models\ProgramStudi::count() }}</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box">
                    <div class="stat-title">User Terdaftar</div>
                    <div class="stat-value text-danger">{{ \App\Models\User::count() }}</div>
                </div>
            </div>
        </div>

        <div class="chart-container mt-5">
            <h5 class="mb-3">Grafik Pendaftaran Mahasiswa per Bulan</h5>
            <canvas id="chartMahasiswa" height="100"></canvas>
        </div>
    </div>
</div>

<script>
    const ctx = document.getElementById('chartMahasiswa');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'],
            datasets: [{
                label: 'Pendaftaran',
                data: [12, 19, 8, 15, 10, 22, 30, 18, 20, 24, 17, 12], // dummy data
                backgroundColor: '#6610f2',
                borderRadius: 5
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>