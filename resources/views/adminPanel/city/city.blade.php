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

    <title>Admin panel - správa měst</title>
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
                <h1 class="h4 mt-3">Vaše města</h1>
                <p class="mt-1 text-muted w-100">Správa vašich měst, která se používají pro blogy</p>

                <div class="d-flex flex-wrap mb-2">
                    <div class="mr-3">
                        <button type="button" class="btn btn-light px-0">
                            <a class="linkInButton" href="{{ route('ap_city_create') }}">Vytvořit nové město
                                <img class="icon" src="{{ URL::asset('/img/icons/add.png') }}" alt="Ikona vytvoření">
                            </a>
                        </button>
                    </div>
                </div>

                @if (session('status') === 'city_created')
                    <p class="pSuccess my-1 mx-3">
                        {{ __('Město bylo úspěšně přidáno.') }}
                    </p>
                @endif
                @if (session('status') === 'city_deleted')
                    <p class="pSuccess my-1 mx-3">
                        {{ __('Město bylo úspěšně odstraněno.') }}
                    </p>
                @endif

                <div class="divTable table-wrap mt-3">
                    <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm sortable">
                        <thead>
                        <tr class="p-1">
                            <th>Upravit</th>
                            <th class="sorttable_alpha" title="Název města">Název</th>
                            <th class="sorttable_alpha" title="Počet blogů, které se uskutečnili v daném městě">Počet blogů</th>
                            <th class="sorttable_alpha" title="Datum a čas vytvoření daného města">Vytvořeno</th>
                            <th class="sorttable_alpha" title="Datum a čas poslední úpravy daného města">Upraveno</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cityViews as $oneCityView)
                            <tr class="trElement border" style="height: 35px;">
                                <td class="p-1">
                                    <a href="{{ route('ap_city_edit', ['id' => $oneCityView->id]) }}">
                                        <img class="icon" src="{{ asset('/img/icons/edit.png') }}" alt="Ikona editace">
                                    </a>
                                </td>
                                <td class="p-1 tdName"
                                    title="{{$oneCityView->name}}">{{ Str::limit($oneCityView->name, 30) }}</td>
                                <td class="p-1"
                                    title="{{$oneCityView->blog_count}}">{{ Str::limit($oneCityView->blog_count, 30) }}</td>
                                <td class="p-1"
                                    sorttable_customkey="{{$oneCityView->created_at}}">{{$oneCityView->created_at?->format("d.m.Y H:i:s")}}</td>
                                <td class="p-1"
                                    sorttable_customkey="{{$oneCityView->updated_at}}">{{$oneCityView->updated_at?->format("d.m.Y H:i:s")}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

{{--                @foreach($cityViews AS $oneCityView)--}}
{{--                    <div class="w-100 mt-3">--}}
{{--                        <div class="cart-item row align-items-center border-bottom py-2"--}}
{{--                             onclick="window.location.href = '{{route('ap_city_edit', ['id' => $oneCityView->id]) }}'"--}}
{{--                             style="cursor: pointer">--}}
{{--                            <div class="col-xl-4 mb-1 mb-xl-0">--}}
{{--                                <h2 class="h5"><a class="linkWithoutFormat" href="{{route('ap_blog_edit', ['id' => $oneCityView->id]) }}"--}}
{{--                                                  title="{{ $oneCityView->name }}">--}}
{{--                                        {{ Str::limit($oneCityView->name, 30) }}</a>--}}
{{--                                </h2>--}}
{{--                                <h3 class="h6 text-muted" title="{{ \Carbon\Carbon::parse($oneCityView->date)->format('d.m.Y') . " / "--}}
{{--                                    . $oneCityView->location . " / " . $oneCityView->location2 }}">--}}

{{--                                    {{ \Carbon\Carbon::parse($oneCityView->date)->format('d.m.Y') . " / "--}}
{{--                                    . Str::limit($oneCityView->location, 15) . " / " . Str::limit($oneCityView->location2, 20) }}</h3>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-4 mb-1 mb-xl-0">--}}
{{--                                <h2 class="h5" title="{{ $oneCityView->blog_count }}">{{ Str::limit($oneCityView->blog_count, 15) }}</h2>--}}
{{--                                <h3 class="h6 text-muted" title="{{ $oneCityView->text }}">{{ Str::limit($oneCityView->text, 25) }}</h3>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-4 mb-1 mb-xl-0">--}}
{{--                                <h2 class="h5" title="{{ $oneCityView->created_at->format("d.m.Y H:i:s") }}">{{ $oneCityView->created_at->format("d.m.Y H:i:s") }}</h2>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-4">--}}
{{--                                <a class="nonUnderlineHover" href="{{ route('ap_blog_photos', ['id' => $oneCityView->id]) }}" title="Hlavní fotografie">--}}
{{--                                    @if($oneCityView->main_photo == null)--}}
{{--                                        <img class="img-fluid mx-1 imageInOrder" src="{{ asset('/img/icons/img_not_found.png') }}"--}}
{{--                                             alt="Žádný obrázek nenastaven">--}}
{{--                                    @else--}}
{{--                                        <img class="img-fluid mx-1 imageInOrder" src="{{ asset('/api/blog_photo/' . $oneCityView->main_photo->id) }}"--}}
{{--                                             alt="Obrázek blogu">--}}
{{--                                    @endif--}}
{{--                                </a>--}}

{{--                                @foreach($oneCityView->other_photos->take(2) as $onePhoto)--}}
{{--                                    <a class="nonUnderlineHover" href="{{ route('ap_blog_photos', ['id' => $oneCityView->id]) }}" title="Vedlejší fotografie">--}}
{{--                                        <img class="img-fluid mx-1 imageInOrder" src="{{ asset('/api/blog_photo/' . $onePhoto->id) }}"--}}
{{--                                             alt="Obrázek blogu">--}}
{{--                                    </a>--}}
{{--                                @endforeach--}}
{{--                                @if($oneCityView->other_photos->count() > 2)--}}
{{--                                    <a class="nonUnderlineHover" href="{{ route('ap_blog_photos', ['id' => $oneCityView->id]) }}">--}}
{{--                                        <img class="img-fluid mx-1 iconMediumBigger" src="{{ asset('/img/icons/more_horiz.png') }}"--}}
{{--                                             alt="Ikona další">--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}

            </div>
        </section>
    </div>

    <script src="{{ asset('js/sorttable.js')}}"></script>
</div>
</body>
</html>


