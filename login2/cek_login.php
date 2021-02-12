<?php
session_start();

require('../login2/conectar.php');

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn, "select * from usuario where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    
    if($data['id_level']=='1'){
        $_SESSION['username'] = $username;
        $_SESSION['id_level'] = '1';

        header("location: ../formulario/mainmenu.php");

    }elseif ($data['id_level']=='2'){
        $_SESSION['username'] = $username;
        $_SESSION['id_level'] = '2';

        header("location: ../FormularioUser/mainmenu.php");
    }else{
        header("location: ../login2/error.php");
    }

}else{
    header("location: ../login2/error.php");
}
?>