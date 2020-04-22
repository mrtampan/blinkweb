@extends('layout/main')

@section('title', 'Member')

@section('content')
<div class="container ">
<div class="mb-2 mt-5 ml-auto float-right"><a class="btn btn-primary rounded" href="{{ url('/member/add') }}">Tambah Member</a></div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Alamat</th>
      <th scope="col">Telpon</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($allData as $data)
    <tr>
      <td>{{ $data->nama }}</td>
      <td>{{ $data->email }}</td>
      <td>{{ $data->alamat }}</td>
      <td>{{ $data->telpon }}</td>
      <td class="d-flex"><a href="{{ url('/member/edit/'.$data->id) }}" class="btn btn-primary mx-1">Edit</a>
      <form method="POST" action="{{ url('/member/proses-delete/'.$data->id) }}">
      @csrf
      <button type="submit" onclick="return confirm('Apakah kamu yakin?')" class="btn btn-danger mx-1">Delete</button>
      </form>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection