@extends('layouts.app')


@section('content')
<nav role="navigation">
        <ul>
            <li><a class="active" href="/GitarosMeistrai/public"><img class="img-home" src="img/home.png"></a></li>
            <li><a href="news"><b>Naujienos</b></a></li>
            <li><a href="guitarists"><b>Gitaristai</b></a></li>
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

    <div id	="content"></div>
    <div id="content">
        <h2 id="pageTitle">Išmokite groti jau šiandien!</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate mi sit amet mauris commodo. Quisque egestas diam in arcu cursus euismod quis viverra. Vestibulum sed arcu non odio euismod. Euismod elementum nisi quis eleifend. Convallis tellus id interdum velit. Lorem donec massa sapien faucibus. Congue quisque egestas diam in. Eget dolor morbi non arcu risus quis. Sagittis nisl rhoncus mattis rhoncus urna. Aliquam nulla facilisi cras fermentum odio eu feugiat pretium nibh. Pharetra sit amet aliquam id diam maecenas ultricies. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt.

            Eget velit aliquet sagittis id consectetur purus ut faucibus pulvinar. Amet tellus cras adipiscing enim eu turpis egestas. Sagittis eu volutpat odio facilisis mauris sit amet massa. Enim nec dui nunc mattis. Enim tortor at auctor urna nunc id cursus. Lacus sed viverra tellus in hac habitasse platea dictumst vestibulum. In egestas erat imperdiet sed euismod. Aliquam purus sit amet luctus venenatis. Id interdum velit laoreet id donec ultrices tincidunt arcu. Vel facilisis volutpat est velit egestas dui id ornare. Sem integer vitae justo eget magna. Morbi quis commodo odio aenean sed adipiscing diam. Ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Aliquet risus feugiat in ante metus dictum. Morbi quis commodo odio aenean sed adipiscing. Scelerisque in dictum non consectetur a erat nam. Tellus at urna condimentum mattis pellentesque id nibh tortor. Vitae justo eget magna fermentum iaculis eu. Malesuada fames ac turpis egestas integer eget.

            Elit at imperdiet dui accumsan sit amet nulla. Facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Morbi tristique senectus et netus et malesuada fames ac. Quam elementum pulvinar etiam non quam. Purus sit amet luctus venenatis lectus magna. Id aliquet lectus proin nibh nisl. Velit laoreet id donec ultrices tincidunt arcu non sodales. Ac odio tempor orci dapibus. Sem fringilla ut morbi tincidunt augue interdum velit euismod. Dictum at tempor commodo ullamcorper a lacus vestibulum. Sed viverra tellus in hac habitasse platea dictumst vestibulum rhoncus. Dictum fusce ut placerat orci nulla pellentesque dignissim enim sit. Morbi tristique senectus et netus et. Duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Id neque aliquam vestibulum morbi blandit cursus risus at ultrices. Viverra vitae congue eu consequat ac. Malesuada fames ac turpis egestas maecenas pharetra convallis posuere morbi. Massa tempor nec feugiat nisl. Quis hendrerit dolor magna eget est lorem ipsum. Lectus sit amet est placerat in.

            Cursus metus aliquam eleifend mi. Dui id ornare arcu odio ut sem. Cras semper auctor neque vitae tempus quam. Rhoncus dolor purus non enim praesent elementum. Mattis molestie a iaculis at erat pellentesque adipiscing commodo elit. Eget velit aliquet sagittis id consectetur. Mauris augue neque gravida in fermentum et. Feugiat scelerisque varius morbi enim nunc faucibus a. Dolor purus non enim praesent elementum facilisis. Neque egestas congue quisque egestas diam in arcu.

            Dui ut ornare lectus sit. Vitae congue eu consequat ac felis donec et odio. Diam donec adipiscing tristique risus nec feugiat in fermentum posuere. Sit amet nisl suscipit adipiscing. In hac habitasse platea dictumst vestibulum rhoncus est. Donec adipiscing tristique risus nec feugiat in fermentum posuere. Ultrices neque ornare aenean euismod elementum nisi. Sit amet mauris commodo quis imperdiet. Congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et. Praesent semper feugiat nibh sed pulvinar. Sociis natoque penatibus et magnis dis parturient montes. Facilisis gravida neque convallis a.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate mi sit amet mauris commodo. Quisque egestas diam in arcu cursus euismod quis viverra. Vestibulum sed arcu non odio euismod. Euismod elementum nisi quis eleifend. Convallis tellus id interdum velit. Lorem donec massa sapien faucibus. Congue quisque egestas diam in. Eget dolor morbi non arcu risus quis. Sagittis nisl rhoncus mattis rhoncus urna. Aliquam nulla facilisi cras fermentum odio eu feugiat pretium nibh. Pharetra sit amet aliquam id diam maecenas ultricies. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt.

            Eget velit aliquet sagittis id consectetur purus ut faucibus pulvinar. Amet tellus cras adipiscing enim eu turpis egestas. Sagittis eu volutpat odio facilisis mauris sit amet massa. Enim nec dui nunc mattis. Enim tortor at auctor urna nunc id cursus. Lacus sed viverra tellus in hac habitasse platea dictumst vestibulum. In egestas erat imperdiet sed euismod. Aliquam purus sit amet luctus venenatis. Id interdum velit laoreet id donec ultrices tincidunt arcu. Vel facilisis volutpat est velit egestas dui id ornare. Sem integer vitae justo eget magna. Morbi quis commodo odio aenean sed adipiscing diam. Ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Aliquet risus feugiat in ante metus dictum. Morbi quis commodo odio aenean sed adipiscing. Scelerisque in dictum non consectetur a erat nam. Tellus at urna condimentum mattis pellentesque id nibh tortor. Vitae justo eget magna fermentum iaculis eu. Malesuada fames ac turpis egestas integer eget.

            Elit at imperdiet dui accumsan sit amet nulla. Facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Morbi tristique senectus et netus et malesuada fames ac. Quam elementum pulvinar etiam non quam. Purus sit amet luctus venenatis lectus magna. Id aliquet lectus proin nibh nisl. Velit laoreet id donec ultrices tincidunt arcu non sodales. Ac odio tempor orci dapibus. Sem fringilla ut morbi tincidunt augue interdum velit euismod. Dictum at tempor commodo ullamcorper a lacus vestibulum. Sed viverra tellus in hac habitasse platea dictumst vestibulum rhoncus. Dictum fusce ut placerat orci nulla pellentesque dignissim enim sit. Morbi tristique senectus et netus et. Duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Id neque aliquam vestibulum morbi blandit cursus risus at ultrices. Viverra vitae congue eu consequat ac. Malesuada fames ac turpis egestas maecenas pharetra convallis posuere morbi. Massa tempor nec feugiat nisl. Quis hendrerit dolor magna eget est lorem ipsum. Lectus sit amet est placerat in.

            Cursus metus aliquam eleifend mi. Dui id ornare arcu odio ut sem. Cras semper auctor neque vitae tempus quam. Rhoncus dolor purus non enim praesent elementum. Mattis molestie a iaculis at erat pellentesque adipiscing commodo elit. Eget velit aliquet sagittis id consectetur. Mauris augue neque gravida in fermentum et. Feugiat scelerisque varius morbi enim nunc faucibus a. Dolor purus non enim praesent elementum facilisis. Neque egestas congue quisque egestas diam in arcu.

            Dui ut ornare lectus sit. Vitae congue eu consequat ac felis donec et odio. Diam donec adipiscing tristique risus nec feugiat in fermentum posuere. Sit amet nisl suscipit adipiscing. In hac habitasse platea dictumst vestibulum rhoncus est. Donec adipiscing tristique risus nec feugiat in fermentum posuere. Ultrices neque ornare aenean euismod elementum nisi. Sit amet mauris commodo quis imperdiet. Congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et. Praesent semper feugiat nibh sed pulvinar. Sociis natoque penatibus et magnis dis parturient montes. Facilisis gravida neque convallis a.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate mi sit amet mauris commodo. Quisque egestas diam in arcu cursus euismod quis viverra. Vestibulum sed arcu non odio euismod. Euismod elementum nisi quis eleifend. Convallis tellus id interdum velit. Lorem donec massa sapien faucibus. Congue quisque egestas diam in. Eget dolor morbi non arcu risus quis. Sagittis nisl rhoncus mattis rhoncus urna. Aliquam nulla facilisi cras fermentum odio eu feugiat pretium nibh. Pharetra sit amet aliquam id diam maecenas ultricies. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt.

            Eget velit aliquet sagittis id consectetur purus ut faucibus pulvinar. Amet tellus cras adipiscing enim eu turpis egestas. Sagittis eu volutpat odio facilisis mauris sit amet massa. Enim nec dui nunc mattis. Enim tortor at auctor urna nunc id cursus. Lacus sed viverra tellus in hac habitasse platea dictumst vestibulum. In egestas erat imperdiet sed euismod. Aliquam purus sit amet luctus venenatis. Id interdum velit laoreet id donec ultrices tincidunt arcu. Vel facilisis volutpat est velit egestas dui id ornare. Sem integer vitae justo eget magna. Morbi quis commodo odio aenean sed adipiscing diam. Ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Aliquet risus feugiat in ante metus dictum. Morbi quis commodo odio aenean sed adipiscing. Scelerisque in dictum non consectetur a erat nam. Tellus at urna condimentum mattis pellentesque id nibh tortor. Vitae justo eget magna fermentum iaculis eu. Malesuada fames ac turpis egestas integer eget.

            Elit at imperdiet dui accumsan sit amet nulla. Facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Morbi tristique senectus et netus et malesuada fames ac. Quam elementum pulvinar etiam non quam. Purus sit amet luctus venenatis lectus magna. Id aliquet lectus proin nibh nisl. Velit laoreet id donec ultrices tincidunt arcu non sodales. Ac odio tempor orci dapibus. Sem fringilla ut morbi tincidunt augue interdum velit euismod. Dictum at tempor commodo ullamcorper a lacus vestibulum. Sed viverra tellus in hac habitasse platea dictumst vestibulum rhoncus. Dictum fusce ut placerat orci nulla pellentesque dignissim enim sit. Morbi tristique senectus et netus et. Duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Id neque aliquam vestibulum morbi blandit cursus risus at ultrices. Viverra vitae congue eu consequat ac. Malesuada fames ac turpis egestas maecenas pharetra convallis posuere morbi. Massa tempor nec feugiat nisl. Quis hendrerit dolor magna eget est lorem ipsum. Lectus sit amet est placerat in.

        </p>
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

</div>
@endsection
