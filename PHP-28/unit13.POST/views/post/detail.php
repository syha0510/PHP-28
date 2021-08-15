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
                  <img src="publics/images/<?= $post['thumbnail'] ?>" width="100px" height="100px">
               </td>
               <td><?= $post['description'] ?></td>

           </tr>

       </table>
   </div>
</body>
</html>
