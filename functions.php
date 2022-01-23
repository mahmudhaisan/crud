<?php

class CrudUsers
{

    private $dbConnection;

    public function __construct()
    {
        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $dbName = 'crud-users';

        $this->dbConnection = mysqli_connect($host, $userName, $password, $dbName);
    }

    public function usersInfo($data)
    {
        $user = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $image = $_FILES['pic']['name'];
        $tempImage = $_FILES['pic']['tmp_name'];


        $sql = "INSERT INTO `users-info` (name, email, phone, image) VALUE ('$user', '$email', $phone, '$image')"; //need to write table name between ` ` and values must be in quotation
        if (mysqli_query($this->dbConnection, $sql)) {
            move_uploaded_file($tempImage,  "uploads/" . $user . '-' . $image);
            return 'Data added succesfully!!';
        } else {
            return 'please fill all the fields';
        }
    }


    public function showData()
    {
        $sql = 'SELECT * FROM `users-info`';
        $query = mysqli_query($this->dbConnection, $sql);
        return $query;
    }
}
