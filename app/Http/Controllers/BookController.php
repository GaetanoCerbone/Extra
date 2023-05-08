<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(){
        return view('book.create');
    }

    public function store(Request $request){
            $book = Book::create([
            'title'=> $request->title,
            'author'=> $request->author,
            'description'=> $request->description]);
            return redirect(route('homepage'))->with('bookCreated','Hai inserito un libro con successo');
        }
        public function index(){
            $books = Book::all();
            return view('book.index', compact('books'));
        }
    }
    