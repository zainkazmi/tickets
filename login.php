<?php
    session_start();

    if(isset($_POST['login'])){
        include('./class.login.php');
        $login = new Login();
        if($login->isLoggedIn()){
            header('location: index.php');
            session_regenerate_id(true);
        }else{
            $login->showErrors();
        }
    }
    $token = $_SESSION['token'] = md5(uniqid(mt_rand(),true));
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/themes/smoothness/jquery-ui.css">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
</head>
<body>
    <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">    
        <input type="text" name="username"/>
        <input type="password" name="password"/>
        <input type="submit" name="login" value="Log In"/>
        <input type="hidden" name="token" value="<?=$token?>"/>
    </form>
</html> 