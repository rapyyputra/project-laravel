<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Rencana Studi (FRS)</title>
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .bg-white {
            background-color: #ffffff;
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 0.5rem 1rem;
            text-align: left;
        }
        thead tr {
            background-color: #f3f4f6;
        }
        button {
            margin-top: 1rem;
            background-color: #2563eb;
            color: #ffffff;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #1d4ed8;
        }
        input[type="checkbox"] {
            margin: 0;
        }
        /* Penyesuaian untuk kelas yang belum terdefinisi */
        .text-2xl {
            font-size: 1.5rem;
        }
        .font-bold {
            font-weight: 700;
        }
        .mb-4 {
            margin-bottom: 1rem;
        }
        .text-sm {
            font-size: 0.875rem;
        }
        .text-left {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-2xl font-bold mb-4">Formulir Rencana Studi (FRS)</h2>
        <div class="bg-white">
            <form action="#" method="POST">
                <table class="min-w-full text-sm text-left">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-2 px-4">Kode MK</th>
                            <th class="py-2 px-4">Mata Kuliah</th>
                            <th class="py-2 px-4">SKS</th>
                            <th class="py-2 px-4">Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4">IF201</td>
                            <td class="py-2 px-4">Pemrograman Web</td>
                            <td class="py-2 px-4">3</td>
                            <td class="py-2 px-4"><input type="checkbox" name="mk[]" value="IF201"></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4">IF202</td>
                            <td class="py-2 px-4">Basis Data</td>
                            <td class="py-2 px-4">3</td>
                            <td class="py-2 px-4"><input type="checkbox" name="mk[]" value="IF202"></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded">Simpan FRS</button>
            </form>
        </div>
    </div>
</body>
</html>