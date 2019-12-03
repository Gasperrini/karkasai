@extends('layouts.app')

@section('content')
    <nav role="navigation">
        <ul>
            <li><a href="/GitarosMeistrai/public"><img class="img-home" src="../../../GitarosMeistrai/public/img/home.png"></a></li>
            <li><a href="/GitarosMeistrai/public/guitarists"><b>Gitaristai</b></a></li>
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

    <div id="content" style="text-align:center">
            <button><a href="admin"><b>Atgal į administracijos puslapį</b></a></button>
            <button><a href="questions"><b>Klientų klausimai</b></a></button> 
    </div>

    <div id ='content'>   
        <h1 style="text-align:center">Klientų registracijos</h1>
        @if(count($guitarists) > 0)
        {{$guitarists->links()}}
            @foreach($guitarists as $guitarist)
                <h3 style="padding-left:10px; padding-top:5px; border-top-style:solid; margin-top:0px; font-size:17px">Kliento vardas: {{$guitarist->vardas}}</h3>
                <h3 style="padding-left:10px; margin-top:0px; font-size:17px">Kliento pavardė: {{$guitarist->pavarde}}</h3>
                <h3 style="padding-left:10px; margin-top:0px; font-size:17px">Kliento el. paštas: {{$guitarist->el_pastas}}</h3>
                <h3 style="padding-left:10px; margin-top:0px; font-size:17px">Kliento tel. nr.: {{$guitarist->tel_nr}}</h3>
                @if($guitarist->mokytojas_id == 1)
                <h3 style="padding-left:10px; margin-top:0px; font-size:17px">Pasirinktas mokytojas: Petras Petrauskas</h3>
                @elseif($guitarist->mokytojas_id ==2)
                <h3 style="padding-left:10px; margin-top:0px; font-size:17px">Pasirinktas mokytojas: Andrius Rimiškis</h3>
                @else
                <h3 style="padding-left:10px; margin-top:0px; font-size:17px">Pasirinktas mokytojas: Virgis Stakėnas</h3>
                @endif
                <button><a href="/GitarosMeistrai/public/registrations/{{$guitarist->id}}/edit"><b>Redaguoti</b></a></button>
                <form method="POST" action="{{route('registrations.destroy', $registration->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><b>Trinti</b></button>
                </form>
            @endforeach
            {{$guitarists->links()}}
        @else
            <p>Nėra jokių gitaristų...</p>
        @endif
    </div>
@endsection
@section('scripts')
        <script>
                //Get the button
                var mybutton = document.getElementById("myBtn");

                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function() {scrollFunction()};

                function scrollFunction() {
                  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                  } else {
                    mybutton.style.display = "none";
                  }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                  document.body.scrollTop = 0;
                  document.documentElement.scrollTop = 0;
                }
                </script>
@endsection