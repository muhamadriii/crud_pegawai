@extends('app')
@section('content')
    <h1>Create Kecamatan</h1>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('kecamatan.store')}}">
                @csrf
                <div class="mb-3">
                  <label for="code" class="form-label">Kode</label>
                  <input type="text" class="form-control" id="code" name="code">
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label">Nama Kecamatan</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                  <label for="provinsi_code" class="form-label">Provinsi</label>
                  <select class="form-select" id="provinsi_code" name="provinsi_code">
                    @foreach ($provinsi as $item)
                        <option value="{{ $item->code}}">{{ $item->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="mb-3">
                  <label for="is_active" class="form-label">Active</label>
                  <select class="form-select" id="is_active" name="is_active">
                    <option value="0">True</option>
                    <option value="1">False</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
