<?php


namespace App\Repositories;


use App\Borrow;

class BorrowRepository extends BaseRepository
{
    protected $borrow;
    public function __construct(Borrow $borrow)
    {
        $this->borrow = $borrow;
    }
    public function getAll()
    {
        return $this->borrow->all();
    }

}
