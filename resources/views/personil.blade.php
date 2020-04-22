@extends('layout/main')

@section('title', 'Personil blackpink')

@section('content')
<div class="container-fluid col-8">
    <div class="d-flex flex-wrap mt-5 justify-content-center">
    @foreach($allData as $data)
        <div class="d-flex-row mx-2">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top img-fluid" src="{{ $data->foto }}" style="height:250px;width:300px;" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $data->nama }}</h5>
                <p class="card-text">{{ $data->posisi }}</p>
            </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection