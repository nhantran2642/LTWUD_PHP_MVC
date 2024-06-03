<?php
require_once '../Database/Database.php';
require_once 'StudentEntity.php';

class StudentModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllStudents()
    {
        $connection = $this->db->getConnection();
        $sql = "SELECT * FROM student";
        $result = $connection->query($sql);

        $students = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $student = new StudentEntity($row["msv"], $row["hoten"], $row["gioitinh"], $row["khoa"]);
                $students[] = $student;
            }
        }
        return $students;
    }

    public function getStudentById($msv)
    {
        $connection = $this->db->getConnection();
        $sql = "SELECT * FROM student WHERE msv = $msv";
        $result = $connection->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $student = new StudentEntity($row["msv"], $row["hoten"], $row["gioitinh"], $row["khoa"]);
            return $student;
        } else {
            return null;
        }
    }

    public function getStudentsByKhoa($khoa)
    {
        $connection = $this->db->getConnection();
        $sql = "SELECT * FROM student WHERE khoa = '" . $khoa . "'";
        $result = $connection->query($sql);

        $students = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $student = new StudentEntity($row["msv"], $row["hoten"], $row["gioitinh"], $row["khoa"]);
                $students[] = $student;
            }
        }
        return $students;
    }

    public function addStudent($msv, $hoten, $gioitinh, $khoa)
    {
        $connection = $this->db->getConnection();
        $hoten = $connection->real_escape_string($hoten);
        $khoa = $connection->real_escape_string($khoa);

        $sql = "INSERT INTO student (msv, hoten, gioitinh, khoa) VALUES ('$msv', '$hoten', '$gioitinh', '$khoa')";
        $result = $connection->query($sql);
        return $result;
    }

    public function updateStudent($msv, $hoten, $gioitinh, $khoa)
    {
        $connection = $this->db->getConnection();
        $hoten = mysqli_real_escape_string($connection, $hoten);
        $khoa = mysqli_real_escape_string($connection, $khoa);

        $sql = "UPDATE student SET hoten = '$hoten', gioitinh = '$gioitinh', khoa = '$khoa' WHERE msv = '$msv'";
        $result = $connection->query($sql);
        return $result;
    }

    public function deleteStudent($msv)
    {
        $connection = $this->db->getConnection();
        $sql = "DELETE FROM student WHERE msv = $msv";
        $result = $connection->query($sql);
        return $result;
    }
}
