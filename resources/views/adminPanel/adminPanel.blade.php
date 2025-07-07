<!doctype html>
<html lang="cs-CZ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    @include('_partials.main.head')

    <!-- Moje styly -->
    <link rel="stylesheet" href="{{URL::asset('/css/adminPanel.css')}}">

    <title>Admin panel</title>
</head>
<body>
<div class="divBody">
    <header>
{{--    todo    --}}
    </header>

    <div class="mainContent">
        @include('_partials.asideAdminPanel')

        <section class=" mySectionContainer">
            <div>
                <h1 class="h4 mt-3">Vítejte v admin panelu</h1>
                <p class="mt-1 mb-2 text-sm text-gray-500">
                    {{ __("Admin panel slouží pro správu jednotlivých sekcí aplikace.") }}
                </p>

                @if (session('status') === 'admin-logged-in')
                    <p class="alert alert-success mt-2">
                        {{ __('Přihlášení administrátora proběhlo úspěšně.') }}
                    </p>
                @endif

                <img src="{{ asset('/img/icons/admin.png') }}" alt="Ikona admin panelu" class="iconBigger">

            </div>
        </section>
    </div>

</div>
</body>
</html>
