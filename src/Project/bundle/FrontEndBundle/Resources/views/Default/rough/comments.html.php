<?php $page='teacher';
include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/conneXion.php");

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Industrial Training Project-Woman</title>
	<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/css/style.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/css/lightbox.css'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/css/gallery.css'); ?>" type="text/css" media="screen" />
<script src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/js/prototype.js'); ?>" type="text/javascript"></script>
<script src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/js/scriptaculous.js?load=effects,builder'); ?>" type="text/javascript"></script>
<script src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/js/lightbox.js'); ?>" type="text/javascript"></script>
<script src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/js/prototype.js'); ?>" type="text/javascript"></script>

       
        
</head>
<body>
	<div id="background">
<br>

<?php include("bundles/projectbundlefrontend/include/inc_head_navigation.php");?>

		<div id="page">

			<?php include("bundles/projectbundlefrontend/include/inc_page_header.php");?>
            
        		<div id="contents">
                <div class="commonBox">
                
                		
                        <div class="commonBox-centre">
                            
                            <form  action="<?php echo $view['router']->generate('link-update').'/'.$id.'/add'; ?>" method="post" class="formTable bookingForm" id="bookingform" name="bookingform">
<table cellspacing="6" cellpadding="0" border="0">
         
            <tbody><tr>
              <td align="left" colspan="5"><div class="mandatory">Fields marked with ( * ) are mandatory </div></td>
            </tr>
            <tr>
              <td align="left" colspan="5"><h3>Personal Details</h3> </td>
            </tr>
            <tr>
              <td align="right"><label>Title</label></td>
              <td width="79%" align="left" colspan="4"><select id="seTitle" class="selectBox curved5" name="seTitle">
                <option selected="selected" value="Mr.">Mr.</option>
                <option value="Ms.">Ms.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Dr.">Dr.</option>
              </select></td>
            </tr>
            
            <tr>
              <td width="21%" align="right"><label>First Name*</label></td>
              <td align="left" colspan="4">
              <input type="text"  class="textBox curved5 validate[required]" id="txt_fname" name="txt_fname"> 
              </td>
            </tr>
            
            <tr>
            <td width="21%" align="right"><label>Last Name*</label></td>
              <td align="left" colspan="4">
           	  <input type="text"  class="textBox curved5 validate[required]" id="txt_lname" name="txt_lname"></td>	
            </tr>
            
            <tr>
              <td valign="top" align="right"><label>Mailing Address*</label></td>
              <td align="left" colspan="4">
              <textArea  class="textArea curved5 validate[required,length[6,300]]" id="txta_address" rows="4" cols="35" name="txta_address"></textArea curved5></td>
            </tr>
            
            <tr>
              <td align="right" valign="top"><label>Phone</label></td>
              <td align="left" colspan="4">
              <input type="text"  class="textBox curved5" id="txt_phone" name="txt_phone">
              <br />
              Eg: (Country Code + City Code + Phone Number) </td>
            </tr>
            
            
            <tr>
              <td align="right"><label>Email*</label></td>
              <td align="left" colspan="4">
              <input type="text" class="textBox curved5 validate[required,custom[email]] " id="txt_email" name="txt_email"></td>
            </tr>
            
            
            
            <tr>
              <td align="right"><label>Country*</label></td>
              <td align="left" colspan="4">
              <select class="selectBox curved5 validate[required]" id="country" name="sel_country">
            		<option value="0">--- Select Your Country Name ---</option>
                  <option value="Algeria">Algeria</option>
                  <option value="American Samoa">American Samoa</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Anguilla">Anguilla</option>
                  <option value="Antarctica">Antarctica</option>
                  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaijan">Azerbaijan</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrain">Bahrain</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Belgium">Belgium</option>
                  <option value="Belize">Belize</option>
                  <option value="Benin">Benin</option>
                  <option value="Bermuda">Bermuda</option>
                  <option value="Bhutan">Bhutan</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                  <option value="Botswana">Botswana</option>
                  <option value="Bouvet Island">Bouvet Island</option>
                  <option value="Brazil">Brazil</option>
                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                  <option value="Brunei Darussalam">Brunei Darussalam</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Cambodia">Cambodia</option>
                  <option value="Cameroon">Cameroon</option>
                  <option value="Canada">Canada</option>
                  <option value="Cape Verde">Cape Verde</option>
                  <option value="Cayman Islands">Cayman Islands</option>
                  <option value="Central African Republic">Central African Republic</option>
                  <option value="Chad">Chad</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Christmas Island">Christmas Island</option>
                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Comoros">Comoros</option>
                  <option value="Congo">Congo</option>
                  <option value="Cook Islands">Cook Islands</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option ivoire="" value="Cote D">Cote D'Ivoire</option>
                  <option value="Croatia">Croatia</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Cyprus">Cyprus</option>
                  <option value="Czech Republic">Czech Republic</option>
                  <option value="Denmark">Denmark</option>
                  <option value="Djibouti">Djibouti</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Dominican Republic">Dominican Republic</option>
                  <option value="East Timor">East Timor</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egypt">Egypt</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Ethiopia">Ethiopia</option>
                  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                  <option value="Faroe Islands">Faroe Islands</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Finland">Finland</option>
                  <option value="France">France</option>
                  <option value="France, Metropolitan">France, Metropolitan</option>
                  <option value="French Guiana">French Guiana</option>
                  <option value="French Polynesia">French Polynesia</option>
                  <option value="French Southern Territories">French Southern Territories</option>
                  <option value="Gabon">Gabon</option>
                  <option value="Gambia">Gambia</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Germany">Germany</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Gibraltar">Gibraltar</option>
                  <option value="Greece">Greece</option>
                  <option value="Greenland">Greenland</option>
                  <option value="Grenada">Grenada</option>
                  <option value="Guadeloupe">Guadeloupe</option>
                  <option value="Guam">Guam</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Guinea-bissau">Guinea-bissau</option>
                  <option value="Guyana (British)">Guyana (British)</option>
                  <option value="Haiti">Haiti</option>
                  <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hong Kong">Hong Kong</option>
                  <option value="Hungary">Hungary</option>
                  <option value="Iceland">Iceland</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                  <option value="Iraq">Iraq</option>
                  <option value="Ireland">Ireland</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Japan">Japan</option>
                  <option value="Jersey">Jersey</option>
                  <option value="Kazakhstan">Kazakhstan</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Kiribati">Kiribati</option>
                  <option value="Korea, North">Korea, North</option>
                  <option value="Korea, South">Korea, South</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                  <option republic="" democratic="" s="" value="Lao People">Lao People's Democratic Republic</option>
                  <option value="Latvia">Latvia</option>
                  <option value="Lebanon">Lebanon</option>
                  <option value="Lesotho">Lesotho</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lithuania">Lithuania</option>
                  <option value="Luxembourg">Luxembourg</option>
                  <option value="Macau">Macau</option>
                  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Maldives">Maldives</option>
                  <option value="Mali">Mali</option>
                  <option value="Malta">Malta</option>
                  <option value="Marshall Islands">Marshall Islands</option>
                  <option value="Martinique">Martinique</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mauritius">Mauritius</option>
                  <option value="Mayotte">Mayotte</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                  <option value="Moldova, Republic of">Moldova, Republic of</option>
                  <option value="Monaco">Monaco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Montserrat">Montserrat</option>
                  <option value="Morocco">Morocco</option>
                  <option value="Mozambique">Mozambique</option>
                  <option value="Myanmar">Myanmar</option>
                  <option value="Namibia">Namibia</option>
                  <option value="Nauru">Nauru</option>
                  <option value="Nepal">Nepal</option>
                  <option value="Netherlands">Netherlands</option>
                  <option value="Netherlands Antilles">Netherlands Antilles</option>
                  <option value="New Caledonia">New Caledonia</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Niger">Niger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Niue">Niue</option>
                  <option value="Norfolk Island">Norfolk Island</option>
                  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                  <option value="Norway">Norway</option>
                  <option value="Oman">Oman</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Palau">Palau</option>
                  <option value="Panama">Panama</option>
                  <option value="Papua New Guinea">Papua New Guinea</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Peru</option>
                  <option value="Philippines">Philippines</option>
                  <option value="Pitcairn">Pitcairn</option>
                  <option value="Poland">Poland</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Puerto Rico">Puerto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Reunion">Reunion</option>
                  <option value="Romania">Romania</option>
                  <option value="Russian Federation">Russian Federation</option>
                  <option value="Rwanda">Rwanda</option>
                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                  <option value="Saint Lucia">Saint Lucia</option>
                  <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                  <option value="Samoa">Samoa</option>
                  <option value="San Marino">San Marino</option>
                  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="Senegal">Senegal</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra Leone">Sierra Leone</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                  <option value="Slovenia">Slovenia</option>
                  <option value="Solomon Islands">Solomon Islands</option>
                  <option value="Somalia">Somalia</option>
                  <option value="South Africa">South Africa</option>
                  <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                  <option value="Spain">Spain</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="St. Helena">St. Helena</option>
                  <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                  <option value="Sudan">Sudan</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                  <option value="Swaziland">Swaziland</option>
                  <option value="Sweden">Sweden</option>
                  <option value="Switzerland">Switzerland</option>
                  <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                  <option value="Taiwan">Taiwan</option>
                  <option value="Tajikistan">Tajikistan</option>
                  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Togo">Togo</option>
                  <option value="Tokelau">Tokelau</option>
                  <option value="Tonga">Tonga</option>
                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                  <option value="Tunisia">Tunisia</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Turkmenistan">Turkmenistan</option>
                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                  <option value="Tuvalu">Tuvalu</option>
                  <option value="Uganda">Uganda</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="United Arab Emirates">United Arab Emirates</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="United States of America">United States of America</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="Uzbekistan">Uzbekistan</option>
                  <option value="Vanuatu">Vanuatu</option>
                  <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="Viet Nam">Viet Nam</option>
                  <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                  <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                  <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                  <option value="Western Sahara">Western Sahara</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Yugoslavia">Yugoslavia</option>
                  <option value="Zaire">Zaire</option>
                  <option value="Zambia">Zambia</option>
                  <option value="Zimbabwe">Zimbabwe</option>
                  <option value="Canary Islands, The">Canary Islands, The</option>
                  <option value="Curacao">Curacao</option>
                  <option value="Jordan">Jordan</option>
                  <option value="Nevis">Nevis</option>
                  <option value="Saipan">Saipan</option>
                  <option value="Somaliland, Rep of (North Somalia)">North Somalia</option>
                  <option value="St. Barthelemy">St. Barthelemy</option>
                  <option value="St. Eustatius">St. Eustatius</option>
                  <option value="St. Kits">St. Kits</option>
                  <option value="St. Lucia">St. Lucia</option>
                  <option value="St. Maarten">St. Maarten</option>
                  <option value="St. Vincent">St. Vincent</option>
                  <option value="Tabiti">Tabiti</option>
                  <option value="Bonaire">Bonaire</option>
                  <option value="Guernsey">Guernsey</option>
                </select></td>
            </tr>
            <tr>
              <td valign="top" align="right"><label>Comments</label></td>
              <td align="left" colspan="4">
              <textArea curved5  class="textArea curved5" id="txta_comments" rows="4" cols="35" name="txta_comments"></textArea curved5></td>
            </tr>
            
<tr>
              <td valign="top" align="right"></td>
              <td class="link" colspan="4">
                <input type="checkbox" class="checkBox"  value="checkbox" id="agree" name="agree">
               <a target="_blank" href="terms-conditions.html"> I accept terms and Conditions</a></td>
            </tr>
            
            
            <tr><td>&nbsp;</td></tr>
            
            <tr>
              <td align="right">&nbsp;</td>
              <td colspan="4"><input type="submit" class="btn btn-dblue curved5" value="Submit" id="submit" name="submit">
              <input type="reset" id="formbutton" class="btn curved5" name="input">         
              
              
                   </td>
            </tr>
          </tbody></table>

</form>
                    	 

                        </div>
						
			</div>
		</div>
		<?php include("bundles/projectbundlefrontend/include/inc_footer.php");?>
	</div>
</body>
</html>