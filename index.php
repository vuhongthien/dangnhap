<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div id="wrapper">
    <form action="xulylogin.php" method="Post"  id="form-login">
        <h1 class="form-heading">Đăng Nhập</h1>
        <div class="form-group">
            <i class="far fa-user"></i>
            <label>UserName</label>
            <input type="text" class="form-input" name="username" id="txtUserName" placeholder="Tên đăng nhập">
        </div>

        <div class="form-group">
            <i class="far fa-key"></i>
            <label>Mật khẩu</label>
            <input type="password" class="form-input" name="password" id="txtmatkhau" placeholder="Mật khẩu">
        </div>
        
    </form>
</div>
</body>
</html>