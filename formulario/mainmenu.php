<?php

include_once('../HTML/Head.php');

?>
<link rel="stylesheet" href="../css/text.css">
<form>
    <body >
        <img class="img" src="../images/logo.png" alt="img">
        <br><br>
        <div class="container">
             <div class="document">   
            <h1>Bienvenido</h1>
            <?php 
                session_start();
                if($_SESSION['id_level']==""){
                    header("location: ../login2/index.php");
                }
            ?>
            <hr class="brace">
        <div class="document__content">
    </div>    
  </div> 
</div>
    </body>
</form>