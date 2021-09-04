<?php require_once("views/admin/header.php") ?>

<div class="container">

    <form action="?admin=admin&mod=category&act=update&id=<?= $category['id'] ?>" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên</label>
            <input type="hidden" name="id" value="<?= $category['id'] ?>">
            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $category['name'] ?>">
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <textarea name="description" id="description" rows="8" cols="80" value="<?= $category['name'] ?>"></textarea>
        </div>
        <div class="form-group">
            <label for="">Ảnh mô tả</label>
            <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
<?php require_once("views/admin/footer.php") ?>
