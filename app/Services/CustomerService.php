<?php


namespace App\Services;


use App\Customer;
use App\Repositories\CustomerRepository;

class CustomerService
{
    protected $customerRepo;
    public function __construct(CustomerRepository $customerRepo)
    {
        $this->customerRepo = $customerRepo;
    }
    public function getAll()
    {
        return $this->customerRepo->getAll();
    }
    public function findById($id)
    {
        return $this->customerRepo->findById($id);
    }
    public function create($request)
    {
        $customer = new Customer();
        $customer->codeID = $request->codeID;
        $customer->class = $request->class;
        $customer->dob = $request->dob;
        $this->customerRepo->save($customer);
    }
}
