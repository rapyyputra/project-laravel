<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ACC FRS - Dosen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow">
        <h1 class="text-2xl font-bold mb-4">Daftar Pengajuan FRS</h1>
        <table class="table-auto w-full border border-gray-300">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2">Nama Mahasiswa</th>
                    <th class="border px-4 py-2">NRP</th>
                    <th class="border px-4 py-2">Status</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">Andi Saputra</td>
                    <td class="border px-4 py-2">12345678</td>
                    <td class="border px-4 py-2 text-yellow-600">Menunggu</td>
                    <td class="border px-4 py-2">
                        <button class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded">Setujui</button>
                        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded ml-2">Tolak</button>
                    </td>
                </tr>
                <!-- Tambahkan data lainnya -->
            </tbody>
        </table>
    </div>
</body>
</html>
