@extends('layout.template')
@section('konten')

    <!-- START FORM -->
    <form action='{{url('mahasiswa')}}' method='post' enctype="multipart/form-data">
@csrf

{{-- NPM --}}
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="npm" class="col-sm-2 col-form-label">NPM</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" value="{{Session::get('npm')}}" name='npm' id="npm">
            </div>
        </div>

        {{-- Nama --}}
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  value= "{{Session::get('nama')}}" name='nama' id="nama">
            </div>
        </div>


        {{-- Nomor --}}
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Nomor WhatsApp</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" value= "{{Session::get('nomor')}}" name='nomor' id="nomor">
            </div>
        </div>

        {{-- Fakultas --}}
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Fakultas</label>
            <div class="col-sm-10">
                <select class="form-select" name="fakultas" id="fakultas">
                    <option value="" disabled selected>PILIH FAKULTAS</option>
                    <option value="Fakultas Ilmu Komputer dan TI" {{ Session::get('fakultas') == 'Fakultas Ilmu Komputer dan TI' ? 'selected' : '' }}>Fakultas Ilmu Komputer dan TI</option>
                    <option value="Fakultas Ekonomi" {{ Session::get('fakultas') == 'Fakultas Ekonomi' ? 'selected' : '' }}>Fakultas Ekonomi</option>
                    <option value="Fakultas Teknologi Industri" {{ Session::get('fakultas') == 'Fakultas Teknologi Industri' ? 'selected' : '' }}>Fakultas Teknologi Industri</option>
                    <option value="Fakultas Teknik Sipil dan Perencanaan" {{ Session::get('fakultas') == 'Fakultas Teknik Sipil dan Perencanaan' ? 'selected' : '' }}>Fakultas Teknik Sipil dan Perencanaan</option>
                    <option value="Fakultas Kedokteran" {{ Session::get('fakultas') == 'Fakultas Kedokteran' ? 'selected' : '' }}>Fakultas Kedokteran</option>
                    <option value="Fakultas Psikologi" {{ Session::get('fakultas') == 'Fakultas Psikologi' ? 'selected' : '' }}>Fakultas Psikologi</option>
                    <option value="Fakultas Sastra" {{ Session::get('fakultas') == 'Fakultas Sastra' ? 'selected' : '' }}>Fakultas Sastra</option>
                    <option value="Fakultas Komunikasi" {{ Session::get('fakultas') == 'Fakultas Komunikasi' ? 'selected' : '' }}>Fakultas Komunikasi</option>
                </select>
            </div>
        </div>
        
        {{-- Jurusan --}}
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
                <select class="form-select" name="jurusan" id="jurusan">
                    <option value="" disabled selected>PILIH JURUSAN</option>
                    <option value="Sistem Informasi" {{ Session::get('jurusan') == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
                    <option value="Ekonomi" {{ Session::get('jurusan') == 'Ekonomi' ? 'selected' : '' }}>Ekonomi</option>
                    <option value="Teknik Industri" {{ Session::get('jurusan') == 'Teknik Industri' ? 'selected' : '' }}>Teknik Industri</option>
                    <option value="Teknik Sipil" {{ Session::get('jurusan') == 'Teknik Sipil' ? 'selected' : '' }}>Teknik Sipil</option>
                    <option value="Kedokteran" {{ Session::get('jurusan') == 'Kedokteran' ? 'selected' : '' }}>Kedokteran</option>
                    <option value="Psikologi" {{ Session::get('jurusan') == 'Psikologi' ? 'selected' : '' }}>Psikologi</option>
                    <option value="Sastra Inggris" {{ Session::get('jurusan') == 'Sastra Inggris' ? 'selected' : '' }}>Sastra Inggris</option>
                    <option value="Komunikasi" {{ Session::get('jurusan') == 'Komunikasi' ? 'selected' : '' }}>Komunikasi</option>
                </select>
            </div>
        </div>
        

        {{-- Tingkat --}}
        <div class="mb-3 row">
            <label for="tingkat" class="col-sm-2 col-form-label">Tingkat</label>
            <div class="col-sm-10">
                <select class="form-select" name="tingkat" id="tingkat">
                    <option value="" disabled selected>PILIH TINGKAT</option>
                    <option value="1" {{ Session::get('tingkat') == '1' ? 'selected' : '' }}>1</option>
                    <option value="2" {{ Session::get('tingkat') == '2' ? 'selected' : '' }}>2</option>
                    <option value="3" {{ Session::get('tingkat') == '3' ? 'selected' : '' }}>3</option>
                    <option value="4" {{ Session::get('tingkat') == '4' ? 'selected' : '' }}>4</option>
                </select>
            </div>
        </div>
        

        {{-- Tanggal --}}
        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Main</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" value="{{ Session::get('tanggal') }}" name="tanggal" id="tanggal">
            </div>
        </div>
        

        {{-- Jam Mulai --}}
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jam Mulai</label>
            <div class="col-sm-10">
                <input type="time" class="form-control" value= "{{Session::get('mulai')}}" name='mulai' id="mulai">
            </div>
        </div>

        {{-- Jam Akhir --}}
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jam Akhir</label>
            <div class="col-sm-10">
                <input type="time" class="form-control" value= "{{Session::get('akhir')}}" name='akhir' id="akhir">
            </div>
        </div>

        {{-- KRS --}}
        <div class="mb-3 row">
            <label for="krs" class="col-sm-2 col-form-label">KRS (PDF)</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="krs" id="krs" accept=".pdf">
            </div>
        </div>

        {{-- Tombol --}}
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
      </form>
    </div>
    <!-- AKHIR FORM -->
@endsection
