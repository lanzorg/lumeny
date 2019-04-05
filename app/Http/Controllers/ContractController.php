<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;

class ContractController extends Controller
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
     * Updates the Contract resource.
     * 
     * @param  Request  $request
     * @param  string  $contractId
     * @return Response
     */
    public function update(Request $request, $contractId)
    {
        $this->validate($request, [
            'energy' => 'required',
            'product' => 'required',
            'mobile' => 'required',
            'duration' => 'required',
            'product' => 'required',
            'promo' => '',
            'customer_id' => 'required'
        ]);

        $contract = Contract::findOrFail($contractId);
        $contract->update($request->all());
        
        return $contract;
    }
}
