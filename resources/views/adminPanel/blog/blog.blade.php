<!doctype html>
<html lang="cs-CZ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    @include('_partials.main.head')

    <!-- Moje styly -->
    <link rel="stylesheet" href="{{ asset('/css/adminPanel.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/order.css') }}">
    {{--    <link rel="stylesheet" href="{{URL::asset('/css/sortable-table.css')}}">--}}

    <title>Admin panel - správa blogů</title>
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
                <h1 class="h4 mt-3">Vaše blogové stránky</h1>
                <p class="mt-1 text-muted w-100">Správa vašich příspěvků s možností vytvoření nového blogu</p>

                <div class="d-flex flex-wrap">
                    <div class="mr-3">
                        <button type="button" class="btn btn-light px-0">
                            <a class="linkInButton" href="{{ route('ap_blog_create') }}">Vytvořit nový blog
                                <img class="icon" src="{{ URL::asset('/img/icons/add.png') }}" alt="Ikona vytvoření">
                            </a>
                        </button>
                    </div>
                </div>

                @if (session('status') === 'blog_created')
                    <p class="pSuccess my-1 mx-3">
                        {{ __('Blog byl úspěšně vytvořen.') }}
                    </p>
                @endif

                @foreach($blogViews AS $oneBlogView)
                    <div class="w-100 mt-3">
                        <div class="cart-item row align-items-center border-bottom py-3"
                             onclick="window.location.href = '{{route('ap_blog_edit', ['id' => $oneBlogView->id]) }}'"
                             style="cursor: pointer">
                            <div class="col-xl-1 mb-2 mb-xl-0">
                                <h2 class="h6" title="
                                    @if($oneBlogView->is_disabled)
                                        Blog je skrytý pro uživatele webu
                                    @else
                                        Blog je viditelný pro uživatele webu
                                    @endif
                                ">
                                    @if($oneBlogView->is_disabled)
                                        Skryté
                                    @else
                                        Viditelný
                                    @endif
                                </h2>
                            </div>
                            <div class="col-xl-4 mb-1 mb-xl-0">
                                <h2 class="h5"><a class="linkWithoutFormat" href="{{route('ap_blog_edit', ['id' => $oneBlogView->id]) }}"
                                    title="{{ $oneBlogView->name }}">
                                        {{ Str::limit($oneBlogView->name, 25) }}</a>
                                </h2>
                                <h3 class="h6 text-muted" title="{{ \Carbon\Carbon::parse($oneBlogView->date)->format('d.m.Y') . " / "
                                    . $oneBlogView->location . " / " . $oneBlogView->location2 }}">

                                    {{ \Carbon\Carbon::parse($oneBlogView->date)->format('d.m.Y') . " / "
                                    . Str::limit($oneBlogView->location, 15) . " / " . Str::limit($oneBlogView->location2, 20) }}</h3>
                            </div>
                            <div class="col-xl-3 mb-1 mb-xl-0">
                                <h2 class="h5" title="{{ $oneBlogView->category_name }}">{{ Str::limit($oneBlogView->category_name, 20) }}</h2>
                                <h3 class="h6 text-muted" title="{{ $oneBlogView->text }}">{{ Str::limit($oneBlogView->text, 25) }}</h3>
                            </div>
                            <div class="col-xl-4">
        {{--                        @foreach($oneSimpleOrder->getPhotos() as $onePhoto)--}}
                                    <a class="nonUnderlineHover" href="{{ route('ap_blog_photos', ['id' => $oneBlogView->id]) }}">
        {{--                                @if($onePhoto == null)--}}
                                            <img class="img-fluid mx-2 imageInOrder" src="{{ asset('/img/icons/img_not_found.png') }}"
                                                 alt="Žádný obrázek nenastaven">
        {{--                                @else--}}
                                            <img class="img-fluid mx-2 imageInOrder" src="{{ asset('/api/blog_photo/' . 0) }}"
                                                 alt="Obrázek blogu">
        {{--                                @endif--}}
                                    </a>
        {{--                        @endforeach--}}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
    </div>

</div>
</body>
</html>

