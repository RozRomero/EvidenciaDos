<?php

namespace App\Http\Controllers;
use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Books::all();
        $booksObject = $books[0];
        return view('index', ['books' => $books], ['booksObject' => $booksObject]);
    }

    public function create (){
        return view('create');
    }

    public function store (Request $request){
        // dd($request->all());
        
        $book = new Books;
        $book -> title = $request -> title;
        $book -> author_name = $request -> author_name;
        $book -> isbn = $request -> isbn;
        $book -> published_year = $request -> published_year;
        $book-> save(); //SQL: INSERT INTO Tema7
        return redirect() ->route('books.index'); //Esto para que redireccione a una pagina que no este en blanco
    }

    public function edit($id){

        $book = Books::find($id);
        return view('edit', ['book' => $book]);
    }

    public function update(Request $request, $id){

        $book = Books::find($id); //SELECT * FROM courses WHERE id=6 LIMIT 1
        
        $book -> title = $request -> title;
        $book -> author_name = $request -> author_name;
        $book -> isbn = $request -> isbn;
        $book -> published_year = $request -> published_year;

        $book -> save(); //SQL: INSERT INTO Tema7
        return redirect() ->route('books.index'); //Esto para que redireccione a una pagina que no este en blanco
    }

    public function show($book, $category = null){
        return view('show', compact('book', 'category'));
    } //Add a default value of null

    public function destroy($id){
        $book = Books::find($id);
        $book -> delete();
        return redirect() ->route('books.index');
    }
}
