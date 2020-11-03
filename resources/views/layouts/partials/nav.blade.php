
<nav class="navbar navbar-default fixed-top navbar-static-top">
     <div class="container">
          <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="">{{config('app.name') }}</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
                    <li class="{{ set_active_route('home') }}"><a href="{{ route('home') }}">Home</a></li>
                    <li class="{{ set_active_route('about') }}"><a href="{{ route('about') }}">About</a></li>
                    <li><a href="#">Artisans</a></li>
                    <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
                         <ul class="dropdown-menu">
                              <li><a href="https://laravel.com">Laravel.com</a></li>
                              <li><a href="https://laravel.io">Laravel.io</a></li>
                              <li><a href="https://laracasts.com">Laracasts</a></li>
                              <li><a href="https://larajobs.com">Larajobs</a></li>
                              <li><a href="https://laravel-news.com">Laravel News</a></li>
                              <li><a href="https://larachat.co">Larachat</a></li>
                              
                         </ul>
                    </li>
                    <li class="{{ set_active_route('contact_create')}}"><a href="{{ route('contact_create') }}">Contact</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                    @if (Route::has('login'))
                         @auth
                              <li><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline ">Dashboard</a></li>
                         @else
                              <li><a href="{{ route('login') }}">Login</a></li>
                              <li>
                                   @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                   @endif  
                              </li>
                                        
                              
                         @endif
                        
                    @endif 
               
               </ul>
          </div><!--/.nav-collapse -->
     </div>
</nav>
