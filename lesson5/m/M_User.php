<?php
session_start();
class M_User {
	function auth($login,$pass){
        try {
            $db = new PDO('mysql:dbname=lesson6;host=localhost', 'mysql', '');
            $res = $db->prepare("SELECT id, role FROM users WHERE login = :login AND pass = :pass");
            $res->execute([':login'=>$login, ':pass'=>$pass]);
            $error_array = $db->errorInfo();
            if($db->errorCode() != 0000) {
                echo "SQL ошибка: " . $error_array[2] . '<br /><br />';
            }
            $result = $res->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e)
        {
            die("Error: ".$e->getMessage());
        }
        if(count($result) == 1){
            $_SESSION['id'] = $result[0]['id'];
            return true;
        }else{
            return false;
        }
    }

    function reg($login,$pass){
        try {
            $db = new PDO('mysql:dbname=lesson6;host=localhost', 'mysql', '');
            $res = $db->prepare("SELECT id, role FROM users WHERE login = :login AND pass = :pass");
            $res->execute([':login'=>$login, ':pass'=>$pass]);
            $result = $res->fetchAll(PDO::FETCH_ASSOC);
            if(count($result) == 1){
                return false;
            }else {

                $res = $db->prepare("INSERT INTO users (login, pass) VALUES (:login,:pass)");
                $res->execute([':login' => $login, ':pass' => $pass]);
                $error_array = $db->errorInfo();
                if ($db->errorCode() != 0000) {
                    echo "SQL ошибка: " . $error_array[2] . '<br /><br />';
                }
            }
        } catch (PDOException $e)
        {
            die("Error: ".$e->getMessage());
        }
            return true;
    }


    function ex(){
        unset($_SESSION['id']);
        session_destroy();
        header("location:index.php");
    }

    function ident(){
        try {
            $id = $_SESSION['id'];
            $db = new PDO('mysql:dbname=lesson6;host=localhost', 'mysql', '');
            $res = $db->prepare("SELECT login, role FROM users WHERE id = :id");
            $res->execute([':id'=>$id]);
            $error_array = $db->errorInfo();
            if($db->errorCode() != 0000) {
                echo "SQL ошибка: " . $error_array[2] . '<br /><br />';
            }
            $result = $res->fetchAll(PDO::FETCH_ASSOC);
            $user = $result[0]['login'];
        } catch (PDOException $e)
        {
            die("Error: ".$e->getMessage());
        }
        return $user;
    }
}