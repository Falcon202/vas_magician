

<div class=" mt-3 d-flex flex-wrap">
    <div class="mr-3">
        <button type="button" class="btn btn-light buttonCreateNew mb-3 px-0">
            <a class="linkInButton" href="{{ route('ap_blog_edit', ['id' => $blog->id]) }}">Upravit texty
                <img class="icon" src="{{ asset('/img/icons/edit.png') }}" alt="Ikona editace">
            </a>
        </button>
    </div>
    <div class="mr-3">
        <button type="button" class="btn btn-light buttonCreateNew mb-3 px-0">
            <a class="linkInButton" href="{{ route('ap_blog_photos', ['id' => $blog->id]) }}">Upravit fotografie
                <img class="icon" src="{{ asset('/img/icons/edit.png') }}" alt="Ikona editace">
            </a>
        </button>
    </div>
</div>
