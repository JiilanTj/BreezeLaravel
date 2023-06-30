<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-200">
    <div class="p-10 pl-80 pr-60 flex gap-x-10 justify-between items-center">
    <img src="{{ asset('assets/logo.png') }}" alt="Logo" width="50" height="50">
        <ul class="flex gap-x-10">
            <li><a href="{{ route('login') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Masuk</a></li>
            <li><a href="{{ route('register') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Daftar</a></li>
        </ul>
    </div>
</body>
