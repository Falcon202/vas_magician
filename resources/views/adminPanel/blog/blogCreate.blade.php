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
    {{--    <link rel="stylesheet" href="{{URL::asset('/css/sortable-table.css')}}">--}}

    <!-- Flatpickr CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Flatpickr lokalizace pro češtinu -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/cs.js"></script>

    <title>Admin panel - vytvoření nového blogu</title>
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
                    <a class="text-primary text-reset" href="{{  route('ap_blog') }}"
                       style="cursor: pointer;">
                        <img class="icon" src="{{  URL::asset('/img/icons/left_arrow.png') }}" alt="Ikona šipky"> Zpět na přehled blogů
                    </a>
                </div>


                <h1 class="h4 mt-3">Vytvoření nového blogu</h1>
                <p class="mt-1 text-muted w-100">Vyplňtě následující pole pro vytvoření nového příspěvku</p>

                <form class="form-card formCreateUser" action="{{ route('ap_blog_do_create') }}" method="post">
                    @csrf

                    <div class="row mb-0 mb-sm-3 d-flex flex-wrap">
                        {{--    Name            --}}
                        <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                            <div data-mdb-input-init class="form-outline">
                                <label for="product_name"><b>Název</b></label>
                                <x-text-input id="product_name" name="name" type="text" class="form-control"
                                              placeholder="Zadejte název příspěvku"
                                              :value="old('name', $blog?->name ?? '')"/>
                                <x-input-error :messages="$errors->get('name')"
                                               class="mt-2 error_message"/>
                            </div>
                        </div>
                        {{--    Category            --}}
                        <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                            <div data-mdb-input-init class="form-outline">
                                <label for="category_id"><b>Kategorie</b></label>
                                <select id="category_id" name="category_id" required
                                        class="form-control" autocomplete="category_id">
                                    <option value="">Vyberte kategorii</option>
                                    @foreach($categories as $oneCategory)
                                        <option
                                            value={{$oneCategory->id}} @if(old('category_id') == $oneCategory->id) selected @endif >{{$oneCategory->name}}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('category_id')"
                                               class="mt-2 error_message"/>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0 mb-sm-3 d-flex flex-wrap">
                        {{-- Date                       --}}
                        <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                            <div data-mdb-input-init class="form-outline">
                                <label for="date" class="form-label"><b>Datum</b></label>
                                <div class="input-group">
                                    <input id="date" name="date" type="text" class="form-control flatpickr-input"
                                           placeholder="Vyberte datum události"
                                           value="{{ old('date', \Carbon\Carbon::parse($blog?->date ?? '')->format('d. m. Y') ) }}"/>
                                    <span class="input-group-text">/</span>
                                </div>

                                <x-input-error :messages="$errors->get('date')" class="mt-2 error_message"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-0 mb-sm-3 d-flex flex-wrap">
                        {{--    Location            --}}
                        <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                            <div data-mdb-input-init class="form-outline">
                                <label for="location"><b>Lokalita akce</b></label>
                                <div class="input-group">
                                    <x-text-input id="location" name="location" type="text" class="form-control"
                                                  placeholder="Zadejte město"
                                                  :value="old('location', $blog?->location ?? '')" />
                                    <span class="input-group-text">/</span>
                                </div>
                                <x-input-error :messages="$errors->get('location')"
                                               class="mt-2 error_message"/>
                            </div>
                        </div>
                        {{--    Location 2            --}}
                        <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                            <div data-mdb-input-init class="form-outline">
                                <label for="location2"><b>Místo konání akce</b></label>
                                <x-text-input id="location2" name="location2" type="text" class="form-control"
                                              placeholder="Zadejte místo konání akce"
                                              :value="old('location2', $blog?->location2 ?? '')"/>
                                <x-input-error :messages="$errors->get('location2')"
                                               class="mt-2 error_message"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-0 mb-sm-3 d-flex flex-wrap">
                        {{--    Text            --}}
                        <div class="col-12 col-sm-12 mb-3 mb-sm-0">
                            <div data-mdb-input-init class="form-outline">
                                <label for="text" class="form-label"><b>Text příspěvku</b></label>
                                <textarea name="text" id="editor" class="form-control" placeholder="Sem zadejte informace o příspěvku"
                                          rows="4">{{ old('text', $blog?->text ?? '') }}</textarea>
                                <x-input-error :messages="$errors->get('text')" class="mt-2 error_message"/>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0 mb-sm-3 d-flex flex-wrap">
                        {{--    Disable blog?            --}}
                        <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                            <div data-mdb-input-init class="d-flex justify-content-start align-items-center" >
                                <input id="is_disabled" name="is_disabled" class="checkBoxIsCompany checkBox_ViewForm ml-1" type="checkbox"
                                       @if(!$errors->any())  {{-- Stránka byla poprvé načtena --}}

                                       @else
                                           @if(old('is_disabled') == 'on')
                                               checked
                                    @endif
                                    @endif
                                >
                                <label for="is_disabled" class="form-check-label pl-2">
                                    <b>Skrýt příspěvěk pro uživatele na domovské stránce?</b>
                                </label>
                                <x-input-error :messages="$errors->get('is_disabled')"
                                               class="mt-2 error_message"/>
                            </div>
                        </div>
                    </div>

                    <p class="mt-1 text-muted w-100">Fotografie příspěvku můžete přidat po jeho vytvoření v editaci</p>

                    <div class="form-group text-center">
                        <input class="btn btn-success pr-auto mb-2 mt-4" type="submit" value="Vytvořit nový blog">
                    </div>
                </form>


            </div>
        </section>
    </div>

    <script src="{{ asset('/js/flatpicker_initialize.js') }}"></script>
</div>
</body>
</html>


