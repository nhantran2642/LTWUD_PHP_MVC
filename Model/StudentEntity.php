<?php

class StudentEntity
{
    public $msv;
    public $hoten;
    public $gioitinh;
    public $khoa;

    public function __construct($msv, $hoten, $gioitinh, $khoa)
    {
        $this->msv = $msv;
        $this->hoten = $hoten;
        $this->gioitinh = $gioitinh;
        $this->khoa = $khoa;
    }
}
