<html>
<head> <title>Calculo del area de un octagono regular</title> </head>
<body>
<?php
if(isset($_POST['btn']) && $_POST['btn']=='Calcular'){
   
    $longitud= $_POST['longitud'];
    $apotema= $_POST['apotema'];
    $multi= null;
    $area= null;

    if(!empty($longitud) or !empty($apotema)){
        echo '<h2>Calculo del area de un octagono regular</h2>, <br/>';

        $multi= 8*$longitud*$apotema;
        $area= $multi/2;
    
        echo 'longitud '.$longitud.'<br/>';
        echo 'apotema '.$apotema.'<br/><br/>';
        echo 'area del octagono regular'.$area.'<br/>';
        echo "<a href='datos.html'> Regresar </a>";
    
    }
}
?>    
</body>
</html>