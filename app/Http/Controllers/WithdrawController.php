<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class WithdrawController extends Controller
{
    public function index()
    {
        return view('withdraw');
    }

    public function simpanTransaksiwd(Request $request)
    {
        // Validasi input
        $request->validate([
            'jumlahWD' => 'required|numeric',
            'password' => 'required',
        ]);

        // Ambil user yang sedang login
        $user = auth()->user();

        // Periksa apakah password yang diinput sesuai dengan password user
        if (!\Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['password' => 'Password salah.'])->withInput();
        }

        // Periksa apakah saldo mencukupi
        $jumlahWD = $request->jumlahWD;
        if ($jumlahWD > $user->saldo) {
            return redirect()->back()->withErrors(['jumlahWD' => 'Saldo kurang.'])->withInput();
        }

        // Kurangi saldo pada tabel users
        $user->saldo -= $jumlahWD;
        $user->save();

        // Simpan transaksi penarikan pada tabel tb_wd
        $withdraw = $user->withdraws()->create([
            'name' => $user->name,
            'bank' => $user->bank,
            'noRek' => $user->noRek,
            'transaksi' => 'WD',
            'nominal' => $jumlahWD,
            'handler' => 'Admin',
            'status' => 'Pending',
        ]);

        // Redirect ke halaman dashboard dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Penarikan berhasil dilakukan.');
    }
}
