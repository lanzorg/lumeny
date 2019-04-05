<?php

namespace App\Http\Controllers;

use App\Customer;

class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Retrieves the collection of Customer resources.
     */
    public function getAll()
    {
        return Customer::with('contracts')->get();
    }

    /**
     *  Retrieves a Customer resource.
     */
    public function getOne($id)
    {
        return Customer::with('contracts')->findOrFail($id);
    }
}
