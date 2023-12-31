<head>
    <title>Macau2D Belakang</title>
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

            if (input.value.length !== 2) {
                jumlah.disabled = true;
            } else {
                jumlah.disabled = false;
            }
        }
    </script>
</head>
<body>
@include('layouts.navigation')

<div class="flex flex-col gap-y-4 items-center justify-center p-8" style="background-color: #fc8c2c">
    
@include('headermacau')
        

    <div class="bg-purple-700 border-2 border-white rounded-xl border border-white p-4">
        <h1 class="text-center my-4 text-2xl text-white">2D Belakang Macau</h1>
        <h1 class="text-center my-4 text-lg  text-white">Pastikan Mengisi Angka Yang mau diisi Dahulu</h1>

        @if(session('success'))
            <div class="text-green-500">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="text-red-500">{{ session('error') }}</div>
        @endif

        <form action="/macau2dbelakang/submit" method="POST">
            @csrf

            @for ($i = 1; $i <= 10; $i++)
                <div class="flex flex-row justify-center mb-4">
                    <div class="flex">
                    <input type="number" id="angka{{ $i }}" name="angka{{ $i }}" class="border border-gray-300 px-2 py-1 rounded mx-2" oninput="validateInputLength('angka{{ $i }}', 'jumlah{{ $i }}')">
                    </div>
                    <div class="align-right">
                    <p class="text-2xl" style="ml-2 text-align: center; color: white;">      x </p>
                    </div>
                    <div class="flex justify-center items-center">
                    <input type="number" id="jumlah{{ $i }}" name="jumlah{{ $i }}" class="w-1/2 border border-gray-300 px-2 py-1 rounded mx-2" disabled>
                    </div>
                </div>
            @endfor

            <div class="flex justify-center">
                <button type="submit" class="text-white px-4 py-2 rounded" style="background-color: #fc8c2c">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
