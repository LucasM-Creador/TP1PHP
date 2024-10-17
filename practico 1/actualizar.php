
    <?php

    include_once('head.php');
    include_once('conexion.php');

    echo '<pre>';
    $sql = "SELECT id,nombre,apellido FROM usuarios";
    $resultado = $conexion->query($sql);


    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {

            echo "<form action=actualizarR.php method='post'><input type='text' readonly name='id' value='" . $fila['id'] . "'>";

            echo "<input type='text' name='nombre' value='" . $fila['nombre'] . "'>";

            echo "<input type='text' name='apellido' value='" . $fila['apellido'] . "'>";

            echo "<button>Enviar</button></form><hr>";

            /*    echo $fila['id'] . " " . $fila['nombre'] . " " . $fila['apellido'] . "<hr>";   */
        }
    } else {
        echo "Sin registros encontrados en la base de datos";
    }






    ?>

    </pre>
</body>

</html>