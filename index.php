<?php
    session_start();

    if(isset($_POST['search'])){
        include('class.search.php');
        $search = new Search();
        if($search->didSearch()){
            header('location:list.php');
            session_regenerate_id(true);
        }else{
            $search->showErrors();
        }
    } else{
        include ('./class.login.php');
        $login = new Login();
        if($login->isLoggedIn2()){
            echo "Members Area";
        }
        else{
            echo "Wrong Page";
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
    <script>
        $(function() {
            $( "#tabs" ).tabs();
        });
    </script>
</head>
<body>
    <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">    
    <div class="site-heading">
        <div id="tabs">
          <ul>
            <li><a href="#tabs-1">Speeding</a></li>
            <li><a href="#tabs-2">Traffic</a></li>
            <li><a href="#tabs-3">Parking</a></li>
            <li><a href="#tabs-3">Filing</a></li>
          </ul>
          <div id="tabs-1">
                    <h3>Search and Save on Tickets</h3>
                    <label style="display:block">Where did you get the ticket?
                        <input name="cityName" type="text" />
                    </label>
                    <br/>
                    <label style="display:block">
                        Date of Infraction
                        <input name="speedInfractionDate" type="datepicker">
                    </label>
                    <br/>

                    <label style="display:block">
                        <label>Speed
                        <select name="speedLimit">
                            <option value="1">0-15km over</option>
                            <option value="2">16-29km over</option>
                            <option value="3">30-49km over</option>
                            <option value="4">50+ km over</option>
                        </select>
                    </label>
                    <input type="submit" name="search">Search Lawyers</button>
          </div>
          <div id="tabs-2">
            <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
          </div>
          <div id="tabs-3">
            <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
            <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
          </div>
          <div id="tabs-3">

          </div>
        </div>
    </div>
    <input type="hidden" name="token" value="<?=$token?>"/>
    </form>
<? include 'footer.php';?>