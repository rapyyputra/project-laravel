<!-- resources/views/nilai/mahasiswa.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nilai Akademik</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-4">Nilai Akademik</h2>
        <div class="bg-white shadow-md rounded p-4">
            <table class="min-w-full text-sm text-left">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="py-2 px-4">Mata Kuliah</th>
                        <th class="py-2 px-4">SKS</th>
                        <th class="py-2 px-4">Nilai</th>
                        <th class="py-2 px-4">Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4">Pemrograman Web</td>
                        <td class="py-2 px-4">3</td>
                        <td class="py-2 px-4">85</td>
                        <td class="py-2 px-4">A</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">Basis Data</td>
                        <td class="py-2 px-4">3</td>
                        <td class="py-2 px-4">78</td>
                        <td class="py-2 px-4">B+</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
