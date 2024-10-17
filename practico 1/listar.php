
    <?php
    include_once('conexion.php');
    include_once('head.php');

    echo '<pre>';
    $sql = "SELECT id,nombre,apellido FROM usuarios";
    $resultado = $conexion->query($sql);


    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {


            echo $fila['id'] . " " . $fila['nombre'] . " " . $fila['apellido'] . "<hr>";
            echo '<img src="https://i.ytimg.com/vi/rGeDMbP2PHU/sddefault.jpg?v=635da95b" alt="">';
        }
    } else {
        echo "Sin registros encontrados en la base de datos";
    }

    ?>

    </pre>



</body>

</html>