<?php


namespace App\Repositories;


use App\Book;

class BookRepository extends BaseRepository
{
    protected $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function getAll()
    {
        return $this->book->all();
    }

    public function findById($id)
    {
        return $this->book->findOrFail($id);
    }
}
