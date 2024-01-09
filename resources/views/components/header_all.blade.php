<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-light shadow sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @if(Auth::check())
                    <!-- Logged In: Show Logout Dropdown -->
                    <li class="nav-item dropdown mx-5">
    <a class="nav-link active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <div>{{ Auth::user()->username }}</div>
        <span class='fa fa-caret'></span>
    </a>

    <div class="dropdown-menu dropdown-menu-md dropdown-menu-center m-0">
        <div class="text-center">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" class="text-decoration-none text-muted" onclick="event.preventDefault(); this.closest('form').submit();">
                    Logout
                </a>
            </form>
        </div>
    </div>
</li>
                @else
                    <!-- Not Logged In: Show Register and Login Links -->
                    <li class="nav-item"><a class="nav-link text-dark" aria-current="page" href="{{ route('register') }}">Register</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ route('login') }}">Login</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.3/dist/js/bootstrap.bundle.min.js"></script>
