<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear categoria</title>
</head>
<body>
    <form action="/categoria/create" method="post">
       <?= view('categoria/_form',['op' => 'Crear']) ?>
    </form>
</body>
</html>