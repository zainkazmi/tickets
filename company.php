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
    
    <style>
    .listitem_price_amount{
        font-size:36px;
    }
    </style>
</head>
<body>
    <div class="main_container">
        <div id="content">
            <div id="detailsHotelSummary">
                <div id="detailsHotelSummaryHeader">
                    <h1 id="detailsHotelSummaryName" style="font-size:30px">
                        Ontario Traffic Tickets
                    </h1>
                    <div style="padding:5px 0px">
                        <span>1234 The Queensway, Etobicoke, ON</span>
                    </div>
                    <div class="listitem_stars listitem_stars_2.5" style="float:none;">
                            <span class="listitem_stars_desc"></span>
                        </div>
                </div>
            </div>
            <div class="detailsSeparator"><!-- Separator htl dtl 1--></div>
             <div id="">
                        <img class="right" src="http://www.ontariotraffictickets.com/wp-content/themes/ontariotraffictickets.com/images/logo.jpg"/>
                    </div>
            <div style="position:absolute; right:200px; top:225px; border:1px solid #d2d2d2">
                    <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=ott+legal+1234+The+Queensway+toronto&amp;aq=&amp;sll=43.663189,-79.728275&amp;sspn=0.009352,0.010922&amp;ie=UTF8&amp;hq=ott+legal&amp;hnear=1234+The+Queensway,+Toronto,+Toronto+Division,+Ontario+M8Z+1S2,+Canada&amp;t=m&amp;ll=43.621739,-79.524514&amp;spn=0.006295,0.006295&amp;output=embed" width="375" height="350" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
                </div>
            <div id="detailsAllDetails">

                <div id="detailsHotelInfoLeft" class="">
                    <div class="detailsHotelInfoSection">
                        <h2>OTT Legal Services - Etobicoke</h2>
                        1234 The Queensway<br>
                        Etobicoke, Ontario<br>
                        M8Z 1S2<br>
                        (Nearest Major Intersection- The Queensway just east of Kipling Ave)<br>
                        Telephone: 416.503.3934<br>
                        Fax:          416.503.9768<br>
                        Email: Etobicoke@OTTLegal.com<br>
                    </div>
                    <div class="detailsHotelInfoSection">
                    <h2>About Us</h2>
                        Our agents are former Police officers, Detectives, Officers with the Ministry of Transportation and Paralegals, all licenced by the Law Society of Upper Canada.
                        All of our agents are licensed by the Law Society of Upper Canada. Before you trust your court case with anyone make sure their qualifications compare to ours!
                        With years of Police and court experience no one knows better how to win your traffic ticket than OTT Legal!
                    </div>
                    <div id="detailsTopAmenities" style="padding:0px">
                        <h2>Our services</h2>
                        <ul  style="float:left">
                            <li>Legal consult</li>
                            <li>Management of you ticket
                            <li>Analysis of the police report
                        </ul>
                        <ul style="float:right">
                            <li>Plea bargains with the Crown prosecutors
                            <li>Legal representation in Court
                            <li>Postponements
                        </ul>
                    </div>
                </div>
            </div>
            <div id="ratesWrapper">
            <div id="ratesHeader">
                <div style="padding:0px 25px;">
                    <h2>Choose Your Ticket</h2>
                </div>
                
                <div class="ratesHeaderRight">
                    <a target="_blank" href="/landing/best-price-guarantee.htm" class="gaHtlEvntTrk" data-ga-cat="Retail Rate Selection-details" data-ga-act="best price" data-ga-lbl="click" data-ga-val="">
                            <img id="bpl_click_t1" src="/hotel/content/graphics/trans/best_price.png" alt="Best Price Guarantee">
                        </a>
                </div>              
                
                <!--  TODO Add Seti -->
            <!-- V3~HTL_RTL_TRANS_RATES_DETAILS_UPDATE_BOX~DEFAULT -->
            <!-- V3~HTL_RTL_TRANS_RATES_DETAILS_UPDATE_BOX~SHOW_UPDATE_SEARCH -->
                <div id="detailsChangeSearchRates">
                    <div id="detailsChangeSearchContainerRates">
                        <div id="detailsSearchValidationRates"><!-- Validation --></div>
                        <div class="fclear"><!-- Clear --></div>
                
                        <input id="detailsChangeSearchCityIdInputRates" type="hidden" value="3000033452">
                        <div id="detailsChangeSearchCheckInRates" class="fleft">
                            <label for="detailsChangeSearchCheckInInputRates" class="detailsChangeSearchLabel"></label>
                            <input id="detailsChangeSearchCheckInInputRates" value="11/21/2014" class="hasDatepicker">
                            <a id="rateSelectionCheckInCalImg" href="JavaScript: void(0);">
                                <img class="updateRatesCalImg" src="/zp/zpcal/themes/pcln/icon_16.gif" width="25" height="19" alt="Check in date calendar icon" border="0" id="checkInImg">
                            </a>
                        </div>
                        <div id="detailsChangeSearchCheckOutRates" class="fleft">
                            <label for="detailsChangeSearchCheckOutInputRates" class="detailsChangeSearchLabel"></label>
                            <input id="detailsChangeSearchCheckOutInputRates" value="11/24/2014" class="hasDatepicker">
                            <a id="rateSelectionCheckOutCalImg" href="JavaScript: void(0);">
                                <img class="updateRatesCalImg" src="/zp/zpcal/themes/pcln/icon_16.gif" width="25" height="19" alt="Check in date calendar icon" border="0" id="checkOutImg">
                            </a>
                        </div>
                        <div id="detailsChangeSearchRooms" class="fleft">
                            <label for="detailsChangeSearchRoomsInputRates" class="detailsChangeSearchLabel"></label>
                            <select id="detailsChangeSearchRoomsInputRates">
                                
                                   <option value="1" selected="">1 Room</option>
                                
                                   <option value="2">2 Rooms</option>
                                
                                   <option value="3">3 Rooms</option>
                                
                                   <option value="4">4 Rooms</option>
                                
                                   <option value="5">5 Rooms</option>
                                
                                   <option value="6">6 Rooms</option>
                                
                                   <option value="7">7 Rooms</option>
                                
                                   <option value="8">8 Rooms</option>
                                
                                   <option value="9">9 Rooms</option>
                                
                            </select>
                        </div>
                        <div id="detailsChangeSearchSubmitRates" class="fleft">
                            <button class="button-primary gaHtlEvntTrk" data-ga-cat="Retail Rate Selection" data-ga-act="navigation" data-ga-lbl="update" onclick="detailsUpdateSearch()">Update</button>
                        </div>
                
                        <script>
                        //Make sure we give jquery and UI time to load
                        function detailsInitDatePickerRates(iteration){
                                    var today = new Date();
                                    var maxcin = new Date();
                                    maxcin.setDate(today.getDate() + 330);
                                    
                                    jQuery('#detailsChangeSearchCheckInInputRates, #detailsChangeSearchCheckOutInputRates').datepicker();
                                    jQuery('#detailsChangeSearchCheckInInputRates, #detailsChangeSearchCheckOutInputRates').datepicker('option', 'minDate', new Date());
                                    jQuery('#detailsChangeSearchCheckInInputRates').datepicker('option', 'defaultDate', new Date());
                                    jQuery('#detailsChangeSearchCheckInInputRates').datepicker('option', 'maxDate', maxcin);
                                    jQuery('#detailsChangeSearchCheckInInputRates').change( function() {
                                        try {
                                            var cin = jQuery('#detailsChangeSearchCheckInInputRates').datepicker('getDate');
                                            var maxcout = new Date();
                                            maxcout.setFullYear(cin.getFullYear());
                                            maxcout.setMonth(cin.getMonth());
                                            maxcout.setDate(cin.getDate() + 21);
                                            
                                            jQuery('#detailsChangeSearchCheckOutInputRates').datepicker('option', 'minDate', cin);
                                            
                                            jQuery('#detailsChangeSearchCheckOutInputRates').datepicker('option', 'maxDate', maxcout);
                                            jQuery('#detailsChangeSearchCheckOutInputRates').datepicker('option', 'defaultDate', cin);
                                        }catch(ex){}
                                    });
                    
                                    
                                    jQuery('#detailsNewSearchLink').fancybox({
                                        'showCloseButton'   : false,
                                        'scrolling'         : 'no',
                                        'padding'       : 1                 
                                    });
                        }
                        
                        jQuery(document).ready( detailsInitDatePickerRates );
                        
                            function detailsUpdateSearch(){
                                var sCin = jQuery('#detailsChangeSearchCheckInInputRates').val();
                                var sCout = jQuery('#detailsChangeSearchCheckOutInputRates').val();
                                var cin = new Date(sCin.split("/")[2],sCin.split("/")[0]-1,sCin.split("/")[1]);
                                var cout = new Date(sCout.split("/")[2],sCout.split("/")[0]-1,sCout.split("/")[1]);
                    
                                
                                try{
                                    var maxcout = new Date(cin.getTime());
                                    maxcout.setDate(maxcout.getDate() + 21);
                                    
                                    var maxcin = new Date();
                                    maxcin.setDate(maxcin.getDate() + 330);
                                }catch(e){
                                    //One or both dates are empty...we'll do a separate thceck for those
                                }               
                                        
                                var v = "";
                                if(jQuery('#detailsChangeSearchCheckInInputRates').val() == null || jQuery('#detailsChangeSearchCheckInInputRates').val() == "")
                                    v += "<li>Please select a check in date</li>";
                                if(jQuery('#detailsChangeSearchCheckOutInputRates').val() == null || jQuery('#detailsChangeSearchCheckOutInputRates').val() == "")
                                    v += "<li>Please select a check out date</li>";
                                if(jQuery('#detailsChangeSearchRoomsInputRates').val() == null || jQuery('#detailsChangeSearchRoomsInputRates').val() == "")
                                    v += "<li>Please select the number of rooms you'd like to book</li>";
                                if(jQuery('#detailsChangeSearchCheckInInputRates').val() != null && jQuery('#detailsChangeSearchCheckInInputRates').val() != "" &&
                                        jQuery('#detailsChangeSearchCheckOutInputRates').val() != null && jQuery('#detailsChangeSearchCheckOutInputRates').val() != ""){
                                    //We have two dates...do specific date validations
                                    if(cout <= cin)
                                        v += "<li>Your check out date must be AFTER your check in date</li>";
                                    if(cout > maxcout)
                                        v += "<li>Your check out date must be 21 days or less from your check in date</li>";
                                    if(cin > maxcin)
                                        v += "<li>Your check in date must be less than 330 days from today";
                                }
                                
                                if(v != ""){
                                    //Got some validations...
                                    v = "<ul>" + v + "</ul>";
                                    jQuery("#detailsSearchValidationRates").empty();
                                    jQuery("#detailsSearchValidationRates").html(v);
                                    jQuery("#detailsSearchValidationRates").show();
                                    //detailsSmoothScroll("#detailsSearchValidationRates");
                                }else{
                                    
                                    //Clear validation errors if we had any
                                    jQuery("#detailsSearchValidationRates").hide();
                                    
                                    //Did dates change?
                                        // room number changes were not being picked up
                                        // send to direct action.
                                    //if(jQuery('#detailsChangeSearchCheckInInputRates').val() == "11/21/2014" && 
                                    //      jQuery('#detailsChangeSearchCheckOutInputRates').val() == "11/24/2014"){
                                    //  //No, go to RS
                                    //  document.location="/hotel/hotelOverviewGuide.do?key=i2if9el2&propID=1804104&jsk=554a200a464a200a20141115033542c3b011608992&plf=PCLH" +
                                    //      "&propID=1804104" +
                                    //      "&numberOfRooms=" + jQuery('#detailsChangeSearchRoomsInputRates').val() +
                                    //      "&checkInDate=" + jQuery('#detailsChangeSearchCheckInInputRates').val() +
                                    //      "&cityId=" + jQuery('#detailsChangeSearchCityIdInputRates').val() +
                                    //      "&checkOutDate=" + jQuery('#detailsChangeSearchCheckOutInputRates').val() +
                                    //      "&fromDetails=Y";   
                                    //}else{
                                        //Yes, go to RS direct
                                        document.location="/hotel/hotelOverviewGuideDirect.do?key=i2if9el2&propID=1804104&jsk=554a200a464a200a20141115033542c3b011608992&plf=PCLH" +
                                            "&propID=1804104" +
                                            "&numberOfRooms=" + jQuery('#detailsChangeSearchRoomsInputRates').val() +
                                            "&checkInDate=" + jQuery('#detailsChangeSearchCheckInInputRates').val() +
                                            "&cityId=" + jQuery('#detailsChangeSearchCityIdInputRates').val() +
                                            "&checkOutDate=" + jQuery('#detailsChangeSearchCheckOutInputRates').val() + 
                                            "&fromDetails=Y" +
                                            "#ratesDetails";
                                    //}             
                                }
                            }
                            $(document).ready(function() {
                                $("#rateSelectionCheckOutCalImg").click(function() {
                                    $('#detailsChangeSearchCheckOutInputRates').triggerHandler( "focus" );
                                });
                                $("#rateSelectionCheckInCalImg").click(function() {
                                    $('#detailsChangeSearchCheckInInputRates').triggerHandler( "focus" );
                                });

                            });
                        </script>
                    </div>
                </div>
                            
                <!--  end search form seti -->
                
                <div class="clear"></div>
                
                    <div><span id="mandatoryFeeRateDisclosure"></span></div>
                
                <div id="overViewRatesPriceChangeMsg" class="overViewPriceChangeMsg" style="display:none;"></div>
                <div class="clear"></div>
            </div><!-- rates header -->
