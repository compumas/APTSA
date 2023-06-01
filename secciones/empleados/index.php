<?php
include("../../bd.php");

//SECCION DE BORRAR
if(isset($_GET['txtID'])){
  $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
  $sentencia=$conexion->prepare("DELETE FROM tbl_empleados WHERE id=:id");
  $sentencia->bindParam(":id",$txtID);
  $sentencia->execute();
  $mensaje="Registro Eliminado...";
  header("location:index.php?mensaje=".$mensaje);
}

//SECCION DE LISTAR
$sentencia=$conexion->prepare("SELECT *,
     (SELECT nombredelpuesto 
     FROM tbl_puestos 
     WHERE tbl_puestos.id=tbl_empleados.idpuesto limit 1) as puesto
     FROM `tbl_empleados`");
$sentencia->execute();
$lista_tbl_empleados=$sentencia->fetchAll(PDO::FETCH_ASSOC);



?>




<?php include("../../Templates/header.php");   ?>



<br>
<h4>Empleados</h4>
<div class="card">
    <div class="card-header">
        
        <a name="" id="" class="btn btn-primary" href="crear.php" 
            role="button">Agregar Registro
        </a>
    </div>
    <div class="card-body">
       <div class="table-responsive-sm">
        <table class="table" id="tabla_id">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">CV</th>
                    <th scope="col">Puesto</th>
                    <th scope="col">Fecha de Ingreso</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($lista_tbl_empleados as $registro) { ?>
                <tr class="">
                    <td scope="row"><?php echo $registro['primernombre'];?></td>
                    <td><?php echo $registro['primerapellido'];?></td>
                    <td>#</td>
                    <td><?php echo $registro['puesto'];?></td>
                    <td><?php echo $registro['fechadeingreso'];?></td>
                    <td> <a name="" id="" class="btn btn-success" href="editar.php?txtID=<?php echo $registro['id']?>" 
                            role="button">Ver</a> |  
                          <a class="btn btn-info" href="editar.php?txtID=<?php echo $registro['id']?>" role="button">Editar</a>
                            |
                          <a class="btn btn-danger" href="javascript:borrar(<?php echo $registro['id'];?>)" role="button">Eliminar</a>
                    </td>

                </tr>
               <?php } ?>
            </tbody>
        </table>
       </div>
        

    </div>
    
</div>



<?php include("../../templates/footer.php");   ?>