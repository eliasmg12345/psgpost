<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <h1>Postulaciones</h1>
<?php print_r($cargos);  ?>
    <div class="container">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>CI</th>
                    <th>celular</th>
                    <th>correo</th>
                    <th>motivacion</th>
                    <th>cargo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($cargos as $c):?>
                <tr>
                    <td><?=$c['id'];?></td>
                    <td><?=$c['nombres'];?></td>
                    <td><?=$c['apellidos'];?></td>
                    <td><?=$c['carnet'];?></td>
                    <td><?=$c['celular'];?>f</td>
                    <td><?=$c['correo'];?></td>
                    <td><?=$c['motivacion'];?></td>
                    <td><?=$c['cargo'];?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
    
</body>
</html>