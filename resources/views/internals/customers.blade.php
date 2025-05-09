@extends('layout')

@section('content')

<p>Customers List</p>

<form action="customers" method="POST" class="pb-5">
    <div class="input-group">
        <input type="text" name="name"> 
    </div>
    <div>{{ $errors->first('name')}}</div>

    <button type="submit">Add Customers</button>

    @csrf
</form>



<ul>
    @foreach ($customers as $customer)
        <!-- <li>{{ $customer->id}}</li> -->
        <li>{{ $customer->name}}</li>
    
    @endforeach
</ul>
@endsection
