<?php require_once('views/admin/header.php'); ?>
<style type="text/css">
    .error{
        width: 100%;
        font-size: 16px;
        color: red;
    }
</style>
<div class="container">


    <form id="Form" action="?admin=admin&mod=user&act=store" method="POST" role="form" enctype="multipart/form-data">

        <div class="form-group">
            <label for="name">Tên</label>
            <input type="text" class="form-control" id="name" placeholder="" name="name">
        </div>
        <div class="form-group">
            <label for="name">Ảnh đại diện</label>
            <input type="file" class="form-control" id="avatar" placeholder="" name="avatar">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="" name="email">
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input  type="password" class="form-control" id="password" placeholder="" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Tạo mới</button>
    </form>
</div>
<?php require_once('views/admin/footer.php'); ?>
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
                    "avatar":{
                        required:true
                    },
                    "email": {
                        required: true
                    },
                    "password":{
                        required:true
                    },

                },
                messages: {
                    "name": {
                        required: "Vui lòng nhập tên",
                    },
                    "avatar": {
                        required: "Vui lòng chọn ảnh đại diện",
                    },
                    "email": {
                        required: "Vui lòng nhập email",
                    },
                    "password": {
                        required: "Vui lòng nhập mật khẩu",
                    }
                }
            });
        })
    </script>
