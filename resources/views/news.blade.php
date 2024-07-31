@extends('master')
@section('content')
<h2>this is news page </h2>
<form action='' method='post'>
    @csrf 
    <label for='name'>Name</label>
    <input type='text' id='name' name='name' >

    <button type='submit'>Enter </button>
</form>
@endsection('content')