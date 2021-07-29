<?php
require_once('connection.php');

$sql="SELECT posts.* ,categories.name FROM posts inner join categories on posts.category_id=categories.id";


$results=$conn->query($sql);

$posts =array();
while ($row=$results->fetch_assoc()) {
  $posts[]=$row;
}

// print_r($posts);
// die();



 ?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POST</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POSTS ---</h3>
        <a href="post_add.php" class="btn btn-primary">Add New Post</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Action</th>
                <th>Category</th>
            </thead>
          <?php
          foreach ($posts as $key => $value) {


           ?>
            <tr>
                <td><?= $value['id']  ?></td>
                <td><?= $value['title'] ?></td>
                <td>
                    <img src="https://lh3.googleusercontent.com/proxy/V4Tj1FFGMTnmAJLxRY90gJtTQmVSumpFODSSSUT1NtFJqaWUg8lxdpe3Itq-EVftSDilFMwAraV3vrqrAvA9P8cq-YjBNlBpTVOJy4LlYaxiAKewoWu-X_xRGIl1NtJCxhsMe_Ld8NTr5CpEyedLJJCgJo-BtajlqBWf9-goOJuE17vbzA" width="100px" height="100px">
                </td>
                <td><?= $value['description'] ?></td>
                <td>
                    <a href="post_detail.php?id=<?= $value['id']  ?>" class="btn btn-primary">Detail</a>
                    <a href="post_edit.php?id=<?= $value['id']  ?>" class="btn btn-success">Edit</a>
                    <a href="post_delete.php?id=<?= $value['id']  ?>" class="btn btn-danger">Delete</a>
                </td>
                <td><?= $value['name'] ?></td>
            </tr>
          <?php } ?>
        </table>
    </div>
</body>
</html>
