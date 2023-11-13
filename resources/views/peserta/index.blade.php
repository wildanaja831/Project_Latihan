@extends('layout.app')

@section('content')
<div class="flex flex-col ml-10 mr-12">
    <div class="font-mono flex mb-4">
        <p class="text-lg pt-1">Data Peserta</p>
    </div>
    <div class="w-10">
        <button type="button" onclick="window.location='{{ route('peserta.page') }}'" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Tambah</button>
    </div>
    <div class="overflow-x-auto shadow-md sm:rounded-lg mt-4">
        <div class="inline-block min-w-full align-middle dark:bg-gray-800">
            <!--Card-->
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white px-6">
                <table id="example" class="stripe hover text-sm w-full rounded-3xl py-4">
                    <thead>
                        <tr>
                            <th data-priority="1">No</th>
                            <th data-priority="2">Nama</th>
                            <th data-priority="3">Alamat</th>
                            <th data-priority="4">Tanggal Lahir</th>
                            <th data-priority="5">No Telpon</th>
                            <th data-priority="6">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr class="text-center">
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->nama }}</td>
                                <td>{{ $d->alamat }}</td>
                                <td>{{ $d->tgl_lahir }}</td>
                                <td>{{ $d->no_hp }}</td>
                                <td class="flex justify-center">
                                    <form action="peserta/{{ $d->id }}" method="POST">
                                        <button type="button" onclick="window.location='{{ route('peserta.update', $d->id) }}'" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Edit</button>
                                        <button type="button" onclick="window.location='{{ route('peserta.detail', $d->id) }}'" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Detail</button>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="mr-4 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            {{-- @include('rekap-barang.razia.modal.edit') --}}
                        @endforeach
                        <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
                    </tbody>
                </table>
            </div>
            <!--/Card-->
        </div>
    </div>
</div>
@endsection
