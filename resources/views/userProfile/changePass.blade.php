


<!doctype html>
<html lang="cs-CZ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('_partials.main.head')

    <!-- Moje styly -->
    <link rel="stylesheet" href="{{URL::asset('/css/profile.css')}}">

    <title>Můj profil - Změna hesla</title>
</head>
<body>
<div class="divBody">
    @include('_partials.main.header')

    <div class="mainContent">

        @include('_partials.aside.asideUserProfile')

        <section class="mySectionContainer">
            <div>
                <h1 class="h4">Změna hesla</h1>
                <p class="mt-1 text-muted w-100" >
                    Zadejte Vaše aktuální heslo a nové heslo, které chcete dále používat.
                </p>

                @if (session('status') === 'password-changed')
                    <p class="pSuccess mt-1 mb-2 mx-3">
                        {{ __('Heslo bylo úspěšně změněno.') }}
                    </p>
                @endif


                <form method="post" action="{{ route('profile_do_change_password') }}" class="mt-6 space-y-6">
                    @csrf

                    <div class="row mb-0 mb-sm-3 d-flex flex-wrap">
                        {{--    Aktuální heslo            --}}
                        <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                            <div data-mdb-input-init class="form-outline">
                                <label for="update_password_current_password"><b>Aktuální heslo</b></label>
                                <x-text-input id="update_password_current_password" name="current_password"
                                              type="password" class="form-control" required placeholder="Aktuální heslo"
                                              autocomplete="current-password"/>
                                <x-input-error :messages="$errors->get('current_password')"
                                               class="mt-2 error_message"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-0 mb-sm-3 d-flex flex-wrap">
                        {{--    Nové heslo            --}}
                        <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                            <div data-mdb-input-init class="form-outline">
                                <label for="update_password_password"><b>Nové heslo</b></label>
                                <x-text-input id="update_password_password"
                                              name="password"
                                              type="password"
                                              placeholder="Nové heslo"
                                              class="form-control"
                                              autocomplete="new-password"/>
                                <x-input-error :messages="$errors->get('password')"
                                               class="mt-2 error_message"/>
                            </div>
                        </div>
                        {{--    Nové heslo znovu            --}}
                        <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                            <div data-mdb-input-init class="form-outline">
                                <label for="update_password_password_confirmation"><b>Potvrzení nového hesla</b></label>
                                <x-text-input id="update_password_password_confirmation"
                                              name="password_confirmation"
                                              placeholder="Nové heslo znovu"
                                              type="password"
                                              class="form-control"
                                              autocomplete="new-password"/>
                                <x-input-error :messages="$errors->get('password_confirmation')"
                                               class="mt-2 error_message"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <input class="btn btn-success pr-auto mt-3" type="submit" value="Změnit heslo">
                    </div>
                </form>
            </div>
        </section>
    </div>

    @include('_partials.main.footer')
</div>
</body>
</html>




