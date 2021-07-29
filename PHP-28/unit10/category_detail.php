<?php
require_once 'connection.php';

$id=isset($_GET['id'])?$_GET['id']:0;

$sql="SELECT * FROM categories WHERE id=" .$id;


$category=$conn->query($sql)->fetch_assoc();
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
        <a href="#" class="btn btn-primary">Add New Category</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>

            </thead>

            <tr>
                <td><?= $category['id']  ?></td>
                <td><?= $category['name'] ?></td>
                <td>
                    <img src="https://image.thanhnien.vn/660/uploaded/quangtuyen/2019_03_05/u23tuanlinh_fpjh.jpg" width="100px" height="100px">
                </td>
                <td><?= $category['description'] ?></td>
                
            </tr>

        </table>
    </div>
 </body>
 </html>
