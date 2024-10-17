
<?php
    include_once('head.php');
?>


    <pre>
    <form action="insertar.php" method="post">

        <label>Nombre</label>
        <input type="text" name='nombre'></input>

        <label>Apellido</label>
        <input type="text" name="apellido"></input>

        <button>Enviar</button>


    </form>

    
    </pre>
    <?php
    include_once('conexion.php');

    ?>

</body>

</html>