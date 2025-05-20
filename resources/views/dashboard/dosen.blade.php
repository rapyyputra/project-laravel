<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Dosen - SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', sans-serif;
        }
        .header {
            padding: 20px;
            background-color: #182848;
            color: #fff;
            text-align: center;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .card-option {
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            transition: 0.3s;
        }
        .card-option:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Selamat Datang, {{ auth()->user()->name }}</h2>
        <p>(Dosen)</p>
    </div>

    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card card-option text-center p-4">
                    <h5>ACC FRS</h5>
                    <p>Lihat & Setujui FRS mahasiswa</p>
                    <a href="{{ route('frs.acc') }}" class="btn btn-primary">ACC FRS</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-option text-center p-4">
                    <h5>Jadwal Mengajar</h5>
                    <p>Lihat jadwal mengajar Anda</p>
                    <a href="{{ route('jadwal.dosen') }}" class="btn btn-success">Lihat Jadwal</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-option text-center p-4">
                    <h5>Isi Nilai</h5>
                    <p>Input nilai mahasiswa yang Anda ajar</p>
                    <a href="{{ route('nilai.input') }}" class="btn btn-warning">Isi Nilai</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
