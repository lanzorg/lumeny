<?php

use Illuminate\Database\Seeder;
use App\Contract;
use App\Customer;

class ContractsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Contract::class, 100)->create()->each(function ($contract) {
            $contract->customer()->associate(
                Customer::all()->random()->id
            );
        });
    }
}