<!-- V3~HTL_RTL_GROUP_RATES_90_5_5~SHOW_GROUPED_RATES -->
<!-- V3~HTL_RTL_GROUP_RATES_90_5_5~DEFAULT -->          
<!-- V3~HTL_RTL_GROUP_RATES_90_5_5~CONTROL -->
            <div id="detailsHotelStickyHeader" style="z-index:100; width:955px;">
                <div id="rateHeaderContainer">
                    <span class="rateRoomType rateHdrText">Room Type</span>
                    <span class="ratescolumn"></span>
                    <span class="rateRoomConditions rateHdrText">Incentives &amp; Conditions</span>
                    <span class="ratescolumn"></span>
                    <span class="rateRoomPrice rateHdrText">Price Per night</span>
                    <span class="ratescolumn" style="margin: 0px;"></span>
                    <span class="rateRoomReserve rateHdrText">Reserve</span>
                </div>
            </div>

            
            <div id="ajax-rates-update-overlay" style="display: none;">
                <div id="ajax-rates-update-message">
                <div id="canvasLoader" style="display: block;"><canvas width="35" height="35"></canvas><canvas width="35" height="35" style="display: none;"></canvas></div></div>
            </div><div id="rmTR-9-PTWH-H00-PEGASUS" class="rates" style="display:;"><span class="rateRoomType rateInfoText"><span class="rateInfoDesc">1 King Bed - Free Wifi, Mini Fridge, Microwave</span><p style="padding-top: 15px;"></p><div class="rs-room-details"><a id="dl_rmTR-9-PTWH-H00-PEGASUS" onclick="RatesClient.toggleDesc('dl_rmTR-9-PTWH-H00-PEGASUS', 'desc_rmTR-9-PTWH-H00-PEGASUS', $(this).closest('tr'))" href="javascript:void(0);"><div style="float:left"><b>Room Details:</b></div><div id="dl_rmTR-9-PTWH-H00-PEGASUS_arrow" class="rs-arrow-right" style="float:left; margin-top:3px; margin-left:10px;"></div></a></div><p></p><span id="desc_rmTR-9-PTWH-H00-PEGASUS" style="display: none;"><span class="left descript"><span style="padding-bottom: 2px;"><b>Room Details:</b>1 King, Mini-Fridge, Microwave, 360sqft/32sqm, Wireless Internet, Complimentary, Wired Internet, Complimentary</span></span><span class="clear"></span></span></span><span class="column"></span><span class="rateRoomConditions rateRoomText"><span class="rateCancelText"><ul><li><a class="gaHtlEvntTrk-Rates" style="font-size: 14px;" href="javascript:void(0)" onclick="RatesClient.showCancelPolicy('9-PTWH-H00-PEGASUS')" data-ga-val="" data-ga-lbl="" data-ga-act="cancellation details" data-ga-cat="Retail Rate Selection"><span class="cancelpolicy-nonrefundable">Non Refundable</span></a></li></ul></span><ul class="group"><li><b class="green">Freebies: </b><a href="Javascript: RatesClient.showPromoDetails('9-PTWH-H00-PEGASUS',0,400,300);">Special Discount 10% off</a></li><li><b class="green">Freebies: </b>Free internet in room, free breakfast and free parking</li></ul><input id="hdnPRT1" type="hidden" value="MERCHANT-PEGASUS|PTWH:H00|x:x|1" name="hdnPRT1"><span id="spPRT1"></span></span><span class="column"></span><span class="rateRoomPrice roomRatePriceText IErateRoomPriceAdj"><span class="price-on-sale"><span class="rs_StrikePrice red" style="white-space:nowrap;"><strike><span class="currencySymbol">$</span>78</strike><span id="cents" class="cents">.48</span></span></span><span class="rs_Display_rate_dollars">$70<span class="rs_Display_rate_cents">.54</span><input id="bookingDetails_Room1" type="hidden" value="" name="bookingDetails_Room1"></span></span><span class="column"></span><span class="rateRoomReserve module-buttons"><button type="button" class="button-primary gaHtlEvntTrk-Rates" onclick="RatesClient.bookRate('9-PTWH-H00-PEGASUS')" data-ga-val="1" data-ga-lbl="5" data-ga-act="Book" data-ga-cat="Retail Rate Selection">Book</button></span></div><div class="clear"></div><div id="rmTR-8-BKG-2475806_81937380_0_1-BOOKING" class="rates" style="display:;"><span class="rateRoomType rateInfoText"><span class="rateInfoDesc">King Room - Non-refundable</span><p style="padding-top: 15px;"></p><div class="rs-room-details"><a id="dl_rmTR-8-BKG-2475806_81937380_0_1-BOOKING" onclick="RatesClient.toggleDesc('dl_rmTR-8-BKG-2475806_81937380_0_1-BOOKING', 'desc_rmTR-8-BKG-2475806_81937380_0_1-BOOKING', $(this).closest('tr'))" href="javascript:void(0);"><div style="float:left"><b>View Photos and Room Details:</b></div><div id="dl_rmTR-8-BKG-2475806_81937380_0_1-BOOKING_arrow" class="rs-arrow-right" style="float:left; margin-top:3px; margin-left:10px;"></div></a></div><p></p></span><span class="column"></span><span class="rateRoomConditions rateRoomText"><span class="rateCancelText"><ul><li><a class="gaHtlEvntTrk-Rates" style="font-size: 14px;" href="javascript:void(0)" onclick="RatesClient.showCancelPolicy('8-BKG-2475806_81937380_0_1-BOOKING')" data-ga-val="" data-ga-lbl="" data-ga-act="cancellation details" data-ga-cat="Retail Rate Selection"><span class="cancelpolicy-nonrefundable">Non Refundable</span></a></li></ul></span><ul class="group"><li><b class="green">Freebies: </b>Smart Deal</li><li><b class="green">Freebies: </b>Free internet in room, free breakfast and free parking</li></ul><input id="hdnPRT2" type="hidden" value="AGENCY-BOOKING|BKG:2475806_81937380_0_1|x:x|3" name="hdnPRT2"><span id="spPRT2"></span></span><span class="column"></span><span class="rateRoomPrice roomRatePriceText IErateRoomPriceAdj"><span class="price-on-sale">&nbsp;</span><span class="rs_Display_rate_dollars">$70<span class="rs_Display_rate_cents">.54</span><input id="bookingDetails_Room2" type="hidden" value="" name="bookingDetails_Room2"></span><br class="clear"><span class="red ratesRmLeft"><b>5 rooms left</b></span></span><span class="column"></span><span class="rateRoomReserve module-buttons"><button type="button" class="button-primary gaHtlEvntTrk-Rates" onclick="RatesClient.bookRate('8-BKG-2475806_81937380_0_1-BOOKING')" data-ga-val="2" data-ga-lbl="5" data-ga-act="Book" data-ga-cat="Retail Rate Selection">Book</button></span></div><div class="clear"></div><div class="rates photodescWrapper" id="desc_rmTR-8-BKG-2475806_81937380_0_1-BOOKING" style="display: none;"><div class="rateRoomPhoto rateInfoText"><span class="left rsRoomPhotoBackgroundImage"><img onerror="javascript:RatesClient.defaultImage( $(this) );" src="http://aff.bstatic.com/images/hotel/max300/313/3138482.jpg" width="310" height="210" class="ht-pic"></span></div><div class="photodesc right"><a href="javascript:void(0);" class="gaHtlEvntTrk-Rates" data-ga-cat="Retail Rate Selection" data-ga-act="Photo Details" data-ga-lbl="Close Button" data-ga-val="" onclick="RatesClient.hideDesc('dl_rmTR-8-BKG-2475806_81937380_0_1-BOOKING','desc_rmTR-8-BKG-2475806_81937380_0_1-BOOKING')"><span class="module-icons photoDescClose">Close <i class="icon-utility-close"></i></span></a><p><b>Room Details:</b> King Room - Non-Refundable - Free Wi-Fi, A 32" Flat-Screen Cable TV And A Seating Area Are Featured. A Microwave And A Fridge Are Included.</p><p><b>Room Facilities:</b> Pay-Per-View Channels, Telephone, Air Conditioning, Hairdryer, Iron, Radio, Refrigerator, Desk, Ironing Facilities, Seating Area, Free Toiletries, Toilet, Microwave, Bathroom, Heating, Cable Channels, Bath Or Shower, Carpeted, Flat-Screen TV, Wake-Up Service, Alarm Clock</p></div></div><div class="clear"></div>
