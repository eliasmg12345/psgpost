<?=$cabecera?>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Postulacion al "Cargo <?=$cargor?>"</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('/guardar')?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input id="nombres" value="<?=old('nombres')?>" class="form-control" type="text" name="nombres">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input id="apellidos" value="<?=old('apellidos')?>" class="form-control" type="text" name="apellidos">
                    </div>
                    <div class="form-group">
                        <label for="carnet">Carnet</label>
                        <input id="carnet" value="<?=old('carnet')?>" class="form-control" type="text" name="carnet">
                    </div>
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input id="celular" value="<?=old('celular')?>" class="form-control" type="text" name="celular">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input id="correo" value="<?=old('correo')?>" class="form-control" type="text" name="correo">
                    </div>
                    <div class="form-group">        
                        <input id="cargo" value="<?=$cargor?>" class="form-control" type="hidden" name="cargo">
                    </div>
                    <div class="form-group">
                        <label for="motivacion">Motivacion</label>
                        <textarea id="motivacion" value="<?=old('motivacion')?>" class="form-control" name="motivacion" rows="3"></textarea>
                    </div>
                    
                    <br>
                    <button class="btn btn-success" type="submit">Guardar Postulacion</button>
                    <a href="<?=base_url('/');?>" class="btn btn-info">Cancelar</a>
                </form>
                
            </p>
        </div>
    </div>

<?=$pie?>