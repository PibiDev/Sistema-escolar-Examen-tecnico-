<?php include("database.php") ?>

<?php include("header.php") ?>
    <div class="container p-4">
        <div class="row">
            
            <h1>Dar de baja una materia</h1>
            <div class="col-md-6">
            </div>

            <form action="" method="post">
                <div class="mb-3">

                    <label for="codigoInput" class="form-label">Codigo del alumno</label> 
                    <input type="text" name="codigoAlumno" class="form-control">

                    <label for="codigoInput" class="form-label">Codigo de la materia</label> 
                    <input type="text" name="codigoMateria" class="form-control">

                </div>
                
                <button type="submit" name="enviar" class="btn btn-primary">Inscribir</button>

            </form>

 

        </div>

<?php
include("database.php");

if(isset($_POST['enviar'])){
    $codigoAlumno = $_POST['codigoAlumno'];
    $codigoMateria = $_POST['codigoMateria'];

    $query =   "DELETE FROM cat_rel_alumno_materia 
                WHERE iCodigoAlumno = '$codigoAlumno' 
                AND vchCodigoMateria = '$codigoMateria' ";


    $result = mysqli_query($con, $query);

    if (!$result){
        die("<br> Query Failed");
    }

    else if($result){
        
        echo "<br> Materia eliminada";
        
    }

    
}
?>

    </div>

<?php include("footer.php") ?>