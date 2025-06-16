<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('_partials.main.head')

    <title>Admin panel</title>
</head>
<body>
    @if (session('status') === 'admin-logged-in')
        <p class="alert alert-success mt-2">
            {{ __('Přihlášení administrátora proběhlo úspěšně.') }}
        </p>
    @endif
    <h1>Admin panel slouží pro správu jednotlivých sekcí aplikace.</h1>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <a class="nav-link btn btn-light" onclick="event.preventDefault();
                                                this.closest('form').submit();">
            {{ __('Odhlásit se z admin panelu') }}
        </a>
    </form>

</body>
</html>
