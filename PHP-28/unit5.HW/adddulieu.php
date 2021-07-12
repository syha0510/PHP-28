<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container">
        <form  action="adddulieu_process.php" method="POST" role="form">
          <br>
          <legend style="text-align:center;">Nhập thông tin người dùng</legend>

            <div class="form-group">
                  <label style="font-weight:800;" for=""> Họ và tên</label>
                  <input type="text" class="form-control" id="" name="hoten" >
            </div>

            <br>

            <div class="form-group">
                  <label style="font-weight:bold;" for="">Giới tính</label>
                  <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="gioitinh" id="" value="nam" >Nam
                  </div>
                  <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="gioitinh" id="" value="nu" >Nữ
                  </div>
                  <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="gioitinh" id="" value="khac" >Khác
                  </div>
            </div>
            <br>
            <div class="form-group">
                  <label style="font-weight:bold;" for="">Ngày/Tháng/Năm sinh</label>
                  <input type="text" class="form-control" id="" name="ngaythangnam" >
            </div>

            <br>
            <div class="form-group">
                  <label style="font-weight:bold;" for=""> Quê quán</label>
                  <input type="text" class="form-control" id="" name="quequan" >
            </div>

            <br>
            <div class="form-group">
                  <label style="font-weight:bold;" for="">Ngoại ngữ</label>
                  <div class="form-check">
                    <input class="form-check-input position-static" type="checkbox" id="" value="tienganh" name="ngoaingu" >Tiếng Anh
                  </div>
                  <div class="form-check">
                    <input class="form-check-input position-static" type="checkbox" id="" value="tiengnhat" name="ngoaingu" >Tiếng Nhật
                  </div>
                  <div class="form-check">
                    <input class="form-check-input position-static" type="checkbox" id="" value="tiengphap" name="ngoaingu" >Tiếng Pháp
                  </div>
            </div>

            <br>
            <div class="form-group">
              <label style="font-weight:bold;" for="">Thông tin thêm</label>
              <br>
              <textarea name="thongtinthem" rows="8" cols="80"></textarea>
            </div>

          <button type="submit" class="btn btn-primary">Lưu thông tin</button>



        </form>
      </div>

    </div>
  </body>
</html>
