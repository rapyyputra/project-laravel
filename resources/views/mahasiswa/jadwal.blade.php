<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kuliah</title>
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

        .schedule-container {
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
            text-align: center;
        }

        tbody tr {
            transition: all 0.3s ease;
            border-bottom: 1px solid #e5e7eb;
            position: relative;
        }

        tbody tr:hover {
            background: linear-gradient(90deg, #eff6ff 0%, #dbeafe 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(59, 130, 246, 0.15);
        }

        tbody tr:last-child {
            border-bottom: none;
        }

        tbody td {
            padding: 1rem 1.5rem;
            font-size: 0.95rem;
            color: #374151;
            text-align: center;
            vertical-align: middle;
        }

        /* Day styling */
        .day-cell {
            font-weight: 700;
            color: #1e40af;
            background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
            border-radius: 8px;
            margin: 2px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Time styling */
        .time-cell {
            font-weight: 600;
            color: #059669;
            background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
            border-radius: 8px;
            margin: 2px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Course styling */
        .course-cell {
            font-weight: 600;
            color: #7c2d12;
            background: linear-gradient(135deg, #fef7ed 0%, #fed7aa 100%);
            border-radius: 8px;
            margin: 2px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Room styling */
        .room-cell {
            font-weight: 600;
            color: #7c2d12;
            background: linear-gradient(135deg, #fdf4ff 0%, #e9d5ff 100%);
            border-radius: 8px;
            margin: 2px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Current day highlight */
        .current-day {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            color: white;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
            position: relative;
            overflow: hidden;
        }

        .current-day::before {
            content: '⭐';
            position: absolute;
            left: 0.5rem;
            font-size: 1.2rem;
            animation: sparkle 2s infinite;
        }

        @keyframes sparkle {
            0%, 100% { opacity: 0.5; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.2); }
        }

        /* Status indicators */
        .status-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .status-card {
            padding: 1rem;
            border-radius: 12px;
            text-align: center;
            color: white;
            font-weight: 600;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }

        .total-classes {
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
        }

        .today-classes {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        }

        .next-class {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        }

        /* Navigation tabs */
        .nav-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 0.5rem;
            backdrop-filter: blur(10px);
        }

        .nav-tab {
            padding: 0.75rem 1.5rem;
            border: none;
            background: transparent;
            color: white;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 0 0.25rem;
        }

        .nav-tab.active {
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
        }

        .nav-tab:hover:not(.active) {
            background: rgba(255, 255, 255, 0.2);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .schedule-container {
                padding: 1rem;
                border-radius: 15px;
            }

            .header h2 {
                font-size: 2rem;
            }

            thead th,
            tbody td {
                padding: 0.75rem 0.5rem;
                font-size: 0.85rem;
            }

            .status-container {
                grid-template-columns: 1fr;
            }

            .nav-tabs {
                flex-wrap: wrap;
            }

            .nav-tab {
                padding: 0.5rem 1rem;
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

        .schedule-container {
            animation: fadeInUp 0.8s ease-out;
        }

        .status-container {
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        .table-container {
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        /* Floating action button */
        .fab {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
            transition: all 0.3s ease;
        }

        .fab:hover {
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 12px 35px rgba(59, 130, 246, 0.6);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>📅 Jadwal Kuliah</h2>
            <p>Semester Ganjil 2024/2025</p>
        </div>

        <div class="nav-tabs">
            <button class="nav-tab active" onclick="showWeekView()">📅 Mingguan</button>
            <button class="nav-tab" onclick="showDayView()">📋 Harian</button>
            <button class="nav-tab" onclick="showMonthView()">🗓️ Bulanan</button>
        </div>
        
        <div class="schedule-container">
            <div class="status-container">
                <div class="status-card total-classes">
                    <h3>📚 Total Kelas</h3>
                    <div style="font-size: 2rem; margin-top: 0.5rem;">12</div>
                </div>
                <div class="status-card today-classes">
                    <h3>🎯 Kelas Hari Ini</h3>
                    <div style="font-size: 2rem; margin-top: 0.5rem;" id="todayCount">2</div>
                </div>
                <div class="status-card next-class">
                    <h3>⏰ Kelas Berikutnya</h3>
                    <div style="font-size: 1.2rem; margin-top: 0.5rem;">Selasa, 10:00</div>
                </div>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>🗓️ Hari</th>
                            <th>⏰ Jam</th>
                            <th>📚 Mata Kuliah</th>
                            <th>🏢 Ruang</th>
                        </tr>
                    </thead>
                    <tbody id="scheduleTable">
                        <tr>
                            <td><div class="day-cell current-day">Senin</div></td>
                            <td><div class="time-cell">08:00 - 10:00</div></td>
                            <td><div class="course-cell">Pemrograman Web</div></td>
                            <td><div class="room-cell">Lab RPL</div></td>
                        </tr>
                        <tr>
                            <td><div class="day-cell">Senin</div></td>
                            <td><div class="time-cell">10:30 - 12:30</div></td>
                            <td><div class="course-cell">Algoritma dan Struktur Data</div></td>
                            <td><div class="room-cell">Ruang 301</div></td>
                        </tr>
                        <tr>
                            <td><div class="day-cell">Selasa</div></td>
                            <td><div class="time-cell">10:00 - 12:00</div></td>
                            <td><div class="course-cell">Basis Data</div></td>
                            <td><div class="room-cell">Ruang 204</div></td>
                        </tr>
                        <tr>
                            <td><div class="day-cell">Selasa</div></td>
                            <td><div class="time-cell">13:00 - 15:00</div></td>
                            <td><div class="course-cell">Sistem Operasi</div></td>
                            <td><div class="room-cell">Lab Komputer</div></td>
                        </tr>
                        <tr>
                            <td><div class="day-cell">Rabu</div></td>
                            <td><div class="time-cell">08:00 - 10:00</div></td>
                            <td><div class="course-cell">Jaringan Komputer</div></td>
                            <td><div class="room-cell">Lab Jaringan</div></td>
                        </tr>
                        <tr>
                            <td><div class="day-cell">Rabu</div></td>
                            <td><div class="time-cell">14:00 - 16:00</div></td>
                            <td><div class="course-cell">Rekayasa Perangkat Lunak</div></td>
                            <td><div class="room-cell">Ruang 205</div></td>
                        </tr>
                        <tr>
                            <td><div class="day-cell">Kamis</div></td>
                            <td><div class="time-cell">09:00 - 11:00</div></td>
                            <td><div class="course-cell">Matematika Diskrit</div></td>
                            <td><div class="room-cell">Ruang 302</div></td>
                        </tr>
                        <tr>
                            <td><div class="day-cell">Jumat</div></td>
                            <td><div class="time-cell">08:00 - 10:00</div></td>
                            <td><div class="course-cell">Pemrograman Mobile</div></td>
                            <td><div class="room-cell">Lab Mobile</div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <button class="fab" onclick="addNewClass()" title="Tambah Jadwal Baru">➕</button>

    <script>
        // Get current day
        const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const currentDay = days[new Date().getDay()];

        // Highlight current day
        function highlightCurrentDay() {
            const rows = document.querySelectorAll('#scheduleTable tr');
            let todayClassCount = 0;

            rows.forEach(row => {
                const dayCell = row.querySelector('.day-cell');
                if (dayCell && dayCell.textContent.trim() === currentDay) {
                    dayCell.classList.add('current-day');
                    todayClassCount++;
                }
            });

            document.getElementById('todayCount').textContent = todayClassCount;
        }

        // Navigation functions
        function showWeekView() {
            setActiveTab(0);
            // Implement week view logic
        }

        function showDayView() {
            setActiveTab(1);
            // Implement day view logic
        }

        function showMonthView() {
            setActiveTab(2);
            // Implement month view logic
        }

        function setActiveTab(index) {
            const tabs = document.querySelectorAll('.nav-tab');
            tabs.forEach((tab, i) => {
                tab.classList.toggle('active', i === index);
            });
        }

        function addNewClass() {
            alert('Fitur tambah jadwal baru akan segera hadir! 🚀');
        }

        // Update time display
        function updateTime() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('id-ID', { 
                hour: '2-digit', 
                minute: '2-digit' 
            });
            
            // Update next class time based on current time
            // This is a simplified version - in real app, you'd calculate based on actual schedule
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            highlightCurrentDay();
            updateTime();
            setInterval(updateTime, 60000); // Update every minute
        });

        // Add some interactivity to table rows
        document.addEventListener('DOMContentLoaded', function() {
            const rows = document.querySelectorAll('#scheduleTable tr');
            
            rows.forEach(row => {
                row.addEventListener('click', function() {
                    const day = this.querySelector('.day-cell').textContent;
                    const time = this.querySelector('.time-cell').textContent;
                    const course = this.querySelector('.course-cell').textContent;
                    const room = this.querySelector('.room-cell').textContent;
                    
                    const message = `📚 Detail Jadwal:\n\n` +
                                   `🗓️ Hari: ${day}\n` +
                                   `⏰ Waktu: ${time}\n` +
                                   `📖 Mata Kuliah: ${course}\n` +
                                   `🏢 Ruang: ${room}`;
                    
                    alert(message);
                });
            });
        });
    </script>
</body>
</html>