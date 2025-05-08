@extends('layout')

@section('content')


<ul>
    @foreach ($customers as $customer)
        <li>{{ $customer}}</li>
    @endforeach
</ul>
@endsection
