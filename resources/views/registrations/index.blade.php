@extends('layouts.app')

@section('content')
    <nav role="navigation">
        <ul>
            <li><a href="/GitarosMeistrai/public"><img class="img-home" src="img/home.png"></a></li>
            <li><a href="/GitarosMeistrai/public/news"><b>Naujienos</b></a></li>
            <li><a href="/GitarosMeistrai/public/guitarists"><b>Gitaristai</b></a></li>
            <li><a href="registrations/create"><b>Registruokitės pamokoms</b></a></li>
            <li style="float:right" class="active"><a href="questions/create"><b>Klauskite!</b></a></li>
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

    <div id="content" style="text-align:center">
            <button><a href="admin"><b>Atgal i administracijos puslapi</b></a></button>
            <button><a href="questions"><b>Klientu klausimai</b></a></button> 
    </div>

    <div id ='content'>   
        <h1 style="text-align:center">Klientu registracijos</h1>
        @if(count($registrations) > 0)
        {{$registrations->links()}}
            @foreach($registrations as $registration)
                <h3 style="padding-left:10px; padding-top:5px; border-top-style:solid; margin-top:0px; font-size:17px">Kliento vardas: {{$registration->vardas}}</h3>
                <h3 style="padding-left:10px; margin-top:0px; font-size:17px">Kliento pavarde: {{$registration->pavarde}}</h3>
                <h3 style="padding-left:10px; margin-top:0px; font-size:17px">Kliento el. pastas: {{$registration->el_pastas}}</h3>
                <h3 style="padding-left:10px; margin-top:0px; font-size:17px">Kliento tel. nr.: {{$registration->tel_nr}}</h3>
                @if($registration->mokytojas_id == 1)
                <h3 style="padding-left:10px; margin-top:0px; font-size:17px">Pasirinktas mokytojas: Petras Petrauskas</h3>
                @elseif($registration->mokytojas_id ==2)
                <h3 style="padding-left:10px; margin-top:0px; font-size:17px">Pasirinktas mokytojas: Andrius Rimiskis</h3>
                @else
                <h3 style="padding-left:10px; margin-top:0px; font-size:17px">Pasirinktas mokytojas: Virgis Stakenas</h3>
                @endif
            @endforeach
            {{$registrations->links()}}
        @else
            <p>Nera jokiu rezervaciju...</p>
        @endif
    </div>
@endsection