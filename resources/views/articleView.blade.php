@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5>Article User</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Article</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>
                            @foreach($articles as $paper)
                            @if($user->id === $paper->user_id)
                                <ul>
                                    <li>{{ $paper->article }}</li>
                                </ul>
                            @endif
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <a href="/user/phone" class="btn btn-primary">back</a>
        </div>
    </div>
</div>
@endsection
