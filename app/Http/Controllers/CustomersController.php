<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomersController extends Controller
{
    //
    public function list()
    {
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();
        $customers = Customer::all();

        // dd($activeCustomers);

        return view('internals.customers', compact('activeCustomers', 'inactiveCustomers'));
    }

    public function store()
    {

       $data = request()->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required |email',
            'active' => 'required',
        ]);
         
        Customer::create($data);
        

        return back();
    }
}


// Eloquent is the database ORM that laravel uses behind the scenes.
// Eloquent is a simple and elegant way to interact with your database.