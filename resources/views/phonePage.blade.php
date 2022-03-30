@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5>Data User</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td><a href="/article/{{ $user->id }}">{{ $user->name }}</a></td>
                        <td>{{ $user->phone->phone_number }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/home" class="btn btn-primary">back</a>
        </div>
    </div>
</div>
@endsection
