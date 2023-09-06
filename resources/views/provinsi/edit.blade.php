@extends('app')
@section('content')
    <h1>Edit Provinsi</h1>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('provinsi.update', $data->id)}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                  <label for="code" class="form-label">Kode</label>
                  <input type="text" class="form-control" id="code" name="code" value="{{ $data->code}}">
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label">Nama Provinsi</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ $data->name}}">
                </div>
                <div class="mb-3">
                  <label for="is_active" class="form-label">Nama Provinsi</label>
                  <select class="form-select" id="is_active" name="is_active">
                    <option {{ $data->is_active == 0 ? 'selected' : '';}} value="0">True</option>
                    <option {{ $data->is_active == 1 ? 'selected' : '';}} value="1">False</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
