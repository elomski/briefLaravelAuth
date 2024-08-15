@extends('layout/base')

@section('content')
    <div class="form-cover">
        <form class="login-form" action="{{ route('login.process') }}" method="POST">
            @csrf
            <h1>Connexion</h1>
            @if ($errors->any())
                <ul class="alert alert-danger">
                    {!! implode('', $errors->all('<li>:message</li>')) !!}
                </ul>
            @endif

            @if ($message = Session::get('error'))
                <div>{{ $message }} </div><br />
            @endif

            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="saisir l'email ici..."><br />

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="saisir le mot de passe ici..."><br />

            <a href="{{ route('registration') }}">S'inscrire</a>
            <a href="{{ route('forgottenPassword') }}">Mot de passe oublier</a>
            <button type="submit">Soumettre</button>
        </form>
    </div>
@endsection
