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
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Foto</th>
                    <th scope="col">CV</th>
                    <th scope="col">Puesto</th>
                    <th scope="col">Fecha de Ingreso</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">Francisco Hernandez</td>
                    <td>#</td>
                    <td>#</td>
                    <td>Gerente</td>
                    <td>28/05/2023</td>
                    <td> <a name="" id="" class="btn btn-success" href="crear.php" 
                            role="button">Ver</a> |  
                          <a name="" id="" class="btn btn-info" href="editar.php" 
                            role="button">Editar</a> |  
                          <a name="" id="" class="btn btn-danger" href="crear.php" 
                            role="button">Eliminar</a>
                    </td>
                </tr>
               
            </tbody>
        </table>
       </div>
        

    </div>
    
</div>

<?php include("../../templates/footer.php");   ?>