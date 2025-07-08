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
    <link rel="stylesheet" href="{{URL::asset('/css/modalPhoto.css')}}">
    {{--    <link rel="stylesheet" href="{{URL::asset('/css/sortable-table.css')}}">--}}

    <!-- Flatpickr CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Flatpickr lokalizace pro češtinu -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/cs.js"></script>

    <title>Admin panel - Úprava blogu {{ $blog->name }}</title>
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


                <h1 class="h4 mt-3">Úprava blogu {{ $blog->name }}</h1>
                <p class="mt-1 text-muted w-100">Správa fotografií tohoto blogu</p>

                @include('_partials.blogEditNavigation')

                @if (session('status') === 'main_photo_deleted')
                    <p class="pSuccess my-1 mx-3">
                        {{ __('Hlavní fotografie byla odebrána.') }}
                    </p>
                @endif
                @if (session('status') === 'main_photo_added')
                    <p class="pSuccess my-1 mx-3">
                        {{ __('Hlavní fotografie byla úspěšně vložena.') }}
                    </p>
                @endif
                @if (session('status') === 'main_photo_updated')
                    <p class="pSuccess my-1 mx-3">
                        {{ __('Hlavní fotografie byla úspěšně aktualizována.') }}
                    </p>
                @endif

                <div class="d-flex flex-wrap flex-row  mt-1">
                    <div>
                        <h2 class="h5">Hlavní fotografie</h2>
                        {{--    Image            --}}
                        <div class="mr-3">
                            @if($main_photo)
                                <div class="cardAddvertDiv card mb-3" style="width: fit-content">
                                    <img src="{{ asset('/api/blog_photo/' . $main_photo->id) }}"
                                         class="card-img-top photoAddvertEditPhotos"
                                         alt="Hlavní obrázek"
                                         onclick="showModalImg('{{ asset('/api/blog_photo/' . $main_photo->id) }}')"
                                         style="cursor: pointer; border-radius: 3px;!important; border-bottom: none!important; height: 240px">
                                    <button type="button"
                                            onclick="showModalWindow({{ $main_photo->id }})"
                                            style="position: absolute; top: 5px; right: 5px; background: transparent; border: none; padding: 0; cursor: pointer;">
                                        <img class="iconMedium" src="{{ asset('/img/icons/icon_trash.png') }}" alt="Smazat hlavní obrázek">
                                    </button>
                                </div>
                            @else
                                <p class="alert alert-warning mt-2 mb-2">
                                    {{ __('Tento blog nemá nastavenou hlavní fotografii.') }}
                                </p>
                            @endif
                        </div>
                    </div>
{{--                        Form            --}}
                    <div>
                        <form action="{{ route('ap_blog_add_main_photo') }}" method="post"
                              class="form-card formCreateUser col-12" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-2">
                                <div class="col">
                                    <div data-mdb-input-init class="form-outline">
                                        <label for="image"><b>
                                            @if( ! $main_photo)
                                                Vyberte fotografii, kterou chcete přidat
                                            @else
                                                Vyberte novou fotografii, kterou chcete přidat a nahradit stávající
                                            @endif
                                        </b></label>
                                        <input type="file" class="form-control-file" name="image" id="image"
                                               accept="image/png, image/jpg, image/jpeg, image/gif, image/svg" required>

                                        <div class="mt-2">
                                            @foreach ($errors->adding_main_photo->all() as $error)
                                                <p class="m-0 error_message">{{ $error }}</p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                <input class="btn btn-success pr-auto" type="submit" value="Přidej fotografii">
                            </div>
                        </form>
                    </div>
                </div>



                <h2 class="h5 mt-1">Vedlejší fotografie</h2>

                @if (session('status') === 'photos_added')
                    @if(session('count_of_photos') == 1)
                        <p class="pSuccess my-1 mx-3">
                            {{ __('Fotografie byla přidána.') }}
                        </p>
                    @else
                        <p class="pSuccess my-1 mx-3">
                            {{ __('Fotografie byly přidány.') }}
                        </p>
                    @endif
                @endif
                @if (session('status') === 'photo_deleted')
                    <p class="pSuccess my-1 mx-3">
                        {{ __('Fotografie byla odebrána.') }}
                    </p>
                @endif

                @if(count($not_main_photos) == 0)
                    <p class="alert alert-warning mt-2">
                        {{ __('Tento blog nemá nastaveny žádné vedlejší fotografie, ale je přidat níže.') }}
                    </p>
                @else
                    <div class=" d-inline-flex  flex-wrap mb-3">
                        @foreach($not_main_photos as $onePhoto)
                            <div class="cardAddvertDiv card m-1" style="width: 15rem;">
                                <img src="{{ asset('/api/blog_photo/' . $onePhoto->id) }}"
                                     class="photoAddvertEditPhotos card-img-top" alt="Obrázek"
                                     onclick="showModalImg(' {{ asset('/api/blog_photo/' . $onePhoto->id) }} ')"
                                     style="cursor: pointer">

                                <div class="card-body d-flex justify-content-center py-2">
                                    <x-input-error :messages="$errors->deleteBlogPhoto->get('id')"
                                                   class="mt-2 error_message"/>
                                    <input class="btn btn-danger pr-auto text-light" type="submit"
                                           value="Odstranit obrázek" onclick="showModalWindow({{ $onePhoto->id }})">
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif



                <form action="{{ route('ap_blog_add_photo')  }}" class="form-card formCreateUser col-12"
                      method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="images"><b>Vyberte fotografii(e), který chcete přidat</b></label>
                                <input type="file" class="form-control-file" name="images[]" id="images"
                                       accept="image/png, image/jpg, image/jpeg, image/gif, image/svg" required multiple>

                                <div class="mt-2">
                                    @foreach ($errors->adding_main_photo->all() as $error)
                                        <p class="m-0 error_message">{{ $error }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                        <input class="btn btn-success pr-auto" type="submit" value="Přidej fotografii(e)">
                    </div>
                </form>

            </div>
        </section>
    </div>

    {{--  Are you sure modal   --}}
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <div class="modal-icon">
                <img class="iconBigger" src="{{ asset('/img/icons/icon_trash.png') }}" alt="Koš"/>
            </div>
            <p>Smazat tuto fotku?</p>
            <p>Tato akce je nevratná.</p>
            <div class="d-flex justify-content-between align-items-start flex-row">
                <form action="{{ route('ap_blog_delete_photo') }}" method="POST">
                    @csrf

                    <input value="" type="hidden" name="id" id="id">
                    <input class="btn btn-danger pr-auto text-light" type="submit"
                           value="Trvale odstranit">
                </form>
                <button id="cancelDelete" class="btn btn-secondary">Zrušit</button>
            </div>

        </div>
    </div>

    {{--  Photo over screen  --}}
    <div id="myModal" class="modal">
        <img class="modal_content bigMargin" id="img01" alt="Zvětšené foto produktu" src="">

        <span class="close" id="closeBigImage">&times;</span>
    </div>

    <script src="{{ asset('/js/flatpicker_initialize.js') }}"></script>
    <script src="{{ asset('/js/common/sure_modal.js') }}"></script>
    <script src="{{ asset('/js/common/big_image.js') }}"></script>
</div>
</body>
</html>




