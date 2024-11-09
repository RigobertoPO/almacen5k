<?php require_once('vista/layout/header.php');?>
<h1>Lista de productos</h1>
<div>
<a href="index.php?p=nuevo">Agregar producto</a>
<table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Existencia</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
                <?php 
                foreach ($datos as $key => $value)
                    foreach ($value as $va ):
                        echo "<tr><td>".$va['Id']."</td>";
                        echo "<td>".$va['Nombre']."</td>";
                        echo "<td>".$va['Precio']."</td>";
                        echo "<td>".$va['Existencia']."</td>";
                        echo "<td><a href='index.php?p=editar&id=".$va['Id']."'>ACTUALIZAR</a> 
                        <a href='index.php?p=eliminar&id=".$va['Id']."'>ELIMINAR</a></td>";
                        echo "</tr>";
                    endforeach;
                ?>      
        </tbody>
        </table>
</div>
<?php require_once('vista/layout/footer.php');?>