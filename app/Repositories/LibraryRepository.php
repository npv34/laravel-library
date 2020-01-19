<?php


namespace App\Repositories;


use App\Library;

class LibraryRepository
{
    protected $library;
    public function __construct(Library $library)
    {
        $this->library = $library;
    }
    public function getAll()
    {
        return $this->library->all();
    }
    public function save($library)
    {
        $library->save();
    }


}
