<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Kelola Pertemuan') }}
        </h2>
    </x-slot>

    <livewire:pertemuan.index :kelompokId = "$kelompokId" />
</x-app-layout>