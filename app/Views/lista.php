<?=$cabecera?>
<a href="<?=base_url('')?>">Volver</a>
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
<?=$pie?>