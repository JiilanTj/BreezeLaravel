<!DOCTYPE html>
<html>
<head>
    <title>Ubah Password</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
 
<body>
@include('layouts.navigation')
    <div class="container mx-auto py-10">
        <div class="max-w-md mx-auto p-6 bg-white rounded shadow-md">
            <h3 class="text-center text-2xl font-bold mb-4">Ubah Password</h3>
            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="text-red-500">{{ $error }}</div>
                @endforeach
            @endif
            @if(Session::has('error'))
                <div class="text-red-500">{{ Session::get('error') }}</div>
            @endif
            @if(Session::has('success'))
                <div class="text-green-500">{{ Session::get('success') }}</div>
            @endif
            <form class="form" action="{{ route('postChangePassword') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="current_password" class="block mb-2 font-semibold">Password Sebelumnya</label>
                    <input type="password" class="w-full p-2 border rounded" id="current_password" name="current_password">
                </div>
                <div class="mb-4">
                    <label for="new_password" class="block mb-2 font-semibold">Password Baru</label>
                    <input type="password" class="w-full p-2 border rounded" id="new_password" name="new_password">
                </div>
                <div class="mb-6">
                    <label for="new_password_confirmation" class="block mb-2 font-semibold">Ulangi Password Baru</label>
                    <input type="password" class="w-full p-2 border rounded" id="new_password_confirmation" name="new_password_confirmation">
                </div>
                <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
