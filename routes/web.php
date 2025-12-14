<?php

// 1. STRICT TYPES [Wajib di baris paling atas]
// Mengaktifkan validasi tipe data yang ketat agar tidak error
declare(strict_types=1);

use Illuminate\Support\Facades\Route;

/*
----------------------------
|  (User Defined Function) |
----------------------------
 Kita mendefinisikan function di luar route agar bisa dipanggil.
*/

// A. Function Biasa dengan Return Type
function hitungTotal(float $harga, int $jumlah) : float {
    return $harga * $jumlah;
}

// B. Function dengan Pass by Reference (&)
// Mengubah nilai variabel asli langsung dari dalam fungsi
function diskonMember(float &$totalBelanja) {
    // Diskon 10% jika dipanggil
    $totalBelanja = $totalBelanja * 0.9;
}

/*
|--------------------------------------------------------------------------
| AREA ROUTE (Web Routes)
|--------------------------------------------------------------------------
*/

Route::get('/belajar-php', function () {
    // --- VARIABEL & TIPE DATA ---
    $nama = "Budi Santoso";       // Variabel string 
    $umur = 22;                   // Variable Integer
    $ipk = 3.85;                  // Variable Float
    $is_member = true;            // Variable Boolean
    $hobi = ["Coding", "Gaming", "Futsal"]; // Variable Array

    $harga_laptop = 5000000;
    $jumlah_beli = 2;

    // Panggil Function hitungTotal 
    $total_bayar = hitungTotal((float)$harga_laptop, $jumlah_beli); // Hasil: 10.000.000

    // Panggil Function B (Pass by Reference)
    // Cek apakah dia member, kalau ya dikasih diskon
    if ($is_member) {
        diskonMember($total_bayar); // $total_bayar berubah jadi 9.000.000
    }

    // --- 3. KIRIM DATA KE VIEW ---
    return view('latihan', [
        'nama' => $nama,
        'umur' => $umur,
        'ipk' => $ipk,
        'status' => $is_member,
        'hobi' => $hobi,
        'total' => $total_bayar
    ]);
});