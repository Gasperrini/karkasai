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

    <div id = 'content' style="text-align:center">
            <button><a href="admin"><b>Atgal į administracijos puslapį</b></a></button>
            <button><a href="registrations"><b>Klientų registracijos</b></a></button>
    </div>

    <div id ='content'>    
        <h1 style="text-align:center">Klientų klausimai</h1>
        @if(count($questions) > 0)
        {{$questions->links()}}
            @foreach($questions as $question)
                <h4 style="padding-left:10px; padding-top:5px; border-top-style:solid">Klausimą uždavė: {{$question->el_pastas}}</h4>
                <h3 style="padding-left:10px; margin-top:0px; font-size:17px">{{$question->klausimas}}</h3>
                <h5 style="padding-left:10px; margin-top:0px;">Klausimas užduotas: {{$question->created_at}}</h5>
            @endforeach
            {{$questions->links()}}
        @else
            <p>Nera jokių klausimų...</p>
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
@endguest
