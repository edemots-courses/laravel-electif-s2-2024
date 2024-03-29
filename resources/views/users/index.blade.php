@extends('layouts.app')

@section('content')
    {{-- @if (session()->has('success')) --}}
    @session('success')
        <p style="color: green">
            {{ session('success') }}
        </p>
    @endsession
    <a href="{{ route('users.create') }}">Créer un nouvel utilisateur</a>
    <table>
        <thead>
            <tr>
                <td>#</td>
                <td>Nom</td>
                <td>E-mail</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('users.destroy', ['user' => $user]) }}" method="POST">
                            @csrf
                            {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                            @method('DELETE')
                            <button>🗑</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
@endsection
