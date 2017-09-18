
        <?php
       
        $lat=$_REQUEST["latitud"];
        $lon=$_REQUEST["longitud"];
                
        $enlace= mysqli_connect("localhost", "root", "frank3194985608","catastro1","3306");
        
     $cadena="INSERT INTO datos (iddatos, latitud, longitud) VALUES (null,'".$lat."','".$lon."')";
     echo $enlace;
     mysqli_query($enlace, $cadena)
        ?>
    