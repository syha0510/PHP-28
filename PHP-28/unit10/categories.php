<?php
require_once('connection.php');

$sql="SELECT * FROM categories";

$results=$conn->query($sql);

$categories =array();
while ($row=$results->fetch_assoc()) {
  $categories[]=$row;
}


 ?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="category_add.php" class="btn btn-primary">Add New Category</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Action</th>
            </thead>
          <?php
          foreach ($categories as $key => $value) {


           ?>
            <tr>
                <td><?= $value['id']  ?></td>
                <td><?= $value['name'] ?></td>
                <td>
                    <img src="uploads/<?= $value['thumbnail']  ?>" width="100px" height="100px">

                </td>
                <td><?= $value['description'] ?></td>
                <td>
                    <a href="category_detail.php?id=<?= $value['id']  ?>" class="btn btn-primary">Detail</a>
                    <a href="category_edit.php?id=<?= $value['id']  ?>" class="btn btn-success">Edit</a>
                    <a href="category_delete.php?id=<?= $value['id']  ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
          <?php } ?>
        </table>
    </div>
</body>
</html>
