<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Authentification</title>
</head>

<body>
    
       {{-- // {{ route('registration.process') }}" method="POST" --}}
        <form action="{{ route('registration.process')}}" method="POST">

            @csrf

            <h1>Inscription</h1>

            @if ($errors->any())
                <ul class="alert alert-danger">
                    {!! implode('', $errors->all('<li>:message</li>')) !!}
                </ul>
            @endif

            @if ($message = Session::get('error'))
                <div>{{ $message }} </div><br />
            @endif

            <label for="name">Nom d'utilisateur</label><br />
            <input type="text" name="name" id="name" placeholder="saisir le nom ici..."><br /><br />

            <label for="email">Email</label><br />
            <input type="email" name="email" id="email" placeholder="saisir l'email ici..."><br /><br />

            <label for="password">Mot de passe</label><br />
            <input type="password" name="password" id="password"
                placeholder="saisir le mot de passe ici..."><br /><br />

            <label for="passwordConfirm">Confirmer mot de passe</label><br />
            <input type="password" name="passwordConfirm" id="passwordConfirm"
                placeholder="Confirmer le mot de passe ici..."><br /><br />

            <a href="{{ route('login') }}">Se connecter</a><br /><br />

            <button type="submit">Soumettre</button>
        </form>

</body>

</html>
