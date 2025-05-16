@extends('layout')

@section('title')

    Customers List 
    @endsection

@section('content')

<div class="row col-12">
    <h2>Customers</h2>
</div>

<div class="row col-12">
<form action="customers" method="POST">

<div class="form-group">
    <label for="name">Name </label>
    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
    <div>{{ $errors->first('name')}}</div>
</div>
<div class="form-group">
    <label for="email">Email </label>
<input type="text" name="email" value="{{ old('email') }}" class="form-control">
    <div>{{ $errors->first('email ')}}</div>
</div>

   <div class="form-group">
    <label for="active">Status</label>
    <select name="active" id="active" class="form-control">
        <option value="" disabled>Select customer status</option>
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select>
   </div>

<button type="submit" class='btn btn-primary'>Add Customers</button>

@csrf
</form>

</div>
<hr>

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
@endsection
