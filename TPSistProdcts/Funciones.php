
<?php
    /* Abstracción Modelo Tabla */
    function tablaIn($c){
        $tabla=[];
        for ($n=0; $n < $c; $n++) { 
        
            /* FILAS */    
            $tabla[$n] = '
                <tr class="border border-top-0" id="row-'.$n.'">
                    <td class="p-0">
                        <input class="form-control rounded-0 d-flex w-100" type="number" name="codigo[]" id="codigo-'.($n).'">
                        </td>
                    <td class="p-0">
                        <input class="form-control rounded-0 d-flex w-100" type="text" name="descripcion[]" id="descripcion-'.($n).'">
                        </td>
                    <td class="p-0">
                        <input class="form-control rounded-0 d-flex w-100" type="number" name="cantidad[]" id="cantidad-'.($n).'">
                        </td>
                    <td class="p-0">
                        <input class="form-control rounded-0 d-flex w-100" type="number" name="precio[]" id="precio-'.($n).'">
                    </td>
                </tr>';

        }

        /* TABLA */
        print '
        <table class= "table table-dark text-white rounded container" >
        <thead>
            <tr>
                <th scope="col"> Codigo </th>
                <th scope="col"> Descripcion </th>
                <th scope="col"> Cantidad </th>
                <th scope="col"> Precio Unit. </th>
            </tr>
        </thead>
        <tbody id="tabla" cantFilas= '.$n.'>
            '.implode($tabla).'
        </tbody>
        </table>';
    };

    function tablaOut($f){
        $filas=[];
        for ($n=0; $n < $f; $n++) { 
            
            $filas[$n] = 
                '<tr>
                    <td>
                        '.$_POST["codigo"][$n].'
                        </td>
                    <td>
                        '.$_POST["descripcion"][$n].'
                        </td>
                    <td>
                        '.$_POST["cantidad"][$n].'
                        </td>
                    <td>
                        '.intval($_POST["precio"][$n])*intval($_POST["cantidad"][$n])*(intval($_POST['impuesto'])/100+1) .'
                        </td>
                </tr>';

        }
        return 
        /* TABLA */
        '<table id="tabla" class= "table table-dark text-white rounded container">
            <thead>
                <tr>
                    <th scope="col">
                        Codigo
                    </th>
                    <th scope="col">
                        Descripcion
                    </th>
                    <th scope="col">
                        Cantidad
                    </th>
                    <th scope="col">
                        Precio Total
                    </th>
                </tr>
            </thead>
            <tbody id="tabla" cantFilas= '.$n.'>
                '.implode($filas).'
            </tbody>
        </table>';
    };

    function imprimir($algo) {
        print $algo;
    };
?>
