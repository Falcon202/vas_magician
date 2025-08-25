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

    <title>Admin panel - vytvoření nového města</title>
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


                <h1 class="h4 mt-3">Vytvoření nového města</h1>
                <p class="mt-1 text-muted w-100">Vyplňtě následující pole</p>

                <form class="form-card formCreateUser" action="{{ route('ap_city_do_create') }}" method="post">
                    @csrf

                    <div class="row mb-0 mb-sm-3 d-flex flex-wrap">
                        {{--    Name            --}}
                        <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                            <div data-mdb-input-init class="form-outline">
                                <label for="product_name"><b>Název</b></label>
                                <x-text-input id="name" name="name" type="text" class="form-control"
                                              placeholder="Zadejte název budoucího města" autocomplete="name"
                                              :value="old('name', $city?->name ?? '')"/>
                                <x-input-error :messages="$errors->get('name')"
                                               class="mt-2 error_message"/>
                            </div>
                        </div>
                    </div>


                    <div class="form-group text-center">
                        <input class="btn btn-success pr-auto mb-2 mt-4" type="submit" value="Vytvořit nové město">
                    </div>
                </form>


            </div>
        </section>
    </div>

    <script src="{{ asset('/js/flatpicker_initialize.js') }}"></script>
</div>
</body>
</html>



