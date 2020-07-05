<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Analy Blog site</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat&display=swap" rel="stylesheet">

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body,p{
            font-family: 'Montserrat', sans-serif;
        }
        h1,h2{
            font-family: 'Anton', sans-serif;
            color: #0f0f0f;
        }
        a{
            text-decoration: none;
            color: #000;
        }

        /* Logo style */
        .logo{
            width: 100vw;
            padding: 30px 0px;
            text-align: center;
        }
        .logo h1{
            font-size: 3.4rem;
        }

        /* Nav style */
        .nav-container{
          display: flex;
          justify-content: center;
          border-top:1px solid #999;
          border-bottom:1px solid #999;
          margin-bottom: 50px;
        }
        .nav-link{
          padding: 20px 13px;
        }
        .nav-link:hover{
          background: #000;
          color: #fff;
        }

        .logout-item{
          padding: 20px 13px;
          background-color: #000;
          color: #fff;
          margin-left: 30%;
        }

        /* Search bar style */
        .search-bar{
          margin-bottom: 30px;
        }

        .search-container{
          display: flex;
          justify-content: center;

        }

        .search-text{
          background: none;
          border: none;
          border:1px solid #999;
          width: 300px;
          line-height: 30px;
          border-radius: 4px;
          padding: 5px 9px;
          
        }

        .search-btn{
          background: none;
          padding: 5px;
          border: none;
          cursor: pointer;
        }

        /* Blog styles */
        h2{
          font-size: 1.5rem;
          margin-top: 20px;
          margin-left: 10px;
        }

        .blog-container{
          display: flex;
          margin-top: 50px;
        }

        .blog{
          width: 24%;
          padding: 20px 5px;
        }

        .blog img{
            width: 100%;
        }

        .blog-category,.blog-author,.blog-date{
            font-size: 0.8rem;
            color: #999;
        }

        .blog-title{
          padding: 5px 0px;
        }

        .blog-author,.blog-date{
          margin-top: 30px;
        }

        /* registeration style */
        .registeration-section{
          margin-top: 30px;
          background: url('images/bg.jpg');
          padding: 30px 10px;
        }

        .sign-up{
          width: 70%;
          margin: 0 auto;
          text-align: center;
        }

        .sign-up p big{
          font-weight: bolder;
        }

        .sign-up a{
            text-decoration: underline;
            margin-top: 30px;
        }

        /* add blog btn style */

        .add-blog-btn{
        position: fixed;
        right: 40px;
        bottom: 40px;
        z-index: 9999;
        background-color: #000;
        color: #fff;
        cursor: pointer;
        padding: 10px 20px;
        border-radius: 6px;
        }

        /* big screen style */
        @media(min-width:1000px){
            h2{
                margin-left: 25px;
            }

            .blog{
                width: 23%
            }
        }

        /* small screen style */
        @media(max-width:760px){
            .blog-container{
                flex-direction: column;
                align-items: center;
            }

            .blog{
                width: 80%;
            }

            .logout-item{
              margin-left: 0px;
            }

            .nav-link,.logout-item{
              font-size: 10px;
            }
        }


    </style>
