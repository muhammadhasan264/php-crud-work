<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<form action="query.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="enter your username">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"></label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="image">
  </div>
  <button type="submit" class="btn btn-primary" name="btn">Submit</button>
</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>