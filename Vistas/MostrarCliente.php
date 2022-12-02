<?php
include_once "../controladores/clienteControlador";
$clienteControlador = new clienteControlador();
$cliente = $clienteControlador->mostrarControlador();
?>
<table border="1">
    <tr>
        <th>id</th>
        <th>nombres</th>
        <th>direccion</th>
        <th></th>
        <th></th>
    </tr>
    <?php
    foreach ($cliente as $cliente){
        echo "<tr>
            <td>".$cliente["id"]."</td>
            <td>".$cliente["nombre"]."</td>
            <td>".$cliente["direccion"]."</td>
        </tr>";
    }
    ?>
</table>
