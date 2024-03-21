<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Kelola Pertemuan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <div class="flex justify-between">
                    <div>
                        <form action="">
                            <label for="pertemuan_ke" livewire:model="pertemuan_ke">Pertemuan Ke - {{ $this->pertemuan_ke }}</label>
                            <input type="hidden" name="pertemuan_ke" id="pertemuan_ke" class="w-20" value="{{ $this->pertemuan_ke }}">

                            <table>
                                <thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Absen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($this->kelompok->mahasiswas as $m)
                                        <tr>
                                            <td>{{ $m->nim }}</td>
                                            <td>{{ $m->nama }}</td>
                                            <td>
                                                <select name="absensi_mahasiswa" id="absensi_mahasiswa" wire:model="absensiMahasiswa.{{ $m->id }}.{{ $this->pertemuan_ke }}">
                                                    <option value="H">H</option>
                                                    <option value="I">I</option>
                                                    <option value="S">S</option>
                                                    <option value="A">A</option>
                                                </select>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="mt-4">
                                <label for="asisten_id">Asisten</label>
                                    <select name="asisten_id[]" id="asisten_id" class="select2 w-full" multiple="multiple" wire:model="asisten_id" wire:ignore>
                                        @foreach ($this->asisten as $asisten)
                                            @if(is_object($asisten))
                                                <option value="{{ $asisten->id }}">{{ $asisten->name }}</option>
                                            @else
                                                <option>{{ $asisten }}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                    @push('js')
                                        @once
                                            <script src="{{ asset('js/select2.min.js') }}"></script>
                                        @endonce
                                        <script>
                                            $(document).ready(function() {
                                                $('.select2').select2();
                                            });
                                        </script>
                                    @endpush
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>