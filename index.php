<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>

<body>
    <form action="./Controller/LoginController.php" method="post">
        <label>Tên đăng nhập: </label>
        <input type="text" id="username" name="username"> <br><br>
        <label>Mật khẩu: </label>
        <input type="password" id="password" name="password">
        <br><br>
        <input type="submit" value="Đăng nhập">

    </form>

</body>

</html>