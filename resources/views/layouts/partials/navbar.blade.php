<div class="container">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark rounded m-2">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('assets/img/addressico.png') }}"
                    width="32px" alt="Address Icon"></span></a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('index') }}"
                            aria-current="page">{{ __('Home') }}</a>
                    </li>
                    {{--  Auth Links Section --}}
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Options</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item"
                                        href="{{ route('categories.index') }}">{{ __('Catetories') }}</a>
                                    <a class="dropdown-item" href="{{ route('contacts.index') }}">{{ __('Contacts') }}</a>
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Log in') }}</a>
                            </li>


                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                    {{-- Auth Links Section --}}


                </ul>
            </div>
        </div>
    </nav>
</div>
