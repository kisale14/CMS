<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
</head>
<body>

  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* body{
      display: flex;
      flex-wrap: wrap;
    } */

    .card{
      position: relative;
      width: 300px;
      height: 305px;
      margin: 20px; 
      display: flex;
      flex-wrap: wrap; 
    }

    .card .face{
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      border-radius: 10px;
      overflow: hidden;
      transition: .5s; 
    }

    .card .front{
      transform: perspective(600px) rotateY(0deg);
      box-shadow: 0 5px 10px #d00;
    }

    .card .front img{
      position: absolute;
      width: 100%;
      height: 100;
      object-fit: cover;
    }

    .card .front h3{
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 45px;
      line-height: 45px;
      color: #fff;
      background: rgba(0, 0, 0, 4);
      text-align: center;
    }

    .card .back{
      transform: perspective(600px) rotateY(180deg);
      background: rgba(3, 35, 54);
      padding: 15px;
      color: #f3f3f3;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      text-align: center;
      box-shadow: 0 5px 10px #000;
    }

    .card .back .link{
      border-top: solid 1px #f3f3f3;
      height: 50px;
      line-height: 50px;
    }

    .card .back .link a{
      color: #f3f3f3;
    }

    .card .back h3{
      font-size: 30px;
      margin-top: 20px;
      letter-spacing: 2px;
    }

    .card .back p{
      letter-spacing: 1px;
    }

    .card:hover .front {
      transform: perspective(600px) rotateY(180deg)
    }

    .card:hover .back {
      transform: perspective(600px) rotateY(360deg)
    }
  </style>



    @include('layouts.nav')
    <h1 class="text-center">News</h1>    
    
    <div class="container">
        <a class="btn btn-primary justify-content-end mb-5" href="{{route('new.index')}}">Administrar</a>
    </div>

    
        {{-- @foreach ($datos as $dato)
        <div class="container">
        <div class="row">
            <div class="col-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$dato->name}}</h5>
                  <p class="card-text">{{$dato->body}}</p>
                  <a href="#" class="btn btn-primary">{{$dato->date}}</a>
                  <p class="card-text">{{$dato->category}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach  --}}

        @foreach ($datos as $dato)
        <div class="card d-flex">
          <div class="face front">
              <img src="https://guardianlife.com.bd/static/media/claim-banner.7cba97d4118b599f41d1.jpg" alt="">
              <h3>{{$dato->name}}</h3>
          </div>

          <div class="face back">
              <h3>{{$dato->date}}</h3>
              <p>{{$dato->body}}</p>
              <div class="link">
                <a href="#">{{$dato->category}}</a>
              </div>
          </div>
        </div>
        @endforeach

        
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>