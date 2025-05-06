<div class="flex min-h-screen bg-gray-50">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-xl border-r border-gray-200 flex flex-col">
        <div class="p-6">
            <h1 class="text-2xl font-bold text-gray-900">SIAKAD</h1>
        </div>
        <nav class="flex-1 px-4 space-y-2">
            <a href="{{ route('dashboard') }}"
               class="flex items-center px-4 py-2 rounded-lg hover:bg-purple-100 transition {{ request()->routeIs('dashboard') ? 'bg-purple-600 text-white' : 'text-gray-700' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6m-6 4v6h6"></path></svg>
                Dashboard
            </a>
            <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-purple-100 transition text-gray-700">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24"><path d="M5.121 17.804A13.937 13.937 0 0112 15c2.21 0 4.294.537 6.121 1.49M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                Biodata
            </a>
            <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-purple-100 transition text-gray-700">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24"><path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"/></svg>
                Jadwal Kuliah
            </a>
            <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-purple-100 transition text-gray-700">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" /></svg>
                Tugas
            </a>
            <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-purple-100 transition text-gray-700">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24"><path d="M5 8h14M5 16h14" /></svg>
                Presensi
            </a>
            <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-purple-100 transition bg-purple-600 text-white">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24"><path d="M9 17v-6h6v6h4V9l-7-4-7 4v8z" /></svg>
                Nilai
            </a>
        </nav>
        <!-- User info -->
        <div class="p-4 border-t border-gray-200 mt-auto flex items-center">
            <img src="https://via.placeholder.com/40" alt="Avatar" class="w-10 h-10 rounded-full mr-3">
            <div>
                <p class="text-sm font-semibold text-gray-800">Nabila Aurora</p>
                <p class="text-xs text-gray-500">Mahasiswa</p>
            </div>
        </div>
    </aside>

    <!-- Content wrapper -->
    <div class="flex-1">
        @yield('content')
    </div>
</div>
