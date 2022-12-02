<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="nombre" placeholder="Ingrese Nombre del cliente"><br>
    <input type="text" name="direccion" placeholder="Ingrese direccion del cliente"><br>
    <input type="submit" value="Guardar">
</form>

<?php
if(!empty($_POST)){//POST: almacena en un arraytodo el formulario// EMPTY si la variable no esta vacia
    $nombre = $_POST['nombre'];// esto que esta el empty
    $direccion = $_POST['direccion'];

    include_once "../controladores/clienteControlador.php";
    $cliente_controlador = new clienteControlador();
    $resultado = $cliente_controlador->guardarControlador($nombre, $direccion);
}
