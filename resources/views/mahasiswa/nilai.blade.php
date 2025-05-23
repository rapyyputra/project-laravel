<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Nilai Akademik - SIAKAD</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
  <style>
    .animated-gradient {
      background: linear-gradient(-45deg, #3b82f6, #2563eb, #1e3a8a, #0ea5e9);
      background-size: 400% 400%;
      animation: gradientShift 15s ease infinite;
    }
    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    .glass-effect {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .hover-lift {
      transition: all 0.3s ease;
    }
    .hover-lift:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
  </style>
</head>
<body class="animated-gradient min-h-screen flex items-center justify-center text-white font-sans">

  <div class="glass-effect rounded-2xl shadow-lg p-8 max-w-md w-full text-center hover-lift">
    <h1 class="text-3xl font-bold mb-4">Nilai Akademik</h1>
    <p class="mb-6 text-white/80">Selamat datang di Sistem Informasi Akademik. Berikut grafik nilai Anda:</p>
    <canvas id="nilaiChart" width="400" height="200"></canvas>
  </div>

  <script>
    const ctx = document.getElementById('nilaiChart').getContext('2d');
    const nilaiChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Matematika', 'Fisika', 'Kimia', 'Biologi', 'Bahasa'],
        datasets: [{
          label: 'Nilai',
          data: [85, 90, 78, 88, 92],
          backgroundColor: 'rgba(255, 255, 255, 0.6)',
          borderColor: 'rgba(255, 255, 255, 0.9)',
          borderWidth: 1,
          borderRadius: 5
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            labels: {
              color: '#ffffff'
            }
          }
        },
        scales: {
          x: {
            ticks: {
              color: '#ffffff'
            }
          },
          y: {
            beginAtZero: true,
            ticks: {
              color: '#ffffff'
            }
          }
        }
      }
    });
  </script>

</body>
</html>
