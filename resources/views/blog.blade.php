
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


    <title>{{ $blogView->name }}</title>

</head>
<body>

<h1 class="h3">{{ $blogView->name }}</h1>
<h2 class="h4">{{ $blogView->category_name }}</h2>
<h2 class="h4">{{ \Carbon\Carbon::parse($blogView->date)->format('d.m.Y') . " / "
                                    . $blogView->location . " / " . $blogView->location2}}</h2>
<img src="{{ asset('/api/blog_photo/' . $blogView->main_photo_id) }}" alt="Hlavní fotografie" style="max-height: 250px">

<p>{{ $blogView->text }}</p>

<div>
    @foreach($blogPhotos as $blogPhoto)
        <img src="{{ asset('/api/blog_photo/' . $blogPhoto->id) }}" alt="Fotografie" style="max-height: 150px">
    @endforeach

</div>

<div>
    <h3 class="h5 mt-4">Další náhodné akce</h3>
    @foreach($nextBlogViews as $blogView)
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


