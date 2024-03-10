<div>
    <form wire:submit.prevent="save">
        <div>
            <label for="pertemuanKe">Pertemuan ke: {{ $this->kelompok->pertemuans->count() + 1 }}</label>
            <input type="hidden" name="pertemuan_ke" value="{{ $this->kelompok->pertemuans->count() + 1 }}">
        </div>

        <div>
            <select name="" id="" multiple wire:model="pertemuanDetail.asisten_id">
                @foreach ($this->asistens as $a)
                    <option value="{{ $a->id }}">{{ $a->nama }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <table>
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($this->kelompok->mahasiswas as $m)
                        <tr>
                            <td>{{ $m->nim }}</td>
                            <td>{{ $m->nama }}</td>
                            <td>
                                <select name="status[]" id="" wire:model="status.{{ $m->id }}">
                                    <option value="hadir">Hadir</option>
                                    <option value="izin">Izin</option>
                                    <option value="sakit">Sakit</option>
                                    <option value="alpa">Alpa</option>
                                    <option value="online">Online</option>
                                </select>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div>
            <div>
                <label for="materi">Materi</label>
                <textarea name="materi" id="materi" cols="30" rows="10" wire:model="pertemuanDetail.materi"></textarea>
            </div>
            <div>
                <label for="catatan">Catatan</label>
                <textarea name="catatan" id="catatan" cols="30" rows="10" wire:model="pertemuanDetail.catatan"></textarea>
            </div>
        </div>

        <button type="submit">Simpan</button>
    </form>
</div>
