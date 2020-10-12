<?php
    session_start();
    require_once "../config.php";

    if (isset($_GET["userName"])){
        $userName=$_GET["userName"];
        $password=$_GET["password"];

        $sqlConn = new mysqli(DBSERVERNAME, DBUSERNAME, DBPASSWORD, DBNAME);

        $sql = "SET CHARACTER SET UTF8"; // SQL dotaz nastavující kódovou stránku pro komunikaci s DB serverem 
        $sqlConn->query($sql);

        $sql="SELECT * FROM users WHERE user='$userName' AND password='$password'";
        $result = $sqlConn->query($sql);

        if($result->num_rows()>0){
            $_SESSION["admin"]=true;
            echo "<p><a href='addArticleForm.html'>Add Article</a></p>";
            echo "<p><a href='deletArticleForm.html'>Delete Article</a></p>";
        }
        else{
            echo "<p>Přihlašovací údaje jsou zadány nesprávně</p>";
            echo "<p><a href='loginForm.php'>Zadat znovu</a>"
        }
    }
?>