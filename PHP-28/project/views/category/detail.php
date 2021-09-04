<?php require_once("views/admin/header.php") ?>
<div class="container">

    <table class="table">
        <thead>
            <th>ID</th>
            <th>Tên</th>
            <th>Ảnh mô tả</th>
            <th>Mô tả</th>

        </thead>

        <tr>
            <td><?= $category['id']  ?></td>
            <td><?= $category['name'] ?></td>
            <td>
                <img src="publics/images/<?= $category['thumbnail']  ?>" width="100px" height="100px">
            </td>
            <td><?= $category['description'] ?></td>

        </tr>

    </table>
</div>
<?php require_once("views/admin/footer.php") ?>
