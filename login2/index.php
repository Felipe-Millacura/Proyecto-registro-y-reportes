<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../login2/inicio.css">
    <title>Document</title>
</head>
<body>
    <div class="container-all">
        <div class="ctn-form">
            <h1 class="title">Inicio de sesion</h1>
                <form action="cek_login.php" method="post">
                    <label>Nombre</label>
                    <input type="text" name="username" placeholder="Ej: Andres" required="requiered">
                    <label>Contraseña</label>
                    <input type="password" name="password" placeholder="*********" required="requiered">
                    
                    <input type="submit" value="Iniciar Sesion">
                </form>
            <span class="text-footer">Fan´s Levi Live
            </span>
         </div>
         <div class="ctn-txt">
            <div class="capa"></div>
            <img src="../images/logo.png" alt="error">
        </div>
    </div>
</body>
</html>