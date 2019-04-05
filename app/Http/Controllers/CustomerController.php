<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Contract;

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
    public function getOne($userId)
    {
        return Customer::with('contracts')->findOrFail($userId);
    }

    /**
     * Retrieves the collection of Contract resources belongs to a Customer one.
     */
    public function getContracts($userId)
    {
        return Contract::where('customer_id', $userId)->get();
    }
}
