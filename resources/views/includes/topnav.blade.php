<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
    <a class="navbar-brand" href="{{ route('homepage') }}">{{ 'Majoo Teknologi Indonesia' }}</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            @if(Auth::check())
                <li class="nav-item {{ (request()->segment(1) == 'categories') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('categories.index') }}">Category</a>
                </li>
                <li class="nav-item {{ (request()->segment(1) == 'products') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('products.index') }}">Product</a>
                </li>
            @endif
        </ul>

        @if(!Auth::check())
            <span class="navbar-text">
            <a href="{{ route('form.login') }} ">{{ 'Login' }}</a>
        </span>
        @else
            <span class="navbar-text">
            <form id="logout" action="{{ route('logout') }}" method="POST">
                @csrf
                <a href="#" onclick="logout()">Logout</a>
            </form>
        </span>
        @endif
    </div>
</nav>

@push('scripts')
    <script>
        function logout() {
            document.getElementById("logout").submit();
        }
    </script>
@endpush
