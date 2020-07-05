<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Analy Blog site</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @if (\Request::route()->getName() != 'create-blog')
        <a href="{{ route('create-blog') }}" class="add-blog-btn">+ Blog</a>
    @endif
    

    <div class="logo"><h1><a href="{{ url('/') }}">Analy</a></h1></div>

    <div class="nav-container nav-menu">
        <a href="{{ route('show-cat-blog',"Technology") }}" class="nav-link">Technology</a>
        <a href="{{ route('show-cat-blog',"Business") }}" class="nav-link">Business</a>
        <a href="{{ route('show-cat-blog',"Education") }}" class="nav-link">Education</a>
        <a href="{{ route('show-cat-blog',"Automobile") }}" class="nav-link">Automobile</a>
        <a href="{{ route('show-cat-blog',"Personality") }}" class="nav-link">Personality</a>
        
        @guest
        <a href="{{ url('/register') }}" class="logout-item">Login</a>
        @else
        <a class="logout-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endguest
        
    </div>

    <div class="search-bar">
      <form action="{{ route('search-blog') }}" class="search-container" method="POST">
        @csrf
        <input type="text" name="keyword" class="search-text"/>
        <button type="submit" class="search-btn">Search</button>
      </form>
    </div>

    @yield('content')
    
</body>
</html>