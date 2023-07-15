<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResetPasswordController extends Controller
{
    public function reset(Request $request)
    {
        $username = $request->input('username');
        $last4Digit = $request->input('last_4_digit');
        $newPassword = $request->input('new_password');

        // Cari data pengguna berdasarkan username
        $user = DB::table('users')->where('username', $username)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Username tidak ada.');
        }


        // Jika last4Digit tidak cocok
        if (substr($user->noRek, -4) !== $last4Digit) {
            return redirect()->back()->with('error', '4 digit terakhir salah.');
        }


        // Ubah password pengguna
        $affectedRows = DB::table('users')
            ->where('username', $username)
            ->update(['password' => bcrypt($newPassword)]);

        if ($affectedRows === 1) {
            return redirect()->route('dashboard')->with('success', 'Password berhasil diubah.');
        } else {
            return redirect()->back()->with('error', 'Password gagal diubah.');
        }
    }
}

