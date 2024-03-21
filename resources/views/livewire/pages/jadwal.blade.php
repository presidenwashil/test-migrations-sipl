<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Jadwal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        @foreach ($jadwal as $j)
            <div class="max-w-xl">
                <div class="flex justify-between">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200 leading-tight">{{ $j->kelompok->matakuliah->nama }}</h2>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $j->kelompok->matakuliah->kode }}</p>
                    </div>
                    <div>
                        <button wire:click="goToPertemuanByKelompokId({{ $j->kelompok->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Pertemuan</button>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-sm text-gray-600 dark:text-gray-400">Ruangan: {{ $j->ruangan->nama }}</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Hari: {{ $j->hari }}</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Jam: {{ $j->waktu }}</p>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>