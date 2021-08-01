<?=$cabecera?>
<br>
<a class="btn btn-success" href="<?=base_url('/')?>">Volver</a><br>
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
                    <th>acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($cargos as $c):?>
                <tr>
                    <td><?=$c['id'];?></td>
                    <td><?=$c['nombres'];?></td>
                    <td><?=$c['apellidos'];?></td>
                    <td><?=$c['carnet'];?></td>
                    <td><?=$c['celular'];?></td>
                    <td><?=$c['correo'];?></td>
                    <td><?=$c['motivacion'];?></td>
                    <td><?=$c['cargo'];?></td>
                    <td>
                    <a href="<?=base_url('editar/'.$c['id']);?>" type="submit" class="btn btn-info">Editar</a>
                        <a href="<?=base_url('borrar/'.$c['id']);?>" type="submit" class="btn btn-danger">Borrar</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
<?=$pie?>