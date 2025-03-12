<?php
    # Obtiene todos los servicios
    function obtener_servicios(){
        try{
            # Importar las credenciales
            require 'database.php';

            # Consulta SQL
            $sql = "SELECT * FROM servicios;";

            # Realizar la consulta
            $consulta = mysqli_query($db, $sql);

            # Acceder a los resultados
        
            # Cerrar la conexión
            #$resultado = mysqli_close($db);
            #echo $resultado; # 1 ok

            return $consulta;
            
        } catch(\Throwable $th){
            var_dump($th);
        }
    }

    obtener_servicios();
?>