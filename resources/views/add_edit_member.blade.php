@extends('layout/main')

@section('title', 'Input Data Member')

@section('content')

@if(isset($id_member))
<div class="container mt-5">
<form action="{{ url('/member/proses-edit/'.$id_member->id) }}" method="POST">
  @csrf
  <div class="form-group">
    <label >Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ $id_member->nama }}" placeholder="Masukan nama">
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="text" name="email" class="form-control" value="{{ $id_member->email }}" placeholder="Masukan email">
  </div>
  <div class="form-group">
    <label >Alamat</label>
    <textarea name="alamat" class="form-control">{{ $id_member->alamat }}</textarea>
  </div>
  <div class="form-group">
    <label >Telpon</label>
    <input type="text" name="telpon" class="form-control" value="{{ $id_member->telpon }}" placeholder="Masukan nomer telpon">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@else
<div class="container mt-5">
<form action="{{ url('/member/proses-add') }}" method="POST">
  @csrf
  <div class="form-group">
    <label >Nama</label>
    <input type="text" name="nama" class="form-control" placeholder="Masukan nama">
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="text" name="email" class="form-control" placeholder="Masukan email">
  </div>
  <div class="form-group">
    <label >Alamat</label>
    <textarea name="alamat" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label >Telpon</label>
    <input type="text" name="telpon" class="form-control" placeholder="Masukan nomer telpon">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endif

@endsection