@extends('layouts.app')

@section('content')
<h3>Insert Phone Number</h3>
<form action="/user/phone/store" method="POST">
    @csrf
    <label for="phone_number">Phone number :</label><input type="text" name="phone_number"> <br>
    <input type="submit" value="Save Data">
</form>
@endsection
