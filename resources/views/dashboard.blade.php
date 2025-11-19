<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="text-gray-900 dark:text-gray-100 space-y-6">

                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="text-2xl font-bold">Selamat Datang!</h3>
                    </div>

                    <p class="text-lg">
                        Kamu berhasil login ke dashboard. Semoga kamu sukses dan mendapatkan hasil terbaik dalam UKK RPL SMK!
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">

                        <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-xl shadow">
                            <h4 class="font-semibold text-lg mb-2">Kenapa Baim Pro?</h4>
                            <p class="text-sm opacity-80">
                                Bukan cuma pro, Baim bahkan pernah jadi kandidat ONIC Esports (katanya).
                            </p>
                        </div>

                        <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-xl shadow">
                            <h4 class="font-semibold text-lg mb-2">Challenge Mythic Immortal: Only Roam</h4>
                            <p class="text-sm opacity-80">
                                Baim sedang mencoba push ke Mythic Immortal hanya dengan hero Roam. Kalau bukan Roam, berarti bukan Baim yang main.
                            </p>
                        </div>

                        <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-xl shadow">
                            <h4 class="font-semibold text-lg mb-2">Kenapa Selalu Pakai Roam?</h4>
                            <p class="text-sm opacity-80">
                                Karena kalau pakai Hyper, nanti Baim terlalu cepat Immortal-nya.
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>