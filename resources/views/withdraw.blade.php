<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdraw</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-100">
    @include('layouts.navigation')

    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Jumlah WD</h1>
        <p class="bg-gray-200 rounded-lg py-2 px-4 mb-4">Jangan gunakan titik (.) pada nominal</p>

        <form action="{{ route('simpan.transaksiwd') }}" method="POST">
            @csrf
            <input id="jumlahWD" name="jumlahWD" type="number" class="border border-gray-300 rounded-lg p-2 mb-4">

            <!-- Password -->
            <x-label for="password" :value="__('Password')" />
            <x-input id="password" class="border border-gray-300 rounded-lg p-2 mb-4"
                    type="password"
                    name="password"
                    required autocomplete="current-password" />

            <!-- Tampilkan pesan error -->
            @if ($errors->any())
                <div class="bg-red-100 text-red-500 rounded-lg py-2 px-4 mb-4">
                    {{ $errors->first() }}
                </div>
            @endif

            <!-- Tampilkan pesan sukses -->
            @if (session('success'))
                <div class="bg-green-100 text-green-500 rounded-lg py-2 px-4 mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <h2 class="text-xl font-bold mb-2">Nama rekening</h2>
            <p id="NamaRekUser">{{ auth()->user()->name }}</p>

            <h2 class="text-xl font-bold mb-2">No. Rekening</h2>
            <div class="flex items-center mb-4 space-x-4">
                <button id="bank" class="bg-blue-500 text-white rounded-lg py-2 px-4">{{ auth()->user()->bank }}</button>
                <p id="RekUser" class="mr-2">{{ auth()->user()->noRek }}</p>
            </div>

            <div class="flex flex-col sm:flex-row">
                <button type="submit" name="action" value="kirim" class="bg-blue-500 text-white rounded-lg py-2 px-4 mb-2 sm:mb-0 sm:mr-2">Kirim</button>
                <button type="submit" name="action" value="batal" class="bg-blue-500 text-white rounded-lg py-2 px-4">
                    <a href="{{ route('dashboard') }}">Batal</a>
                </button>
            </div>
        </form>
    </div>
</body>
</html>
