<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de Arreglos</title>
    <!-- 
        Nombre: Kenny Reyes
        Programa: Desarrollo Web con PHP
        Evidencia: USo de arreglos
     -->
    <!-- Estilo de la tabla -->
    <style>
        body{
            font-family: Arial, sans-serif;
        }

        table, td{
            border: 1px solid black;
            border-collapse: collapse;
        }

        thead{
            background-color: hsl(206,100%,40%);
            color: #FFF;
        }

        td{
            padding: 4px;
            text-align: center;
        }
    </style>
    <!-- Fin estilo -->
</head>
<body>
    
    <?php
    // Primer array de la agenda
    $agenda = array(
       
        array("Pablo","Cra 45 # 95-84","3009561597","14-05-1985","Azul"),
        array("Andrea","Calle 51 #36-23","3256178945","03-11-1992","Verde"),
        array("Julia","Calle 23 #74-40","3172785074","30-04-1990","Rojo"),
        array("Andrés","Cra 46 #56-80","3050480103","23-01-2001","Amarillo"));
    // Fin arreglo

    // Segundo array del significado del color
        $significado = array(
            "Amarillo"=>"Riqueza y alegría.",
            "otros"=>"No se encuentra significado"
        );       
        // Fin array
    ?>

    <!-- Estuctura de la tabla con etiqueta HTML -->
    <h1>Agenda</h1>

    <table>
        <thead>    
            <!--Encabezado de la tabla  -->
            <td>
                Nombre
            </td>
            <td>
                Direccion
            </td>
            <td>
                Numero
            </td>
            <td>
                Fecha
            </td>
            <td>
                Color
            </td>
            <td>
                Significado
            </td>  
        </thead>
        <!-- Fin encabezado -->
        <tbody>
            <!-- Cuerpo de la tabla -->
        <?php
        // Recorrido del arraglo con el ciclo foreach
            foreach ($agenda as $key => $value): 
             
        ?>
        <tr>
            <td>
                <?php
                // Impresion de los datos del arreglo en una celda
                echo $value[0];
                ?>

            </td>
            <td>
            <?php
            // Impresion de los datos del arreglo en una celda
                echo $value[1];
                ?>
            </td>
            <td>
            <?php
            // Impresion de los datos del arreglo en una celda
                echo $value[2];
                ?>
            </td>
            <td>
            <?php
            // Impresion de los datos del arreglo en una celda
                echo $value[3];
                ?>
            </td>
            <td>
            <?php
            // Impresion de los datos del arreglo en una celda
                echo $value[4];
                ?>
            </td>
            <td>
            <?php
            // Condicional del significado del color
                if($value[4]=="Amarillo"){
                    echo $significado["Amarillo"];
                }else{
                    echo $significado["otros"];
                }
            ?>
            </td>
            
        </tr>    
        <?php
            endforeach;
            // Fin ciclo foreach
        ?>   
        </tbody>
    </table>
    <!-- Fin tabla -->
</body>
</html>