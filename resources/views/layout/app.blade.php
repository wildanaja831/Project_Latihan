<!DOCTYPE html>
<html lang="id">
<head>
    @include('layout.head')
        @hasSection('title')
            @yield('title')
        @endif
    </title>
</head>
<body>
    <div class="relative min-h-screen flex">
        <div class="bg-gray-200 h-auto w-screen">
            <main class="ml-20 mt-20">
                @if (!Request::is('peserta'))
                <div class="flex justify-center mb-4">
                    <button type="button" onclick="window.location='{{ route('peserta.index') }}'" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kembali</button>
                </div>
                @endif
                @yield('content')
            </main>
        </div>
    </div>
    @include('layout.script')
    @yield('script')
</body>
</html>
