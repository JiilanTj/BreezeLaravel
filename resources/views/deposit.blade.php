<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Jumlah deposit</h1>
        <p class="bg-gray-200 rounded-lg py-2 px-4 mb-4">Jangan gunakan titik (.) pada nominal</p>
        <input id="jumlahDepo" type="number" class="border border-gray-300 rounded-lg p-2 mb-4">

        <h2 class="text-xl font-bold mb-2">Nama rekening</h2>
        <p id="NamaRekAdmin">{{ $namaAdmin }}</p>

        <h2 class="text-xl font-bold mb-2">No. Rekening</h2>
        <div class="flex items-center mb-4 space-x-4">
            <button id="bank" class="bg-blue-500 text-white rounded-lg py-2 px-4">{{ auth()->user()->bank }}</button>
            <p id="RekAdmin" class="mr-2">{{ $noRekAdmin }}</p>
            <button id="btnCopy" class="bg-blue-500 text-white rounded-lg py-2 px-4">Copy</button>
        </div>


        <div class="flex flex-col sm:flex-row">
            <button class="bg-blue-500 text-white rounded-lg py-2 px-4 mb-2 sm:mb-0 sm:mr-2">Kirim</button>
            <button class="bg-blue-500 text-white rounded-lg py-2 px-4">Batal</button>
        </div>
    </div>

    <script>
        document.getElementById("btnCopy").addEventListener("click", function () {
            var rekAdmin = document.getElementById("RekAdmin").textContent;
            navigator.clipboard.writeText(rekAdmin)
                .then(function () {
                    alert("Rekening berhasil disalin!");
                })
                .catch(function () {
                    alert("Gagal menyalin rekening.");
                });
        });
    </script>
</body>
</html>
