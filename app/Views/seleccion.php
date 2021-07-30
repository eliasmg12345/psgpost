<?=$cabecera?>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">DIRECCION DE POGRADO</h4>
            <h5 class="card-title">POSTULACIONES A CARGOS DE TRABAJO</h5>
            

            <form method="get" action="<?=base_url('/crear')?>" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="cargo1" >cargo1</label>
                        <button class="btn btn-success" type="submit" id="cargo1" name="cargo1">Postular</button>
                        <textarea id="cargo1" class="form-control" name="cargo1" rows="3"></textarea>
                    </div>
            </form>

        </div>
    </div>

<?=$pie?>