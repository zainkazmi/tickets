<?php
session_start();
?>
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
    <link rel="stylesheet" href="http://www.priceline.com/hotel/content/css/trans/details.css?v=20141011">
    <link rel="stylesheet" href="https://www.priceline.com/hotel/content/css/trans/contractPaymentHotelInfo.css?v=09242014">
    <link rel="stylesheet" href="https://www.priceline.com/hotel/content/css/trans/contractPaymentStyleRevamp.css?v=20141031">
    
    
    <style>
    .listitem_price_amount{
        font-size:36px;
    }
    </style>
</head>
<body>
    <div class="main_container">
        <div id="content" style="padding:10px;">
        	<div class="ht_infobox_body_t1" style="padding-bottom: 10px !important;">
				<!-- Hotel Picture -->
			 	<img src="http://www.ontariotraffictickets.com/wp-content/uploads/2013/11/Speeding-Tickets-300x91.jpg" onerror="this.src='/hotel/content/graphics/list/nohotelphoto.png';" class="listitem_img" alt="" width="150" height="100">
			 	<div style="float:left; margin-left:30px">
		 		<h1>Fairfield Inn Toronto-Brampton</h1>
	 			<div class="listitem_stars listitem_stars_2.5" style="float:none;">
                    <span class="listitem_stars_desc"></span>
                </div>
				<div class="address_info_t1">
					 150 Westcreek Boulevard
					 Brampton, ON
					 L6T 5V7
					 <br>Canada
				</div>
				<br/><br/>
				<b>Ticket Type: </b>Speeding 0-15km over
			</div>
			</div>

			<img src="https://secure.toronto.ca/POAWeb/images/poaticket_380.jpg" style="margin:auto; width:75%;display:block"/>
			<div id="ticket-container" style="display:none; padding: 5px; background-color: #FFFF1A; width: 50%; border: 1px solid #d2d2d2;">
				<input type="text" placeHolder="Icon Location Code"/>
				<input type="text" placeHolder="Offence Number"/>
				<input type="text" placeHolder="Offence Date"/>
				<input type="text" placeHolder="Offence Time"/>

				<input type="text" placeHolder="Sur Name"/>
				<input type="text" placeHolder="Give Name"/>
				<input type="text" placeHolder="Initial"/>

				<input type="text" placeHolder="Street Address"/>
				<input type="text" placeHolder="Municipality"/>
				<input type="text" placeHolder="P/O"/>
				<input type="text" placeHolder="Province"/>
				<input type="text" placeHolder="Postal Code"/>

				<input type="text" placeHolder="Driver's License"/>
				<input type="text" placeHolder="Birthdate"/>
				<input type="text" placeHolder="Motor Vehicle Involved"/>
				<input type="text" placeHolder="Municipality"/>

				<input type="text" placeHolder="Offence"/>
				<input type="text" placeHolder="ContraryTo"/>

				<input type="text" placeHolder="PlateNumber"/>
				<input type="text" placeHolder="Year"/>
				<input type="text" placeHolder="Prov"/>
				<input type="text" placeHolder="Make"/>
				<input type="text" placeHolder="CollisionInvolved"/>
				<input type="text" placeHolder="Witness"/>
				<input type="text" placeHolder="Code"/>

				<input type="text" placeHolder="Commercial"/>
				<input type="text" placeHolder="CVOR/CECVU"/>
				<input type="text" placeHolder="CVOR Number"/>

				<input type="text" placeHolder="CertifyOffenceNotice"/>
				
				<input type="text" placeHolder="Signature"/>
				<input type="text" placeHolder="OfficeNo."/>
				<input type="text" placeHolder="Psomethin"/>
				<input type="text" placeHolder="Liab"/>

				<input type="text" placeHolder="Fine"/>
				<input type="text" placeHolder="TotalPayable"/>

				<input type="text" placeHolder="SummonedIssued"/>
				<input type="text" placeHolder="SummonedIssuedTime"/>
				<input type="text" placeHolder="CourtOffice"/>

				<input type="text" placeHolder="DateOfService"/>
			</div>
			<button type="button" id="signMeIn" style="margin-top:90px; right:0px; margin-left:70%" href="list.php" class="sign-button">Next</button>
		</div>
	</div>
</body>
</html>