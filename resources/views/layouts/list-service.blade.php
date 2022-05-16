<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        #Precio .btn {
            width: 90px;
        }
    </style>
    <title>TodoApp</title>
</head>

<body>
    <div class="container py-4">
        <div class="card">
            <h1 class="mx-auto py-4">Control de servicios</h1>
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{route('newService')}}" class="btn btn-block btn-primary my-4">Nuevo servicio</a>
            <a href="{{route('listSell')}}" class="btn btn-block btn-primary my-4">Lista de ventas</a>
            <a href="{{route('newSell')}}" class="btn btn-block btn-primary my-4">Nueva venta</a>
        </div>
        @if (session('success'))
        <h6 class="alert alert-success">{{session('success')}}</h6>
        @endif

        @error('title')
        <h6 class="alert alert-danger">{{$message}}</h6>
        @enderror

        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Status</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Problema</th>
                    <th scope="col">Repuesto</th>
                    <th scope="col">Precio(Repuesto)</th>
                    <th scope="col">Precio Final</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $services as $service )
                <tr>
                    <td>
                        @if ($service->status)
                        <form action="{{route(editStatus,['id' -> $service->id])}}" method="get">
                            @csrf
                            <button class="btn btn-success">Entregado</button>
                        </form>
                        @else
                        <button class="btn btn-danger">En servicio</button>
                        @endif
                    </td>
                    <th scope="row">{{$service->numberClient}}</th>
                    <td>{{$service->telephone}}</td>
                    <td>{{$service->problem}}</td>
                    <td>{{$service->remplacement}}</td>
                    <td>{{$service->priceRemplacement}}</td>
                    <td id="Precio">
                        @if ($service->payment)
                        <button class="btn btn-success">{{$service->priceClient}}</button>
                        @else
                        <button class="btn btn-danger">{{$service->priceClient}}</button>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>