<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Tambah Pertemuan</h1>
                <form action="{{ route('pertemuan.store') }}" method="post">
                    @csrf
                    {{-- ambil pertemuan_ke terakhir + 1 berdasarkan kelompok yang sama --}}
                    <div class="form-group row">
                        <label for="pertemuan_ke" class="col-sm-2 col-form-label">Pertemuan Ke</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pertemuan_ke" name="pertemuan_ke">
                        </div>
                    </div>
                    @error('pertemuan_ke')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group row">
                        <select name="kelompok_id" id="kelompok_id">
                            @foreach ($kelompok as $k)
                                <option value="{{ $k->id }}">{{ $k->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        {{-- button submit kelompok baru --}}
                        <button type="submit">Tambah</button>
                    </div>
