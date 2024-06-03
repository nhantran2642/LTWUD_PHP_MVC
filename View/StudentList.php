<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>

<body>
    <a href="../index.php"><button>Đăng xuất</button></a>
    <h1>Danh sách sinh viên</h1>
    <form action="" method="POST">
        <select name="khoa_select" id="khoa_select">
            <option hidden>-Chọn khoa-</option>
            <option value="Khoa Toán">Khoa Toán</option>
            <option value="Khoa Lý">Khoa Lý</option>
            <option value="Khoa Hóa">Khoa Hóa</option>
            <option value="Khoa Công nghệ thông tin">Khoa Công nghệ thông tin</option>
        </select>
        <input type="submit" value="Xem">
        <a href="StudentList.php"><button type="button">Reset</button></a>
    </form><br>
    <a href="StudentAdd.php"><button type="button">Thêm mới</button></a>
    <br><br>
    <table border="1">
        <tr>
            <th>MSV</th>
            <th>Họ và tên</th>
            <th>Giới tính</th>
            <th>Khoa</th>
            <th></th>
        </tr>
        <?php
        include_once '../Controller/StudentController.php';
        $studentController = new StudentController();
        if (isset($_POST['khoa_select']) && !empty($_POST['khoa_select'])) {
            $students = $studentController->getStudentsByKhoa($_POST['khoa_select']);
        } else {
            $students = $studentController->getAllStudents();
        }
        foreach ($students as $student) {
            echo "<tr>
            <td>" . $student->msv . "</td>
            <td>" . $student->hoten . "</td>
            <td>" . $student->gioitinh . "</td>
            <td>" . $student->khoa . "</td>
            <td> <a href='StudentUpdate.php?msv={$student->msv}'><input type='button' value='Sửa'></a>  <a href='StudentDelete.php?msv={$student->msv}'><input type='button' value='Xóa'></a> </td>
            </tr>";
        }
        ?>
</body>

</html>