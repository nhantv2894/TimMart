<!DOCTYPE html>
<html >
    <?php require_once("head.php"); ?>
    <link rel="stylesheet" href="/css/login.css">
<body>
    <div class="pen-title">
      <h1>TIMMART</h1>
    </div>
    <div class="container">
      <div class="card"></div>
      <div class="card">
        <h1 class="title">Đăng Nhập</h1>

        <form>
          <div class="input-container">
            <input type="text" id="Username" required="required"/>
            <label for="Username">Tên Đăng Nhập</label>
            <div class="bar"></div>
          </div>
          <div class="input-container">
            <input type="password" id="Password" required="required"/>
            <label for="Password">Mật khẩu</label>
            <div class="bar"></div>
          </div>
          <div class="button-container">
            <button><span>Go</span></button>
          </div>
          <div class="footer"><a href="#">Quên mật khẩu?</a></div>
        </form>
      </div>
      <div class="card alt">
        <div class="toggle"></div>
        <h1 class="title">Đăng Ký Ngay!
          <div class="close"></div>
        </h1>
        <form>
<!--          <div class='login-other'>-->
<!--            <i class="fa fa-facebook-square fa-3x"></i>-->
<!--            <i class="fa fa-google-plus-square fa-3x"></i>-->
<!--          </div>-->
          <div class="input-container">
            <input type="text" id="Username" required="required"/>
            <label for="Username">Tên Tài Khoản</label>
            <div class="bar"></div>
          </div>
          <div class="input-container">
            <input type="password" id="Password" required="required"/>
            <label for="Password">Mật Khẩu</label>
            <div class="bar"></div>
          </div>
          <div class="input-container">
            <input type="password" id="Repeat Password" required="required"/>
            <label for="Repeat Password">Nhập Lại Mật Nhẩu</label>
            <div class="bar"></div>
          </div>
          <div class="button-container">
            <button><span>Đăng Ký</span></button>
          </div>
        </form>
      </div>
    </div>
    <?php require_once("footer.php"); ?>

  </body>
</html>
