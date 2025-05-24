<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status FRS - Formulir Rencana Studi</title>
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

        .status-container {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.85));
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.1),
                0 0 0 1px rgba(255, 255, 255, 0.2);
            padding: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            margin-bottom: 2rem;
        }

        /* Info Cards */
        .info-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .info-card {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            border-radius: 15px;
            padding: 1.5rem;
            border: 2px solid #e2e8f0;
            transition: transform 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
        }

        .info-card h3 {
            font-size: 1rem;
            color: #64748b;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-card .value {
            font-size: 2rem;
            font-weight: bold;
            color: #1e293b;
        }

        /* Status Overview */
        .status-overview {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .status-item {
            text-align: center;
            padding: 1rem;
            border-radius: 10px;
            color: white;
            font-weight: 600;
        }

        .status-pending {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        }

        .status-approved {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        }

        .status-rejected {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        }

        /* Table Styling */
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

        /* Status Badges */
        .status-badge {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .badge-pending {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            color: #92400e;
        }

        .badge-approved {
            background: linear-gradient(135deg, #34d399 0%, #10b981 100%);
            color: #065f46;
        }

        .badge-rejected {
            background: linear-gradient(135deg, #fca5a5 0%, #ef4444 100%);
            color: #991b1b;
        }

        /* Notes Section */
        .notes-column {
            max-width: 200px;
            word-wrap: break-word;
        }

        .note-text {
            font-style: italic;
            color: #6b7280;
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
            text-decoration: none;
            display: inline-block;
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .status-container {
                padding: 1rem;
                border-radius: 15px;
            }

            .header h2 {
                font-size: 2rem;
            }

            .info-cards {
                grid-template-columns: 1fr;
            }

            thead th,
            tbody td {
                padding: 0.75rem;
                font-size: 0.85rem;
            }

            .notes-column {
                max-width: 150px;
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

        .status-container {
            animation: fadeInUp 0.8s ease-out;
        }

        .info-cards {
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        .table-container {
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        .button-container {
            animation: fadeInUp 0.8s ease-out 0.6s both;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Status Formulir Rencana Studi</h2>
            <p>Status persetujuan FRS Anda oleh Dosen Pembimbing Akademik</p>
        </div>
        
        <div class="status-container">
            <!-- Info Cards -->
            <div class="info-cards">
                <div class="info-card">
                    <h3>Semester</h3>
                    <div class="value">Ganjil 2024/2025</div>
                </div>
                <div class="info-card">
                    <h3>Total SKS</h3>
                    <div class="value">20 SKS</div>
                </div>
                <div class="info-card">
                    <h3>Tanggal Pengajuan</h3>
                    <div class="value">24 Mei 2025</div>
                </div>
                <div class="info-card">
                    <h3>Status Keseluruhan</h3>
                    <div class="value" style="color: #f59e0b;">Pending</div>
                </div>
            </div>

            <!-- Status Overview -->
            <div class="status-overview">
                <div class="status-item status-approved">
                    <div style="font-size: 1.5rem;">4</div>
                    <div>Mata Kuliah Disetujui</div>
                </div>
                <div class="status-item status-pending">
                    <div style="font-size: 1.5rem;">2</div>
                    <div>Menunggu Persetujuan</div>
                </div>
                <div class="status-item status-rejected">
                    <div style="font-size: 1.5rem;">0</div>
                    <div>Mata Kuliah Ditolak</div>
                </div>
            </div>

            <!-- Table with FRS Status -->
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Kode MK</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Status</th>
                            <th>Tanggal Review</th>
                            <th>Catatan Dosen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>IF201</td>
                            <td>Pemrograman Web</td>
                            <td>3</td>
                            <td>
                                <span class="status-badge badge-approved">✓ Disetujui</span>
                            </td>
                            <td>23 Mei 2025</td>
                            <td class="notes-column">
                                <span class="note-text">Mata kuliah sesuai dengan kurikulum</span>
                            </td>
                        </tr>
                        <tr>
                            <td>IF202</td>
                            <td>Basis Data</td>
                            <td>3</td>
                            <td>
                                <span class="status-badge badge-approved">✓ Disetujui</span>
                            </td>
                            <td>23 Mei 2025</td>
                            <td class="notes-column">
                                <span class="note-text">Prasyarat terpenuhi</span>
                            </td>
                        </tr>
                        <tr>
                            <td>IF203</td>
                            <td>Algoritma dan Struktur Data</td>
                            <td>4</td>
                            <td>
                                <span class="status-badge badge-pending">⏳ Pending</span>
                            </td>
                            <td>-</td>
                            <td class="notes-column">
                                <span class="note-text">Sedang dalam review</span>
                            </td>
                        </tr>
                        <tr>
                            <td>IF204</td>
                            <td>Sistem Operasi</td>
                            <td>3</td>
                            <td>
                                <span class="status-badge badge-approved">✓ Disetujui</span>
                            </td>
                            <td>24 Mei 2025</td>
                            <td class="notes-column">
                                <span class="note-text">Mata kuliah wajib semester ini</span>
                            </td>
                        </tr>
                        <tr>
                            <td>IF205</td>
                            <td>Jaringan Komputer</td>
                            <td>3</td>
                            <td>
                                <span class="status-badge badge-approved">✓ Disetujui</span>
                            </td>
                            <td>24 Mei 2025</td>
                            <td class="notes-column">
                                <span class="note-text">Sesuai dengan rencana studi</span>
                            </td>
                        </tr>
                        <tr>
                            <td>IF206</td>
                            <td>Rekayasa Perangkat Lunak</td>
                            <td>4</td>
                            <td>
                                <span class="status-badge badge-pending">⏳ Pending</span>
                            </td>
                            <td>-</td>
                            <td class="notes-column">
                                <span class="note-text">Menunggu konfirmasi ketersediaan kelas</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Action Buttons -->
            <div class="button-container">
                <a href="#" class="btn btn-secondary">📋 Edit FRS</a>
                <button type="button" class="btn btn-primary" onclick="printFRS()">🖨 Cetak FRS</button>
                <button type="button" class="btn btn-primary" onclick="refreshStatus()">🔄 Refresh Status</button>
            </div>
        </div>
    </div>

    <script>
        // Function to refresh status
        function refreshStatus() {
            // Simulate loading
            const btn = event.target;
            const originalText = btn.innerHTML;
            btn.innerHTML = '⏳ Memuat...';
            btn.disabled = true;
            
            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.disabled = false;
                
                // Simulate status update notification
                showNotification('Status FRS telah diperbarui!', 'success');
                
                // In real implementation, this would fetch new data from server
                // and update the table accordingly
            }, 2000);
        }

        // Function to print FRS
        function printFRS() {
            // Create a printable version
            const printWindow = window.open('', '', 'height=600,width=800');
            const currentDate = new Date().toLocaleDateString('id-ID');
            
            printWindow.document.write(`
                <html>
                <head>
                    <title>FRS - Formulir Rencana Studi</title>
                    <style>
                        body { font-family: Arial, sans-serif; margin: 20px; }
                        .header { text-align: center; margin-bottom: 30px; }
                        .info { margin-bottom: 20px; }
                        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
                        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
                        th { background-color: #f0f0f0; }
                        .signature { margin-top: 50px; display: flex; justify-content: space-between; }
                        .signature div { text-align: center; width: 200px; }
                    </style>
                </head>
                <body>
                    <div class="header">
                        <h2>FORMULIR RENCANA STUDI (FRS)</h2>
                        <p>Semester Ganjil 2024/2025</p>
                    </div>
                    <div class="info">
                        <p><strong>Tanggal Cetak:</strong> ${currentDate}</p>
                        <p><strong>Total SKS:</strong> 20 SKS</p>
                        <p><strong>Status:</strong> Sebagian disetujui, sebagian menunggu persetujuan</p>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode MK</th>
                                <th>Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Status</th>
                                <th>Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>IF201</td>
                                <td>Pemrograman Web</td>
                                <td>3</td>
                                <td>Disetujui</td>
                                <td>Mata kuliah sesuai dengan kurikulum</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>IF202</td>
                                <td>Basis Data</td>
                                <td>3</td>
                                <td>Disetujui</td>
                                <td>Prasyarat terpenuhi</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>IF203</td>
                                <td>Algoritma dan Struktur Data</td>
                                <td>4</td>
                                <td>Pending</td>
                                <td>Sedang dalam review</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>IF204</td>
                                <td>Sistem Operasi</td>
                                <td>3</td>
                                <td>Disetujui</td>
                                <td>Mata kuliah wajib semester ini</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>IF205</td>
                                <td>Jaringan Komputer</td>
                                <td>3</td>
                                <td>Disetujui</td>
                                <td>Sesuai dengan rencana studi</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>IF206</td>
                                <td>Rekayasa Perangkat Lunak</td>
                                <td>4</td>
                                <td>Pending</td>
                                <td>Menunggu konfirmasi ketersediaan kelas</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="signature">
                        <div>
                            <p>Mahasiswa</p>
                            <br><br><br>
                            <p>(_)</p>
                        </div>
                        <div>
                            <p>Dosen Pembimbing Akademik</p>
                            <br><br><br>
                            <p>(_)</p>
                        </div>
                    </div>
                </body>
                </html>
            `);
            
            printWindow.document.close();
            printWindow.print();
        }

        // Notification function
        function showNotification(message, type = 'info') {
            // Create notification element
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                padding: 1rem 1.5rem;
                border-radius: 10px;
                color: white;
                font-weight: 600;
                z-index: 1000;
                animation: slideInRight 0.5s ease;
                ${type === 'success' ? 'background: linear-gradient(135deg, #10b981 0%, #059669 100%);' : 
                  type === 'error' ? 'background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);' :
                  'background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);'}
            `;
            notification.textContent = message;
            
            // Add slide animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes slideInRight {
                    from { transform: translateX(100%); opacity: 0; }
                    to { transform: translateX(0); opacity: 1; }
                }
            `;
            document.head.appendChild(style);
            
            document.body.appendChild(notification);
            
            // Remove notification after 3 seconds
            setTimeout(() => {
                notification.style.animation = 'slideInRight 0.5s ease reverse';
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.parentNode.removeChild(notification);
                    }
                }, 500);
            }, 3000);
        }

        // Simulate real-time status updates
        function simulateStatusUpdates() {
            // This would typically be done via WebSocket or periodic AJAX calls
            setInterval(() => {
                // In real implementation, you'd fetch actual data from your backend
                console.log('Checking for status updates...');
            }, 30000); // Check every 30 seconds
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            // Show welcome notification
            setTimeout(() => {
                showNotification('FRS status dimuat. Status akan diperbarui secara otomatis.', 'info');
            }, 1000);
            
            // Start status update simulation
            simulateStatusUpdates();
        });
    </script>
</body>
</html>