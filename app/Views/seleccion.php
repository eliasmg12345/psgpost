<?=$cabecera?>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">DIRECCION DE POGRADO</h4>
            <h5 class="card-title">POSTULACIONES A CARGOS DE TRABAJO</h5>
            
            <table class="table table-light">
            <thead class="thead-light">
                <tr >
                    <th>Directivo</th>
                    <th rowspan="2"><a href="<?=base_url('crear/'.'Directivo');?>" type="submit" class="btn btn-info" >POSTULAR</a></th>
                </tr>
                <tr>
                    <td > Responsables de las áreas administrativas y defensoriales</td>
                </tr>
                <tr >
                    <th>Tecnico</th>
                    <th rowspan="2"><a href="<?=base_url('crear/'.'Tecnico');?>" type="submit" class="btn btn-info" >POSTULAR</a></th>
                </tr>
                <tr>
                    <td > Apoyo a la categoría de profesionales</td>
                </tr>
                <tr >
                    <th>Asistene</th>
                    <th  rowspan="2"><a href="<?=base_url('crear/'.'Asistene');?>" type="submit" class="btn btn-info" >POSTULAR</a></th>
                </tr>
                <tr>
                    <td>Apoyo secretarial, administrativo y contable </td>
                </tr>
                <tr >
                    <th>Profesional</th>
                    <th  rowspan="2"><a href="<?=base_url('crear/'.'Profesional');?>" type="submit" class="btn btn-info" >POSTULAR</a></th>
                </tr>
                <tr>
                    <td>Diseño y ejecución de sistemas y procedimientos técnicos, legales y administrativos </td>
                </tr>
                <tr >
                    <th>Defensorial</th>
                    <th rowspan="2"><a href="<?=base_url('crear/'.'Defensorial');?>" type="submit" class="btn btn-info" >POSTULAR</a></th>
                </tr>
                <tr>
                    <td >Promoción, defensa y vigilancia de los Derechos Humanos y los Servicios Públicos.</td>
                </tr>
                <tr >
                    <th>Obrero</th>
                    <th rowspan="2"><a href="<?=base_url('crear/'.'Obrero');?>" type="submit" class="btn btn-info" >POSTULAR</a></th>
                </tr>
                <tr>
                    <td > Apoyo en las áreas administrativas, de servicios y mantenimiento, transporte, mensajería, entre otras</td>
                </tr>

            </thead>
            
        </table>

        </div>
    </div>

<?=$pie?>