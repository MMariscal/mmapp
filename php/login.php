<?php

    if(!empty($_POST)){
        if(isset($_POST["username"]) &&isset($_POST["password"])){
            if($_POST["username"]!=""&&$_POST["password"]!=""){
                include "conexion.php";

                $plain_password = $_POST["password"];
                $password = md5 ($plain_password);

                $user_id=null;
                $sql1= "select * from users where (username=\"$_POST[username]\" or email=\"$_POST[username]\") and password='$password'";
                $query = $con->query($sql1);
                while ($r=$query->fetch_array()) {
                    $user_id=$r["id_user"];
                    $fullname=$r["fullname"];
                    break;
                }
                if($user_id==null){
                    print "<script>alert(\"Acceso inválido.\");window.location='../login.php';</script>";
                }else{
                    session_start();
                    $_SESSION["user_id"]=$user_id;
                    $_SESSION["fullname"]=$fullname;
                    $_SESSION["init_session"]=true;
                    print "<script>window.location='../home.php';</script>";
                }
            }
        }
    }

?>
