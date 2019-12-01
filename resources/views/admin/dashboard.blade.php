@extends('layouts.app')

@guest
<h1 style="text-align:center"> Neturite teisės patekti į šį puslapį! <a href="login" style="color:white">PRISIJUNKITE!</a></h1>

@else



@section('content')
    <nav role="navigation">
        <ul>
            <li><a href="/GitarosMeistrai/public"><img class="img-home" src="img/home.png"></a></li>
            <li><a href="guitarists"><b>Gitaristai</b></a></li>
            <li><a href="registrations/create"><b>Registruokitės pamokoms</b></a></li>
            <li style="float:right"><a href="questions/create"><b>Klauskite!</b></a></li>
            <!-- Authentication Links -->
            @guest
            <li style="float:right">
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
                            <li style="float:right"><a class="active" href="admin">Administracijos puslapis</a></li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
        </ul>
    </nav>

    <div id ='content' style="text-align:center">    
        <h1 style="text-align:center">Sveiki prisijungę, {{Auth::user()->name}}</h1>
        <h3 style="text-align:center">Pasirinkite ką norite peržiūrėti</h1>
            <button><a href="questions"><b>Klientų klausimai</b></a></button>
            <button><a href="registrations"><b>Klientų registracijos</b></a></button>
    </div>

@endsection

@endguest