<?php
include_once "db.php";

$sql = "SELECT * FROM producto WHERE id_producto = ". htmlspecialchars($_GET['id_producto']);
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result)
// echo $result;
// echo '¡Hola ' . htmlspecialchars($_GET["id_producto"]) . '!';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descripción</title>

    <!-- ----Materialize---- -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <div class = "container z-depth-3" style="display: flex; align-items: center;">
        <div class = "row valign-wrapper" style="display: block; top: auto; buttom: auto;">
                <div class = "img_container center-align ">
                    <img class = "z-depth-3"src="<?php echo $row["img_url"]; ?>" style = "width: 400px; height: 400px; margin: 15px;">
                    
                </div>
                <div class = "text_container center-align">
                    <h1 class = "center-align" style = "font-size: 40px; margin: 5px;"><?php echo $row['titulo'] ?></h1>
                    
                    <h4 class = "center-align" ><?php echo "$" . $row["precio"]; ?></h4>
                    <h4 class = "center-align" style = "font-size: 30px; margin: 0"><?php echo $row["descripcion"]; ?></h4>
                </div>
           
        </div>
    </div>
</body>
</html>