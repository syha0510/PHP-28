<?php require_once("views/admin/header.php") ?>
<style type="text/css">
    .error{
        width: 100%;
        font-size: 16px;
        color: red;
    }
</style>
<div class="container">

    <form id="Form" action="?admin=admin&mod=category&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên</label>
            <input type="text" class="form-control" id="" placeholder="" name="name">
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <textarea name="description" id="" rows="8" cols="80" ></textarea>
        </div>
        <div class="form-group">
            <label for="">Ảnh mô tả</label>
            <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
        </div>

        <button type="submit" class="btn btn-primary">Tạo mới</button>
    </form>

</div>

<?php require_once("views/admin/footer.php") ?>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script type="text/javascript">
        $(document).ready(function(){

            $("#Form").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "name": {
                        required: true
                    },
                    "thumbnail":{
                        required:true
                    },

                },
                messages: {
                    "name": {
                        required: "Vui lòng nhập tên",
                    },
                    "thumbnail": {
                        required: "Vui lòng chọn ảnh",
                    },


                }
            });
        })
    </script>
