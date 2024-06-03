<?php
require_once '../Controller/StudentController.php';
require_once '../Controller/StudentController.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $msv = $_POST['msv'];
    $hoten = $_POST['hoten'];
    $gioitinh = $_POST['gioitinh'];
    $khoa = $_POST['khoa_select'];

    $studentController = new StudentController();
    $gt = $studentController->getGioitinh($gioitinh);
    $result = $studentController->addStudent($msv, $hoten, $gt, $khoa);

    if ($result) {
        header("Location: StudentList.php");
        exit();
    } else {
        echo "<script>alert('Đã xảy ra lỗi khi thêm mới sinh viên')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thêm mới sinh viên</title>
</head>

<body>
    <div class="container">
        <a href="StudentList.php"><button>Quay lại</button></a>
        <form action="" method="post">
            <h1>Thêm mới sinh viên</h1>
            <label for="msv">Mã SV: </label>
            <input type="text" id="msv" name="msv" required /><br /><br>
            <label for="hoten">Họ tên: </label>
            <input type="text" id="hoten" name="hoten" required /><br /><br>
            <label for="gioitinh">Giới tính: </label>
            <input type="radio" name="gioitinh" id="nam" value="Nam" checked>
            <label for="nam">Nam</label>
            <input type="radio" name="gioitinh" id="nu" value="Nữ">
            <label for="nu">Nữ</label><br /><br>
            <label for="khoa_select">Khoa: </label>
            <select name="khoa_select" id="khoa_select">
                <option value="Khoa Toán">Khoa Toán</option>
                <option value="Khoa Lý">Khoa Lý</option>
                <option value="Khoa Hóa">Khoa Hóa</option>
                <option value="Khoa Công nghệ thông tin">Khoa Công nghệ thông tin</option>
            </select><br /><br>
            <input type="submit" name="submit" value="Lưu lại" />
        </form>
        <br>

    </div>
</body>

</html>