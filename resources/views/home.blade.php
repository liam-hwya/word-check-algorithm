@extends('layouts.master')

@section('content')

@include('partials.alerts')

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


@endsection
