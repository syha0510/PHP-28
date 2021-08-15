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
       <a href="?mod=post&act=create" class="btn btn-primary">Add New Post</a>
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
               <th>Title</th>
               <th>Thumbnail</th>
               <th>Description</th>
               <th>Action</th>

           </thead>
         <?php
         foreach ($posts as $value) {
          ?>
           <tr>
               <td><?= $value['id']  ?></td>
               <td><?= $value['title'] ?></td>
               <td>
                   <img src="publics/images/<?= $value['thumbnail'] ?>" width="100px" height="100px">
               </td>
               <td><?= $value['description'] ?></td>
               <td>
                   <a href="?mod=post&act=detail&id=<?= $value['id']  ?>" class="btn btn-primary">Detail</a>
                   <a href="?mod=post&act=edit&id=<?= $value['id']  ?>" class="btn btn-success">Edit</a>
                   <a href="?mod=post&act=delete&id=<?= $value['id']  ?>" onclick="return confirm('Bạn có muốn xóa ?')" class="btn btn-danger">Delete</a>
               </td>

           </tr>
         <?php } ?>
       </table>
   </div>
</body>
</html>
