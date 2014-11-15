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
    <link type = "text/css" rel="stylesheet" href="css/login.css">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
</head>
<body>
    <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">  
        
		<div id = "block">
			<label id= "user" for = "name">p</label>	
			<input id= "name" type="text" name="username" placeholder="Email" required/>
			
			<label id= "pass" for = "password">k</label>
			<input id = "password" type="password" name="password" placeholder="Password" required/>
			
			<input id="submit" type="submit" name="submit" value="a"/>
			
			<input type="hidden" name="token" value="<?=$token?>"/>
		</div>
    </form>
	
	<div id="option"> 
	    <p>Login</p> 
	    <a href="#">forgot password?</a>
    </div>
	
	
</html> 