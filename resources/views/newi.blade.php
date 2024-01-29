<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
</head>
<body>
    @include('layouts.nav')

    <h1 class="text-center p-3">CRUD en Laravel</h1>

    @if (session("correcto"))
       <div class="alert alert-success">{{session("correcto")}}</div> 
    @endif

    @if (session("incorrecto"))
       <div class="alert alert-danger">{{session("incorrecto")}}</div> 
    @endif

    <script>
        var res = function(){
            var not = confirm("Estas seguro de Eliminar?");
            return not;
        }
    </script>

    <div class="modal fade" id="modalInsertar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar información</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('new.create')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nombre</label>
                      <input type="text" name="name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      value="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Concepto</label>
                        <input type="text" name="body" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha</label>
                        <input type="date" name="date"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Categoria</label>
                        <input type="text" name="category" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Crear Post</button>
                        </div>
                  </form>
            </div>
        </div>
        </div>
    </div>


    

    <div class="p-5 table-responsive">
        <button class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#modalInsertar">Ingresar Nuevo Post</button>
        <table class="table table-striped table-bordered table-hover">
            <thead class="bg-primary text-white">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Concepto</th>
                <th scope="col">Fecha</th>
                <th scope="col">Categoria</th>
                <th></th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($datos as $dato)
                <tr>
                    <th>{{$dato->id}}</th>
                    <td>{{$dato->name}}</td>
                    <td>{{$dato->body}}</td>
                    <td>{{$dato->date}}</td>
                    <td>{{$dato->category}}</td>
                    <td>
                        <a href="" data-bs-toggle="modal" data-bs-target="#modalEditar{{$dato->id}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="{{route('new.delete',$dato->id)}}" onclick="return res()" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                    </td>
                  
                    
                    <!-- Modal -->
                    <div class="modal fade" id="modalEditar{{$dato->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar información</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('new.update')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Id</label>
                                        <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                        value="{{$dato->id}}" readonly>
                                      </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                      <input type="text" name="name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                      value="{{$dato->name}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Concepto</label>
                                        <input type="text" name="body" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$dato->body}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Fecha</label>
                                        <input type="date" name="date" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$dato->date}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Categoria</label>
                                        <input type="text" name="category" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$dato->category}}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Actualizar</button>
                                        </div>
                                  </form>
                            </div>
                        </div>
                        </div>
                    </div>
                  </tr> 
                @endforeach
                
            </tbody>
          </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>