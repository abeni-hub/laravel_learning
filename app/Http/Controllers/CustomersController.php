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
        $companies = Customer::all();

        // dd($activeCustomers);

        return view('internals.customers', compact('activeCustomers', 'inactiveCustomers', 'companies'));
    }

    public function store()
    {

       $data = request()->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required |email',
            'active' => 'required',
            'company_id' => 'required|exists:companies,id',
        ]);
         
        Customer::create($data);
        

        return back();
    }
}


// Eloquent is the database ORM that laravel uses behind the scenes.
// Eloquent is a simple and elegant way to interact with your database.