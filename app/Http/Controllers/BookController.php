<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Read
    public function all() {
        $book = Book::all();

        echo $book;
        // return view('book', ['data' => $book]);
    }

    public function find(int $id) {
        $book = Book::find($id);

        echo $book;
    }

    public function where(string $pengarang) {
        $book = Book::where('pengarang', $pengarang)->get();

        echo $book;
    }

    // Create
    public function insert(Request $request) {
        // method 1
        // $book = Book::create([
        //     'nama' => $request->nama,
        //     'pengarang' => $request->pengarang,
        // ]);

        // method 2
        $book = new Book;
        $book->nama = $request->nama;
        $book->pengarang = $request->pengarang;
        $book->save();

        echo $book;
    }

    // Update
    public function update(int $id, Request $request) {
        // method 1
        // $book = Book::updateOrCreated(
        //     [
        //         'nama' => $request->nama,
        //         'pengarang' => $request->pengarang
        //     ],
        //     ['id' => $id]
        // );

        // method 2
        $book = Book::find($id);
        $book->nama = $request->nama;
        $book->pengarang = $request->pengarang;
        $book->save();

        echo $book;
    }

    // Delete
    public function delete(int $id) {
        $book = Book::find($id);
        $book->delete();

        echo $book;
    }
}
