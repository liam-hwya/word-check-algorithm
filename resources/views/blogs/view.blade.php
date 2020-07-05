@extends('layouts.master')

@section('content')
    
  <div class="blog-detail-container">
    <div class="blog-detail-image">
      <img src="https://picsum.photos/id/{{ $blog->id+1 }}/200/100" alt="blog image"/>
    </div>
    <h1 class="blog-detail-title">{{ $blog->title }}</h1>
    <span class="blog-detail-category">{{ $blog->category->name }}</span><br>
    <span class="blog-detail-author">{{ $blog->author }}</span>
    <span class="blog-detail-date">{{ $blog->created_at->diffForHumans() }}</span>
    
    {!! $blog->content !!}
    
  </div>

  <h2>Related Blogs on Analy</h2>
  
  <div class="blog-container">
    @foreach ($relatedBlogs as $blog)
        <div class="blog">
            <img src="https://picsum.photos/id/{{ $blog->id+1 }}/200/100" alt="blog-image">
            <p class="blog-category">{{ $blog->category->name }}</p>
            <a href="{{ route('show-blog',$blog->id) }}" class="blog-title-link"><h3 class="blog-title">{{ $blog->title }}</h3></a>
            <p class="blog-description">{{ $blog->desc }}</p>
            <span class="blog-author">{{ $blog->author}}</span>
            <span class="blog-date"> {{ $blog->created_at->diffForHumans() }}</span>
        </div>  
    @endforeach
  </div>  

  
@endsection
  
</body>
</html>