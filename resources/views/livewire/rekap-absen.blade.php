<div>
    @foreach ($absen as $item)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $item->pertemuan_ke }}</h5>
                <p class="card-text">{{ $item->kelompok_id }}</p>
            </div>
        </div>
        <br>
    @endforeach
</div>
