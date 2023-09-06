@extends('app')
@section('content')
    <h1>Create Pegawai</h1>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('pegawai.store')}}">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Nama Pegawai</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                  <label for="born_place" class="form-label">Tempat Lahir</label>
                  <input type="text" class="form-control" id="born_place" name="born_place">
                </div>
                <div class="mb-3">
                  <label for="date_of_birth" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                </div>
                <div class="mb-3">
                  <label for="agama" class="form-label">agama</label>
                  <input type="text" class="form-control" id="agama" name="agama">
                </div>
                <div class="mb-3">
                  <label for="gender" class="form-label">Jenis Kelamin</label>
                  <select class="form-select" id="gender" name="gender">
                    <option value="l">laki-laki</option>
                    <option value="p">Perempuan</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="provinsi_code" class="form-label">provinsi</label>
                  <select class="form-select" id="provinsi_code" name="provinsi_code">
                    @foreach ($provinsi as $item)
                    <option value="{{ $item->code}}">{{ $item->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="mb-3">
                  <label for="kelurahan_code" class="form-label">kelurahan</label>
                  <select class="form-select" id="kelurahan_code" name="kelurahan_code">
                    @foreach ($kelurahan as $item)
                    <option value="{{ $item->code}}">{{ $item->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="mb-3">
                  <label for="address" class="form-label">alamat</label>
                  <textarea type="text" class="form-control" id="address" name="address">
                  </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
