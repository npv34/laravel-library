<?php


namespace App\Services;


use App\Category;
use App\Repositories\CategoryRepository;

class CategoryService
{
    protected $cateRepo;
    public function __construct(CategoryRepository $cateRepo)
    {
        $this->cateRepo = $cateRepo;
    }
    public function getAll()
    {
        return $this->cateRepo->getAll();
    }
    public function create($request)
    {
        $category = new Category();
        $category->name = $request->name;
        $this->cateRepo->save($category);
    }
}
