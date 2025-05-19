@extends('layout')

@section('title')

    Customers List 
    @endsection

@section('content')

<div class="row col-12">
    <h2>Customers List</h2>
    <p><a href="{{ route('customers.create') }}" class="btn btn-primary">Add New Customer</a></p>
</div>
<div class="row col-6">
<h1>Active Customers</h1>

<ul>
    @foreach ($activeCustomers as $activeCustomer)

        <li>{{ $activeCustomer->name}} <span class='text-muted'>({{$activeCustomer->email}})</span></li>
    
    @endforeach
</ul>
</div>

<div class="row col-6">
<h1>Inactive Customers</h1>
<ul>
    @foreach ($inactiveCustomers as $inactiveCustomer)
        <li>{{ $inactiveCustomer->name}} <span class='text-muted'>({{$inactiveCustomer->email}})</span></li>
    
    @endforeach
</ul>
</div>


<div class="row">
    <div class="col-12">
        @foreach($companies as $company)
        <h2>{{ $company->name }}</h2>
        <ul>
            @foreach($company->customers as $customer)
                <li>{{ $customer->name }}</li>
            @endforeach
        </ul>
        @endforeach
    </div>
</div>
@endsection
