<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index() {
        $students = Siswa::get_siswa();
        return view('siswa', ['data' => $students]);
    }
}
