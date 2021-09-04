
<?php require('views/admin/header.php') ?>
<div class="container">

    <form action="?admin=admin&mod=post&act=update&id=<?= $post['id'] ?>" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tiêu đề</label>
            <input type="hidden" name="id" value="<?= $post['id'] ?>">
            <input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $post['title'] ?>">
        </div>
        <div class="form-group">
            <label for="">Nội dung</label>
            <input type="text" class="form-control" id="" placeholder="" name="content" value="<?= $post['content'] ?>">
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <textarea name="description" id="description" rows="8" cols="80" value="<?= $post['description'] ?>"></textarea>
        </div>

        <div class="form-group">
            <label for="">Ảnh mô tả</label>
            <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
        </div>
        <div class="form-group">
            <label for="">Danh mục </label>
            <select name="category_id" class="form-control">
              <option >Danh mục cha</option>
              <?php foreach ($categories as $cate) {?>
                <option <?php if($post['category_id']==$cate['id'])echo"selected"  ?> value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
              <?php } ?>
            </select>
        </div>
        <button type="submit" id="btn" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
<?php require('views/admin/footer.php') ?>
