<?php

namespace App\Http\Controllers;

use App\Customers;

class FrontendController extends Controller
{
    public function index()
    {
        $customers = Customers::all();

        return view('index', ['customers' => $customers]);
    }
}