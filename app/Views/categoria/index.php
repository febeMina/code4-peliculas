<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    <h1>Listado de categorias</h1>
    <a href="/categoria/new">Crear</a>
       <table>
       
        <tr>
            <th>
                Id
            </th>
            <th>
                Titulo
            </th>
            <th>
                Descripcion
            </th>
            <th>
                Opciones
            </th>
        </tr>
         <?php foreach ($categorias as $key => $p) : ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['titulo'] ?></td>
                <td><?= $p['descripcion'] ?></td>
                <td>
                    <a href="/categoria/show/<?= $p['id'] ?>">Show</a>
                    <a href="/categoria/edit/<?= $p['id'] ?>">Edit</a>
                    
                    <form action="/categoria/delete/<?= $p['id'] ?>" method="post">
                        <button type="submit">Delete</button>
                    </form>
                    
                </td>
            </tr>
         <?php endforeach ?>   
       </table>
   
</body>
</html>