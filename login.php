<?php
require_once ("config.php") ;
$username= $_POST['username'];
$password= $_POST['password'];
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $sql_select = "SELECT * FROM utenti WHERE username ='$username' ";
    if($result = $connessione->query($sql_select)){
        if($result->num_rows == 1){
            $row = $result->fetch_array(MYSQLI_ASSOC);
                session_start();
                $_SESSION['loggato'] = true;
                $_SESSION['username'] = $row['username'];
                header("location: areaprivata.php");
        }else{
            echo "<center>"; 
        echo "<span style=\"color: red ;position: relative; font-size: 60pt; width:300pt; margin-left:-5pt; \">LA PASSWORD NON E' CORRETTA</span>";
        echo "</center>";
        echo "<center>"; 
        echo "<span style=\"color: black ;position: relative; font-size: 40pt; width:300pt; margin-left:-5pt; \">LA PREGHIAMO DI RIPROVARE <br /><a href='login.html'>RITORNA</a><span></span>";
        echo "</center>";
        }
    }else{  
        echo "<center>"; 
        echo "<span style=\"color: red ;position: relative; font-size: 60pt; width:300pt; margin-left:-5pt;> NON CI SONO ACCOUNT CON QUEL NOME </span>";
        echo "</center>";
        echo "<center>"; 
        echo "<span style=\"color: black ;position: relative; font-size: 40pt; width:300pt; margin-left:-5pt;\"> LA PREGHIAMO DI RIPROVARE <br /><a href='login.html'>RITORNA</a><span></span>";
        echo "</center>";
}
$connessione->close();
}
?>
