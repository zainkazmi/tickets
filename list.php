 <?php
session_start();
include ('./class.search.php');

$search = new Search();
if($search->didSearch()){
    $result = $search->getResults();
}
else{
    echo "Wrong page";
}

echo "alert('hi')";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/themes/smoothness/jquery-ui.css">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://www.priceline.com/hotel/content/css/list/ht-listings.css?v=20140729">
    <link rel="stylesheet" href="http://www.priceline.com/hotel/content/css/list/listitem.css?v=20141114">
    <link rel="stylesheet" href="http://www.priceline.com/sharedapps/content/css/pcln_main.css">
    <link rel="stylesheet" href="http://www.priceline.com/sharedapps/content/css/grid_1010_12col.css">
    
    <style>
    .listitem_price_amount{
        font-size:36px;
    }
    </style>
</head>
<body>
    <div class="main_container">
        <div class="group content-padding">
            <div id="gutter" class="left">
                <div id="btn-map-view-show" class="side-semi-map" gaclick="Listings_Lineless~Map_Show"> 
                    <a href="/hotel/listings.do?selectedTab=2&amp;key=i2ibuc8w&amp;jsk=334a050a344b050a201411150200005f4010210733&amp;plf=PCLH">Show Map View</a>
                </div>
            </div>
            <div id="main-content" class="left">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                ?>
                <div id="each-company" class="listitem" style="border:1px solid grey; display:inline-block">
                    <div id="company-name" style="">
                        <h3><a href="company.php">Ontario Traffic Tickets (OTT)</a></h3>
                    </div>
                    <div id="left-img-box">
                        <img style="width:30%; padding:10px; float:left" src="http://ontariospeeding.com/wp-content/uploads/2013/12/Speeding-Tickets.jpg">
                    </div>
                    <div id="mid-details" style="float:left">
                        <span id="address"><?=$row['Name'];?></span>
                        <div class="listitem_stars listitem_stars_4.0">
                            <span class="listitem_stars_desc">4-Star</span>
                        </div><br/>
                        <ul id="features" style="font-size:75%;">
                            <li>Legal Consultation</li>
                            <li>Ticket Analysis</li>
                            <li>Plea bargain negociations</li>
                        </ul>
                    </div>
                    <div id="mid-details" style="float:left">
                        <div class="listitem_right_group">
                            <div class="">
                                <span class="listitem_price">
                                    <a class="listitem_price_link"> 
                                        <span class="listitem_price_currency">$</span>
                                        <span class="listitem_price_amount"><?=$row['price'];?></span>
                                        <span class="listitem_price_unit">/ticket</span>
                                    </a>
                                </span>
                               <a href="ticketInfo.php"> <button type="button" class="listitem_choose" choosebutton="true">Choose</button></a>
                        </div> <!-- listitem_price_group -->
                    </div>
                    </div>
                </div><?php
                }
            } ?>
        </div>
    </div>
</body>
</html>
