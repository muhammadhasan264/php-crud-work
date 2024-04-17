<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

<?php
$connect= mysqli_connect("localhost", "root", "", "codewithhasan");
$query= "select* from personal";
$result= mysqli_query($connect, $query);
?>




  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">age</th>
      <th scope="col">city</th>
    </tr>
  </thead>
  <tbody>
<?php
while($data= mysqli_fetch_assoc($result)){
?>
  <tr>
    <td><?php echo $data["id"]?></td>
    <td><?php echo $data["name"]?></td>
    <td><?php echo $data["age"]?></td>
    <td><?php echo $data["city"]?></td>
  </tr>
  <?php
}
?>

  </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>