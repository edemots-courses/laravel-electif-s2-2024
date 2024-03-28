@extends('layouts.app')

@section('content')
    <a href="{{ route('users.create') }}">Créer un nouvel utilisateur</a>
    <table>
        <thead>
            <tr>
                <td>#</td>
                <td>Nom</td>
                <td>E-mail</td>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
@endsection
