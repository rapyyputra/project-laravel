<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-800">Total Mahasiswa</h3>
                <p class="mt-2 text-3xl text-blue-600">{{ \App\Models\Mahasiswa::count() }}</p>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-800">Program Studi</h3>
                <p class="mt-2 text-3xl text-green-600">{{ \App\Models\ProgramStudi::count() }}</p>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-800">User Terdaftar</h3>
                <p class="mt-2 text-3xl text-purple-600">{{ \App\Models\User::count() }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
