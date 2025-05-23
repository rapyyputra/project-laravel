<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Rencana Studi (FRS)</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 2rem;
            color: white;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .header h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            background: linear-gradient(45deg, #ffffff, #e0e7ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .form-container {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.85));
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.1),
                0 0 0 1px rgba(255, 255, 255, 0.2);
            padding: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .table-container {
            overflow-x: auto;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 15px;
            overflow: hidden;
        }

        thead {
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
            color: white;
        }

        thead th {
            padding: 1rem 1.5rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.875rem;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }

        tbody tr {
            transition: all 0.3s ease;
            border-bottom: 1px solid #e5e7eb;
        }

        tbody tr:hover {
            background: linear-gradient(90deg, #eff6ff 0%, #dbeafe 100%);
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(59, 130, 246, 0.1);
        }

        tbody tr:last-child {
            border-bottom: none;
        }

        tbody td {
            padding: 1rem 1.5rem;
            font-size: 0.95rem;
            color: #374151;
        }

        tbody td:first-child {
            font-weight: 600;
            color: #1e40af;
        }

        /* Styled Checkbox */
        .checkbox-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .custom-checkbox {
            position: relative;
            display: inline-block;
        }

        .custom-checkbox input[type="checkbox"] {
            opacity: 0;
            position: absolute;
            z-index: -1;
        }

        .checkmark {
            display: inline-block;
            width: 24px;
            height: 24px;
            background: linear-gradient(135deg, #e5e7eb 0%, #d1d5db 100%);
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid #d1d5db;
            position: relative;
        }

        .custom-checkbox input[type="checkbox"]:checked + .checkmark {
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
            border-color: #1e40af;
            transform: scale(1.1);
        }

        .checkmark::after {
            content: '';
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%) scale(0);
            width: 6px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform-origin: center;
            transition: transform 0.2s ease;
        }

        .custom-checkbox input[type="checkbox"]:checked + .checkmark::after {
            transform: translate(-50%, -60%) rotate(45deg) scale(1);
        }

        /* Button Styling */
        .button-container {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 1rem 2rem;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
            color: white;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
            color: white;
        }

        .btn-secondary:hover {
            background: linear-gradient(135deg, #5b6470 0%, #374151 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(107, 114, 128, 0.4);
        }

        /* Summary Box */
        .summary-box {
            background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
            border: 2px solid #93c5fd;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .summary-box h3 {
            color: #1e40af;
            margin-bottom: 0.5rem;
            font-size: 1.25rem;
        }

        .summary-text {
            color: #1e40af;
            font-weight: 600;
            font-size: 1.1rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .form-container {
                padding: 1rem;
                border-radius: 15px;
            }

            .header h2 {
                font-size: 2rem;
            }

            thead th,
            tbody td {
                padding: 0.75rem;
                font-size: 0.85rem;
            }

            .btn {
                padding: 0.75rem 1.5rem;
                font-size: 0.9rem;
            }
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-container {
            animation: fadeInUp 0.8s ease-out;
        }

        .table-container {
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        .button-container {
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Formulir Rencana Studi</h2>
            <p>Silakan pilih mata kuliah yang ingin Anda ambil untuk semester ini</p>
        </div>
        
        <div class="form-container">
            <form action="#" method="POST">
                <div class="summary-box">
                    <h3>📊 Ringkasan Pemilihan</h3>
                    <div class="summary-text">
                        Total SKS Terpilih: <span id="totalSKS">0</span> SKS
                    </div>
                </div>

                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Kode MK</th>
                                <th>Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Pilih</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>IF201</td>
                                <td>Pemrograman Web</td>
                                <td>3</td>
                                <td class="checkbox-wrapper">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="mk[]" value="IF201" data-sks="3">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>IF202</td>
                                <td>Basis Data</td>
                                <td>3</td>
                                <td class="checkbox-wrapper">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="mk[]" value="IF202" data-sks="3">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>IF203</td>
                                <td>Algoritma dan Struktur Data</td>
                                <td>4</td>
                                <td class="checkbox-wrapper">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="mk[]" value="IF203" data-sks="4">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>IF204</td>
                                <td>Sistem Operasi</td>
                                <td>3</td>
                                <td class="checkbox-wrapper">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="mk[]" value="IF204" data-sks="3">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>IF205</td>
                                <td>Jaringan Komputer</td>
                                <td>3</td>
                                <td class="checkbox-wrapper">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="mk[]" value="IF205" data-sks="3">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>IF206</td>
                                <td>Rekayasa Perangkat Lunak</td>
                                <td>4</td>
                                <td class="checkbox-wrapper">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="mk[]" value="IF206" data-sks="4">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="button-container">
                    <button type="button" class="btn btn-secondary" onclick="resetForm()">Reset Pilihan</button>
                    <button type="submit" class="btn btn-primary">💾 Simpan FRS</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Function to calculate total SKS
        function updateTotalSKS() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            let totalSKS = 0;
            
            checkboxes.forEach(checkbox => {
                totalSKS += parseInt(checkbox.getAttribute('data-sks'));
            });
            
            document.getElementById('totalSKS').textContent = totalSKS;
        }

        // Add event listeners to all checkboxes
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', updateTotalSKS);
        });

        // Reset form function
        function resetForm() {
            document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                checkbox.checked = false;
            });
            updateTotalSKS();
        }

        // Form submission handler
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const selectedCourses = [];
            document.querySelectorAll('input[type="checkbox"]:checked').forEach(checkbox => {
                const row = checkbox.closest('tr');
                const kode = row.cells[0].textContent;
                const nama = row.cells[1].textContent;
                const sks = row.cells[2].textContent;
                
                selectedCourses.push({
                    kode: kode,
                    nama: nama,
                    sks: sks
                });
            });

            if (selectedCourses.length === 0) {
                alert('Silakan pilih setidaknya satu mata kuliah!');
                return;
            }

            let message = 'FRS berhasil disimpan!\n\nMata kuliah yang dipilih:\n';
            selectedCourses.forEach(course => {
                message += `• ${course.kode} - ${course.nama} (${course.sks} SKS)\n`;
            });
            message += `\nTotal SKS: ${document.getElementById('totalSKS').textContent} SKS`;
            
            alert(message);
        });

        // Initialize total SKS on page load
        updateTotalSKS();
    </script>
</body>
</html>