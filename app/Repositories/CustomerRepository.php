<?php

namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository implements CustomerInterface
{

    /**
     * @return mixed
     * map = foreach loop
     * formatData() defines in Customer Model
     * to format data according to the requirement to Display in UI
     */

    public function all(){
        return Customer::orderBy('name')
            ->where('active',1)
            ->with('user')
            ->get()
            ->map->formatData();
    }

    public function showDetails($customerID){
        return Customer::where('user_id',$customerID)
            ->where('active',1)
            ->with('user')
            ->firstOrFail()
            ->formatData();
    }

    public function demo()
    {
        // TODO: Implement showDetails2() method.
    }
}
