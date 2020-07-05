@extends('layouts.master')

@section('content')
<div class="add-form-container">
  <h2>Blog</h2>
  <form action="{{ route('store-blog') }}" method="post">
  @csrf
    <div class="text-form-group">
      <label>Title</label><input type="text" name="title" class="text-form"/>
    </div>
    <div class="text-form-group">
      <label>Description</label><input type="text" name="desc" class="text-form"/>
    </div>
    <div class="text-form-group">
      <label>Category</label>
      <select name="category_id" class="text-form">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="text-form-group">
      <label for="">Content</label>
      <textarea id="mytextarea" rows="20" name="content">Hello, World!</textarea>
    </div>
    <div class="text-form-group">
      <input type="submit" class="submit-btn" value="Post">
    </div>  
  </form>
</div>



<script src="https://cdn.tiny.cloud/1/jwliu5esinnitzil89ezfokz8f0rgvrqlgsmpyapqpi5yjuc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: '#mytextarea'
  });
</script>
@endsection
  