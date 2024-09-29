<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>id</th><th>name</th><th>prenom</th></tr>
   <?php 
      require("index.php");
      $con=mysqli_connect("localhost","root","","text");
      if(mysqli_connect_error())
      {
          echo"failed to connect MYSQL:".mysqli_connect_error();
          exit();
      }
      $sql="select* from tex";
      if(!mysqli_query($con,$sql))
      {
        echo("Error description:".mysqli_error($con));
      }
      $query=mysqli_query($con,$sql);
      while($fetch=mysqli_fetch_assoc($query))
      {
        echo"<tr><td>".$fetch["id"]."</td><td>".$fetch["name"]."</td><td>".$fetch["prenom"]."</td></tr>";
      }
      mysqli_close($con);
   ?> 
   </table>
</body>
</html>