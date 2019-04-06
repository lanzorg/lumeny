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
     * 
     * @return Response
     */
    public function getAll()
    {
        return Customer::with('contracts')->get();
    }

    /**
     *  Retrieves a Customer resource.
     * 
     * @param  string  $customerId
     * @return Response
     */
    public function getOne($customerId)
    {
        return Customer::with('contracts')->findOrFail($customerId);
    }

    /**
     * Retrieves the collection of Contract resources belongs to a Customer one.
     * 
     * @param  string  $customerId
     * @return Response
     */
    public function getContracts($customerId)
    {
        return Contract::where('customer_id', $customerId)->get();
    }
}
