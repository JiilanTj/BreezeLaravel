<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex flex-col md:flex-row bg-black px-6 py-1 justify-between items-center">
    <div class=" py-2">
        <img src="{{ asset('assets/logo-1.png') }}" alt="Logo" class=" float-center h-24 md:h-16">
    </div>
        <div class="items-center pt-2 flex-row gap-x-8 mb-4 w-3/8">
        <a href="/login">    
        <button class="bg-purple-800 mx-2 px-4 py-1 text-white rounded-lg hover:bg-blue-600">
                Masuk
            </button></a>
            <a href="/register"><button class="bg-purple-800 mx-2 px-4 py-1 text-white rounded-lg hover:bg-blue-600">
                Daftar
            </button></a>
        </div>
    </div>
    
</body>