</head>
<body>

    @if (\Request::route()->getName() != 'create-blog')
        <a href="{{ route('create-blog') }}" class="add-blog-btn">+ Blog</a>
    @endif

    <div class="logo"><h1>Analy</h1></div>

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

    <h2>Latest on Analy</h2>

        <?php $counter=0; ?>
        @foreach ($blogs as $blog)
            @if ($counter == 0 || $counter%4 == 0)
                <div class="blog-container">
            @endif
                    <div class="blog">
                        <img src="https://picsum.photos/id/{{ $blog->id+1 }}/200/100" alt="blog-image">
                        <p class="blog-category">{{ $blog->category->name }}</p>
                        <a href="{{ route('show-blog',$blog->id) }}" class="blog-title-link"><h3 class="blog-title">{{ $blog->title }}</h3></a>
                        <p class="blog-description">{{ $blog->desc }}</p>
                        <span class="blog-author">{{ $blog->author}}</span>
                        <span class="blog-date"> {{ $blog->created_at->diffForHumans() }}</span>
                    </div>
            <?php $counter++; ?>
            @if($counter%4==0)
                </div>
            @endif    
        @endforeach

    <h2>Technology on Analy</h2>
    <?php $counter=0; ?>
        @foreach ($blogs as $blog)
            @if ($counter == 0 || $counter%4 == 0)
                <div class="blog-container">
            @endif
            @if ($blog->category->name === 'Technology' )
                <div class="blog">
                    <img src="https://picsum.photos/id/{{ $blog->id+1 }}/200/100" alt="blog-image">
                    <p class="blog-category">{{ $blog->category->name }}</p>
                    <a href="{{ route('show-blog',$blog->id) }}" class="blog-title-link"><h3 class="blog-title">{{ $blog->title }}</h3></a>
                    <p class="blog-description">{{ $blog->desc }}</p>
                    <span class="blog-author">{{ $blog->author}}</span>
                    <span class="blog-date"> {{ $blog->created_at->diffForHumans() }}</span>
                </div>
            <?php $counter++; ?>
            @endif
            @if($counter%4==0)
                </div>
            @endif    
        @endforeach
        @if($counter%4!=0)
            </div>
        @endif

        <h2>Personality on Analy</h2>
        <?php $counter=0; ?>
            @foreach ($blogs as $blog)
            @if ($blog->category->name === 'Personality' )
                @if ($counter == 0 || $counter%4 == 0)
                    <div class="blog-container">
                @endif
                <div class="blog">
                    <img src="https://picsum.photos/id/{{ $blog->id+1 }}/200/100" alt="blog-image">
                    <p class="blog-category">{{ $blog->category->name }}</p>
                    <a href="{{ route('show-blog',$blog->id) }}" class="blog-title-link"><h3 class="blog-title">{{ $blog->title }}</h3></a>
                    <p class="blog-description">{{ $blog->desc }}</p>
                    <span class="blog-author">{{ $blog->author}}</span>
                    <span class="blog-date"> {{ $blog->created_at->diffForHumans() }}</span>
                </div>
                <?php $counter++; ?>
                @endif
                @if($counter%4==0)
                    </div>
                @endif    
            @endforeach
            @if($counter%4!=0)
                </div>
            @endif

        <h2>Education on Analy</h2>
        <?php $counter=0; ?>
            @foreach ($blogs as $blog)
            @if ($blog->category->name === 'Education' )
                @if ($counter == 0 || $counter%4 == 0)
                    <div class="blog-container">
                @endif
                <div class="blog">
                    <img src="https://picsum.photos/id/{{ $blog->id+1 }}/200/100" alt="blog-image">
                    <p class="blog-category">{{ $blog->category->name }}</p>
                    <a href="{{ route('show-blog',$blog->id) }}" class="blog-title-link"><h3 class="blog-title">{{ $blog->title }}</h3></a>
                    <p class="blog-description">{{ $blog->desc }}</p>
                    <span class="blog-author">{{ $blog->author}}</span>
                    <span class="blog-date"> {{ $blog->created_at->diffForHumans() }}</span>
                </div>
                <?php $counter++; ?>
                @endif
                @if($counter%4==0)
                    </div>
                @endif    
            @endforeach
            @if($counter%4!=0)
                </div>
            @endif

        <h2>Business on Analy</h2>
        <?php $counter=0; ?>
            @foreach ($blogs as $blog)
            @if ($blog->category->name === 'Business' )
                @if ($counter == 0 || $counter%4 == 0)
                    <div class="blog-container">
                @endif
                <div class="blog">
                    <img src="https://picsum.photos/id/{{ $blog->id+1 }}/200/100" alt="blog-image">
                    <p class="blog-category">{{ $blog->category->name }}</p>
                    <a href="{{ route('show-blog',$blog->id) }}" class="blog-title-link"><h3 class="blog-title">{{ $blog->title }}</h3></a>
                    <p class="blog-description">{{ $blog->desc }}</p>
                    <span class="blog-author">{{ $blog->author}}</span>
                    <span class="blog-date"> {{ $blog->created_at->diffForHumans() }}</span>
                </div>
                <?php $counter++; ?>
                @endif
                @if($counter%4==0)
                    </div>
                @endif    
            @endforeach
            @if($counter%4!=0)
                </div>
            @endif

        <h2>Automobile on Analy</h2>
        <?php $counter=0; ?>
            @foreach ($blogs as $blog)
            @if ($blog->category->name === 'Automobile' )
                @if ($counter == 0 || $counter%4 == 0)
                    <div class="blog-container">
                @endif
                <div class="blog">
                    <img src="https://picsum.photos/id/{{ $blog->id+1 }}/200/100" alt="blog-image">
                    <p class="blog-category">{{ $blog->category->name }}</p>
                    <a href="{{ route('show-blog',$blog->id) }}" class="blog-title-link"><h3 class="blog-title">{{ $blog->title }}</h3></a>
                    <p class="blog-description">{{ $blog->desc }}</p>
                    <span class="blog-author">{{ $blog->author}}</span>
                    <span class="blog-date"> {{ $blog->created_at->diffForHumans() }}</span>
                </div>
                <?php $counter++; ?>
                @endif
                @if($counter%4==0)
                    </div>
                @endif    
            @endforeach
            @if($counter%4!=0)
                </div>
            @endif

            @guest
              <div class="registeration-section">
                <div class="sign-up">
                  <p>Make an account and share your blogs on <big>Analy</big>. Your knowledge tank is here....</p><br>
                  <a href="{{ url('/register') }}">Create an account</a>
                  </form>
                </div>
              </div>
            @endguest
</body>
</html>