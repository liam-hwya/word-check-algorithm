@extends('layouts.master')

@section('content')

<h2>{{ $category }} posts on Analy</h2>

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
    
@endsection