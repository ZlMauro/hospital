<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Font Roboto CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>body{font-family:"Roboto" !important;}</style>

    <title>Citas</title>
  </head>
  <body>

    <div class="container">

        <h1 class="mt-5">Lista de citas</h1>
        <div class="text-right">
        <!--base url es la que se configura en config(http://localhost/crud_codeigniter3 le concatenamos la vista)-->
        <a href="<?php echo base_url(); ?>nueva-cita" class="btn btn-info"><ion-icon name="add"></ion-icon></a> 
        </div>
        <table class="table mt-4">
            <thead class="thead-light">
                <tr>
                <th scope="col">N°</th>
                <th scope="col">Código cita </th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
                <th scope="col">Identificación paciente</th>
                <th scope="col">Identificación médico </th>
                <th scope="col">Diagnóstico</th>
                <th scope="col">Estado</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php $number=0; foreach($data as $key => $value): ?>
                    <tr>
                        <th scope="row"><?php echo $number++; ?></th>
                        <td><?php echo $value->codigo_cita; ?></td>
                        <td><?php echo $value->fecha; ?></td>
                        <td><?php echo $value->hora; ?></td>
                        <td><?php echo $value->identificacion_paciente; ?></td>
                        <td><?php echo $value->identificacion_medico; ?></td>
                        <td><?php echo $value->diagnostico; ?></td>
                        <td><?php if($value->activo==1){
                                echo "activo";

                        }else{
                            echo "Inactivo";
                        }
                        ?>
                        
                    </td>
                        <td>
                            <!--$value->id enviamos el id del usuario-->
                            <a href="<?php echo base_url(); ?>cita/<?php echo $value->id; ?>" class="btn btn-primary"><ion-icon name="pencil"></ion-icon></a> 
                            <a href="<?php echo base_url(); ?>cita/delete/<?php echo $value->id; ?>" class="btn btn-danger"><ion-icon name="remove"></ion-icon></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
  <!--Alerta cuando se agrega un nuevo usuario-->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script>
        
        <?php if($this->session->flashdata("success")): ?>

            Swal.fire({
                icon: 'success',
                title: 'Good...',
                text: '<?php echo $this->session->flashdata("success"); ?>',
            });
        <?php endif; ?>

    </script>
  </body>
</html>