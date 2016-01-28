<?php

    if(!empty($_POST)){
        if(isset($_POST["username"]) &&isset($_POST["fullname"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
            if($_POST["username"]!=""&& $_POST["fullname"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
                include "conexion.php";

                // Las variables que vienen del POST las pasamos a variable tradicional
                $username = $_POST["username"];
                $fullname = $_POST["fullname"];
                $email = $_POST["email"];
                $plain_password = $_POST["password"];
                $password = md5 ($plain_password);

                $found=false;
                // $sql1= "select * from user where username=\"$_POST[username]\" or email=\"$_POST[email]\"";
                $sql1 = "SELECT * FROM USERS WHERE USERNAME ='$username' OR EMAIL='$email'";

                $query = $con->query($sql1);

                /*while ($r=$query->fetch_array()) {
                    $found=true;
                    break;
                }*/
                if($found){
                    print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registro.php';</script>";
                }
                $sql = "INSERT INTO users (fullname, username, email, password, created_at) VALUES ('$fullname', '$username', '$email', '$password', NOW())";

                /*$sql = "insert into user(username,fullname,email,password,created_at) value (\"$_POST[username]\",\"$_POST[fullname]\",\"$_POST[email]\",\"$_POST[password]\",NOW())"; */

                $query = $con->query($sql);

                if($query!=null){
                    print "<script>alert(\"Registro exitoso. Puede proceder con su login\");window.location='../login.php';</script>";
                }else{
                    print "<script>alert(\"Registro fallido. Por favor, inténtelo de nuevo\");window.location='../registro.php';</script>";
                }
            }
        }
    }



?>


