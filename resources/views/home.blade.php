<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
</head>
<body>

    <style>
        *{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: sans-serif;
}
.banner{
	width: 100%;
	height: 600px;
	animation: banner 10s infinite linear alternate;
	background-size: 100% 100%;
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
}
@keyframes banner{
	0%, 20%{
		background-image: url("https://fondosmil.com/fondo/12406.jpg");
	}
	25%, 45%{
		background-image: url("https://www.todopaisajes.com/Minis/ciudad-de-noche.jpg");
	}
	50%, 70%{
		background-image: url("https://i.pinimg.com/originals/b9/1d/fd/b91dfdd21cf816a69ed544d6800680a4.jpg");
	}
	75%, 100%{
		background-image: url("https://i.pinimg.com/originals/55/5e/52/555e52ca50443a4d366858dc5c83d540.jpg");
	}
}
.capa{
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	background: rgba(0,0,0,0.6);
}
.info{
	z-index: 1;
	width: 100%;
	max-width: 550px;
	text-align: center;
}
.info h1{
	color: #fff;
	font-size: 45px;
	margin-bottom: 20px;
	letter-spacing: 1px;
}
.info p{
	color: #c7c7c7;
	line-height: 1.7;
	margin-bottom: 30px;
}
.info a{
	color: #fff;
	text-decoration: none;
	background: #3088e0;
	padding: 16px 37px;
	display: inline-block;
	border-radius: 50px;
}
    </style>



    @include('layouts.nav')
    {{-- <h1 class="text-center">Home page</h1> --}} 
    
    <div class="banner">
		<div class="capa"></div>
		<div class="info">
			<h1>Welcome</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere alias nobis debitis provident ut odio aperiam quibusdam. Amet, neque, illo.</p>
			<a href="#">Learn more</a>
		</div>
	</div>


</body>
</html>    