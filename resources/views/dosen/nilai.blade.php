<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Nilai Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow">
        <h1 class="text-2xl font-bold mb-4">Input Nilai Mahasiswa</h1>
        <form>
            <div class="mb-4">
                <label class="block font-medium mb-1">Nama Mahasiswa</label>
                <input type="text" class="w-full border border-gray-300 rounded px-3 py-2" placeholder="Contoh: Andi Saputra">
            </div>
            <div class="mb-4">
                <label class="block font-medium mb-1">NRP</label>
                <input type="text" class="w-full border border-gray-300 rounded px-3 py-2" placeholder="Contoh: 12345678">
            </div>
            <div class="mb-4">
                <label class="block font-medium mb-1">Nilai</label>
                <input type="number" class="w-full border border-gray-300 rounded px-3 py-2" placeholder="Contoh: 85">
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan Nilai</button>
        </form>
    </div>
</body>
</html>
