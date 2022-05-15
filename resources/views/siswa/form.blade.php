<form id="form-siswa">
    <div class="form-group mb-3">
        @csrf
        <label for="nama_siswa" class="form-label">Nama Siswa</label>
        <input type="email" id="nama_siswa" name="nama_siswa" class="form-control" placeholder="Nama Siswa">
    </div>
    <div class="input-group mb-3">
        <input type="number" name="nisn" class="form-control" placeholder="NISN">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" value="M" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
            Laki Laki
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" value="F" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
            Perempuan
        </label>
    </div>
    <div class="input-group mb-3 mt-3">
        <textarea name="alamat" id="" cols="30" rows="10" class="form-control" placeholder="Alamat Siswa"></textarea>
    </div>
    <div class="input-group mt-5 mb-5">
        <select name="sekolah_id" id="sekolah" class="form-control">
            @foreach ($sekolah as $item)
                <option value="{{ $item->id }}">{{ $item->nama_sekolah }}</option>
            @endforeach
        </select>
    </div>
    <button class="btn btn-primary">Submit</button>
</form>
