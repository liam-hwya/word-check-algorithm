<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\MetaphoneText;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon as SupportCarbon;

class BlogController extends Controller
{
    public function index(){
      
    }

    public function create(){

      $categories = Category::all();

      return view('blogs.add',[
        'categories' => $categories
      ]);
    }

    public function store(Request $request){
      
      $blog = new Blog();
      $blog->title = $request->title;
      $blog->desc = $request->desc;
      $blog->content = $request->content;
      $blog->category_id = $request->category_id;
      $blog->author = auth()->user()->name;
      $blog->save();

      $blog_id_obj = Blog::latest()->first();

      $blog_id = $blog_id_obj->id;

      $metaphone = new MetaphoneText();
      $metaphone->title = metaphone($request->title);
      $metaphone->desc = metaphone($request->desc);
      $metaphone->content = metaphone($request->content);
      $metaphone->blog_id = $blog_id;
      $metaphone->save();

      return redirect()->route('home')->with('success','You has uploaded a post');
    }

    public function show($id){
      
      $blog = Blog::find($id);
      $category = Category::where('name',$blog->category->name)->value('id');

      $relatedBlogs = Blog::where('category_id',4)->latest()->paginate(4);

      return view('blogs.view',[
        'blog' => $blog,
        'relatedBlogs' => $relatedBlogs
      ]);
    }

    public function showByCategory($category){
      
      $cat_id = Category::where('name',$category)->value('id');

      $blogs = Blog::where('category_id',$cat_id)->latest()->get();

      return view('blogs.categories.index',[
        'blogs' => $blogs,
        'category' => $category
      ]);
    }
    
    public function searchBlog(Request $request){

      
      
      // **************************Traditional way of searching

      // $keyword = $request->keyword;

      // $results = Blog::where('title','LIKE','%'.$keyword.'%')
      //   ->orWhere('desc','LIKE','%'.$keyword.'%')
      //   ->orWhere('content','LIKE','%'.$keyword.'%')
      //   ->get()
      //   ->toArray();

      // **********************************

      // **************************Way of using metaphone algorithm

      $keyword = metaphone($request->keyword);

      $resultsObjs = MetaphoneText::where('title','LIKE','%'.$keyword.'%')
        ->orWhere('desc','LIKE','%'.$keyword.'%')
        ->orWhere('content','LIKE','%'.$keyword.'%')
        ->get();

      $counter = 0;

      foreach($resultsObjs as $obj){
        $resultsArr[$counter]['id'] = $obj->getBlog->id;
        $resultsArr[$counter]['title'] = $obj->getBlog->title;
        $resultsArr[$counter]['desc'] = $obj->getBlog->desc;
        $resultsArr[$counter]['content'] = $obj->getBlog->id;
        $resultsArr[$counter]['author'] = $obj->getBlog->author;
        $resultsArr[$counter]['created_at'] = $obj->getBlog->created_at;
        $counter++;
      }

      // *******************************************

      return view('blogs.search',[
        // 'results' => $results,
        'results' => $resultsArr,
        // 'keyword' => $keyword,
        'keyword' => $request->keyword,
        'message' => "These are results from your search \" $keyword \""
      ]);

    }
    
    
    
    
}
