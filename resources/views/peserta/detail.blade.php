@extends('layout.app')

@section('content')
    <div class="w-1/2 m-auto">
        <div class="shadow-md w-1/2 m-auto p-4 rounded-md bg-white">
            <div class="flex">
                <h2 class="mr-4">Nama :</h2>
                <h2>{{ $data->nama }}</h2>
            </div>
            <div class="flex">
                <h2 class="mr-4">Nama :</h2>
                <h2>{{ $data->alamat }}</h2>
            </div>
            <div class="flex">
                <h2 class="mr-4">Nama :</h2>
                <h2>{{ $data->tgl_lahir }}</h2>
            </div>
            <div class="flex">
                <h2 class="mr-4">Nama :</h2>
                <h2>{{ $data->no_hp }}</h2>
            </div>
        </div>
    </div>
@endsection