<div id="rmTR-8-BKG-2475807_81937380_0_1-BOOKING" class="rates" style="display:;"><span class="rateRoomType rateInfoText"><span class="rateInfoDesc">Queen Room with Two Queen Beds - Non-refundable</span><p style="padding-top: 15px;"></p><div class="rs-room-details"><a id="dl_rmTR-8-BKG-2475807_81937380_0_1-BOOKING" onclick="RatesClient.toggleDesc('dl_rmTR-8-BKG-2475807_81937380_0_1-BOOKING', 'desc_rmTR-8-BKG-2475807_81937380_0_1-BOOKING', $(this).closest('tr'))" href="javascript:void(0);"><div style="float:left"><b>View Photos and Room Details:</b></div><div id="dl_rmTR-8-BKG-2475807_81937380_0_1-BOOKING_arrow" class="rs-arrow-right" style="float:left; margin-top:3px; margin-left:10px;"></div></a></div><p></p></span><span class="column"></span><span class="rateRoomConditions rateRoomText"><span class="rateCancelText"><ul><li><a class="gaHtlEvntTrk-Rates" style="font-size: 14px;" href="javascript:void(0)" onclick="RatesClient.showCancelPolicy('8-BKG-2475807_81937380_0_1-BOOKING')" data-ga-val="" data-ga-lbl="" data-ga-act="cancellation details" data-ga-cat="Retail Rate Selection"><span class="cancelpolicy-nonrefundable">Non Refundable</span></a></li></ul></span><ul class="group"><li><b class="green">Freebies: </b>Free internet in room, free breakfast and free parking</li></ul><input id="hdnPRT3" type="hidden" value="AGENCY-BOOKING|BKG:2475807_81937380_0_1|x:x|5" name="hdnPRT3"><span id="spPRT3"></span></span><span class="column"></span><span class="rateRoomPrice roomRatePriceText IErateRoomPriceAdj"><span class="price-on-sale">&nbsp;</span><span class="rs_Display_rate_dollars">$75<span class="rs_Display_rate_cents">.83</span><input id="bookingDetails_Room3" type="hidden" value="" name="bookingDetails_Room3"></span><br class="clear"><span class="red ratesRmLeft"><b>5 rooms left</b></span></span><span class="column"></span><span class="rateRoomReserve module-buttons"><button type="button" class="button-primary gaHtlEvntTrk-Rates" onclick="RatesClient.bookRate('8-BKG-2475807_81937380_0_1-BOOKING')" data-ga-val="3" data-ga-lbl="5" data-ga-act="Book" data-ga-cat="Retail Rate Selection">Book</button></span></div><div class="clear"></div><div class="rates photodescWrapper" id="desc_rmTR-8-BKG-2475807_81937380_0_1-BOOKING" style="display: none;"><div class="rateRoomPhoto rateInfoText"><span class="left rsRoomPhotoBackgroundImage"><img onerror="javascript:RatesClient.defaultImage( $(this) );" src="http://aff.bstatic.com/images/hotel/max300/313/3138477.jpg" width="310" height="210" class="ht-pic"></span></div><div class="photodesc right"><a href="javascript:void(0);" class="gaHtlEvntTrk-Rates" data-ga-cat="Retail Rate Selection" data-ga-act="Photo Details" data-ga-lbl="Close Button" data-ga-val="" onclick="RatesClient.hideDesc('dl_rmTR-8-BKG-2475807_81937380_0_1-BOOKING','desc_rmTR-8-BKG-2475807_81937380_0_1-BOOKING')"><span class="module-icons photoDescClose">Close <i class="icon-utility-close"></i></span></a><p><b>Room Details:</b> Queen Room With Two Queen Beds - Non-Refundable - Free Wi-Fi, A 32" Inch Flat-Screen Cable TV And A Seating Area Are Featured. A Microwave And A Refrigerator Are Included.</p><p><b>Room Facilities:</b> Pay-Per-View Channels, Telephone, Air Conditioning, Hairdryer, Iron, Radio, Refrigerator, Desk, Ironing Facilities, Seating Area, Free Toiletries, Toilet, Microwave, Bathroom, Heating, Cable Channels, Bath Or Shower, Carpeted, Interconnected Room(S) Available, Flat-Screen TV, Wake-Up Service, Alarm Clock</p></div></div><div class="clear"></div>
<div id="rmTR-9-PTWI-I00-PEGASUS" class="rates displaylimit" style="display:none;"><span class="rateRoomType rateInfoText"><span class="rateInfoDesc">2 Queen Beds - Free Wifi, Mini Fridge, Microwave</span><p style="padding-top: 15px;"></p><div class="rs-room-details"><a id="dl_rmTR-9-PTWI-I00-PEGASUS" onclick="RatesClient.toggleDesc('dl_rmTR-9-PTWI-I00-PEGASUS', 'desc_rmTR-9-PTWI-I00-PEGASUS', $(this).closest('tr'))" href="javascript:void(0);"><div style="float:left"><b>Room Details:</b></div><div id="dl_rmTR-9-PTWI-I00-PEGASUS_arrow" class="rs-arrow-right" style="float:left; margin-top:3px; margin-left:10px;"></div></a></div><p></p><span id="desc_rmTR-9-PTWI-I00-PEGASUS" style="display: none;"><span class="left descript"><span style="padding-bottom: 2px;"><b>Room Details:</b>2 Queen, Mini-Fridge, Microwave, 360sqft/32sqm, Wireless Internet, Complimentary, Wired Internet, Complimentary</span></span><span class="clear"></span></span></span><span class="column"></span><span class="rateRoomConditions rateRoomText"><span class="rateCancelText"><ul><li><a class="gaHtlEvntTrk-Rates" style="font-size: 14px;" href="javascript:void(0)" onclick="RatesClient.showCancelPolicy('9-PTWI-I00-PEGASUS')" data-ga-val="" data-ga-lbl="" data-ga-act="cancellation details" data-ga-cat="Retail Rate Selection"><span class="cancelpolicy-nonrefundable">Non Refundable</span></a></li></ul></span><ul class="group"><li><b class="green">Freebies: </b><a href="Javascript: RatesClient.showPromoDetails('9-PTWI-I00-PEGASUS',0,400,300);">Special Discount 10% off</a></li><li><b class="green">Freebies: </b>Free internet in room, free breakfast and free parking</li></ul><input id="hdnPRT4" type="hidden" value="MERCHANT-PEGASUS|PTWI:I00|x:x|6" name="hdnPRT4"><span id="spPRT4"></span></span><span class="column"></span><span class="rateRoomPrice roomRatePriceText IErateRoomPriceAdj"><span class="price-on-sale"><span class="rs_StrikePrice red" style="white-space:nowrap;"><strike><span class="currencySymbol">$</span>84</strike><span id="cents" class="cents">.36</span></span></span><span class="rs_Display_rate_dollars">$75<span class="rs_Display_rate_cents">.84</span><input id="bookingDetails_Room4" type="hidden" value="" name="bookingDetails_Room4"></span></span><span class="column"></span><span class="rateRoomReserve module-buttons"><button type="button" class="button-primary gaHtlEvntTrk-Rates" onclick="RatesClient.bookRate('9-PTWI-I00-PEGASUS')" data-ga-val="4" data-ga-lbl="5" data-ga-act="Book" data-ga-cat="Retail Rate Selection">Book</button></span></div><div class="clear"></div><div id="rmTR-8-BKG-2475806_81937376_0_1-BOOKING" class="rates" style="display:;"><span class="rateRoomType rateInfoText"><span class="rateInfoDesc">King Room</span><p style="padding-top: 15px;"></p><div class="rs-room-details"><a id="dl_rmTR-8-BKG-2475806_81937376_0_1-BOOKING" onclick="RatesClient.toggleDesc('dl_rmTR-8-BKG-2475806_81937376_0_1-BOOKING', 'desc_rmTR-8-BKG-2475806_81937376_0_1-BOOKING', $(this).closest('tr'))" href="javascript:void(0);"><div style="float:left"><b>View Photos and Room Details:</b></div><div id="dl_rmTR-8-BKG-2475806_81937376_0_1-BOOKING_arrow" class="rs-arrow-right" style="float:left; margin-top:3px; margin-left:10px;"></div></a></div><p></p></span><span class="column"></span><span class="rateRoomConditions rateRoomText"><span class="rateCancelText"><ul><li><a class="gaHtlEvntTrk-Rates" style="font-size: 14px;" href="javascript:void(0)" onclick="RatesClient.showCancelPolicy('8-BKG-2475806_81937376_0_1-BOOKING')" data-ga-val="" data-ga-lbl="" data-ga-act="cancellation details" data-ga-cat="Retail Rate Selection"><span class="cancelpolicy-available" style="font-weight: bold;">FREE Cancellation</span> until <span class="cancelpolicy-untiltime" style="font-weight: bold;">11:59 PM</span> on <span class="cancelpolicy-untildate" style="font-weight: bold;">Nov 19</span></a></li></ul></span><ul class="group"><li><b class="green">Freebies: </b>Smart Deal</li><li><b class="green">Freebies: </b>Free internet in room, free breakfast and free parking</li></ul><ul><li class="payWhenYouStay">Pay When You Stay</li></ul><input id="hdnPRT5" type="hidden" value="AGENCY-BOOKING|BKG:2475806_81937376_0_1|x:x|2" name="hdnPRT5"><span id="spPRT5"></span></span><span class="column"></span><span class="rateRoomPrice roomRatePriceText IErateRoomPriceAdj"><span class="price-on-sale">&nbsp;</span><span class="rs_Display_rate_dollars">$78<span class="rs_Display_rate_cents">.48</span><input id="bookingDetails_Room5" type="hidden" value="" name="bookingDetails_Room5"></span><br class="clear"><span class="red ratesRmLeft"><b>5 rooms left</b></span></span><span class="column"></span><span class="rateRoomReserve module-buttons"><button type="button" class="button-primary gaHtlEvntTrk-Rates" onclick="RatesClient.bookRate('8-BKG-2475806_81937376_0_1-BOOKING')" data-ga-val="5" data-ga-lbl="5" data-ga-act="Book" data-ga-cat="Retail Rate Selection">Book</button></span></div><div class="clear"></div><div class="rates photodescWrapper" id="desc_rmTR-8-BKG-2475806_81937376_0_1-BOOKING" style="display: none;"><div class="rateRoomPhoto rateInfoText"><span class="left rsRoomPhotoBackgroundImage"><img onerror="javascript:RatesClient.defaultImage( $(this) );" src="http://aff.bstatic.com/images/hotel/max300/313/3138482.jpg" width="310" height="210" class="ht-pic"></span></div><div class="photodesc right"><a href="javascript:void(0);" class="gaHtlEvntTrk-Rates" data-ga-cat="Retail Rate Selection" data-ga-act="Photo Details" data-ga-lbl="Close Button" data-ga-val="" onclick="RatesClient.hideDesc('dl_rmTR-8-BKG-2475806_81937376_0_1-BOOKING','desc_rmTR-8-BKG-2475806_81937376_0_1-BOOKING')"><span class="module-icons photoDescClose">Close <i class="icon-utility-close"></i></span></a><p><b>Room Details:</b> King Room - Free Wi-Fi, A 32" Flat-Screen Cable TV And A Seating Area Are Featured. A Microwave And A Fridge Are Included.</p><p><b>Room Facilities:</b> Pay-Per-View Channels, Telephone, Air Conditioning, Hairdryer, Iron, Radio, Refrigerator, Desk, Ironing Facilities, Seating Area, Free Toiletries, Toilet, Microwave, Bathroom, Heating, Cable Channels, Bath Or Shower, Carpeted, Flat-Screen TV, Wake-Up Service, Alarm Clock</p></div></div><div class="clear"></div>
<div id="rmTR-9-TZJB-B00-PEGASUS" class="rates" style="display:;"><span class="rateRoomType rateInfoText"><span class="rateInfoDesc">1 King Bed - Free Wifi, Mini Fridge, Microwave</span><p style="padding-top: 15px;"></p><div class="rs-room-details"><a id="dl_rmTR-9-TZJB-B00-PEGASUS" onclick="RatesClient.toggleDesc('dl_rmTR-9-TZJB-B00-PEGASUS', 'desc_rmTR-9-TZJB-B00-PEGASUS', $(this).closest('tr'))" href="javascript:void(0);"><div style="float:left"><b>Room Details:</b></div><div id="dl_rmTR-9-TZJB-B00-PEGASUS_arrow" class="rs-arrow-right" style="float:left; margin-top:3px; margin-left:10px;"></div></a></div><p></p><span id="desc_rmTR-9-TZJB-B00-PEGASUS" style="display: none;"><span class="left descript"><span style="padding-bottom: 2px;"><b>Room Details:</b>1 King, Mini-Fridge, Microwave, 360sqft/32sqm, Wireless Internet, Complimentary, Wired Internet, Complimentary</span></span><span class="clear"></span></span></span><span class="column"></span><span class="rateRoomConditions rateRoomText"><span class="rateCancelText"><ul><li><a class="gaHtlEvntTrk-Rates" style="font-size: 14px;" href="javascript:void(0)" onclick="RatesClient.showCancelPolicy('9-TZJB-B00-PEGASUS')" data-ga-val="" data-ga-lbl="" data-ga-act="cancellation details" data-ga-cat="Retail Rate Selection"><span class="cancelpolicy-available" style="font-weight: bold;">FREE Cancellation</span> until <span class="cancelpolicy-untiltime" style="font-weight: bold;">12:00 PM</span> on <span class="cancelpolicy-untildate" style="font-weight: bold;">Nov 20</span></a></li></ul></span><ul class="group"><li><b class="green">Freebies: </b>Free internet in room, free breakfast and free parking</li></ul><input id="hdnPRT6" type="hidden" value="MERCHANT-PEGASUS|TZJB:B00|x:x|4" name="hdnPRT6"><span id="spPRT6"></span></span><span class="column"></span><span class="rateRoomPrice roomRatePriceText IErateRoomPriceAdj"><span class="price-on-sale">&nbsp;</span><span class="rs_Display_rate_dollars">$78<span class="rs_Display_rate_cents">.48</span><input id="bookingDetails_Room6" type="hidden" value="" name="bookingDetails_Room6"></span></span><span class="column"></span><span class="rateRoomReserve module-buttons"><button type="button" class="button-primary gaHtlEvntTrk-Rates" onclick="RatesClient.bookRate('9-TZJB-B00-PEGASUS')" data-ga-val="6" data-ga-lbl="5" data-ga-act="Book" data-ga-cat="Retail Rate Selection">Book</button></span></div><div class="clear"></div><div id="rmTR-9-TZJA-A00-PEGASUS" class="rates displaylimit" style="display:none;"><span class="rateRoomType rateInfoText"><span class="rateInfoDesc">2 Queen Beds - Free Wifi, Mini Fridge, Microwave</span><p style="padding-top: 15px;"></p><div class="rs-room-details"><a id="dl_rmTR-9-TZJA-A00-PEGASUS" onclick="RatesClient.toggleDesc('dl_rmTR-9-TZJA-A00-PEGASUS', 'desc_rmTR-9-TZJA-A00-PEGASUS', $(this).closest('tr'))" href="javascript:void(0);"><div style="float:left"><b>Room Details:</b></div><div id="dl_rmTR-9-TZJA-A00-PEGASUS_arrow" class="rs-arrow-right" style="float:left; margin-top:3px; margin-left:10px;"></div></a></div><p></p><span id="desc_rmTR-9-TZJA-A00-PEGASUS" style="display: none;"><span class="left descript"><span style="padding-bottom: 2px;"><b>Room Details:</b>2 Queen, Mini-Fridge, Microwave, 360sqft/32sqm, Wireless Internet, Complimentary, Wired Internet, Complimentary</span></span><span class="clear"></span></span></span><span class="column"></span><span class="rateRoomConditions rateRoomText"><span class="rateCancelText"><ul><li><a class="gaHtlEvntTrk-Rates" style="font-size: 14px;" href="javascript:void(0)" onclick="RatesClient.showCancelPolicy('9-TZJA-A00-PEGASUS')" data-ga-val="" data-ga-lbl="" data-ga-act="cancellation details" data-ga-cat="Retail Rate Selection"><span class="cancelpolicy-available" style="font-weight: bold;">FREE Cancellation</span> until <span class="cancelpolicy-untiltime" style="font-weight: bold;">12:00 PM</span> on <span class="cancelpolicy-untildate" style="font-weight: bold;">Nov 20</span></a></li></ul></span><ul class="group"><li><b class="green">Freebies: </b>Free internet in room, free breakfast and free parking</li></ul><input id="hdnPRT7" type="hidden" value="MERCHANT-PEGASUS|TZJA:A00|x:x|7" name="hdnPRT7"><span id="spPRT7"></span></span><span class="column"></span><span class="rateRoomPrice roomRatePriceText IErateRoomPriceAdj"><span class="price-on-sale">&nbsp;</span><span class="rs_Display_rate_dollars">$84<span class="rs_Display_rate_cents">.36</span><input id="bookingDetails_Room7" type="hidden" value="" name="bookingDetails_Room7"></span></span><span class="column"></span><span class="rateRoomReserve module-buttons"><button type="button" class="button-primary gaHtlEvntTrk-Rates" onclick="RatesClient.bookRate('9-TZJA-A00-PEGASUS')" data-ga-val="7" data-ga-lbl="5" data-ga-act="Book" data-ga-cat="Retail Rate Selection">Book</button></span></div><div class="clear"></div><div id="rmTR-8-BKG-2475807_81937376_0_1-BOOKING" class="rates displaylimit" style="display:none;"><span class="rateRoomType rateInfoText"><span class="rateInfoDesc">Queen Room with Two Queen Beds</span><p style="padding-top: 15px;"></p><div class="rs-room-details"><a id="dl_rmTR-8-BKG-2475807_81937376_0_1-BOOKING" onclick="RatesClient.toggleDesc('dl_rmTR-8-BKG-2475807_81937376_0_1-BOOKING', 'desc_rmTR-8-BKG-2475807_81937376_0_1-BOOKING', $(this).closest('tr'))" href="javascript:void(0);"><div style="float:left"><b>View Photos and Room Details:</b></div><div id="dl_rmTR-8-BKG-2475807_81937376_0_1-BOOKING_arrow" class="rs-arrow-right" style="float:left; margin-top:3px; margin-left:10px;"></div></a></div><p></p></span><span class="column"></span><span class="rateRoomConditions rateRoomText"><span class="rateCancelText"><ul><li><a class="gaHtlEvntTrk-Rates" style="font-size: 14px;" href="javascript:void(0)" onclick="RatesClient.showCancelPolicy('8-BKG-2475807_81937376_0_1-BOOKING')" data-ga-val="" data-ga-lbl="" data-ga-act="cancellation details" data-ga-cat="Retail Rate Selection"><span class="cancelpolicy-available" style="font-weight: bold;">FREE Cancellation</span> until <span class="cancelpolicy-untiltime" style="font-weight: bold;">11:59 PM</span> on <span class="cancelpolicy-untildate" style="font-weight: bold;">Nov 19</span></a></li></ul></span><ul class="group"><li><b class="green">Freebies: </b>Free internet in room, free breakfast and free parking</li></ul><ul><li class="payWhenYouStay">Pay When You Stay</li></ul><input id="hdnPRT8" type="hidden" value="AGENCY-BOOKING|BKG:2475807_81937376_0_1|x:x|8" name="hdnPRT8"><span id="spPRT8"></span></span><span class="column"></span><span class="rateRoomPrice roomRatePriceText IErateRoomPriceAdj"><span class="price-on-sale">&nbsp;</span><span class="rs_Display_rate_dollars">$84<span class="rs_Display_rate_cents">.36</span><input id="bookingDetails_Room8" type="hidden" value="" name="bookingDetails_Room8"></span><br class="clear"><span class="red ratesRmLeft"><b>5 rooms left</b></span></span><span class="column"></span><span class="rateRoomReserve module-buttons"><button type="button" class="button-primary gaHtlEvntTrk-Rates" onclick="RatesClient.bookRate('8-BKG-2475807_81937376_0_1-BOOKING')" data-ga-val="8" data-ga-lbl="5" data-ga-act="Book" data-ga-cat="Retail Rate Selection">Book</button></span></div><div class="clear"></div><div class="rates photodescWrapper" id="desc_rmTR-8-BKG-2475807_81937376_0_1-BOOKING" style="display: none;"><div class="rateRoomPhoto rateInfoText"><span class="left rsRoomPhotoBackgroundImage"><img onerror="javascript:RatesClient.defaultImage( $(this) );" src="http://aff.bstatic.com/images/hotel/max300/313/3138477.jpg" width="310" height="210" class="ht-pic"></span></div><div class="photodesc right"><a href="javascript:void(0);" class="gaHtlEvntTrk-Rates" data-ga-cat="Retail Rate Selection" data-ga-act="Photo Details" data-ga-lbl="Close Button" data-ga-val="" onclick="RatesClient.hideDesc('dl_rmTR-8-BKG-2475807_81937376_0_1-BOOKING','desc_rmTR-8-BKG-2475807_81937376_0_1-BOOKING')"><span class="module-icons photoDescClose">Close <i class="icon-utility-close"></i></span></a><p><b>Room Details:</b> Queen Room With Two Queen Beds - Free Wi-Fi, A 32" Inch Flat-Screen Cable TV And A Seating Area Are Featured. A Microwave And A Refrigerator Are Included.</p><p><b>Room Facilities:</b> Pay-Per-View Channels, Telephone, Air Conditioning, Hairdryer, Iron, Radio, Refrigerator, Desk, Ironing Facilities, Seating Area, Free Toiletries, Toilet, Microwave, Bathroom, Heating, Cable Channels, Bath Or Shower, Carpeted, Interconnected Room(S) Available, Flat-Screen TV, Wake-Up Service, Alarm Clock</p></div></div><div class="clear"></div>
<div id="rmTR-9-PUMA-A00-PEGASUS" class="rates displaylimit" style="display:none;"><span class="rateRoomType rateInfoText"><span class="rateInfoDesc">1 King Bed + Sofabed - Free Wifi, Mini Fridge, Microwave</span><p style="padding-top: 15px;"></p><div class="rs-room-details"><a id="dl_rmTR-9-PUMA-A00-PEGASUS" onclick="RatesClient.toggleDesc('dl_rmTR-9-PUMA-A00-PEGASUS', 'desc_rmTR-9-PUMA-A00-PEGASUS', $(this).closest('tr'))" href="javascript:void(0);"><div style="float:left"><b>Room Details:</b></div><div id="dl_rmTR-9-PUMA-A00-PEGASUS_arrow" class="rs-arrow-right" style="float:left; margin-top:3px; margin-left:10px;"></div></a></div><p></p><span id="desc_rmTR-9-PUMA-A00-PEGASUS" style="display: none;"><span class="left descript"><span style="padding-bottom: 2px;"><b>Room Details:</b>1 King, Sofa Bed, Mini-Fridge, Microwave, 430sqft/39sqm, Living/Sitting Area, Wireless Internet, Complimentary</span></span><span class="clear"></span></span></span><span class="column"></span><span class="rateRoomConditions rateRoomText"><span class="rateCancelText"><ul><li><a class="gaHtlEvntTrk-Rates" style="font-size: 14px;" href="javascript:void(0)" onclick="RatesClient.showCancelPolicy('9-PUMA-A00-PEGASUS')" data-ga-val="" data-ga-lbl="" data-ga-act="cancellation details" data-ga-cat="Retail Rate Selection"><span class="cancelpolicy-available" style="font-weight: bold;">FREE Cancellation</span> until <span class="cancelpolicy-untiltime" style="font-weight: bold;">12:00 PM</span> on <span class="cancelpolicy-untildate" style="font-weight: bold;">Nov 20</span></a></li></ul></span><ul class="group"><li><b class="green">Freebies: </b>Free internet in room, free breakfast and free parking</li></ul><input id="hdnPRT9" type="hidden" value="MERCHANT-PEGASUS|PUMA:A00|x:x|9" name="hdnPRT9"><span id="spPRT9"></span></span><span class="column"></span><span class="rateRoomPrice roomRatePriceText IErateRoomPriceAdj"><span class="price-on-sale">&nbsp;</span><span class="rs_Display_rate_dollars">$96<span class="rs_Display_rate_cents">.11</span><input id="bookingDetails_Room9" type="hidden" value="" name="bookingDetails_Room9"></span></span><span class="column"></span><span class="rateRoomReserve module-buttons"><button type="button" class="button-primary gaHtlEvntTrk-Rates" onclick="RatesClient.bookRate('9-PUMA-A00-PEGASUS')" data-ga-val="9" data-ga-lbl="5" data-ga-act="Book" data-ga-cat="Retail Rate Selection">Book</button></span></div><div class="clear"></div><div id="rmTR-8-BKG-2475804_81937376_0_1-BOOKING" class="rates displaylimit" style="display:none;"><span class="rateRoomType rateInfoText"><span class="rateInfoDesc">One-Bedroom King Suite with Sofa Bed</span><p style="padding-top: 15px;"></p><div class="rs-room-details"><a id="dl_rmTR-8-BKG-2475804_81937376_0_1-BOOKING" onclick="RatesClient.toggleDesc('dl_rmTR-8-BKG-2475804_81937376_0_1-BOOKING', 'desc_rmTR-8-BKG-2475804_81937376_0_1-BOOKING', $(this).closest('tr'))" href="javascript:void(0);"><div style="float:left"><b>View Photos and Room Details:</b></div><div id="dl_rmTR-8-BKG-2475804_81937376_0_1-BOOKING_arrow" class="rs-arrow-right" style="float:left; margin-top:3px; margin-left:10px;"></div></a></div><p></p></span><span class="column"></span><span class="rateRoomConditions rateRoomText"><span class="rateCancelText"><ul><li><a class="gaHtlEvntTrk-Rates" style="font-size: 14px;" href="javascript:void(0)" onclick="RatesClient.showCancelPolicy('8-BKG-2475804_81937376_0_1-BOOKING')" data-ga-val="" data-ga-lbl="" data-ga-act="cancellation details" data-ga-cat="Retail Rate Selection"><span class="cancelpolicy-available" style="font-weight: bold;">FREE Cancellation</span> until <span class="cancelpolicy-untiltime" style="font-weight: bold;">11:59 PM</span> on <span class="cancelpolicy-untildate" style="font-weight: bold;">Nov 19</span></a></li></ul></span><ul class="group"><li><b class="green">Freebies: </b>Free internet in room, free breakfast and free parking</li></ul><ul><li class="payWhenYouStay">Pay When You Stay</li></ul><input id="hdnPRT10" type="hidden" value="AGENCY-BOOKING|BKG:2475804_81937376_0_1|x:x|10" name="hdnPRT10"><span id="spPRT10"></span></span><span class="column"></span><span class="rateRoomPrice roomRatePriceText IErateRoomPriceAdj"><span class="price-on-sale">&nbsp;</span><span class="rs_Display_rate_dollars">$96<span class="rs_Display_rate_cents">.11</span><input id="bookingDetails_Room10" type="hidden" value="" name="bookingDetails_Room10"></span><br class="clear"><span class="red ratesRmLeft"><b>5 rooms left</b></span></span><span class="column"></span><span class="rateRoomReserve module-buttons"><button type="button" class="button-primary gaHtlEvntTrk-Rates" onclick="RatesClient.bookRate('8-BKG-2475804_81937376_0_1-BOOKING')" data-ga-val="10" data-ga-lbl="5" data-ga-act="Book" data-ga-cat="Retail Rate Selection">Book</button></span></div><div class="clear"></div><div class="rates photodescWrapper" id="desc_rmTR-8-BKG-2475804_81937376_0_1-BOOKING" style="display: none;"><div class="rateRoomPhoto rateInfoText"><span class="left rsRoomPhotoBackgroundImage"><img onerror="javascript:RatesClient.defaultImage( $(this) );" src="http://aff.bstatic.com/images/hotel/max300/313/3138480.jpg" width="310" height="210" class="ht-pic"></span></div><div class="photodesc right"><a href="javascript:void(0);" class="gaHtlEvntTrk-Rates" data-ga-cat="Retail Rate Selection" data-ga-act="Photo Details" data-ga-lbl="Close Button" data-ga-val="" onclick="RatesClient.hideDesc('dl_rmTR-8-BKG-2475804_81937376_0_1-BOOKING','desc_rmTR-8-BKG-2475804_81937376_0_1-BOOKING')"><span class="module-icons photoDescClose">Close <i class="icon-utility-close"></i></span></a><p><b>Room Details:</b> One-Bedroom King Suite With Sofa Bed - Free Wi-Fi, A Flat-Screen Cable TV And A Separate Living Area Are Featured. A Microwave And A Fridge Are Included.</p><p><b>Room Facilities:</b> Pay-Per-View Channels, Telephone, Air Conditioning, Hairdryer, Iron, Radio, Refrigerator, Desk, Ironing Facilities, Seating Area, Free Toiletries, CD Player, Toilet, Microwave, Bathroom, Heating, Cable Channels, Bath Or Shower, Carpeted, Flat-Screen TV, Sofa, Wake-Up Service, Alarm Clock</p></div></div><div class="clear"></div>
<div id="rmTR-9-PUMB-B00-PEGASUS" class="rates displaylimit" style="display:none;"><span class="rateRoomType rateInfoText"><span class="rateInfoDesc">1 King Bed - Free Wifi, Mini Fridge, Microwave, Whirlpool</span><p style="padding-top: 15px;"></p><div class="rs-room-details"><a id="dl_rmTR-9-PUMB-B00-PEGASUS" onclick="RatesClient.toggleDesc('dl_rmTR-9-PUMB-B00-PEGASUS', 'desc_rmTR-9-PUMB-B00-PEGASUS', $(this).closest('tr'))" href="javascript:void(0);"><div style="float:left"><b>Room Details:</b></div><div id="dl_rmTR-9-PUMB-B00-PEGASUS_arrow" class="rs-arrow-right" style="float:left; margin-top:3px; margin-left:10px;"></div></a></div><p></p><span id="desc_rmTR-9-PUMB-B00-PEGASUS" style="display: none;"><span class="left descript"><span style="padding-bottom: 2px;"><b>Room Details:</b>1 King, Whirlpool Fits 2, Mini-Fridge, Microwave, 430sqft/39sqm, Wireless Internet, Complimentary, Coffee/Tea Maker</span></span><span class="clear"></span></span></span><span class="column"></span><span class="rateRoomConditions rateRoomText"><span class="rateCancelText"><ul><li><a class="gaHtlEvntTrk-Rates" style="font-size: 14px;" href="javascript:void(0)" onclick="RatesClient.showCancelPolicy('9-PUMB-B00-PEGASUS')" data-ga-val="" data-ga-lbl="" data-ga-act="cancellation details" data-ga-cat="Retail Rate Selection"><span class="cancelpolicy-available" style="font-weight: bold;">FREE Cancellation</span> until <span class="cancelpolicy-untiltime" style="font-weight: bold;">12:00 PM</span> on <span class="cancelpolicy-untildate" style="font-weight: bold;">Nov 20</span></a></li></ul></span><ul class="group"><li><b class="green">Freebies: </b>Free internet in room, free breakfast and free parking</li></ul><input id="hdnPRT11" type="hidden" value="MERCHANT-PEGASUS|PUMB:B00|x:x|11" name="hdnPRT11"><span id="spPRT11"></span></span><span class="column"></span><span class="rateRoomPrice roomRatePriceText IErateRoomPriceAdj"><span class="price-on-sale">&nbsp;</span><span class="rs_Display_rate_dollars">$101<span class="rs_Display_rate_cents">.99</span><input id="bookingDetails_Room11" type="hidden" value="" name="bookingDetails_Room11"></span></span><span class="column"></span><span class="rateRoomReserve module-buttons"><button type="button" class="button-primary gaHtlEvntTrk-Rates" onclick="RatesClient.bookRate('9-PUMB-B00-PEGASUS')" data-ga-val="11" data-ga-lbl="5" data-ga-act="Book" data-ga-cat="Retail Rate Selection">Book</button></span></div><div class="clear"></div><div id="rmTR-9-PUMC-C00-PEGASUS" class="rates displaylimit" style="display:none;"><span class="rateRoomType rateInfoText"><span class="rateInfoDesc">2 Queen Beds + Sofabed - Mini Fridge, Microwave</span><p style="padding-top: 15px;"></p><div class="rs-room-details"><a id="dl_rmTR-9-PUMC-C00-PEGASUS" onclick="RatesClient.toggleDesc('dl_rmTR-9-PUMC-C00-PEGASUS', 'desc_rmTR-9-PUMC-C00-PEGASUS', $(this).closest('tr'))" href="javascript:void(0);"><div style="float:left"><b>Room Details:</b></div><div id="dl_rmTR-9-PUMC-C00-PEGASUS_arrow" class="rs-arrow-right" style="float:left; margin-top:3px; margin-left:10px;"></div></a></div><p></p><span id="desc_rmTR-9-PUMC-C00-PEGASUS" style="display: none;"><span class="left descript"><span style="padding-bottom: 2px;"><b>Room Details:</b>2 Queen, Sofa Bed, Mini-Fridge, Microwave, 430sqft/39sqm, Living/Sitting Area, Coffee/Tea Maker</span></span><span class="clear"></span></span></span><span class="column"></span><span class="rateRoomConditions rateRoomText"><span class="rateCancelText"><ul><li><a class="gaHtlEvntTrk-Rates" style="font-size: 14px;" href="javascript:void(0)" onclick="RatesClient.showCancelPolicy('9-PUMC-C00-PEGASUS')" data-ga-val="" data-ga-lbl="" data-ga-act="cancellation details" data-ga-cat="Retail Rate Selection"><span class="cancelpolicy-available" style="font-weight: bold;">FREE Cancellation</span> until <span class="cancelpolicy-untiltime" style="font-weight: bold;">12:00 PM</span> on <span class="cancelpolicy-untildate" style="font-weight: bold;">Nov 20</span></a></li></ul></span><ul class="group"><li><b class="green">Freebies: </b>Free internet in room, free breakfast and free parking</li></ul><input id="hdnPRT12" type="hidden" value="MERCHANT-PEGASUS|PUMC:C00|x:x|12" name="hdnPRT12"><span id="spPRT12"></span></span><span class="column"></span><span class="rateRoomPrice roomRatePriceText IErateRoomPriceAdj"><span class="price-on-sale">&nbsp;</span><span class="rs_Display_rate_dollars">$101<span class="rs_Display_rate_cents">.99</span><input id="bookingDetails_Room12" type="hidden" value="" name="bookingDetails_Room12"></span></span><span class="column"></span><span class="rateRoomReserve module-buttons"><button type="button" class="button-primary gaHtlEvntTrk-Rates" onclick="RatesClient.bookRate('9-PUMC-C00-PEGASUS')" data-ga-val="12" data-ga-lbl="5" data-ga-act="Book" data-ga-cat="Retail Rate Selection">Book</button></span></div><div class="clear"></div><div id="rmTR-8-BKG-2475808_81937376_0_1-BOOKING" class="rates displaylimit" style="display:none;"><span class="rateRoomType rateInfoText"><span class="rateInfoDesc">King Room with Spa Bath</span><p style="padding-top: 15px;"></p><div class="rs-room-details"><a id="dl_rmTR-8-BKG-2475808_81937376_0_1-BOOKING" onclick="RatesClient.toggleDesc('dl_rmTR-8-BKG-2475808_81937376_0_1-BOOKING', 'desc_rmTR-8-BKG-2475808_81937376_0_1-BOOKING', $(this).closest('tr'))" href="javascript:void(0);"><div style="float:left"><b>View Photos and Room Details:</b></div><div id="dl_rmTR-8-BKG-2475808_81937376_0_1-BOOKING_arrow" class="rs-arrow-right" style="float:left; margin-top:3px; margin-left:10px;"></div></a></div><p></p></span><span class="column"></span><span class="rateRoomConditions rateRoomText"><span class="rateCancelText"><ul><li><a class="gaHtlEvntTrk-Rates" style="font-size: 14px;" href="javascript:void(0)" onclick="RatesClient.showCancelPolicy('8-BKG-2475808_81937376_0_1-BOOKING')" data-ga-val="" data-ga-lbl="" data-ga-act="cancellation details" data-ga-cat="Retail Rate Selection"><span class="cancelpolicy-available" style="font-weight: bold;">FREE Cancellation</span> until <span class="cancelpolicy-untiltime" style="font-weight: bold;">11:59 PM</span> on <span class="cancelpolicy-untildate" style="font-weight: bold;">Nov 19</span></a></li></ul></span><ul class="group"><li><b class="green">Freebies: </b>Free internet in room, free breakfast and free parking</li></ul><ul><li class="payWhenYouStay">Pay When You Stay</li></ul><input id="hdnPRT13" type="hidden" value="AGENCY-BOOKING|BKG:2475808_81937376_0_1|x:x|13" name="hdnPRT13"><span id="spPRT13"></span></span><span class="column"></span><span class="rateRoomPrice roomRatePriceText IErateRoomPriceAdj"><span class="price-on-sale">&nbsp;</span><span class="rs_Display_rate_dollars">$101<span class="rs_Display_rate_cents">.99</span><input id="bookingDetails_Room13" type="hidden" value="" name="bookingDetails_Room13"></span><br class="clear"><span class="red ratesRmLeft"><b>1 room left</b></span></span><span class="column"></span><span class="rateRoomReserve module-buttons"><button type="button" class="button-primary gaHtlEvntTrk-Rates" onclick="RatesClient.bookRate('8-BKG-2475808_81937376_0_1-BOOKING')" data-ga-val="13" data-ga-lbl="5" data-ga-act="Book" data-ga-cat="Retail Rate Selection">Book</button></span></div><div class="clear"></div><div class="rates photodescWrapper" id="desc_rmTR-8-BKG-2475808_81937376_0_1-BOOKING" style="display: none;"><div class="rateRoomPhoto rateInfoText"><span class="left rsRoomPhotoBackgroundImage"><img onerror="javascript:RatesClient.defaultImage( $(this) );" src="http://aff.bstatic.com/images/hotel/max300/313/3138478.jpg" width="310" height="210" class="ht-pic"></span></div><div class="photodesc right"><a href="javascript:void(0);" class="gaHtlEvntTrk-Rates" data-ga-cat="Retail Rate Selection" data-ga-act="Photo Details" data-ga-lbl="Close Button" data-ga-val="" onclick="RatesClient.hideDesc('dl_rmTR-8-BKG-2475808_81937376_0_1-BOOKING','desc_rmTR-8-BKG-2475808_81937376_0_1-BOOKING')"><span class="module-icons photoDescClose">Close <i class="icon-utility-close"></i></span></a><p><b>Room Details:</b> King Room With Spa Bath - Free Wi-Fi, A Flat-Screen Cable TV And A Seating Area Are Featured. A Microwave, A Fridge And A Spa Bath Are Included.</p><p><b>Room Facilities:</b> Pay-Per-View Channels, Telephone, Air Conditioning, Hairdryer, Hot Tub, Iron, Spa Bath, Radio, Refrigerator, Desk, Ironing Facilities, Seating Area, Free Toiletries, Toilet, Microwave, Bathroom, Heating, Cable Channels, Bath Or Shower, Carpeted, Flat-Screen TV, Wake-Up Service, Alarm Clock</p></div></div><div class="clear"></div>

            <div id="showMoreLink" style="padding-top: 10px; float: left;">
                <a href="javascript:void(0);" class="ActionLink" onclick="RatesClient.toggleRateListDisplay();">
                    <h2 class="rs_showallrooms" id="showMoreLinkTxt">Show All Room Options</h2>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>      
        </div>
        </div>
    </div>
</body>
</html>