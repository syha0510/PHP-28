<?php require('views/admin/header.php') ?>
<div class="container">
    <h3 class="text-center">--- POSTS ---</h3>

    <table class="table">
        <thead>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Ảnh mô tả</th>
            <th>Mô tả</th>

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
<?php require('views/admin/footer.php') ?>
