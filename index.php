<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <div id="main-nav"></div>

    <style>
    .nav-tabs>li>a{
        background-color:#fff;
        color: #0a84c1;
    }
    .nav-tabs>li.active>a{
        background-color:#eee;
    }
    </style>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <ul class="nav nav-tabs" role="tablist" style="color: #0a84c1" >
                          <li class="active" ><a style="margin-right: 10px;" href="#home" role="tab" data-toggle="tab">Home</a></li>
                          <li><a href="#profile" style="margin-right: 10px;" role="tab" data-toggle="tab">Profile</a></li>
                          <li><a href="#messages" style="margin-right: 10px;" role="tab" data-toggle="tab">Messages</a></li>
                          <li><a href="#settings" style="margin-right: 10px;" role="tab" data-toggle="tab">Settings</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content" style="min-height:350px; background-color:#eee; color:black;">
                          <div class="tab-pane active" id="home" style="padding:50px;">
                                <form id="hotels-form" pclnform="5" fmproduct="hotels" data-section="HotelsForm" method="POST" action="list.php">
                                    <span style="font: normal 1.8754em 'Oswald', Arial, Helvetica, Sans-serif; padding: 0 0 14px; text-align: left; margin-bottom:30px; display:inline-block">Search and Save on Tickets</span>
                                    <label for="hotel-dest" class="location-input">
                                        Where did you get the ticket?
                                        <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input name="cityName" add-ac="city|airport|poi|hotel" pclnfield="d" type="text" id="hotel-dest" pclnfocusnext="hotel-checkin" pclnechoinput="nyop-hotel-dest|sopq-hotel-dest" placeholder="City of Infraction" autocomplete="off" x-webkit-speech="" class="ui-autocomplete-input">
                                    </label>
                        
                                    <label for="hotel-checkin" class="calendar-input">
                                        Date of Infraction
                                        <input class="datepicker" placeholder="Choose Date" data-date-format="mm/dd/yyyy">
                                        
                                    </label>
                
                                    <label for="hotel-rooms" class="select">
                                        <label for="hotel-checkin" class="calendar-input">
                                                    Speed
                                        <select pclnfield="qty" id="hotel-rooms" name="numberOfRooms">
                                            <option value="1">0-15km over</option>
                                            <option value="1">16-29km over</option>
                                            <option value="1">30-49km over</option>
                                            <option value="1">50+ km over</option>
                                        </select>
                                    </label>                        
                                    <button id="hotel-btn-submit-retl" class="button primary large" type="submit" value="retl" >Search Lawyers</button>
                                </form>

                          </div>
                          <div class="tab-pane" id="profile">Profile</div>
                          <div class="tab-pane" id="messages">Messages</div>
                          <div class="tab-pane" id="settings">Settings</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Man must explore, and this is exploration at its greatest
                        </h2>
                        <h3 class="post-subtitle">
                            Problems look mighty small from 150 miles up
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                        </h2>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Science has not yet mastered prophecy
                        </h2>
                        <h3 class="post-subtitle">
                            We predict too much for the next year and yet far too little for the next ten.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Failure is not an option
                        </h2>
                        <h3 class="post-subtitle">
                            Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
                </div>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.js" charset="UTF-8"></script>


    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script> 
        $(function(){
          $("#main-nav").load("nav.html"); 
        });
        $('.datepicker').datepicker();

    </script> 

</body>

</html>
