<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BookController extends Controller
{
    public function listBook(){
        $books = DB::table('books')
        ->join('categories', 'Category_id', '=', 'categories.id')
        ->select('books.*','name')
        ->orderBy('id')
        ->get();
        return view('book.index',compact('books'));
    }

    public function create(){
        $categories = DB::table('categories')->get();
        return view('book.create',compact('categories'));
    }

    public function store(Request $request){

        $data = [
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'Publication' => $request['Publication'],
            'Price' => $request['Price'],
            'Quantity' => $request['Quantity'],
            'title' => $request['title'],
            'category_id' => $request['category_id'],
          
        ];
        DB::table('books')->insert($data);
        return redirect()->route('book.index');
    }

    public function edit($id){
        $book = DB::table('books')
        ->where('id','=',$id)->first(); 
        $categories = DB::table('categories')->get();
        return view('book.edit',compact('book','categories'));
    }

    public function update(Request $request){
       
        $data = [
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'Publication' => $request['Publication'],
            'Price' => $request['Price'],
            'Quantity' => $request['Quantity'],
            'title' => $request['title'],
            'category_id' => $request['category_id'],
          
        ];
        DB::table('books')->where('id',$request->id)->update($data);
        return redirect()->route('book.index');
    }

    public function destroy($id){
        DB::table('books')->delete($id);
        return redirect()->route('book.index');
    }
}

