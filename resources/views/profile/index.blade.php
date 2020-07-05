<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Title</title>

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

    /* Blog detail container */

    .blog-detail-container{
      padding: 30px 10px;
      margin: 0px 200px;
    }

    .blog-detail-image{
      width: 80%;
      margin: 0 auto;
    }

    .blog-detail-image img{
      width: 100%;
    }

    .blog-detail-title{
      margin: 20px 0px;
    }

    .blog-detail-category,.blog-detail-author,.blog-detail-date{
      font-size: 0.8rem;
      color: #999;
    }

    .blog-detail-container p{
      padding: 10px;
      word-spacing: 2px;
      letter-spacing: 0.2px;
      line-height: 30px;
      margin: 10px 0px;
    }

    /* related blog style */
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

    /* small screen style */
    @media(max-width:760px){
      .blog-detail-container{
        width: 90%;
        margin:0 auto;
      }

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

  <div class="logo"><h1>Analy</h1></div>

  <div class="nav-container nav-menu">
      <a href="#" class="nav-link">Technology</a>
      <a href="#" class="nav-link">Business</a>
      <a href="#" class="nav-link">Education</a>
      <a href="#" class="nav-link">Automobile</a>
      <a href="#" class="nav-link">Personality</a>
  </div>

  
  
</body>
</html>