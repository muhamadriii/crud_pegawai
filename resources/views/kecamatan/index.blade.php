@extends('app')
@section('content')
    <h1>Kecamatan</h1>
    <div class="car">
        <div class="card-body">
            <div class="d-flex justify-content-end">
                <a href="{{ route('kecamatan.create') }}" class="btn btn-primary">Create</a>
            </div>
            <table class="table table-bordered mt-2">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama Kecamatan</th>
                    <th scope="col">Nama Provinsi</th>
                    <th scope="col">Active</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->code }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->provinsi->name }}</td>
                        <td>{{ $item->is_active == 0 ? 'True' : 'False'; }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('kecamatan.edit', $item->id)}}" class="btn m-1 btn-warning">edit</a>
                                <form method="POST" action="{{ route('kecamatan.destroy', $item->id)}}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn m-1 btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
