<?php


namespace App\Services;


use App\Repositories\BorrowRepository;

class BorrowService
{
    protected $borrowRepo;
    public function __construct(BorrowRepository $borrowRepository)
    {
        $this->borrowRepo = $borrowRepository;
    }
    public function getAll()
    {
        return $this->borrowRepo->getAll();
    }

}
