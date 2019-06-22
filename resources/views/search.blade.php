<!DOCTYPE html>
<html>
<head>
    <title>Laravel Facebook</title>
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/facebook.css">
    <link rel="stylesheet" type="text/css" href="/css/search.css">
    <!-- border-bottom: 3px solid #4267b2 !important; -->

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
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                </div>
                <div class="td" id="search-form">
                    <form method="post" action="/search">
                        {{ csrf_field() }}
                        <input type="text" name="q" 
                               placeholder="Search Facebook"
                               value="{{ isset($query) ? $query : '' }}">
                        <button type="submit"><i class="material-icons">search</i></button>
                    </form>
                </div>
                <div class="td" id="f-name-l"><span>Himalaya's facebook</span></div>
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
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="search-nav">
            <div id="search-navigation-tabs">
                <section class="search-tab">                    
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" 
                               id="nav-all-tab" 
                               data-toggle="tab" 
                               href="#nav-all" 
                               role="tab" 
                               aria-controls="nav-home" 
                               aria-selected="true">All</a>
                            <a class="nav-item nav-link" 
                               id="nav-post-tab" 
                               data-toggle="tab" 
                               href="#nav-post" 
                               role="tab" 
                               aria-controls="nav-profile" 
                               aria-selected="false">Post</a>

                            <a class="nav-item nav-link" 
                               id="nav-people-tab" 
                               data-toggle="tab" 
                               href="#nav-people" 
                               role="tab" 
                               aria-controls="nav-contact" 
                               aria-selected="false">People</a>
                        </div>
                    </nav>
                </section>
            </div>
        </div>
         <div id="main-content" style="padding-top: 0px;">
            <div class="tb">
                <div class="td" id="filter">  
                </div>
                <div class="td" id="m-col">
                    <div class="tab-content" id="nav-tabContent">
                        <!-- All -->
                        <div class="tab-pane fade show active" 
                             id="nav-all" 
                             role="tabpanel" 
                             aria-labelledby="nav-all-tab">
                             @if(count($users))
                                <div class="l-cnt m-mrg">
                                    <div class="cnt-label m-mrg">
                                        <span>People</span>
                                        <div class="lb-action" id="nav-tab" role="tablist">
                                            <a  href="#nav-people" 
                                                role="tab" 
                                                class="outsidelink"
                                                aria-controls="nav-contact" 
                                                aria-selected="false">See All
                                            </a>
                                        </div>
                                    </div>
                                    <div id="i-box">
                                        @foreach($users as $key => $user)
                                            @if($key == 3)
                                               @break
                                            @endif
                                            <div class="tb m-mrg" id="search-result">
                                                <div class="td" id="p-c-i" 
                                                     style="width: 102px">
                                                    <img src="http://k007.kiwi6.com/hotlink/82vlhl43nx/fbme.jpg" alt="Profile pic">
                                                </div>
                                                <div class="rslt-inf">
                                                    <div class="mrg-b" id="rslt-name">  
                                                        <a href="#">
                                                            {{$user->name}}
                                                        </a>
                                                    </div>
                                                    <div class="mrg-b" id="rslt-place">
                                                        <span>Pagsabungan Mandaue City</span>
                                                    </div>
                                                    <div  class="mrg-b" id="rslt-schl">
                                                        <p>
                                                            Cebu Technological University-Main 
                                                            <br>
                                                            Campus(CTU-MC)
                                                        </p>
                                                    </div>
                                                    <div id="rslt-liv" class="mrg-b">
                                                        Lives in Cebu City
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                              @endif
                               @if(count($posts))
                                 <div class="l-cnt m-mrg">
                                    <div class="cnt-label m-mrg">
                                        <div class="lb-action" id="nav-tab" role="tablist">
                                            <a  href="#nav-post" 
                                                role="tab" 
                                                class="outsidelink"
                                                aria-controls="nav-contact" 
                                                aria-selected="false">See All
                                            </a>
                                        </div>
                                    </div>
                                    <div id="i-box">
                                        @foreach($posts as $key => $post)

                                        @if($key == 3)
                                          @break
                                        @endif
                                        <div id="search-result">

                                            <div class="tb mrg-b">
                                                <a href="#" class="td p-p-pic">
                                                    <img src="http://k007.kiwi6.com/hotlink/82vlhl43nx/fbme.jpg" alt="Rajeev's profile pic">
                                                </a>
                                                <div class="td p-r-hdr">
                                                    <div class="p-u-info">
                                                        <a href="#">
                                                            {{$post->user->name}}
                                                        </a>
                                                    </div>
                                                    <div class="p-dt">
                                                        <i class="material-icons">calendar_today</i>
                                                        <span>
                                                            {{$post->created_at->format('F j, Y')}}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="post-cnt" class="mrg-b" style="width: 88%;">
                                                {{$post->content}}
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                  </div>
                                 @endif
                                 @if(!count($posts) && !count($users))
                                  <div class="l-cnt m-mrg">
                                    <div id="i-box">
                                        <div class="tb">
                                            <div class="td" id="p-c-i" 
                                                     style="width: 102px">
                                                    <img src="https://icons-for-free.com//free-icons/png/512/825451.png" alt="Profile pic">
                                                </div>
                                            <div class="rslt-inf">
                                                <p>
                                                    We couldn't find anything for <b>{{$query}}</b>
                                                </p>
                                                <p>
                                                    Looking for people or posts? Try entering a name, location, or different words.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                 @endif
                        </div>
                        <!-- Post -->
                        <div class="tab-pane fade" 
                             id="nav-post" 
                             role="tabpanel" 
                             aria-labelledby="nav-post-tab">
                            <div class="l-cnt m-mrg">
                                @if(count($posts))
                                    <div id="i-box">
                                        @foreach($posts as $post)
                                        <div id="search-result">
                                            <div class="tb mrg-b">
                                                <a href="#" class="td p-p-pic">
                                                    <img src="http://k007.kiwi6.com/hotlink/82vlhl43nx/fbme.jpg" alt="Rajeev's profile pic">
                                                </a>
                                                <div class="td p-r-hdr">
                                                    <div class="p-u-info">
                                                        <a href="#">
                                                            {{$post->user->name}}
                                                        </a>
                                                    </div>
                                                    <div class="p-dt">
                                                        <i class="material-icons">calendar_today</i>
                                                        <span>
                                                            {{$post->created_at->format('F j, Y')}}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="post-cnt" class="mrg-b" style="width: 88%;">
                                                {{$post->content}}
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                 @else
                                    <div id="i-box">
                                        <div class="tb">
                                            <div class="td" id="p-c-i" 
                                                     style="width: 102px">
                                                    <img src="https://icons-for-free.com//free-icons/png/512/825451.png" alt="Profile pic">
                                                </div>
                                            <div class="rslt-inf">
                                                <p>
                                                    We couldn't find anything for <b>{{$query}}</b>
                                                </p>
                                                <p>
                                                    Looking for people or posts? Try entering a name, location, or different words.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- People -->
                        <div class="tab-pane fade" 
                             id="nav-people" 
                             role="tabpanel" 
                             aria-labelledby="nav-people-tab">
                            <div class="l-cnt m-mrg">
                                @if(count($users))
                                    <div class="cnt-label m-mrg">
                                        <span>People</span>
                                    </div>
                                    <div id="i-box">
                                        @foreach($users as $user)
                                            <div class="tb m-mrg" id="search-result">
                                                <div class="td" id="p-c-i" 
                                                     style="width: 102px">
                                                    <img src="http://k007.kiwi6.com/hotlink/82vlhl43nx/fbme.jpg" alt="Profile pic">
                                                </div>
                                                <div class="rslt-inf">
                                                    <div class="mrg-b" id="rslt-name">  
                                                        <a href="#">
                                                            {{$user->name}}
                                                        </a>
                                                    </div>
                                                    <div class="mrg-b" id="rslt-place">
                                                        <span>Pagsabungan Mandaue City</span>
                                                    </div>
                                                    <div  class="mrg-b" id="rslt-schl">
                                                        <p>
                                                            Cebu Technological University-Main 
                                                            <br>
                                                            Campus(CTU-MC)
                                                        </p>
                                                    </div>
                                                    <div id="rslt-liv" class="mrg-b">
                                                        Lives in Cebu City
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div id="i-box">
                                        <div class="tb">
                                            <div class="td" id="p-c-i" 
                                                     style="width: 102px">
                                                    <img src="https://icons-for-free.com//free-icons/png/512/825451.png" alt="Profile pic">
                                                </div>
                                            <div class="rslt-inf">
                                                <p>
                                                    We couldn't find anything for <b>{{$query}}</b>
                                                </p>
                                                <p>
                                                    Looking for people or posts? Try entering a name, location, or different words.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="td" id="l-col">  
                </div>
            </div>
        </div>
        <div id="device-bar-2"><i class="fab fa-apple"></i></div>
    </main>
    <script src="/js/app.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".outsidelink").click(function () {
                $('.nav a[href="' +  $(this).attr("href") + '"]').tab('show');          
            });
        });
    </script>
</body>
</html> 