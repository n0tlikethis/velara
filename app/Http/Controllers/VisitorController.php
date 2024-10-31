<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function get() {
        $visitor = Visitor::get();
        return view('visitor', ['data' => $visitor]);
    }

    public function insert(Request $request) {
        $visitor = Visitor::insert($request);
        echo $visitor;
    }
}
