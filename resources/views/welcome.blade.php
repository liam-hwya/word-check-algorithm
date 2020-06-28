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
          justify-content: space-around;
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
        }


    </style>
</head>
<body>

    <div class="wrap">
        <div class="search">
           <input type="text" class="searchTerm" placeholder="What are you looking for?">
           <button type="submit" class="searchButton">
             <i class="fa fa-search"></i>
          </button>
        </div>
     </div>

    <div class="logo"><h1>Analy</h1></div>

    <div class="nav-container nav-menu">
        <a href="#" class="nav-link">Technology</a>
        <a href="#" class="nav-link">Business</a>
        <a href="#" class="nav-link">Education</a>
        <a href="#" class="nav-link">Automobile</a>
        <a href="#" class="nav-link">Personality</a>
    </div>

    <div class="search-bar">
      <form action="" class="search-container">
        <input type="text" name="" class="search-text"/>
        <button type="submit" class="search-btn">Search</button>
      </form>
    </div>

    <h2>Popular on Analy</h2>
    <div class="blog-container">
        <div class="blog">
            <img src="{{ asset('images/blog.jpg') }}" alt="blog-image">
            <p class="blog-category">Technology</p>
            <a href="#" class="blog-title-link"><h3 class="blog-title">Data structures in javascript</h3></a>
            <p class="blog-description">For frontend software engineers</p>
            <span class="blog-author">Liam Asaurus</span>
            <span class="blog-date">Nov16,2020</span>
        </div>
        <div class="blog">
            <img src="{{ asset('images/blog.jpg') }}" alt="blog-image">
            <p class="blog-category">Technology</p>
            <a href="#" class="blog-title-link"><h3 class="blog-title">Data structures in javascript</h3></a>
            <p class="blog-description">For frontend software engineers</p>
            <span class="blog-author">Liam Asaurus</span>
            <span class="blog-date">Nov16,2020</span>
        </div>
        <div class="blog">
            <img src="{{ asset('images/blog.jpg') }}" alt="blog-image">
            <p class="blog-category">Technology</p>
            <a href="#" class="blog-title-link"><h3 class="blog-title">Data structures in javascript</h3></a>
            <p class="blog-description">For frontend software engineers</p>
            <span class="blog-author">Liam Asaurus</span>
            <span class="blog-date">Nov16,2020</span>
        </div>
        <div class="blog">
            <img src="{{ asset('images/blog.jpg') }}" alt="blog-image">
            <p class="blog-category">Technology</p>
            <a href="#" class="blog-title-link"><h3 class="blog-title">Data structures in javascript</h3></a>
            <p class="blog-description">For frontend software engineers</p>
            <span class="blog-author">Liam Asaurus</span>
            <span class="blog-date">Nov16,2020</span>
        </div>
    </div>

    <h2>Latest on Analy</h2>
    <div class="blog-container">
        <div class="blog">
            <img src="{{ asset('images/blog.jpg') }}" alt="blog-image">
            <p class="blog-category">Technology</p>
            <a href="#" class="blog-title-link"><h3 class="blog-title">Data structures in javascript</h3></a>
            <p class="blog-description">For frontend software engineers</p>
            <span class="blog-author">Liam Asaurus</span>
            <span class="blog-date">Nov16,2020</span>
        </div>
        <div class="blog">
            <img src="{{ asset('images/blog.jpg') }}" alt="blog-image">
            <p class="blog-category">Technology</p>
            <a href="#" class="blog-title-link"><h3 class="blog-title">Data structures in javascript</h3></a>
            <p class="blog-description">For frontend software engineers</p>
            <span class="blog-author">Liam Asaurus</span>
            <span class="blog-date">Nov16,2020</span>
        </div>
        <div class="blog">
            <img src="{{ asset('images/blog.jpg') }}" alt="blog-image">
            <p class="blog-category">Technology</p>
            <a href="#" class="blog-title-link"><h3 class="blog-title">Data structures in javascript</h3></a>
            <p class="blog-description">For frontend software engineers</p>
            <span class="blog-author">Liam Asaurus</span>
            <span class="blog-date">Nov16,2020</span>
        </div>
        <div class="blog">
            <img src="{{ asset('images/blog.jpg') }}" alt="blog-image">
            <p class="blog-category">Technology</p>
            <a href="#" class="blog-title-link"><h3 class="blog-title">Data structures in javascript</h3></a>
            <p class="blog-description">For frontend software engineers</p>
            <span class="blog-author">Liam Asaurus</span>
            <span class="blog-date">Nov16,2020</span>
        </div>
    </div>

    <div class="registeration-section">
      <div class="sign-up">
        <p>Make an account and share your blogs on <big>Analy</big>. Your knowledge tank is here....</p><br>
        <a href="#">Create an account</a>
        </form>
      </div>
    </div>
    
</body>
</html>