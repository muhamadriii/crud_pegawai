@extends('app')
@section('content')
    <h1>Create Kelurahan</h1>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('kelurahan.store')}}">
                @csrf
                <div class="mb-3">
                  <label for="code" class="form-label">Kode</label>
                  <input type="text" class="form-control" id="code" name="code">
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label">Nama Kelurahan</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                  <label for="kecamatan_code" class="form-label">Kecamatan</label>
                  <select class="form-select" id="kecamatan_code" name="kecamatan_code">
                    @foreach ($kecamatan as $item)
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
