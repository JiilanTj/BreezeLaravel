<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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
                    $namaAdmin = $admin->NAMA_ADMIN;
                }
            } elseif ($bank == 'BRI') {
                $admin = Admin::whereNotNull('BRI')->inRandomOrder()->first();
                if ($admin) {
                    $noRekAdmin = $admin->BRI;
                    $namaAdmin = $admin->NAMA_ADMIN;
                }
            } elseif ($bank == 'MANDIRI') {
                $admin = Admin::whereNotNull('MANDIRI')->inRandomOrder()->first();
                if ($admin) {
                    $noRekAdmin = $admin->MANDIRI;
                    $namaAdmin = $admin->NAMA_ADMIN;
                }
            }

            $data = [
                'noRekAdmin' => $noRekAdmin,
                'namaAdmin' => $namaAdmin,
            ];

            return view('deposit', $data);
        } else {
            // Lakukan penanganan jika pengguna belum login
            // Contoh: redirect ke halaman login
            return redirect()->route('login');
        }
    }


    
}
