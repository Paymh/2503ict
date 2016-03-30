@extends('layouts.master')

@section('title')
Associative array search example
@stop

@section('content')

  <h2>Library Users</h2>
  <h3>Query</h3>

  <form method="get" action="search">
  <table>
    <tr><td>Search Parameter:</td><td><input type="text" name="param"></td></tr>
    <tr><td colspan=2><input type="submit" value="Search">
                      <input type="reset" value="Reset"></td></tr>
  <table>
  </form>

@stop




