<?php


namespace App\Services;


use App\Library;
use App\Repositories\LibraryRepository;

class LibraryService
{
    protected $libraryRepo;
    public function __construct(LibraryRepository $libraryRepo)
    {
        $this->libraryRepo = $libraryRepo;
    }
    public function getAll()
    {
        return $this->libraryRepo->getAll();
    }
    public function create($request)
    {
        $library = new Library();
        $library->name = $request->name;
        $library->address = $request->address;
        $library->phone = $request->phone;
        if ($files = $request->file('avatar')) {
            $destinationPath = 'public/images/';
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
        }
        $this->libraryRepo->save($library);
    }
}
