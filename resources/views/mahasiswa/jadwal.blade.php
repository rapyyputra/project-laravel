<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kuliah</title>
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
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-2xl font-bold mb-4">Jadwal Kuliah</h2>
        <div class="bg-white">
            <table class="min-w-full text-sm text-left">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="py-2 px-4">Hari</th>
                        <th class="py-2 px-4">Jam</th>
                        <th class="py-2 px-4">Mata Kuliah</th>
                        <th class="py-2 px-4">Ruang</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4">Senin</td>
                        <td class="py-2 px-4">08:00 - 10:00</td>
                        <td class="py-2 px-4">Pemrograman Web</td>
                        <td class="py-2 px-4">Lab RPL</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">Selasa</td>
                        <td class="py-2 px-4">10:00 - 12:00</td>
                        <td class="py-2 px-4">Basis Data</td>
                        <td class="py-2 px-4">Ruang 204</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>