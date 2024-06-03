<?php
require_once '../Model/LoginModel.php';

class LoginController
{
    private $account;

    public function __construct()
    {
        $this->account = new LoginModel();
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $admin = $this->account->getAccountByUsername($username);

            if ($admin != null) {
                if ($password == $admin->password) {
                    header("Location: ../View/StudentList.php");
                    exit();
                } else {
                    echo "Tên đăng nhập hoặc mật khẩu không đúng";
                }
            } else {
                echo "Tên đăng nhập hoặc mật khẩu không đúng";
            }
        }
    }
}

$admin_account = new LoginController();
$admin_account->login();
