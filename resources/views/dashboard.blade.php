<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-8">
        <!-- Stat Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <!-- Mahasiswa -->
            <div class="bg-white shadow rounded-lg p-6">
                <div class="text-gray-600">Total Mahasiswa</div>
                <div class="text-3xl font-bold text-blue-600 mt-2">
                    {{ \App\Models\Mahasiswa::count() }}
                </div>
                <div class="text-sm text-green-500 mt-1">+5% dari bulan lalu</div>
            </div>

            <!-- Program Studi -->
            <div class="bg-white shadow rounded-lg p-6">
                <div class="text-gray-600">Program Studi</div>
                <div class="text-3xl font-bold text-green-600 mt-2">
                    {{ \App\Models\ProgramStudi::count() }}
                </div>
                <div class="text-sm text-blue-500 mt-1">Tetap stabil</div>
            </div>

            <!-- Users -->
            <div class="bg-white shadow rounded-lg p-6">
                <div class="text-gray-600">User Terdaftar</div>
                <div class="text-3xl font-bold text-purple-600 mt-2">
                    {{ \App\Models\User::count() }}
                </div>
                <div class="text-sm text-red-500 mt-1">-2% dari minggu lalu</div>
            </div>
        </div>

        <!-- Chart -->
        <div class="bg-white shadow rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">Data Pendaftaran Mahasiswa per Bulan</h3>
            <canvas id="chartMahasiswa" height="100"></canvas>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('chartMahasiswa');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'],
                    datasets: [{
                        label: 'Pendaftaran',
                        data: [12, 19, 8, 15, 10, 22, 30, 18, 20, 24, 17, 12], // data dummy, bisa diganti
                        backgroundColor: '#3b82f6',
                    }]
                },
                options: {
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            });
        </script>
    @endpush
</x-app-layout>
