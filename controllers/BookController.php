<?php

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        $this->renderView("book", "index", ["books" => $books]);

    }
    public function show($id){
        $book = Book::find($id);
        if(is_null($book)){
            //TODO: redirect to standard error page
        }else{
            $this->renderView("book", "show", ['book' => $book ]);
        }
    }

    public function create(){
        $this->renderView("book", "create");
    }

    public function store(){
        $book = new Book($this->getHTTPPost());
        if($book->is_valid()){
            $book->save();
            $this->redirectToRoute("book", "index");
        }else{
            
            $this->renderView("book", "create", ['book' => $book]);

        }
    }

    public function edit($id){
        $book = Book::find($id);
        if(is_null($book)){
            //TODO: Redirect to error page
        }else{
            $this->renderView("book", "edit", ['book' => $book]);
        }
    }

    public function update($id){
        $book = Book::find($id);
        $book->update_attributes($this->getHTTPPost());

        if($book->is_valid()){
            $book->save();
            $this->redirectToRoute("book", "index");
        }else{
            //TODO: Show edit view sending model as a parameter
            $this->renderView("book", "edit", ['book' => $book]);
        }
    }

    public function delete($id){
        $book = Book::find($id);
        $book->delete();
        $this->redirectToRoute("book", "index");
    }
}