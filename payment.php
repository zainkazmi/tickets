<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/payment.css" />
		<link type="text/css" src="https://www.priceline.com/hotel/content/css/trans/contractPaymentStyleRevamp.css?v=20141031">
		<link rel="stylesheet" href="http://www.priceline.com/hotel/content/css/list/ht-listings.css?v=20140729">
    <link rel="stylesheet" href="http://www.priceline.com/hotel/content/css/list/listitem.css?v=20141114">
    <link rel="stylesheet" href="http://www.priceline.com/sharedapps/content/css/pcln_main.css">
    <link rel="stylesheet" href="http://www.priceline.com/sharedapps/content/css/grid_1010_12col.css">
		<title>Tickets| Payment Page</title>
    </head>

	<body>
	     <div class="main_container">
		 
		    <div id= "content">
			     <div style="width:400px;height:50px">
				 
				     <h2 style ="color:black">Summary of Charges</h2>
				    
				 </div>
				 
				 <div class="clr"></div>
				 
				 <table cellpadding="0" cellspacing="0" border="0" class="summary_table no-top-margin">
                      <tbody>
					      <tr>
                              <td class="labels">Total Cost
                              </td>
                              <td class="billinginfo">
                                  <div style="float:left;">$78.64</div>
                              </td>
                           </tr>
						   <tr>
							 <td class="labels">Services Charges:</td>
							 <td class="billinginfo">
                                  <div style="float:left;">$5.64</div>
                              </td>
							 </tr>
						   <tr>

							 <td class="labels">Ticket Subtotal:</td>
							 <td class="billinginfo">$82.64</td>
						   </tr>
						   <tr>

							 <td class="labels">Taxes:</td>
							 <td class="billinginfo">$6.64</td>
						   </tr>
						   <tr>

							 <td class="labels"><strong>Total Charges</strong></td>
							 <td class="billinginfo"><strong>$90.64</strong></td>
						   </tr>
 
					</tbody>
				</table>
				
				<div style="width:400px;height:50px" >
				  <h3 style="color:#e5e8ec">____________________________________________________________________________________________________</h3>
				</div>
				
				<div class="block">
				<h2 class="paymentHeader" style="color:black">
					Choose Your Payment Method 
					<span style="color: #4f4f4f; font-size: 12px; font-weight: normal;">(Click one option below)</span>
				</h2>
				<div>
					<div class="paymentMethod">
						<div class="paymentRadio">
							<input type="radio" name="paymentMethod" value="creditcard" checked="checked" id="paymentMethodCC"> 
						</div>
						<div class="paymentMethodImg">
							<img src="img/cc-thumb.gif">
						</div>
						<div class="whatIsPaypal">
							<font size="1" color="#0A84C1">Credit Card</font>					
						</div>					
					</div>
					<div class="paymentMethod">
						<div class="paymentRadio">
							<input type="radio" name="paymentMethod" value="paypal" id="paymentMethodPaypal"> 
						</div>
						<div class="paymentMethodImg">
							<img src="img/paypal.jpg">
						</div>
						<div class="whatIsPaypal">
							<font size="1"><a class="inline1" href="#what-is-paypal">What is PayPal?</a></font>					
						</div>
					</div>		
					<br>		
				</div>			
			</div>
			
			<div style="width:400px;height:50px" >
				  <h3 style="color:#e5e8ec">____________________________________________________________________________________________________</h3>
				</div>
				
				<div class="block">
				<h2 id="ccHeaderSS" class="visa" style="color:black">Enter Your Billing Address <span style="font-size:12px;font-weight:normal;color:#4F4F4F">(as it appears on your credit card statement)</span></h2>
		
		       
				   <table class="contract-payment-info">
				      <tbody><tr>
				         <td class="billing-address-position">
				         	<label for="bookCreditCardHolderFirstName">
				         		<span>         	
				         			First
					         	</span>
				         	</label>
				         </td>
				        <td class="billing-address-position"><label for="bookCreditCardHolderLastName">
								<span>         	                  
						        	Last
						        </span>
							</label>
						</td>
				      </tr>
				      <tr>
				         <td>
				         	<input type="text" name="bookCreditCardHolderFirstName" maxlength="32" size="14" value="" id="bookCreditCardHolderFirstName" title="Payment First Name">
				         	<input type="hidden" name="bookCreditCardHolderMIName" value="" id="bookCreditCardHolderMIName">
				         </td>
				         <td><input type="text" name="bookCreditCardHolderLastName" maxlength="32" size="14" value="" id="bookCreditCardHolderLastName" title="Payment Last Name"></td>
				      </tr>
				   </tbody></table>
				
				
				<div id="gblCCForm" style="display:">
				   
				   
				   
				   
				      
				      
				   
				      
				      
				         
				         
				   
				   
				       
		
		   		  <table cellpadding="0" cellspacing="0" border="0" width="100%">
	      <tbody><tr><td>
			        		<table class="contract-payment-info">
					         <tbody><tr><td>
								<label for="bookBillingAddress1"><span id="bookBillingAddressSpan">Street</span></label>
					    	 </td></tr>
					        <tr>
								<td>
									<input type="text" name="bookBillingAddress" maxlength="64" size="32" value="" id="bookBillingAddress1">
									<input type="hidden" name="bookBillingAddress2" value="" id="bookBillingAddress2">
								</td> 
					        </tr>				
							</tbody></table>
	
					         <table class="contract-payment-info">
					            <tbody><tr>
									<td>
					                   <label for="countryCode">
					                       <span>Country</span>
					                   </label>
									   <font size="1"><a href="javascript:whyWeAskPop();">Why we ask?</a></font>				                   
					               </td>
					               <td>
					                   <label for="bookCityName">
					    	        	    <span id="bookCityNameSpan">City/Town</span>
										</label>
						       </td>
	
	                                                <td>               	
					                  <label for="bookStateProvinceCode">
					                  		<span id="bookStateProvinceCodeSpan">State</span>
					                  </label>
					               </td>
					               <td>
					               		<label for="bookPostalCode">
					               			<span id="bookPostalCodeSpan">Zip Code</span>
						   		        </label>
						       </td> 
	
	       </tr><tr>
	          <td>
									    <div id="country_code_wrapper" class="form-dropdown"><select name="countryCode" onchange="javascript:changeRegion();gfcGetProvinceCodes()" id="countryCode"><option value="US">United States</option>
												
												<option value="CA">Canada</option>
												
													<option value="AF">Afghanistan</option>
													
													<option value="AL">Albania</option>
													
													<option value="DZ">Algeria</option>
													
													<option value="AS">American Samoa</option>
													
													<option value="AD">Andorra</option>
													
													<option value="AO">Angola</option>
													
													<option value="AI">Anguilla</option>
													
													<option value="AQ">Antarctica</option>
													
													<option value="AG">Antigua And Barbuda</option>
													
													<option value="AR">Argentina</option>
													
													<option value="AM">Armenia</option>
													
													<option value="AW">Aruba</option>
													
													<option value="AU">Australia</option>
													
													<option value="AT">Austria</option>
													
													<option value="AZ">Azerbaijan</option>
													
													<option value="BS">Bahamas</option>
													
													<option value="BH">Bahrain</option>
													
													<option value="BD">Bangladesh</option>
													
													<option value="BB">Barbados</option>
													
													<option value="BY">Belarus</option>
													
													<option value="BE">Belgium</option>
													
													<option value="BZ">Belize</option>
													
													<option value="BJ">Benin</option>
													
													<option value="BM">Bermuda</option>
													
													<option value="BT">Bhutan</option>
													
													<option value="BO">Bolivia</option>
													
													<option value="BQ">Bonaire, Sint Eustatius And Saba</option>
													
													<option value="BA">Bosnia And Herzegovina</option>
													
													<option value="BW">Botswana</option>
													
													<option value="BV">Bouvet Island</option>
													
													<option value="BR">Brazil</option>
													
													<option value="IO">British Indian Ocean Territory</option>
													
													<option value="VG">British Virgin Islands</option>
													
													<option value="BN">Brunei</option>
													
													<option value="BG">Bulgaria</option>
													
													<option value="BF">Burkina</option>
													
													<option value="BI">Burundi</option>
													
													<option value="KH">Cambodia</option>
													
													<option value="CM">Cameroon</option>
													
													<option value="CV">Cape Verde</option>
													
													<option value="KY">Cayman Islands</option>
													
													<option value="CF">Central African Republic</option>
													
													<option value="TD">Chad</option>
													
													<option value="CL">Chile</option>
													
													<option value="CN">China</option>
													
													<option value="CX">Christmas Island</option>
													
													<option value="CC">Cocos (Keeling) Islands</option>
													
													<option value="CO">Colombia</option>
													
													<option value="KM">Comoros</option>
													
													<option value="CG">Congo</option>
													
													<option value="CK">Cook Islands</option>
													
													<option value="CR">Costa Rica</option>
													
													<option value="HR">Croatia</option>
													
													<option value="CW">Curacao</option>
													
													<option value="CY">Cyprus</option>
													
													<option value="CZ">Czech Republic</option>
													
													<option value="CD">Dem Rep Of The Congo (Zaire)</option>
													
													<option value="DK">Denmark</option>
													
													<option value="DJ">Djibouti</option>
													
													<option value="DM">Dominica</option>
													
													<option value="DO">Dominican Republic</option>
													
													<option value="EC">Ecuador</option>
													
													<option value="EG">Egypt</option>
													
													<option value="SV">El Salvador</option>
													
													<option value="GQ">Equatorial Guinea</option>
													
													<option value="ER">Eritrea</option>
													
													<option value="EE">Estonia</option>
													
													<option value="ET">Ethiopia</option>
													
													<option value="FK">Falkland Islands (Islas Malvinas</option>
													
													<option value="FO">Faroe Islands</option>
													
													<option value="FM">Federated States Of Micronesia</option>
													
													<option value="FJ">Fiji</option>
													
													<option value="FI">Finland</option>
													
													<option value="FR">France</option>
													
													<option value="GF">French Guiana</option>
													
													<option value="PF">French Polynesia</option>
													
													<option value="TF">French Southern And Antarctic Lands</option>
													
													<option value="GA">Gabon</option>
													
													<option value="GM">Gambia</option>
													
													<option value="GE">Georgia</option>
													
													<option value="DE">Germany</option>
													
													<option value="GH">Ghana</option>
													
													<option value="GI">Gibraltar</option>
													
													<option value="GR">Greece</option>
													
													<option value="GL">Greenland</option>
													
													<option value="GD">Grenada</option>
													
													<option value="GP">Guadeloupe</option>
													
													<option value="GU">Guam</option>
													
													<option value="GT">Guatemala</option>
													
													<option value="GG">Guernsey</option>
													
													<option value="GN">Guinea</option>
													
													<option value="GW">Guinea-Bissau</option>
													
													<option value="GY">Guyana</option>
													
													<option value="HT">Haiti</option>
													
													<option value="HM">Heard Island And Mcdonald Islands</option>
													
													<option value="VA">Holy See (Vatican City)</option>
													
													<option value="HN">Honduras</option>
													
													<option value="HK">Hong Kong</option>
													
													<option value="HU">Hungary</option>
													
													<option value="IS">Iceland</option>
													
													<option value="IN">India</option>
													
													<option value="ID">Indonesia</option>
													
													<option value="IQ">Iraq</option>
													
													<option value="IE">Ireland</option>
													
													<option value="IM">Isle Of Man</option>
													
													<option value="IL">Israel</option>
													
													<option value="IT">Italy</option>
													
													<option value="CI">Ivory Coast</option>
													
													<option value="JM">Jamaica</option>
													
													<option value="JP">Japan</option>
													
													<option value="JE">Jersey</option>
													
													<option value="JO">Jordan</option>
													
													<option value="XK">Kosovo</option>
													
													<option value="KZ">Kazakhstan</option>
													
													<option value="KE">Kenya</option>
													
													<option value="KI">Kiribati</option>
													
													<option value="KW">Kuwait</option>
													
													<option value="KG">Kyrgyzstan</option>
													
													<option value="LA">Laos</option>
													
													<option value="LV">Latvia</option>
													
													<option value="LB">Lebanon</option>
													
													<option value="LS">Lesotho</option>
													
													<option value="LR">Liberia</option>
													
													<option value="LY">Libya</option>
													
													<option value="LI">Liechtenstein</option>
													
													<option value="LT">Lithuania</option>
													
													<option value="LU">Luxembourg</option>
													
													<option value="MO">Macau</option>
													
													<option value="MK">Macedonia</option>
													
													<option value="MG">Madagascar</option>
													
													<option value="MW">Malawi</option>
													
													<option value="MY">Malaysia</option>
													
													<option value="MV">Maldives</option>
													
													<option value="ML">Mali</option>
													
													<option value="MT">Malta</option>
													
													<option value="MH">Marshall Islands</option>
													
													<option value="MQ">Martinique</option>
													
													<option value="MR">Mauritania</option>
													
													<option value="MU">Mauritius</option>
													
													<option value="YT">Mayotte</option>
													
													<option value="MX">Mexico</option>
													
													<option value="MD">Moldova</option>
													
													<option value="MC">Monaco</option>
													
													<option value="MN">Mongolia</option>
													
													<option value="ME">Montenegro</option>
													
													<option value="MS">Montserrat</option>
													
													<option value="MA">Morocco</option>
													
													<option value="MZ">Mozambique</option>
													
													<option value="MM">Myanmar</option>
													
													<option value="NA">Namibia</option>
													
													<option value="NR">Nauru</option>
													
													<option value="NP">Nepal</option>
													
													<option value="NL">Netherlands</option>
													
													<option value="NC">New Caledonia</option>
													
													<option value="NZ">New Zealand</option>
													
													<option value="NI">Nicaragua</option>
													
													<option value="NE">Niger</option>
													
													<option value="NG">Nigeria</option>
													
													<option value="NU">Niue</option>
													
													<option value="NF">Norfolk Island</option>
													
													<option value="MP">Northern Mariana Islands</option>
													
													<option value="NO">Norway</option>
													
													<option value="OM">Oman</option>
													
													<option value="PK">Pakistan</option>
													
													<option value="PW">Palau</option>
													
													<option value="PA">Panama</option>
													
													<option value="PG">Papua New Guinea</option>
													
													<option value="PY">Paraguay</option>
													
													<option value="PE">Peru</option>
													
													<option value="PH">Philippines</option>
													
													<option value="PN">Pitcairn Islands</option>
													
													<option value="PL">Poland</option>
													
													<option value="PT">Portugal</option>
													
													<option value="PR">Puerto Rico</option>
													
													<option value="QA">Qatar</option>
													
													<option value="KR">Republic Of Korea</option>
													
													<option value="RE">Reunion</option>
													
													<option value="RO">Romania</option>
													
													<option value="RU">Russia</option>
													
													<option value="RW">Rwanda</option>
													
													<option value="BL">Saint Barthelemy</option>
													
													<option value="MF">Saint Martin (French Part)</option>
													
													<option value="PM">Saint Pierre And Miquelon</option>
													
													<option value="VC">Saint Vincent And The Grenadines</option>
													
													<option value="SM">San Marino</option>
													
													<option value="ST">Sao Tome And Principe</option>
													
													<option value="SA">Saudi Arabia</option>
													
													<option value="SN">Senegal</option>
													
													<option value="RS">Serbia</option>
													
													<option value="SC">Seychelles</option>
													
													<option value="SL">Sierra Leone</option>
													
													<option value="SG">Singapore</option>
													
													<option value="SX">Sint Maarten (Dutch Part)</option>
													
													<option value="SK">Slovakia</option>
													
													<option value="SI">Slovenia</option>
													
													<option value="SB">Solomon Islands</option>
													
													<option value="SO">Somalia</option>
													
													<option value="ZA">South Africa</option>
													
													<option value="ES">Spain</option>
													
													<option value="LK">Sri Lanka</option>
													
													<option value="SH">St  Helena</option>
													
													<option value="LC">St Lucia</option>
													
													<option value="KN">St. Kitts And Nevis</option>
													
													<option value="SR">Suriname</option>
													
													<option value="SJ">Svalbard</option>
													
													<option value="SZ">Swaziland</option>
													
													<option value="SE">Sweden</option>
													
													<option value="CH">Switzerland</option>
													
													<option value="TW">Taiwan</option>
													
													<option value="TJ">Tajikistan</option>
													
													<option value="TZ">Tanzania</option>
													
													<option value="TH">Thailand</option>
													
													<option value="TL">Timor-Leste</option>
													
													<option value="TG">Togo</option>
													
													<option value="TK">Tokelau</option>
													
													<option value="TO">Tonga</option>
													
													<option value="TT">Trinidad And Tobago</option>
													
													<option value="TN">Tunisia</option>
													
													<option value="TR">Turkey</option>
													
													<option value="TM">Turkmenistan</option>
													
													<option value="TC">Turks And Caicos Islands</option>
													
													<option value="TV">Tuvalu</option>
													
													<option value="UG">Uganda</option>
													
													<option value="UA">Ukraine</option>
													
													<option value="AE">United Arab Emirates</option>
													
													<option value="GB">United Kingdom</option>
													
													<option value="UY">Uruguay</option>
													
													<option value="UZ">Uzbekistan</option>
													
													<option value="VU">Vanuatu</option>
													
													<option value="VE">Venezuela</option>
													
													<option value="VN">Vietnam</option>
													
													<option value="VI">Virgin Islands</option>
													
													<option value="WF">Wallis And Futuna</option>
													
													<option value="WS">Western Samoa</option>
													
													<option value="YE">Yemen</option>
													
													<option value="ZM">Zambia</option>
													
													<option value="ZW">Zimbabwe</option></select></div>
					               	</td>                   
					               	<td><input type="text" name="bookCityName" maxlength="32" size="14" value="" id="bookCityName"></td>
	
					               	<td>
					                  <div id="states" style="display:block">
					                     <div id="state_wrapper" class="form-dropdown"><select name="bookStateProvinceCode" onchange="javascript:chooseCountry(this.value);" id="bookStateProvinceCode">
											
					                        	
											        
					                        
					                        
					                        
					                        
					                        
					                        
					                        
					                        
					                        
					                        
					                        
					                        
					                        
					                        
					                        
					                        
					                        
					                        
					                        
					                        
											
						                        
						                        
						                                                            
						                        
						                        <option value="">-Choose-</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="VQ">US Virgin Islands</option><option value="WA">Washington</option><option value="DC">Washington DC</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option><option value="AA">Armed Forces Americas</option><option value="AP">Armed Forces Pacific</option><option value="AE">Armed Forces Elsewhere</option></select></div>
					    			  </div>
					                  <div id="region" style="display:none"><input type="text" name="regionName" maxlength="64" size="25" value="" id="regionName"></div>
					               </td>
					               <td><input type="text" name="bookPostalCode" maxlength="10" size="10" value="" id="bookPostalCode"></td>               
					            </tr>                        
					         </tbody></table>
	      </td></tr>
			   		</tbody></table>
			</div>
		
	
	
	
      <table class="contract-payment-info">
        <tbody><tr><td class="work-phone-lable"><label for="bookDaytimePhone"><span>Phone Number</span></label></td></tr>
        <tr><td><input type="text" name="bookDaytimePhone" maxlength="22" size="14" value="" id="bookDaytimePhone" title="Phone Number"></td></tr>
        <tr><td><span>&nbsp;(If outside the U.S. or Canada, include country code)</span></td></tr>
      </tbody></table>
	
	
	
		  <table class="contract-payment-info">
		     <tbody><tr>
		        <td><label for="bookEmailAddress"><span>Your E-mail Address</span></label></td>
		        <td>&nbsp;</td><td>&nbsp;</td>
	
		        <td><label for="bookReTypeEmailAddress"><span>Re-type E-mail Address</span></label></td>
	
		     </tr>
		     <tr>
		        <td><input type="text" name="bookEmailAddress" maxlength="64" size="19" value="" id="bookEmailAddress"></td>
		        <td>&nbsp;</td><td>&nbsp;</td>
	
	         <td><input type="text" name="bookReTypeEmailAddress" maxlength="64" size="19" value="" id="bookReTypeEmailAddress"></td>
	    </tr>
		   </tbody></table>
		
	
		<table id="alertInfo">
			
	   <tbody><tr><td colspan="6">
	   <div id="nlOptInContainer" style="display:none;">
	      <table cellpadding="3" cellspacing="0" border="0">
	         <tbody><tr>
	            <td>
	               <input type="checkbox" name="recievePromotions" value="true" checked="checked" id="recievePromotions">
	               <input type="hidden" name="shwRPCBx" value="" id="shwRPCBx">
	
	               <input type="hidden" id="alertId" name="alertId" value="1">
	               <input type="hidden" name="submitNLCheckbox" value="true" id="submitNLCheckbox">
	               <input type="hidden" id="dynamicAppear" name="dynamicAppear" value="false">
	
	            </td>
	            <td valign="middle">
	               <font face="arial,helvetica,sans-serif" size="2">
	                 
	                 <label for="recievePromotions"><font id="orange" color="#990000"><b>Yes, </b></font>I would like to receive exclusive 
	                           <a href="javascript:showPromotionsPopup();">promotions, coupons and discounts</a>
					. </label>
			       
	               </font> 
	            </td>
	         </tr>
	      </tbody></table>
	   </div>		         
			         
	
	   </td></tr>
	
	</tbody></table>
	</div>
	
	
	<div style="width:400px;height:50px" >
				  <h3 style="color:#e5e8ec">____________________________________________________________________________________________________</h3>
				</div>
	
	
	
	
	
	<div class="block">
		<div id="gblHeaderCCReqPRCC" style="display:"><h2 id="ccHeader" class="visa" style = "color:black">Enter Your Credit Card</h2>
		
		</div>
		<div id="contract-payment-container" class="contractcontent">
				<!--  div (prccOfferText1) to display the First slice of content for Barclays Swap Position SETI test-->
				<div id="prccOfferText1" style="display:none;width:100%;"></div>
				<div id="ccSection">
				   <table class="contract-payment-info">
				      <tbody><tr>
				      
                       
				         <td>
				         	<label for="bookCreditCardNumber">
								<span>         	                           	
						         	Credit Card Number
						        </span>
				         	</label>
				         </td>
				      
				      
				      
				         <td colspan="2"><label for="bookCreditCardExpirationMonth"><span>Expiration Date</span></label></td>
				      
				        
				         <td><label for="bookSecurityCode"><span>Security Code</span></label></td>
				        
                       
				      </tr>
				      
                      
				      
                      <input type="hidden" name="bookCrditLogic" value="ON">
                      
				         <td><input type="text" name="bookCreditCardNumber" id="bookCreditCardNumber" size="20" maxlength="22" autocomplete="off" value=""></td>
				      
				                         
	               
				                      
				         
				            <td><div id="cc_m_wrapper" class="form-dropdown"><select name="bookCreditCardExpirationMonth" id="bookCreditCardExpirationMonth"><option value="">--Month--</option>
				               <option value="01">January</option>
				               <option value="02">February</option>
				               <option value="03">March</option>
				               <option value="04">April</option>
				               <option value="05">May</option>
				               <option value="06">June</option>
				               <option value="07">July</option>
				               <option value="08">August</option>
				               <option value="09">September</option>
				               <option value="10">October</option>
				               <option value="11">November</option>
				               <option value="12">December</option></select></div></td>
				            <td><div id="cc_y_wrapper" class="form-dropdown"><select name="bookCreditCardExpirationYear" id="bookCreditCardExpirationYear" title="Credit Card Expiration Year"><option value="">--Year--</option>									
				               <option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option></select></div></td>
				         
				      
				        
				      <td><input type="text" name="bookSecurityCode" id="bookSecurityCode" size="5" maxlength="4" autocomplete="off" value=""><font size="1">&nbsp;<a href="javascript:void gfIQPopUpHelp('ext(pop_about_security_code)',gIQConstPopUpMedium)">What's this?</a></font>
				         </td>
				      
                      
                      
                      
                      
                     
                      <td>
                           <ul class="cc-logos">
                                
                                <li class="logos cc-discover"><img src="img/visa_card.gif"></li>
                               
                                <li class="logos cc-diners-club"><img src="img/mastercard.gif"></li>
                               
                                <li class="logos cc-master-card"><img src="img/amex_card.gif"></li>
                                
                                <li class="logos cc-american-express"><img src="img/discover_card.gif"></li>
                              
                           </ul>
                      </td>
                      
                      
                      
                     
                      
                      
                     
                      
				      
				        
				         <input type="hidden" name="validateCVV" value="yes">
				      
				   
				   </tbody></table>
				   </div>
	
	
	
	
				   <!--  div (prccOfferText2) to display the second slice of content for Barclays Swap Position SETI test-->
				   <div id="prccOfferText2" style="display:none;width:100%;"></div>
				   <div id="optOutText" style="display:none;"></div>
	
	
	<div id="phoneNumAS" style="display:none;">
	 	<table class="contract-payment-info">
        <tbody><tr><td class="work-phone-lable"><label for="bookDaytimePhone"><span>Phone Number</span></label></td></tr>
        <tr><td><input type="text" name="bookDaytimePhone" maxlength="22" size="14" value="" id="bookDaytimePhone" title="Phone Number"></td></tr>
        <tr><td><span>&nbsp;(If outside the U.S. or Canada, include country code)</span></td></tr>
      	</tbody></table>
	</div>
	
	
		</div>
		</div>
	
	
	<div style="width:400px;height:50px" >
				  <h3 style="color:#e5e8ec">____________________________________________________________________________________________________</h3>
				</div>
                
				<div id="ras_head_wrapper" class="ras-head-wrapper"><h2 class="ras-head" style="color:black">Register now and save! (optional)</h2></div>
				
				<table id="blockImg" width="100%" cellpadding="0" cellspacing="2" border="0" summary="">
                <tbody><tr><td bgcolor="#99B1DC"><img src="/hotel/content/graphics/sp.gif" alt="" width="1" height="1"></td>
				</tr>
				</tbody></table>

<table border="0" cellpadding="4" bgcolor="#EBF2FF" width="100%" summary="" class="profTxt ras-content">
	<tbody><tr>
		<td>
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tbody><tr>
					<td>
					<font face="arial,helvetica,sans-serif" size="-1" color="#000000">
					

						Save your ticket history and billing information in a 
						<a href="https://www.priceline.com/myprofile/setupSignIn.do?jsk=504a200a554a200a20141115092503338011581150&amp;plf=PCLH&amp;dact=https%3A%2F%2Fwww.priceline.com%2Fhotel%2FcontractPayment.do%3Fjsk%3D504a200a554a200a20141115092503338011581150%26plf%3DPCLH%26key%3Di2irqoaf%26rtpl%3DY">
						secure profile.</a>
					


					</font>
                                                                               
                                        <!--CouponTag start--><!--attrs: couponView=REGISTER_MESSAGE, travelStartDate=11/22/2014, travelEndDate=11/23/2014, productId=5, superclusterId=, destinationCode=, hotelId=1804104, rentalVendorCode=, rentalCityId=, rentalCarClass=, hotelRateTypeCode=M, hotelChainCode=FN, registeredFlag=, roomCount=, promoCode=, promoCategory=--><!--CouponTag end-->
                                        
					</td>
				</tr>
			</tbody></table>
<br>				

			<table id="blockBorder" cellpadding="4" cellspacing="0" border="0" bgcolor="#FFFFFF" bordercolor="#cccccc" summary="" width="100%" style="border: 0px;">
				<tbody><tr>
					<td>
						<table cellpadding="1" cellspacing="0" border="0">
							<tbody><tr>
								<td>
							
		<input type="hidden" name="bookSignInQuestionId" value="1" id="bookSignInQuestionId">
	
							</td>
						</tr>						
						</tbody></table>
						<table cellpadding="1" cellspacing="0" border="0" width="100%">
							<tbody><tr>
								<td>
								<font id="bookSignInQuestionLabel" face="arial,helvetica,sans-serif" size="-1" color="#000066">
								<span>Password:</span>
								</font><font size="1" color="#000066"> (Min. 8 characters)</font><br>
								</td>
								<td>
								<font id="bookSignInQuestionLabel" face="arial,helvetica,sans-serif" size="-1" color="#000066">
								<span>Confirm Password:</span>									
									</font><br>
								</td>
								<td rowspan="2">&nbsp; </td>
							</tr>
							
							<tr>
								<td><input type="password" name="bookAnswerText" maxlength="22" size="20" value="" onkeyup="passWordCheck(true, this)" id="bookAnswerText"></td>
								<td><input type="password" name="bookAnswerTextConfirm" maxlength="22" size="20" value="" onchange="profilePasswordConfirm(true,this)" id="bookAnswerTextConfirm"></td>
							</tr>
							
							
							<tr>
								<td>
									<div class="pwd_strength" id="field_pword_strength">
										<a class="light-box-info" href="#password-instructions">Password strength:</a>&nbsp;<b id="state" class="" style=""></b>
										<div id="pwdBar" class="meter"><span id="strength-bar" class="default"></span></div>	
									</div>
								</td>
								<td>
									<div class="pwd_check group" id="passwordGrp">
										<div id="pwdmatchimg" class=""></div>
										<div class="left"><b id="passwordMatches" class=""></b></div>
									</div>
								</td>
							</tr>
							
						</tbody></table>

                        </td>
                     </tr>
                 </tbody></table>    
                  </td>
           </tr>                              
</tbody></table>
	
	
	
	<div class="details_navbuttons">
		<div class="details_navbuttons_top"></div>
		<div class="details_navbuttons_body_bg">
			<div class="nav_buttons_align">
				<span class="button">
					
					
						<a id="bookButton" href="javascript:submitForm('false')" class="btn b-grn">Pay for your Ticket</a>
					
				</span>
			</div>
		</div>
		<div class="details_navbuttons_btm"></div>
	</div>
	
	
	
	
	</div>
				
				
			</div>
		 
		 
		 </div>
	
	
	
	</body>
	
</html>