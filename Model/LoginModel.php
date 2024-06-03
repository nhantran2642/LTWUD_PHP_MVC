<?php
require_once '../Database/Database.php';
require_once 'LoginEntity.php';

class LoginModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAccountByUsername($username)
    {
        $connection = $this->db->getConnection();
        $sql = "SELECT * FROM admin WHERE username = '" . $username . "'";
        $result = $connection->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $admin = new LoginEntity($row["id"], $row["username"], $row["password"]);
            return $admin;
        } else {
            return null;
        }
    }
}
