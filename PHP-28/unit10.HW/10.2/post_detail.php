<?php
require_once 'connection.php';

$id=isset($_GET['id'])?$_GET['id']:0;

$sql="SELECT * FROM posts WHERE id=" .$id;


$post=$conn->query($sql)->fetch_assoc();


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
        
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Thumbnail</th>
                <th>Description</th>

            </thead>

            <tr>
                <td><?= $post['id']  ?></td>
                <td><?= $post['title'] ?></td>
                <td>
                    <img src="https://lh3.googleusercontent.com/proxy/V4Tj1FFGMTnmAJLxRY90gJtTQmVSumpFODSSSUT1NtFJqaWUg8lxdpe3Itq-EVftSDilFMwAraV3vrqrAvA9P8cq-YjBNlBpTVOJy4LlYaxiAKewoWu-X_xRGIl1NtJCxhsMe_Ld8NTr5CpEyedLJJCgJo-BtajlqBWf9-goOJuE17vbzA" width="100px" height="100px">
                </td>
                <td><?= $post['description'] ?></td>

            </tr>

        </table>
    </div>
 </body>
 </html>
