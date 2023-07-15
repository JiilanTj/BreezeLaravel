<!DOCTYPE html>
<html>
<head>
    <title>Lupa Password</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
 
<body>
    <div class="container mx-auto py-10">
        <div class="max-w-md mx-auto p-6 bg-white rounded shadow-md">
            <h3 class="text-center text-2xl font-bold mb-4">Lupa Password?</h3>
            <form method="POST" action="{{ route('reset-password') }}" class="mb-4">

                @csrf
                <div class="mb-4">
                    <label for="username" class="block font-semibold mb-2">Username</label>
                    <input type="text" id="username" name="username" class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="last_4_digit" class="block font-semibold mb-2">4 Digit Terakhir No Rek</label>
                    <input type="text" id="last_4_digit" name="last_4_digit" class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="new_password" class="block font-semibold mb-2">Password Baru</label>
                    <input type="text" id="new_password" name="new_password" class="w-full p-2 border rounded">
                </div>
                <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Reset Password</button>
            </form>

            @if(session('error'))
                <div class="text-red-500 mt-4">
                    {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="text-green-500 mt-4">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
