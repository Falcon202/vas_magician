<!doctype html>
<html lang="cs-CZ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    @include('_partials.main.head')

    <!-- Moje styly -->
    <link rel="stylesheet" href="{{  asset('/css/adminPanel.css') }}">

    <title>Admin panel - úprava města</title>
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
                <div class="mt-3">
                    <a class="text-primary text-reset" href="{{  route('ap_city') }}"
                       style="cursor: pointer;">
                        <img class="icon" src="{{  URL::asset('/img/icons/left_arrow.png') }}" alt="Ikona šipky"> Zpět na přehled měst
                    </a>
                </div>


                <h1 class="h4 mt-3">Úprava města {{ $cityView->name }}</h1>
                <p class="mt-1 text-muted w-100">Editujte následující pole</p>

                @if (session('status') === 'city_edited')
                    <p class="pSuccess my-1 mx-3">
                        {{ __('Město bylo úspěšně upraveno.') }}
                    </p>
                @endif

                <p>Toto město je používáno <span style="font-weight: bold;">{{ $cityView->blog_count }}</span> blogy(ů)</p>

                <form class="form-card formCreateUser" action="{{ route('ap_city_do_edit') }}" method="post">
                    @csrf

                    <div class="row mb-0 mb-sm-3 d-flex flex-wrap">
                        {{--    Name            --}}
                        <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                            <div data-mdb-input-init class="form-outline">
                                <label for="product_name"><b>Název</b></label>
                                <x-text-input id="name" name="name" type="text" class="form-control"
                                              placeholder="Zadejte název města" autocomplete="name"
                                              :value="old('name', $cityView?->name ?? '')"/>
                                <x-input-error :messages="$errors->get('name')"
                                               class="mt-2 error_message"/>
                                <x-input-error :messages="$errors->get('id')"
                                               class="mt-2 error_message"/>
                            </div>
                        </div>
                    </div>


                    <div class="form-group text-center">
                        <x-text-input type="hidden" name="id" :value="old('id', $cityView?->id ?? '')"/>
                        <input class="btn btn-success pr-auto mb-2 mt-4" type="submit" value="Upravit město">

                        <input class='btn btn-danger pr-auto  mb-2 mt-4' type="button"
                               value="Odstranit město"
                               onclick="document.querySelector('.sureDelete').classList.toggle('d-none')">
                    </div>
                </form>

                <form action="{{ route('ap_city_do_delete') }}" method="post"
                      class='form-card formCreateUser col-12 col-md-12'>
                    @csrf
                    <div class="form-group text-center sureDelete d-none">
                        <x-text-input type="hidden" name="id" :value="old('id', $cityView?->id ?? '')"/>
                        <input class="btn btn-primary pr-auto mb-2" type="button" value="Zrušit operaci"
                               onclick="document.querySelector('.sureDelete').classList.add('d-none')">
                        <input class="btn btn-danger pr-auto mb-2" type="submit" value="Trvale odstranit město">
                    </div>
                </form>
                <div class='form-card formCreateUser col-12 col-md-12'>
                    <div class="form-group text-center sureDelete">
                        <x-input-error :messages="$errors->deleteCity->get('id')" class="mt-2 error_message"/>
                    </div>
                </div>


            </div>
        </section>
    </div>

    <script src="{{ asset('/js/flatpicker_initialize.js') }}"></script>
</div>
</body>
</html>




