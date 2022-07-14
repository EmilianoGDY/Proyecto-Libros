<?php include("../template/cabecera.php")?>

<div class="col-md-5">

    <div class="card">
        <div class="card-header">
            Datos de Libros
        </div>

        <div class="card-body">
        <form method="POST" enctype="multipart/form-data">

<div class = "form-group">
<label for="txtID">ID:</label>
<input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID">
</div>

<div class = "form-group">
<label for="txtNombre">Nombre:</label>
<input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre">
</div>

<div class = "form-group">
<label for="txtIMG">Imagen:</label>
<input type="file" class="form-control" name="txtIMG" id="txtIMG" placeholder="Imagen">
</div>



<div class="btn-group" role="group" aria-label="">
    <button type="button" class="btn btn-success">Agregar</button>
    <button type="button" class="btn btn-warning">Modificar</button>
    <button type="button" class="btn btn-info">Cancelar</button>
</div>

</form>
        </div>

       
    </div>

 
    
    
</div>
<div class="col-md-7">
    Tabla de Libros
</div>


<?php include("../template/pie.php")?>
