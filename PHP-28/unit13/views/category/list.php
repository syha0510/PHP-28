

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
        <a href="?mod=category&act=create" class="btn btn-primary">Add New Category</a>
        <?php
       if(isset($_COOKIE['success'])){
           ?>
           <div class="alert alert-success" style="margin-top:20px;"><?= $_COOKIE['success']; ?></div>
       <?php } ?>
       <?php
       if(isset($_COOKIE['error'])){
           ?>
           <div class="alert alert-error"><?= $_COOKIE['error']; ?></div>
       <?php } ?>
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
                    <img src="publics/images/<?= $value['thumbnail']  ?>" width="100px" height="100px">

                </td>
                <td><?= $value['description'] ?></td>
                <td>
                    <a href="?mod=category&act=detail&id=<?= $value['id']  ?>" class="btn btn-primary">Detail</a>
                    <a href="?mod=category&act=edit&id=<?= $value['id']  ?>" class="btn btn-success">Edit</a>
                    <a href="?mod=category&act=delete&id=<?= $value['id']  ?>" onclick="return confirm('Bạn có muốn xóa ?')" class="btn btn-danger">Delete</a>
                </td>
            </tr>
          <?php } ?>
        </table>
    </div>
</body>
</html>
