<!DOCTYPE html>
<html>
<head>
    <title>Laravel Facebook</title>
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/facebook.css">
</head>
<body>

    <main>
        <div id="device-bar-1">
            <button></button>
            <button></button>
            <button></button>
        </div>
        <header>
            <div class="tb">
                <div class="td" id="logo">
                    <a href="/home"><i class="fab fa-facebook-square"></i></a>
                </div>
                <div class="td" id="search-form">
                    <form method="get" action="#">
                        <input type="text" placeholder="Search Facebook">
                        <button type="submit"><i class="material-icons">search</i></button>
                    </form>
                </div>
                <div class="td" id="f-name-l"><span>{{Auth::user()->name}}</span></div>
                <div class="td" id="i-links">
                    <div class="tb">
                        <div class="td" id="m-td">
                            <div class="tb">
                                <span class="td"><i class="material-icons">person_add</i></span>
                                <span class="td"><i class="material-icons">chat_bubble</i></span>
                                <span class="td m-active"><i class="material-icons">notifications</i></span>
                            </div>
                        </div>
                        <div class="td">
                         <img src="http://k007.kiwi6.com/hotlink/82vlhl43nx/fbme.jpg" width="300">
                            <a href="#"  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                             </a>

                            
                             

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                    <a href="/settings" class="dropdown-item">Settings</a>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>

         @yield('content')


    </main>


    <script type="text/javascript">
        var date = new Date();
        document.getElementById('curr-year').innerHTML = date.getFullYear();
    </script>
    <script src="/js/app.js"></script>
</body>
</html>