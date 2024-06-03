<?php
include_once("../Model/StudentModel.php");
class StudentController
{

    private $model;

    public function __construct()
    {
        $this->model = new StudentModel();
    }

    public function getAllStudents()
    {
        return $this->model->getAllStudents();
    }

    public function getStudentById($msv)
    {
        return $this->model->getStudentById($msv);
    }

    public function getStudentsByKhoa($khoa)
    {
        return $this->model->getStudentsByKhoa($khoa);
    }

    public function addStudent($msv, $hoten, $gioitinh, $khoa)
    {
        return $this->model->addStudent($msv, $hoten, $gioitinh, $khoa);
    }

    public function updateStudent($msv, $hoten, $gioitinh, $khoa)
    {
        return $this->model->updateStudent($msv, $hoten, $gioitinh, $khoa);
    }

    public function deleteStudent($msv)
    {
        return $this->model->deleteStudent($msv);
    }

    public function getGioitinh($gioitinh)
    {
        if ($gioitinh == "Nam") {
            return "Nam";
        } else if ($gioitinh == "Nữ") {
            return "Nữ";
        }
    }
}
