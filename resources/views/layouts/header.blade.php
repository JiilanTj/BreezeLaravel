<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex lg:flex-row md:flex-row sm:flex-col bg-black px-6 py-1 justify-between items-center">
    <div class="h-16 py-2">
        <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-full">
    </div>
        <div class="items-center md:flex-row gap-x-8 w-3/8">
            <button class="bg-purple-800 mx-2 px-4 py-1 text-white rounded-lg hover:bg-blue-600">
                <a href="/login">Masuk</a>
            </button>
            <button class="bg-purple-800 mx-2 px-4 py-1 text-white rounded-lg hover:bg-blue-600">
                <a href="/register">Daftar</a>
            </button>
        </div>
    </div>
    
</body>
