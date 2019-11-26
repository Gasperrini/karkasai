@extends('layouts.app')

@section('content')
    <nav role="navigation">
        <ul>
            <li><a href="/GitarosMeistrai/public"><img class="img-home" src="img/home.png"></a></li>
            <li><a href="news"><b>Naujienos</b></a></li>
            <li><a href="guitarists"><b>Gitaristai</b></a></li>
            <li><a href="form"><b>Registruokitės pamokoms</b></a></li>
            <li style="float:right"><a href="contacts"><b>Klauskite!</b></a></li>
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
                                    <li style="float:right"><a class="dropdown-item" href="admin">Administracijos puslapis</a></li>
    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
        </ul>

        
    </nav>

    <div id = 'content' style="text-align:center">
            <button><a href="admin"><b>Atgal i administracijos puslapi</b></a></button>
            <button><a href="reservations"><b>Klientu registracijos</b></a></button>
    </div>

    <div id ='content'>    
        <h1 style="text-align:center">Klientu klausimai</h1>
        @if(count($questions) > 0)
            @foreach($questions as $question)
                <h4 style="padding-left:10px; padding-top:5px; border-top-style:solid">Klausima uzdave: {{$question->el_pastas}}</h4>
                <h3 style="padding-left:10px; margin-top:0px; font-size:17px">{{$question->klausimas}}</h3>
            @endforeach
            {{$questions->links()}}
        @else
            <p>Nera jokiu klausimu...</p>
        @endif
    </div>
@endsection