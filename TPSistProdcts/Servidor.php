
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Integrador - Joel Kukin</title>

    <!-- BOOSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="container">
    <?PHP 
    /* llamar funciones */
    require 'Funciones.php';
    /* Import DATA */
    /*   por cada submit */
    $cantFilas= $_POST['cantFilas'];
    $fecha= $_POST['fecha'];
    $nombre= $_POST['nombre'];
    //$impuesto= intVal($_POST['impuesto'])/100+1;

    print $html='
    <br>
    <h1>TP Integrador de Joel Kukin</h1>
    <br>
    <div class="container px-auto bg-dark text-white border border-dark p-3 rounded-lg">
        
        <div class="row p-0">
            <p class=" col py-1"><b>Fecha: </b>'.$fecha.'</p>
            <p class=" col py-1"><b>Nombre: </b>'.$nombre.'</p>
            <p class=" col py-1"><b>Impuesto: </b>'.$_POST['impuesto'].'%</p>
        </div>
        <table id="tablaResults">

            '.tablaOut($cantFilas).' 
                
        </table>
    </div>'
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>