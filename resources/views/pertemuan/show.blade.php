<div>

    <table>
        <thead>
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <form action="">
                @foreach ($pertemuan->kelompok->mahasiswas as $m)
                    <tr>
                        <td>{{ $m->nim }}</td>
                        <td>{{ $m->nama }}</td>
                        <td>
                            <select name="status" id="status">
                                <option value="hadir">Hadir</option>
                                <option value="izin">Izin</option>
                                <option value="sakit">Sakit</option>
                                <option value="alpa">Alpa</option>
                                <option value="online">Online</option>
                            </select>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3">
                        <button type="submit">Simpan</button>
                    </td>
                </tr>
            </form>
        </tbody>
    </table>
</div>
