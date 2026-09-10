<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index(Request $request)
    {
        // Data statis 5 matakuliah
        $daftarMatakuliah = [
            ['kode' => 'TKK101', 'nama' => 'Algoritma Memasak', 'sks' => 3],
            ['kode' => 'TKK102', 'nama' => 'Kalkulus Gosong', 'sks' => 2],
            ['kode' => 'TKK103', 'nama' => 'Fisika Menyala', 'sks' => 2],
            ['kode' => 'TKK104', 'nama' => 'Pemrograman Web I', 'sks' => 3],
            ['kode' => 'TKK105', 'nama' => 'Pemrograman Web II', 'sks' => 3],
        ];

        // Logika untuk fitur pencarian (Tugas 3)
        $katakunci = $request->query('q');
        if ($katakunci) {
            $daftarMatakuliah = array_filter($daftarMatakuliah, function($mk) use ($katakunci) {
                return stripos($mk['nama'], $katakunci) !== false;
            });
        }

        return view('matakuliah.index', [
            'daftarMatakuliah' => $daftarMatakuliah,
            'katakunci' => $katakunci
        ]);
    }

    public function show($kode)
    {
        return view('matakuliah.show', ['kode' => $kode]);
    }
}