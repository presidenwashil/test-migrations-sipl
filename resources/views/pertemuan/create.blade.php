<div>
    <form action="{{route('pertemuan.store', ['kelompok' => $kelompok->id])}}" method="POST">
        @csrf
        <label for="pertemuan_ke">Pertemuan Ke</label>
        <input type="text" name="pertemuan_ke" id="pertemuan_ke">
        <button type="submit">Submit</button>
    </form>
</div>