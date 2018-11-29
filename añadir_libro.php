<html>
<head>
	<title>Registro de libro</title>
	<link rel="stylesheet" href="estil.css" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/animate/animate.min.css">
  <!-- theme css -->
  <link rel="stylesheet" href="css/theme.min.css">
  <link rel="stylesheet" href="css/custom.css">

	<script type="text/javascript" src="functions.js"></script>	
</head>

<body>
<section class="bg-image bg-image-sm" style="background-image: url('img/bg/login.jpg');">
    <div class="overlay"></div>
    <div class="container">      
			<form action="añadir_libro.php" method="POST" name="formu" id="formula" class="formulario" enctype="multipart/form-data">
			<h1 class="formulario_titulo">Registro de libro</h1>
	
            <input type="text" name="titulo" placeholder="titulo del libro" class="formulario_input">
            <input type="text" name="idioma" placeholder="idioma" class="formulario_input">
            <input type="textarea" rows="2" cols="50" name="descripcion" placeholder="descripcion_del_libro" class="formulario_input">
              <input type="text" name="editorial" placeholder="editorial" class="formulario_input"> 
              <input type="text" name="autor" placeholder="autor" class="formulario_input">   
              <input type="file" name="imagen" placeholder="imagen" class="formulario_input">  
              <input type="number" name="precio" placeholder="valor en cordobas del libro" class="formulario_input">          
            <input type="submit" name="guardar"  value="Guardar" class="formulario_input">
            <input type="reset" name="cancelar"  value="Cancelar" class="formulario_input">
			</form>
    </div>
			<?php
			include("conexion.php");
			
			
			if(isset($_POST["guardar"])){
				$titulo=$_POST["titulo"];
				$idioma=$_POST["idioma"];
				$descripcion=$_POST["descripcion"];
                $editorial=$_POST["editorial"];
                $autor=$_POST["autor"];
				$codigo=1;
				
                    mysqli_query($con,"INSERT INTO libros VALUES('$codigo','$titulo','$idioma','$descripcion','$direccion')");
					$codigo=$codigo+1;
					
					echo "datos guardados";
				
            }

            
            

			
			
			?>
			
</body>
</html>