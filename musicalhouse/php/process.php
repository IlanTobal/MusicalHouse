<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Complete</title>

	<!-- ----Materialize---- -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
	<div class = "container">

<?php
include_once 'db.php';
if(isset($_POST['save']))
{	 
	 $id_producto = $_POST['id_producto'];
	 $titulo = $_POST['titulo'];
	 $descripcion = $_POST['descripcion'];
	 $img_url = $_POST['img_url'];
	 $precio = $_POST['precio'];
	 $sql = "INSERT INTO producto (titulo,descripcion,img_url,precio)
	 VALUES ('$titulo','$descripcion','$img_url', '$precio')";
	
	if (mysqli_query($conn, $sql)) {

?>
	<h1 class = "center-align">
		<?php echo "New record created successfully !";
	    ?>
	</h1>

<?php
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>

		<div class = "center-align">
			<button class="btn waves-effect waves-light" type="submit" style = "margin-top: 20px">
				<a href = "index.php" style = "color: white;">Go back</a>
			</button>	
		</div>
	</div>
</body>
</html>