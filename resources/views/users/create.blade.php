@extends('layouts.app')

@section('content')
<form action="">
    <div>
        <label for="name">Nom</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email">
    </div>
    <button>Créer l'utilisateur</button>
</form>
@endsection
