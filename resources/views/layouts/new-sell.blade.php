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
    <div class="container p-4">
        <div class="card">
            <div class="card-head d-flex py-2">
                <h3 class="mx-auto">Servicio de reparaciones</h3>
            </div>
            <div class="card-body">
                <form action="{{route('Sell')}}" method="post">
                    @csrf
                    <div class="row g-1">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="telephone">
                                <label for="celular">Celular</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="telephoneBuy" name="telephoneBuy">
                                <label for="telephoneBuy">Precio de compra</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="remplacement" name="remplacement">
                                <label for="remplacement">Repuesto</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="priceRemplacement">
                                <label for="Problema">Precio(Arreglo)</label>
                            </div>
                        </div>
                        <div class="py-4 form-floating d-flex justify-content-between">
                            <a href="/list-service" class="btn btn-primary col-2 ">Volver atras</a>
                            <button class="btn btn-primary col-1">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>