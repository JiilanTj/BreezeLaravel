<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Macau4D;

class Macau4DController extends Controller
{
    public function index()
    {
        return view('macau4d');
    }

    public function submit(Request $request)
{
    // Ambil data saldo user yang login dari tabel users
    $saldoUser = auth()->user()->saldo;

    // Inisialisasi total angka
    $totalAngka = 0;

    // Inisialisasi array untuk menyimpan data yang akan disimpan ke database
    $dataToStore = [];

    // Cek dan tambahkan data baris pertama jika angka dan jumlah tidak kosong
    if (!empty($request->input('angka1')) && !empty($request->input('jumlah1'))) {
        $dataToStore[] = [
            'user_id' => auth()->user()->id,
            'angka' => $request->input('angka1'),
            'jumlah' => $request->input('jumlah1'),
            'status' => 'pending',
        ];
        $totalAngka += $request->input('jumlah1');
    }

    // Cek dan tambahkan data baris kedua jika angka dan jumlah tidak kosong
    if (!empty($request->input('angka2')) && !empty($request->input('jumlah2'))) {
        $dataToStore[] = [
            'user_id' => auth()->user()->id,
            'angka' => $request->input('angka2'),
            'jumlah' => $request->input('jumlah2'),
            'status' => 'pending',
        ];
        $totalAngka += $request->input('jumlah2');
    }

    // Cek apakah total angka lebih dari 0 dan saldo user cukup
    if ($totalAngka > 0 && $saldoUser >= $totalAngka) {
        // Kurangi saldo user dengan total angka
        auth()->user()->decrement('saldo', $totalAngka);

        // Simpan data ke database hanya jika saldo mencukupi dan kolom angka tidak kosong
        if (!empty($dataToStore)) {
            foreach ($dataToStore as $data) {
                if (!empty($data['angka'])) {
                    Macau4D::create($data);
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
