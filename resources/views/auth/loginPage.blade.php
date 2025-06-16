<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @include('_partials.main.head')

    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">

    <title>Přihlášení - VASkouzelnik</title>
</head>
<body>
    <section class="login">
        <div class="login-container">
                <img src="../images/kouzelník-martin-kellman-logo.svg" alt="">

                @if (session('status') === 'admin-logged-out')
                    <p class="pSuccess mb-3 mx-3">
                        {{ __('Odhlášení proběhlo úspěšně.') }}
                    </p>
                @endif
                @if (session('status') === 'logged_in_access_only')
                    <p class="pError mb-3 mx-3">
                        {{ __('Nejprve se prosím přihlaste.') }}
                    </p>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="input-group">
                        <label for="username"></label>
                        <input type="text" id="username" name="username" placeholder="login">
                    </div>
                    @if ($errors->has('username'))
                        <ul class="mt-1 error_message">
                            @foreach ($errors->get('username') as $message)
                                <li class="text-red-600">{!! $message !!}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="input-group">
                        <label for="password"></label>
                        <input type="password" id="password" name="password" placeholder="heslo">
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-1 error_message"/>

                    <button type="submit">přihlásit se</button>
                </form>
        </div>
    </section>
</body>
