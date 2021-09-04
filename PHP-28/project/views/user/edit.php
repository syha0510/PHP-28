<?php require_once('views/admin/header.php'); ?>
<body>
    <div class="container">

    <a href="?admin=admin&mod=user&act=list" class="btn btn-success">quay lại</a>
        <form action="?admin=admin&mod=user&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Tên</label>
                <input type="text" class="form-control" id="name1" placeholder="" name="name" value="<?= $user['name'] ?>">
                <input type="hidden" name="id" value="<?= $user['id']; ?>">
            </div>
             <div class="form-group">
                <label for="email">Ảnh đại diện</label>
                <input type="file" class="form-control" id="avatar" placeholder="" name="avatar" >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="" name="email" value="<?= $user['email'];?>">
            </div>
            <div class="form-group">
                <label for="email">Mật khẩu</label>
                <input type="password" class="form-control" id="password" placeholder="" name="password" value="<?= $user['password']; ?>" >
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</body>
</html>
