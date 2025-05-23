@extends('layout')

@section('title')
    Customers List 
@endsection

@section('content')

<div class="row col-12">
    <h2>Customers List</h2>
    <p><a href="customers/create">Add New Customer</a></p>
</div>

<div class="row">
    <div class="col-6">
        <h1>Active Customers</h1>
        <ul>
            @foreach ($activeCustomers as $activeCustomer)
                <li>{{ $activeCustomer->name}} <span class='text-muted'>({{$activeCustomer->email}})</span></li>
            @endforeach
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <h1>Inactive Customers</h1>
        <ul>
            @foreach ($inactiveCustomers as $inactiveCustomer)
                <li>{{ $inactiveCustomer->name}} <span class='text-muted'>({{$inactiveCustomer->email}})</span></li>
            @endforeach
        </ul>
    </div>
</div>


@endsection