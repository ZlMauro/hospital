<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>body{font-family:"Roboto" !important;}</style>
    
    <title>Editar cita</title>
  </head>
  <body>

    <div class="container">
    <h1 class="mt-5">Editar Cita n: <?php echo $codigo_cita; ?></h1>
    <form action="<?php echo base_url(); ?>cita/update/<?php echo $id; ?>" class="mt-4" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fecha</label>
                        <input type="date" name="fecha" class="form-control" value="<?php echo $fecha; ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('fecha'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Hora</label>
                        <input type="time" name="hora" class="form-control"  value="<?php echo $hora; ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('hora'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Diagnóstico</label>
                        <input type="text" name="diagnostico" class="form-control <?php echo form_error('diagnostico') ? 'is-invalid':'' ; ?>"  value="<?php echo $diagnostico; ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('diagnostico'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Identificicación paciente</label>
                        <input type="text" name="id_paciente" class="form-control <?php echo form_error('id_paciente') ? 'is-invalid':'' ; ?>"  value="<?php echo $identificacion_paciente; ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('id_paciente'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Identificicación médico</label>
                        <input type="text" name="id_medico" class="form-control <?php echo form_error('id_medico') ? 'is-invalid':'' ; ?>"  value="<?php echo $identificacion_medico; ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('id_medico'); ?>
                        </div>
                    </div>
                    
                </div>
           
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  </body>
</html>