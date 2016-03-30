@extends('layouts.master')

@section('title')
Associative array search results page
@stop

@section('content')

<h2>Library Users</h2>
<h3>Results for '{{{ $_GET['param'] }}}'</h3>

@if (count($pms) == 0)

<p>No results found.</p>

@else 

<table class="bordered">
<thead>
<tr><th>Name</th><th>Address</th><th>Phone Number</th><th>Email</th></tr>
</thead>
<tbody>

@foreach($pms as $pm)
  <tr><td>{{{ $pm['name'] }}}</td><td>{{{ $pm['address'] }}}</td><td>{{{ $pm['phone'] }}}</td><td>{{{ $pm['email'] }}}</td></tr>
@endforeach

</tbody>
</table>
@endif

<p><a href="{{ secure_url('/') }}">New search</a></p>
@stop