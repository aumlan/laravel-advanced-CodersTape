<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Repositories\CustomerInterface;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    private $customerRepository;


    /**
     * Should Initialize The Interface
     * because The Repository implements The Interface
     */
    public function __construct(CustomerInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        $customers= $this->customerRepository->all();

        dd($customers);
    }

    public function showDetails($customerID)
    {
        $customer= $this->customerRepository->showDetails($customerID);

        dd($customer);
    }

}
