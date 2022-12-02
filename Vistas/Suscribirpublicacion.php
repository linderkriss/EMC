<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="number" name="nombre" placeholder="Ingrese id del cliente"><br>
    <input type="number" name="direccion" placeholder="Ingrese id de la publicacion"><br>
    <input type="submit" value="Guardar">
</form>

<?php
if(!empty($_POST)){//POST: almacena en un arraytodo el formulario// EMPTY si la variable no esta vacia
    $id_cliente = $_POST['id_cliente'];// esto que esta el empty
    $id_publicacion = $_POST['id_publicacion'];

    include_once "../controladores/suscripcionControlador.php";
    include_once "../controladores/publicacionControlador.php";
    $suscripcion_controlador = new suscripcionControlador();
    $publicacion_controlador = new publicacionControlador();
    $resultado = $suscripcion_controlador->guardarControlador($id_cliente, $id_publicacion);
    $resultado = $publicacion_controlador->mostrarControlador();
    ?>

    <table border="1">
        <tr>
            <th>clientes</th>
            <th>publicacion</th>
        </tr>
        <?php
        foreach ($resultado as $publicacion) {
            echo "<tr>
                <td>
                    nombre: " . $publicacion["nombre"] . "<br>
                    tema: " . $publicacion["tema"] . "
                    descripcion: " . $publicacion["descripcion"] ."
                </td> 
                <td><ul>";
            $resultado = $suscripcion_controlador->guardarControlador($id_cliente, $id_publicacion);
            foreach ($resultado as $suscripcion) {
                if($suscripcion_controlador->mostrarControlador($suscripcion["id"])) {
                    echo "<li>id_cliente: " . $id_cliente["id_cliente"] . "<br>
                                      id_publicacion: " . $id_publicacion["id_publicacion"] . "</li>";
                }
            }
            echo   "</ul></td>
              </tr>";
        }
        ?>
    </table>
    <?php
}