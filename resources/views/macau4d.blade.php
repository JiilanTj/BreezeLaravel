<head>
    <title>Macau4D</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        function validateInputLength(inputId, jumlahId) {
            var input = document.getElementById(inputId);
            var jumlah = document.getElementById(jumlahId);

            if (input.value.length !== 4) {
                jumlah.disabled = true;
            } else {
                jumlah.disabled = false;
            }
        }
    </script>
</head>
<body>
@include('layouts.navigation')

<div class="flex flex-col items-center justify-center min-h-screen">
    <div class="w-1/2">
        <h1 class="text-center">Macau4D</h1>

        @if(session('success'))
            <div class="text-green-500">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="text-red-500">{{ session('error') }}</div>
        @endif

        <form action="/macau4d/submit" method="POST">
            @csrf

            @for ($i = 1; $i <= 10; $i++)
                <div class="flex mb-4">
                    <label for="angka{{ $i }}" class="w-16">Angka {{ $i }}:</label>
                    <input type="number" id="angka{{ $i }}" name="angka{{ $i }}" class="border border-gray-300 px-2 py-1 rounded" oninput="validateInputLength('angka{{ $i }}', 'jumlah{{ $i }}')">
                    <label for="jumlah{{ $i }}" class="w-16">Jumlah {{ $i }}:</label>
                    <input type="number" id="jumlah{{ $i }}" name="jumlah{{ $i }}" class="border border-gray-300 px-2 py-1 rounded" disabled>
                </div>
            @endfor

            <div class="flex justify-center">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
