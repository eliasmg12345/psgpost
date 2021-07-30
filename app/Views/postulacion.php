<?=$cabecera?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Postulacion al cargo</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('/guardar')?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input id="nombres" class="form-control" type="text" name="nombres">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input id="apellidos" class="form-control" type="text" name="apellidos">
                    </div>
                    <div class="form-group">
                        <label for="carnet">Carnet</label>
                        <input id="carnet" class="form-control" type="text" name="carnet">
                    </div>
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input id="celular" class="form-control" type="text" name="celular">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input id="correo" class="form-control" type="text" name="correo">
                    </div>
                    <div class="form-group">
                        <label for="motivacion">Motivacion</label>
                        <textarea id="motivacion" class="form-control" name="motivacion" rows="3"></textarea>
                    </div>
                    <br>
                    <button class="btn btn-success" type="submit">Guardar Postulacion</button>
                    
                </form>
                
            </p>
        </div>
    </div>

<?=$pie?>