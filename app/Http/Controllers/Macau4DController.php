<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

        // Hitung total angka dari input field jumlah
        $totalAngka = $request->input('jumlah1') + $request->input('jumlah2');

        // Cek apakah saldo user cukup
        if ($saldoUser >= $totalAngka) {
            // Kurangi saldo user dengan total angka
            auth()->user()->decrement('saldo', $totalAngka);

            // Lakukan proses lain sesuai kebutuhan

            return redirect()->back()->with('success', 'Berhasil melakukan submit!');
        } else {
            return redirect()->back()->with('error', 'Saldo tidak cukup!');
        }
    }
}
