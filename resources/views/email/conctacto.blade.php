<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CORREO</title>
</head>
<body>

    <h1>DISTRIBUIDORA JAGBA</h1>
    <br>
    <h3>Mensaje de interes</h1>
    <br>

    <p> <strong>NOMBRE: </strong>{{ $contacto['name'] }} </p>
    <p> <strong>CORREO: </strong>{{ $contacto['email'] }} </p>
    <p> <strong>ME INTERESA: </strong>{{ $contacto['inquiry'] }} </p>
    <p> <strong>MENSAJE: </strong>{{ $contacto['message'] }} </p>
</body>
</html>