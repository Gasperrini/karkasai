@extends('layouts.app')

@section('content')
<nav role="navigation">
                <ul>
                    <li><a href="/GitarosMeistrai/public"><img class="img-home" src="../../public/img/home.png"></a></li>
                    <li><a href="/GitarosMeistrai/public/guitarists"><b>Gitaristai</b></a></li>
                    <li><a href="/GitarosMeistrai/public/registrations/create"><b>Registruokitės pamokoms</b></a></li>
                    <li style="float:right" class="active"><a href="create"><b>Klauskite!</b></a></li>
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
                        <li style="float:right"><a class="dropdown-item" href="/GitarosMeistrai/public/admin">Administracijos puslapis</a></li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
                </ul>
            </nav>
            @if (session('status'))
            <div>
                <h3 style="text-align: center">{{ session('status') }}</h3>
            </div>
        @endif
		
			<div id="content">
				<h2 id="pageTitle">Kilo neaiškumų? Klauskite!</h2>
			</div>
            
            <div>
            <form method='POST' action="{{route('questions.store')}}">
                <div class="container">
                    @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style = "color:red">{{ $error }}</li>
                        @endforeach
                    </ul>
            @endif
                  <p>Prašome užpildyti visus laukus.</p>
                  <hr>
                    @csrf
                  <label for="el_pastas"><b>El. paštas</b></label>
                  <input type="text" placeholder="Įveskite savo el. paštą" name="el_pastas" required>

                  <b>Jūsų klausimas</b>
                  <textarea class="textarea" cols="108,7" rows="5" placeholder="Rašykite savo klausimą" name="klausimas" required></textarea>

                  <button type="submit" class="registerbtn"><b>Siųsti klausimą</b></button>
                </div>
              </form> 
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
