<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private $customerValidator;

    function __construct(\CustomerValidator $customerValidator)
    {
        $this->customerValidator = $customerValidator;
    }

    public function add(Request $request)
    {
        $this->customerValidator->add();

        $customer = Customers::create(['title' => $request->input('title'), 'first_name' => $request->input('first-name'), 'last_name' => $request->input('last-name'), 'services' => $request->input('services'), 'type' => $request->input('type')]);

        return $customer;
    }
}