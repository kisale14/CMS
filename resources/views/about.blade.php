<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
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

    .containera{
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      padding: 0 20px;
    }

    .card-container{
      display: flex;
      width: 600px;
      height: auto;
      background: #fff;
      border-radius: 2px;
      box-shadow: 1px 1px 40px 2px rgba(0, 0, 0, 2)
    }

    .header{
      border-right: 1px solid #ddd;
    }

    .descripcion{
      background: #fbfbfb;
    }

    .header, .descripcion{
      padding: 20px;
      text-align: center;
    }

    .header a{
      position: relative;
      display: block;
    }

    .header img{
      border-radius: 50%;
      box-shadow: 0 0 0 8px rgba(0, 0, 0, .06);
      margin: 20px 30px;
      transition: .25;
    }

    .header a:hover img {
      box-shadow: 0 0 0 12px rgba(0, 0, 0, .1);
    }

    .header h2{
      color: #f0522a;
    }

    .header h4{
      margin-bottom: 20px;
    }

    .descripcion{
      position: relative;
    }

    .descripcion p{
      margin: 20px 30px;
    }

    .descripcion .social{
      margin-top: 25px;
    }

    .descripcion .social a{
      display: inline-block;
      padding: 0 15px;
      color: #f0522a;
    }

    @media (max-width:640px){
      .card-container{
        display: block;
        width: 450;
      }

      .header{
        padding: 20px 20px 5px 20px;
        border: none;
      }

      .descripcion{
        padding: 5px 20px 20px 20px;
        background: transparent;
      }

      .header h4{
        margin: 0;
      }
    }
  </style>  

    @include('layouts.nav')
    <h1 class="text-center a">About Us</h1>   

    <div class="container mt-3">
      <a class="btn btn-primary justify-content-end mb-5" href="{{route('crud.index')}}">Administrar</a>
    </div>

    {{-- <div class="container  d-flex justify-content-between">
      @foreach ($datos as $dato)
    <div class="card" style="width: 18rem;">
        <img src="https://cdn2.iconfinder.com/data/icons/instagram-outline/19/11-512.png" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">{{$dato->name}}</h5>
          <p class="card-text">{{$dato->apellido}}</p>
          <p class="card-text">{{$dato->cargo}}.</p>
        </div>
      </div>
    @endforeach
    </div> --}}


    @foreach ($datos as $dato)
    <div class="containera">
      <div class="card-container">
        <div class="header">
          <a href="#">
            <img src="https://cdn2.iconfinder.com/data/icons/instagram-outline/19/11-512.png" alt="">
          </a>
          <h2>{{$dato->name}}</h2>
          <h4>{{$dato->cargo}}</h4>
          <div class="descripcion">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam officia quisquam rerum quod cupiditate voluptate eveniet voluptatem laborum distinctio. Ducimus, distinctio! Necessitatibus, id.</p>
            <div class="social">
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-instagram"></i></a>
              <a href=""><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>