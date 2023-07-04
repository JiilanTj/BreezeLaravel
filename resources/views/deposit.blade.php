<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-100">

            @include('layouts.navigation')
        <div class="flex lg:flex-row md:flex-col gap-x-4 gap-y-6 items-startjustify-center p-8" style="background-color: #fc8c2c">
        <div class="flex flex-col bg-purple-700 gap-2 border-2 border-white rounded-xl border p-4 lg:w-1/3 md:w-full sm:w-full">

                <h1 class="text-2xl font-bold text-white ">Jumlah deposit</h1>
                

                <form action="{{ route('simpan.transaksi') }}" method="POST">
                    @csrf
                    <input id="jumlahDepo" name="jumlahDepo" type="number" class="border border-gray-300 rounded-lg p-2 mb-4">
                    <p class="rounded-lg py-2 text-white text-sm mb-4 w-3/4">Tulis 100 jika Ingin Deposit 100.000 Rupiah</p>
                    <h2 class="text-l text-white font-bold mb-2">transfer ke</h2>
                    

                    <h2 class="text-l text-white font-bold mb-2">No. Rekening</h2>
                    <div class="flex items-center mb-4 space-x-4">
                        <button id="bank" class="bg-blue-500 text-white rounded-lg py-2 px-4">{{ auth()->user()->bank }}</button>
                        <p id="RekAdmin" class="mr-2 text-white">{{ $noRekAdmin }}</p>
                        <button id="btnCopy" class="bg-blue-500 text-white rounded-lg py-2 px-4">Copy</button>
                        
                    </div>
                    <p class="text-white font-bold text-xl mb-2" id="NamaRekAdmin">a.n {{ $namaAdmin }}</p>

                 <div class="flex flex-col sm:flex-row">
                    <button type="submit" name="action" value="kirim" class="bg-blue-500 text-white rounded-lg py-2 px-4 mb-2 sm:mb-0 sm:mr-2">Kirim</button>
                    <button type="submit" name="action" value="batal" class="bg-blue-500 text-white rounded-lg py-2 px-4">
                        <a href="{{ route('dashboard') }}">Batal</a>
                    </button>

                     </div>
                 </form>
            </div>
            
            <div class=" flex flex-col bg-purple-700 gap-2 border-2 align-center items-center border-white rounded-xl border p-4 lg:w-2/3 md:w-full sm:w-full ">
                    <h1 class="text-2xl font-bold text-white mb-4">Jadwal Offline Bank</h1>
                    <div class="container mx-auto">
  <table class="table-auto w-full">
    <thead>
      <tr>
        <th class="px-4 py-2 text-white border border-white w-1/3">BANK</th>
        <th class="px-4 py-2 text-white border border-white w-2/3">Jadwal Offline</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="border px-2 py-6 text-white"><img src="{{ asset('assets/logobca.png') }}" alt="Logo" class=""></td>
        <td class="border px-4 py-2 text-sm text-white">
        <li>Senin - Jum'at offline  Pukul 21:00 - 01:00 WIB</li>
        <li>Sabtu offline Pukul 18:00 - 20:00 WIB</li>
        <li>kembali pukul 21:00 - 01:00 WIB</li>
        <li>Minggu offline Pukul 00:00 - 05:00 WIB </li>

        </td>
      </tr>
      <tr>
      <td class="border px-2 py-2 text-white"><img src="{{ asset('assets/mandiri.png') }}" alt="Logo" class=""></td>
        <td class="border px-4 py-2 text-sm text-white">
       <li> Senin - Jum'at Bank Mandiri offline Pukul 22:45 - 04:00 WIB</li>
<li>Sabtu - Minggu Bank Mandiri offline Pukul 22:00 - 05:00 WIB</li>
        </td>
      </tr>
      <tr>
      <td class="border px-2 py-2 text-white"><img src="{{ asset('assets/logobca.png') }}" alt="Logo" class=""></td>
        <td class="border px-4 py-2 text-sm text-white"><li>Senin & Minggu Bank BRI offline pukul 22:00 - 06:00 WIB</li></td>
      </tr>
    </tbody>
  </table>
</div>

                
            </div>

        </div>

    <script>
        document.getElementById("btnCopy").addEventListener("click", function (event) {
            event.preventDefault();
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
