<?php include 'cone.php';
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="atributos1/nicepage.css" media="screen">
<link rel="stylesheet" href="atributos1/tablaDatos.css" media="screen">
<script class="u-script" type="text/javascript" src="atributos1/jquery.js" defer=""></script>
<script class="u-script" type="text/javascript" src="atributos1/nicepage.js" defer=""></script>
<meta name="generator" content="Nicepage 5.7.9, nicepage.com">
<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/jpg" href="https://i.ibb.co/BTczYFc/logo-Proyecto.png"/>
   
    

	<link rel="icon" type="image/jpg" href="fotos/logoico.ico"/>
	<link rel="stylesheet" href="imagenRedonda.css" media="screen">
	<link rel="stylesheet" href="botonTabla.css" media="screen">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ver mis sugerencias   </title>
	<link rel="stylesheet" href="titulo.css">
</head>
<script type="text/javascript">
	function confirmDelete()
	{
		var respuesta =confirm("Estas Seguro que deseas eliminar instrumento?");
		if(respuesta==true){
			return true;
		}
		else{
			return false;
		}	
	}
</script>
<body class="u-body u-xl-mode" data-lang="es">
<header class="u-clearfix u-gradient u-header u-header" id="sec-a4ee"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="logout.php" class="u-image u-logo u-image-1" data-image-width="582" data-image-height="582">
          <img src="atributos1/images/logo-Proyecto.png" class="u-logo-image u-logo-image-1">
        </a>
        <center><h2 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1">Ver mis sugerencias </h2></center>
      </div>
</header>


<?php include 'cone.php';

	//session_start();
	error_reporting(0);
	$usuario =$_SESSION['id'] ;
	
	$varsesion=$_SESSION['id'] ;
	if($varsesion==NULL || $varsesion==""){
	?>	
	<script type="text/javascript">
			window.alert('Pareces indeciso')
			//window.location = "./";
		</script>
	<?php
		//echo "no estais autorizado perro";
		die();
	}
	if (isset($_SESSION['id'])) {
		
	}else{
		?>
		<script type="text/javascript">
			//window.location = "./";
		</script>
		<?php 
	}
 
		?>
	
<!--
        </p>
</article>
			-->
	<div id="contenido">
     <center>    
    <p class="panel-heading">
    A continuación las sugerencias que diste  
    <br>
		<?php
		include "conexion.php";
			$consltas = "SELECT COUNT(email) FROM buzonsugerencias where email='$usuario'";
			$resultado = mysqli_query($conn, $consltas);
		 	while($row = mysqli_fetch_array($resultado)){
				echo "Total de sugerencias:  $row[0]";

			 }
			 ?>
			 <br>

		<a href="menuPrincipalUsuario.php"style="color:#005423 ;"><i class="fa fa-mail-reply"></i> Atrás</a><br>
            </center></p>
		
    <br>

	<table WIDTH="350" border="1%" align="center" bordercolor="black">
		<thead>
			
			<th COLSPAN="2">Sugerencias. 
			<!--<center> <a href="ingresarPersonas.html"> <button type="button" class="btn btn-info">Nuevo</button> </a> </center>
			<center> <a href="inicioadministrador.php"> <button type="button" class="btn btn-info" >Regresar</button> </a></center>-->
		
		</th>
		</thead>
		<?php
//que guarde todo en la variable centencia y que lo guarde en la variable resultado	  
			include "conexion.php";
			$sql = "SELECT * FROM buzonsugerencias where email='$usuario' "; 			
			$result= mysqli_query($conn, $sql); 

        
while ($filas=mysqli_fetch_assoc($result) )
			{
				echo "<tr>";
					//echo " ID del instrumento "; echo $filas['id_instrumento']; echo "<br>";
					echo " <td>  <B>Sugerencia  :</B> "; echo $filas['sugerencia']; echo "<br>";
					echo "  <B>Respuesta a la sugerencia  </B> "; echo $filas['respuesta']; echo "<br>";	
                    echo "<br>";	
                    //modificar
//echo "<td ><center><br> <a href='apro.php?id_instrumento=".$filas['id_instrumento']."'> <button type='button' class='boton_personalizado_4'>Editar</button></a></center> ";			
echo "</tr>";
			}
			?>

	</table>
	<br>
</div>

		<footer class="u-align-center u-clearfix u-footer u-gradient u-footer" id="sec-093a"><div class="u-clearfix u-sheet u-sheet-1"></div></footer>
    
</body>
</html>
