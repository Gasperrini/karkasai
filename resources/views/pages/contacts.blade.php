@extends('layouts.app')

@section('content')
<nav role="navigation">
                <ul>
                    <li><a href="/GitarosMeistrai/public"><img class="img-home" src="img/home.png"></a></li>
                    <li><a href="news"><b>Naujienos</b></a></li>
                    <li><a href="guitarists"><b>Gitaristai</b></a></li>
                    <li><a href="form"><b>Registruokitės pamokoms</b></a></li>
                    <li style="float:right" class="active"><a href="contacts"><b>Klauskite!</b></a></li>
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

		
			<div id="content">
				<h2 id="pageTitle">Kilo neaiškumų? Klauskite!</h2>
			</div>
            
            <div>
            <form method='post' action="{{url('Question')}}">
                <div class="container">
                  <p>Prašome užpildyti visus laukus.</p>
                  <hr>

                  <label for="email"><b>El. paštas</b></label>
                  <input type="text" placeholder="Įveskite savo el. paštą" name="email" required>

                  <b>Jūsų klausimas</b>
                  <textarea class="textarea" cols="108,7" rows="5" placeholder="Rašykite savo klausimą"></textarea>

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
