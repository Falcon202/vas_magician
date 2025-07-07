
<aside class="p-3 mr-md-3">
    <h2 class="h4 mt-2">Menu administrátora</h2>
    <nav class="navbar">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home')}}">Stránka domů</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('ap_blog')}}">Blogy</a>
            </li>

            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="nav-link" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                        {{ __('Odhlásit se') }}
                    </a>
                </form>
            </li>
        </ul>
    </nav>
</aside>
