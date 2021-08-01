<?=$cabecera?>

<div class="card">
        <div class="card-body">
            <h5 class="card-title">Postulacion al cargo</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('/actualizar')?>" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$cargo['id']?>">
                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input id="nombres" value="<?=$cargo['nombres']?>" class="form-control" type="text" name="nombres">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input id="apellidos" value="<?=$cargo['apellidos']?>"  class="form-control" type="text" name="apellidos">
                    </div>
                    <div class="form-group">
                        <label for="carnet">Carnet</label>
                        <input id="carnet" value="<?=$cargo['carnet']?>" class="form-control" type="text" name="carnet">
                    </div>
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input id="celular" value="<?=$cargo['celular']?>" class="form-control" type="text" name="celular">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input id="correo" value="<?=$cargo['correo']?>" class="form-control" type="text" name="correo">
                    </div>
                    <div class="form-group">
                        <label for="motivacion">Motivacion</label>
                        <textarea id="motivacion" value="<?=$cargo['motivacion']?>" class="form-control" name="motivacion" rows="3"></textarea>
                    </div>
                    <br>
                    <button class="btn btn-success" type="submit">Editarr Postulacion</button>
                    <a href="<?=base_url('/lista');?>" class="btn btn-info">Cancelar</a>
                    
                </form>
                
            </p>
        </div>
    </div>


<?=$pie?>