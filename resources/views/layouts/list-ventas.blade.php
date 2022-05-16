<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>TodoApp</title>
</head>

<body>
    <div class="container py-4">
        <div class="card">
            <h1 class="mx-auto py-4">Control de servicios</h1>
        </div>
        <a href="/new-note" class="btn btn-block btn-primary my-4">Agregar</a>
        <a href="/list-ventas" class="btn btn-block btn-primary my-4">Ventas</a>
        <table class="table text-center">
            <thead>
                <tr>
                    <th></th>
                    <th scope="col">Numero</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Repuesto</th>
                    <th scope="col">Precio(Repuesto)</th>
                    <th scope="col">Precio Final</th>
                    <th scope="col">Ganancia</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Data as $field)
                <tr>
                    <td><input type="checkbox" name="sellArt" id="sellArt"></td>
                    <th scope="row">{{$field->id}}</th>
                    <td>{{$field->telephone}}</td>
                    <td>{{$field->remplacement}}</td>
                    <td>{{$field->priceRemplacement}}</td>
                    <td>{{$field->priceSell}}</td>
                    <td>{{$field->gain}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>