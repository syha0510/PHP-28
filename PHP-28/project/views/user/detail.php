<?php require_once('views/admin/header.php'); ?>


    <table class="table" width="1000px" align="center">
            <thead>
                <th>ID</th>
                <th>Ảnh đại diện</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Thời gian tạo</th>
            </thead>
            <tr>

                    <td><?= $user['id']; ?></td>
                    <td><img src="publics/images/<?= $user['avatar'] ?>" width="100px" height="100px"></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td><?=  $user['created_at']; ?></td>
                </tr>
        </table>
<?php require_once('views/admin/footer.php'); ?>
