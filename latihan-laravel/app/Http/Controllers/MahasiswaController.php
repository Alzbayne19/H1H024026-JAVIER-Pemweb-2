<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MahasiswaController extends Controller
{
    public function cari(request $request)
    {
        $katakunci = $request->query('q','');

        return response()->json([
            'katakunci' => $katakunci,
            'metode' => $request->method(),
            'path' => $request->path(),
        ]);
    }
    public function index()
    {
        $daftarMahasiswa = [
            ['nim' => 'H1H024001', 'nama' => 'Andi Prasetyo', 'angkatan' => '2024'],
            ['nim' => 'H1H024002', 'nama' => 'John Johnson', 'angkatan' => '2024'],
            ['nim' => 'H1H024003', 'nama' => 'King Kang Kung', 'angkatan' => '2024'],
        ];
        return view('mahasiswa.index', ['daftarMahasiswa' => $daftarMahasiswa]);
    }
    public function show($nim)
    {
        return view('mahasiswa.show', ['nim' => $nim]);
    }
}
