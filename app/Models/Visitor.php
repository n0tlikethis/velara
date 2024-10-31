<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Visitor extends Model
{
    use HasFactory;

    public static function get_all() {
        $visitor = DB::table('visitors')->get();
        return $visitor;
    }

    public static function insert(Request $request) {
        $insert = DB::table('visitors')->insert([
            [
                'nama' => $request->nama,
                'email' => $request->email
            ]
        ]);
        return $insert;
    }
}
