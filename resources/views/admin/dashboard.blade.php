@extends('layouts.app')

@guest
<h1 style="text-align:center"> Neturite teises patekti i si puslapi! <a href="login">PRISIJUNKITE!</a></h1>

@else



@section('content')
    <nav role="navigation">
        <ul>
            <li><a href="/GitarosMeistrai/public"><img class="img-home" src="img/home.png"></a></li>
            <li><a href="news"><b>Naujienos</b></a></li>
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
        <h1 style="text-align:center">Sveiki prisijunge, {{Auth::user()->name}}</h1>
        <h3 style="text-align:center">Pasirinkite ka norite perziureti</h1>
            <button><a href="questions"><b>Klientu klausimai</b></a></button>
            <button><a href="registrations"><b>Klientu registracijos</b></a></button>
    </div>

@endsection

@endguest