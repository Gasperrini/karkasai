@extends('layouts.app')

@section('content')
<nav role="navigation">
    <ul>
        <li><a href="/GitarosMeistrai/public"><img class="img-home" src="img/home.png"></a></li>
        <li><a href="guitarists"><b>Gitaristai</b></a></li>
        <li><a href="/GitarosMeistrai/public/registrations/create"><b>Registruokitės pamokoms</b></a></li>
        <li style="float:right"><a href="contacts"><b>Klauskite!</b></a></li>
        <!-- Authentication Links -->
    @guest
    <li style="float:right" class="active">
        <a href="{{ route('login') }}">{{ __('Prisijunkite') }}</a>
    </li>
@else
    <li style="float:right" class="nav-item dropdown">
        

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        
            <li style="float:right"><a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a></li>
            <li style="float:right"><a class="dropdown-item" href="admin">Administracijos puslapis</a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
@endguest
    </ul>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="padding-top:5px;text-align: center; font-size:20px;">{{ __('Darbuotojo prisijungimas') }}</div>

                <div class="container">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="container">
                            <label for="email" >{{ __('Darbuotojo el. paštas') }}</label>

                            <div class="container">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="container">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Slaptažodis') }}</label>

                            <div class="container">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Prisiminti mane') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Prisijungti') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Pamiršote slaptažodį?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
