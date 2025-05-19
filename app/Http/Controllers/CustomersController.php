<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomersController extends Controller
{
    //
    public function index()
    {
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();
        

        // dd($activeCustomers);

        return view('customers.index', compact('activeCustomers', 'inactiveCustomers'));
    }

    public function create(){

        $companies = \App\Models\Company::with('customers')->get();
        return view('customers.create', compact('companies'));
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