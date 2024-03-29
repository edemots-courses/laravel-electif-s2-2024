@extends('layouts.app')

@section('content')
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nom</label>
        <input type="text" id="name" name="name">
        @error('name')
            <ul>
                @foreach ($errors->get('name') as $error)
                    <li style="color: red">{{ $error }}</li>
                @endforeach
            </ul>
        @enderror
    </div>
    <div>
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email">
        @error('email')
            <ul>
                @foreach ($errors->get('email') as $error)
                    <li style="color: red">{{ $error }}</li>
                @endforeach
            </ul>
        @enderror
    </div>
    <button>Créer l'utilisateur</button>
</form>
@endsection
