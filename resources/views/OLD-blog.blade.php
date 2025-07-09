<!doctype html>
<html lang="cs-CZ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    @include('_partials.main.head')


    <title>Domovská stránka</title>

</head>
<body>

    <h1>Vítáme Vás na stránkách kouzelníka pro děti! Jmenuji se Martin Kellman a přináším zábavu plnou smíchu, magie a
        nezapomenutelných zážitků pro malé i větší diváky. Ať už plánujete dětskou oslavu, školní akci nebo jinou veselou
        událost, připravím kouzelnické vystoupení, které rozjasní oči každého dítěte. Vstupte do světa fantazie a nechte se
        unést kouzly, která baví i překvapují!</h1>
    <a href="{{ route('login') }}">Přihlásit se</a>

    <nav>
        <ul>
            @foreach($categories as $category)
                <li>{{ $category->name }}</li>
            @endforeach
        </ul>
    </nav>

    <div>
        @foreach($blogViews as $blogView)
            <a href="{{ route('blog', ['id' => $blogView->id]) }}">
                <h2 class="h4">{{ $blogView->name }}</h2>
                <h3 class="h5">{{ \Carbon\Carbon::parse($blogView->date)->format('d.m.Y') . " / "
                                        . $blogView->location . " / " . $blogView->location2}}</h3>
                <img src="{{ asset('/api/blog_photo/' . $blogView->main_photo_id) }}" alt="Fotografie blogu" style="max-height: 150px">
                <p></p>
            </a>
        @endforeach
    </div>

</body>
</html>

