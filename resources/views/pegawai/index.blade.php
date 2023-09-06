@extends('app')
@section('content')
    <h1>Pegawai</h1>
    <div class="car">
        <div class="card-body">
            <div class="d-flex justify-content-end">
                <a href="{{ route('pegawai.create') }}" class="btn btn-primary">Create</a>
            </div>
            <table class="table table-bordered mt-2">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">TTL</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Kelurahan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->born_place.', '. $item->date_of_birth }}</td>
                        <td>{{ $item->gender == 'l' ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td>{{ $item->agama }}</td>
                        <td>{{ $item->provinsi->name ?? '-'}}</td>
                        <td>{{ $item->kelurahan->kecamatan->name }}</td>
                        <td>{{ $item->kelurahan->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('pegawai.edit', $item->id)}}" class="btn m-1 btn-warning">edit</a>
                                <form method="POST" action="{{ route('pegawai.destroy', $item->id)}}">
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
