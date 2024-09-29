<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require("test1.php");
  
    $con=mysqli_connect("localhost","root","","text");
  
    if(mysqli_connect_error())
    {
        echo"failed to connect MYSQL:".mysqli_connect_error();
        exit();
    }
    if(isset($_POST["id"]))
    {
$id=$_POST["id"];
$name=$_POST["name"];
$prenom=$_POST["prenom"];
    
    $sql="insert into tex(`id`,`name`,`prenom`)values
    ('".$_POST["id"]."','".$_POST["name"]."','".$_POST["prenom"]."')";
    }
   
    if(!mysqli_query($con,$sql))
    {
    echo("Error description:".mysqli_error($con));
}
    mysqli_close($con);
    ?>
</body>
</html>