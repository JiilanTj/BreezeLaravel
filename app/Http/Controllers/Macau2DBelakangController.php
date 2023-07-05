<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Macau2DBelakang;

class Macau2DBelakangController extends Controller
{
    public function index()
    {
        return view('macau2dbelakang');
    }

    public function submit(Request $request)
{
    // Ambil data saldo user yang login dari tabel users
    $saldoUser = auth()->user()->saldo;

    // Inisialisasi total angka
    $totalAngka = 0;

    // Inisialisasi array untuk menyimpan data yang akan disimpan ke database
    $dataToStore = [];

    // Cek dan tambahkan data baris jika angka dan jumlah tidak kosong
    for ($i = 1; $i <= 10; $i++) {
    $angkaKey = 'angka' . $i;
    $jumlahKey = 'jumlah' . $i;

    if (!empty($request->input($angkaKey)) && !empty($request->input($jumlahKey))) {
        $dataToStore[] = [
            'user_id' => auth()->user()->id,
            'angka' => $request->input($angkaKey),
            'jumlah' => $request->input($jumlahKey),
            'status' => 'pending',
        ];
        $totalAngka += $request->input($jumlahKey);
    }
}

    // Cek apakah total angka lebih dari 0 dan saldo user cukup
    if ($totalAngka > 0 && $saldoUser >= $totalAngka) {
        // Kurangi saldo user dengan total angka
        auth()->user()->decrement('saldo', $totalAngka);

        // Simpan data ke database hanya jika saldo mencukupi dan kolom angka tidak kosong
        if (!empty($dataToStore)) {
            foreach ($dataToStore as $data) {
                if (!empty($data['angka'])) {
                    Macau2DBelakang::create($data);
                }
            }
        }

        // Lakukan proses lain sesuai kebutuhan

        return redirect()->back()->with('success', 'Berhasil melakukan submit!');
    } else {
        return redirect()->back()->with('error', 'Saldo tidak cukup atau data tidak lengkap!');
    }
}


}
