<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function showDepositPage()
{
    $user = auth()->user();

    if ($user) {
        $bank = $user->bank;
        $noRekAdmin = '';
        $namaAdmin = '';

        // Deteksi nilai $noRekAdmin dan $namaAdmin berdasarkan data dari tabel admin
        if ($bank == 'BCA') {
            $admin = Admin::whereNotNull('BCA')->inRandomOrder()->first();
            if ($admin) {
                $noRekAdmin = $admin->BCA;
                $namaAdmin = $admin->Nama_adm_bca;
            }
        } elseif ($bank == 'BRI') {
            $admin = Admin::whereNotNull('BRI')->inRandomOrder()->first();
            if ($admin) {
                $noRekAdmin = $admin->BRI;
                $namaAdmin = $admin->Nama_adm_bri;
            }
        } elseif ($bank == 'MANDIRI') {
            $admin = Admin::whereNotNull('MANDIRI')->inRandomOrder()->first();
            if ($admin) {
                $noRekAdmin = $admin->MANDIRI;
                $namaAdmin = $admin->Nama_adm_MANDIRI;
            }
        }

        $data = [
            'noRekAdmin' => $noRekAdmin,
            'namaAdmin' => $namaAdmin,
        ];

        // Simpan $namaAdmin dalam session
        session(['namaAdmin' => $namaAdmin]);

        return view('deposit', $data);
    } else {
        // Lakukan penanganan jika pengguna belum login
        // Contoh: redirect ke halaman login
        return redirect()->route('login');
    }
}

public function simpanTransaksi(Request $request)
{
    $user = auth()->user();

    // Mengambil data dari input form
    $jumlahDepo = $request->input('jumlahDepo');

    // Menggunakan nilai $namaAdmin dari session
    $namaAdmin = session('namaAdmin');

    if ($request->has('batal')) {
        // Hapus data namaAdmin dari session
        $request->session()->forget('namaAdmin');
        return redirect()->route('dashboard')->with('success', 'Batal Transaksi?');
    } else {
        // Simpan data ke dalam tabel transaksi
        Transaksi::create([
            'nominal' => $jumlahDepo,
            'handler' => $namaAdmin,
            'noRek' => $user->noRek,
            'bank' => $user->bank,
            'user_id' => $user->id,
            'status' => 'pending',
            'transaksi' => 'pending',
        ]);

        // Hapus data namaAdmin dari session setelah digunakan
        $request->session()->forget('namaAdmin');

        return redirect()->route('dashboard')->with('success', 'Transaksi berhasil disimpan.');
    }
}


}
