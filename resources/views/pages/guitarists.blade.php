@extends('layouts.app')

@section('content')
<nav role="navigation">
        <ul>
            <li><a href="/GitarosMeistrai/public"><img class="img-home" src="img/home.png"></a></li>
            <li><a href="news"><b>Naujienos</b></a></li>
            <li><a class="active" href="guitarists"><b>Gitaristai</b></a></li>
            <li><a href="form"><b>Registruokitės pamokoms</b></a></li>
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

    <div id="content">
        <h2 id="pageTitle">Mūsų gitaristai</h2>
        <h3 style="text-align: center">(Spauskite ant nuotraukos išsamiai informacijai)</h3>
        <p>

            <img id="img-guitarist1" src="img/gitaristas-1.jpg">
            <img id="img-guitarist2" src="img/gitaristas-2.jpg">
            <img id="img-guitarist3" src="img/gitaristas-3.jpg">
            <b style="padding-left: 60px">{{$mokytojai[0]->vardas}} {{$mokytojai[0]->pavarde}}</b>
            <b style="padding-left: 175px; padding-right: 100px">{{$mokytojai[1]->vardas}} {{$mokytojai[1]->pavarde}}</b>
            <b style="float:right; padding-right: 65px">{{$mokytojai[2]->vardas}} {{$mokytojai[2]->pavarde}}</b>
        </p>

        <h2>Išdrįskite pradėti groti gitara jau šiandien!</h2>
        <h1 style="text-align: center">Pasirinkite jūsų norus atitinkantį mokytoją</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
        </p>

        <div id="myModal1" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <h1 style="text-align: center">{{$mokytojai[0]->vardas}} {{$mokytojai[0]->pavarde}}</h1><br>
                <img class="img-guitarists" src="img/satriani-1.jpg">
                <img class="img-guitarists" src="img/satriani-2.jpg">
                <img class="img-guitarists" src="img/satriani-3.jpg">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
                </p>
            </div>

        </div>

        <div id="myModal2" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <h1 style="text-align: center">{{$mokytojai[1]->vardas}} {{$mokytojai[1]->pavarde}}</h1>
                <img class="img-guitarists" src="img/rimiskis-1.jpg">
                <img class="img-guitarists" src="img/rimiskis-2.jpg">
                <img class="img-guitarists" src="img/rimiskis-3.jpeg">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
                </p>
            </div>

        </div>

        <div id="myModal3" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <h1 style="text-align: center">{{$mokytojai[2]->vardas}} {{$mokytojai[2]->pavarde}}</h1>
                <img class="img-guitarists" src="img/stakenas-1.jpg">
                <img class="img-guitarists" src="img/stakenas-2.jpg">
                <img class="img-guitarists" src="img/stakenas-3.jpg">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
                </p>
            </div>

        </div>

    </div>
@endsection

@section('scripts')
<script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        var img1 = document.getElementById("img-guitarist1");
        var img2 = document.getElementById("img-guitarist2");
        var img3 = document.getElementById("img-guitarist3");
        var modal1 = document.getElementById("myModal1");
        var modal2 = document.getElementById("myModal2");
        var modal3 = document.getElementById("myModal3");
        var modal = document.getElementsByClassName("modal");
        // Get the <span> element that closes the modal
        var span1 = document.getElementsByClassName("close")[0];
        var span2 = document.getElementsByClassName("close")[1];
        var span3 = document.getElementsByClassName("close")[2];
        img1.onclick = function() {
            modal1.style.display = "block";
        }
        img2.onclick = function() {
            modal2.style.display = "block";
        }
        img3.onclick = function() {
            modal3.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span1.onclick = function() {
            modal1.style.display = "none";
        }
        span2.onclick = function() {
            modal2.style.display = "none";
        }
        span3.onclick = function() {
            modal3.style.display = "none";
        }


        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
            if (event.target == modal3) {
                modal3.style.display = "none";
            }
        }
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