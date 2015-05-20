<?php

use yii\helpers\Html;
?>

    <div class="baner">
        <div class="formLInk">
            <div class="container">
                <div class="nav-container" style="float:left">
                    <nav> <a id="resp-menu-2" class="responsive-menu" href="#"><i class="icon-reorder"></i> Menu</a>
                        <ul class="menu-2">
                            <li><a class="homer" href="#">Update Profile</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Inbox</a>
                                        <ul>
                                            <li><a href="#">Sub Sub-Menu 1</a>
                                            </li>
                                            <li><a href="#">Sub Sub-Menu 2</a>
                                            </li>
                                            <li><a href="#">Sub Sub-Menu 3</a>
                                            </li>
                                            <li><a href="#">Sub Sub-Menu 4</a>
                                            </li>
                                            <li><a href="#">Sub Sub-Menu 5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Profile</a>
                                    </li>
                                    <li><a href="#">Jobs & Applications</a>
                                    </li>
                                    <li><a href="#">Recruiters</a>
                                    </li>
                                    <li><a href="#">Settings</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Job Search</a>
                            </li>
                            <li><a href="#">Career</a>
                            </li>
                            <li><a href="#">Recruiters</a>
                            </li>
                            <li><a href="#">Services</a>
                            </li>
                            <li><a href="#">Notifications</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<div class="profile-pages">
        <div class="container">
            <div class="col-md-8">
                <div class="p-block">
                    <h2>Complete Your Profile</h2>

                    <p>Make your profile attractive to recruiters. Provide us the following details</p>
                    <form class="form-horizontal complete-your-profile" role="form">
                        <div class="block-a">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="user">Profile&nbsp;Name:</label>
                                <div class="col-sm-10">
                                    <input type="user" class="form-control" id="profile-name" placeholder="Profile Name">
                                </div>
                            </div>
                            <h4>Contact Details</h4>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="user">Your&nbsp;Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="user" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="sel1">Current&nbsp;Location:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="sel1">
                                        <option value="-1">Select</option>
                                        <optgroup class="optGrp" label="------Top Metropolitan Cities------"></optgroup>
                                        <option value="2">Ahmedabad</option>
                                        <option value="3">Bengaluru / Bangalore</option>
                                        <option value="4">Chandigarh</option>
                                        <option value="5">Chennai</option>
                                        <option value="6">Delhi</option>
                                        <option value="7">Gurgaon</option>
                                        <option value="8">Hyderabad / Secunderabad</option>
                                        <option value="9">Kolkata</option>
                                        <option value="10">Mumbai</option>
                                        <option value="11">Noida</option>
                                        <option value="12">Pune</option>
                                        <optgroup class="optGrp" label="------Andhra Pradesh------"></optgroup>
                                        <option value="14">Anantapur</option>
                                        <option value="15">Guntakal</option>
                                        <option value="16">Guntur</option>
                                        <option value="18">Kakinada</option>
                                        <option value="19">Kurnool</option>
                                        <option value="20">Nellore</option>
                                        <option value="22">Rajahmundry</option>
                                        <option value="24">Tirupati</option>
                                        <option value="25">Vijayawada</option>
                                        <option value="26">Visakhapatnam</option>
                                        <option value="28">Andhra Pradesh - Other</option>
                                        <optgroup class="optGrp" label="------Arunachal Pradesh------"></optgroup>
                                        <option value="30">Itanagar</option>
                                        <option value="31">Arunachal Pradesh - Other</option>
                                        <optgroup class="optGrp" label="------Assam------"></optgroup>
                                        <option value="331">Dibrugarh</option>
                                        <option value="33">Guwahati</option>
                                        <option value="34">Silchar</option>
                                        <option value="35">Assam - Other</option>
                                        <optgroup class="optGrp" label="------Bihar------"></optgroup>
                                        <option value="37">Bhagalpur</option>
                                        <option value="38">Patna</option>
                                        <option value="39">Bihar - Other</option>
                                        <optgroup class="optGrp" label="------Chhattisgarh------"></optgroup>
                                        <option value="41">Bhillai</option>
                                        <option value="42">Bilaspur</option>
                                        <option value="334">Korba</option>
                                        <option value="43">Raipur</option>
                                        <option value="247">Raigarh</option>
                                        <option value="44">Chhattisgarh - Other</option>
                                        <optgroup class="optGrp" label="------Goa------"></optgroup>
                                        <option value="46">Panjim / Panaji</option>
                                        <option value="48">Vasco Da Gama</option>
                                        <option value="49">Goa - Other</option>
                                        <optgroup class="optGrp" label="------Gujarat------"></optgroup>
                                        <option value="51">Ahmedabad</option>
                                        <option value="52">Anand</option>
                                        <option value="53">Ankleshwar</option>
                                        <option value="55">Bharuch</option>
                                        <option value="56">Bhavnagar</option>
                                        <option value="57">Bhuj</option>
                                        <option value="330">Dahej</option>
                                        <option value="332">Gandhidham</option>
                                        <option value="58">Gandhinagar</option>
                                        <option value="59">Gir</option>
                                        <option value="60">Jamnagar</option>
                                        <option value="61">Kandla</option>
                                        <option value="62">Porbandar</option>
                                        <option value="342">Mehsana</option>
                                        <option value="63">Rajkot</option>
                                        <option value="64">Surat</option>
                                        <option value="65">Vadodara / Baroda</option>
                                        <option value="66">Valsad</option>
                                        <option value="67">Vapi</option>
                                        <option value="68">Gujarat - Other</option>
                                        <optgroup class="optGrp" label="------Haryana------"></optgroup>
                                        <option value="70">Ambala</option>
                                        <option value="71">Chandigarh</option>
                                        <option value="72">Faridabad</option>
                                        <option value="73">Gurgaon</option>
                                        <option value="74">Hisar</option>
                                        <option value="75">Karnal</option>
                                        <option value="76">Kurukshetra</option>
                                        <option value="77">Panipat</option>
                                        <option value="78">Rohtak</option>
                                        <option value="79">Haryana - Other</option>
                                        <optgroup class="optGrp" label="------Himachal Pradesh------"></optgroup>
                                        <option value="239">Baddi</option>
                                        <option value="81">Dalhousie</option>
                                        <option value="82">Dharmasala</option>
                                        <option value="83">Kulu/Manali</option>
                                        <option value="84">Shimla</option>
                                        <option value="85">Himachal Pradesh - Other</option>
                                        <optgroup class="optGrp" label="------Jammu &amp; Kashmir------"></optgroup>
                                        <option value="87">Jammu</option>
                                        <option value="88">Srinagar</option>
                                        <option value="89">Jammu and Kashmir - Other</option>
                                        <optgroup class="optGrp" label="------Jharkhand------"></optgroup>
                                        <option value="91">Bokaro</option>
                                        <option value="92">Dhanbad</option>
                                        <option value="93">Jamshedpur</option>
                                        <option value="94">Ranchi</option>
                                        <option value="95">Jharkhand - Other</option>
                                        <optgroup class="optGrp" label="------Karnataka------"></optgroup>
                                        <option value="97">Bengaluru / Bangalore</option>
                                        <option value="98">Belgaum</option>
                                        <option value="99">Bellary</option>
                                        <option value="100">Bidar</option>
                                        <option value="348">Davangere</option>
                                        <option value="101">Dharwad</option>
                                        <option value="102">Gulbarga</option>
                                        <option value="103">Hubli</option>
                                        <option value="104">Kolar</option>
                                        <option value="105">Mangalore</option>
                                        <option value="106">Mysoru / Mysore</option>
                                        <option value="107">Karnataka - Other</option>
                                        <optgroup class="optGrp" label="------Kerala------"></optgroup>
                                        <option value="109">Calicut</option>
                                        <option value="110">Cochin</option>
                                        <option value="111">Ernakulam</option>
                                        <option value="241">Idukki</option>
                                        <option value="112">Kannur</option>
                                        <option value="242">Kasargode</option>
                                        <option value="113">Kochi</option>
                                        <option value="114">Kollam</option>
                                        <option value="115">Kottayam</option>
                                        <option value="116">Kozhikode</option>
                                        <option value="244">Malappuram</option>
                                        <option value="117">Palakkad</option>
                                        <option value="118">Palghat</option>
                                        <option value="245">Pathanamthitta</option>
                                        <option value="119">Thrissur</option>
                                        <option value="120">Trivandrum</option>
                                        <option value="248">Wayanad</option>
                                        <option value="121">Kerala - Other</option>
                                        <optgroup class="optGrp" label="------Madhya Pradesh------"></optgroup>
                                        <option value="123">Bhopal</option>
                                        <option value="124">Gwalior</option>
                                        <option value="125">Indore</option>
                                        <option value="126">Jabalpur</option>
                                        <option value="335">Katni</option>
                                        <option value="127">Ujjain</option>
                                        <option value="128">Madhya Pradesh - Other</option>
                                        <optgroup class="optGrp" label="------Maharashtra------"></optgroup>
                                        <option value="130">Ahmednagar</option>
                                        <option value="131">Aurangabad</option>
                                        <option value="341">Chandrapur</option>
                                        <option value="132">Jalgaon</option>
                                        <option value="133">Kolhapur</option>
                                        <option value="349">Khopoli</option>
                                        <option value="134">Mumbai</option>
                                        <option value="135">Mumbai Suburbs</option>
                                        <option value="136">Nagpur</option>
                                        <option value="137">Nasik</option>
                                        <option value="138">Navi Mumbai</option>
                                        <option value="139">Pune</option>
                                        <option value="346">Ratnagiri</option>
                                        <option value="140">Solapur</option>
                                        <option value="344">Vasai</option>
                                        <option value="141">Maharashtra - Other</option>
                                        <optgroup class="optGrp" label="------Manipur------"></optgroup>
                                        <option value="143">Imphal</option>
                                        <option value="144">Manipur - Other</option>
                                        <optgroup class="optGrp" label="------Meghalaya------"></optgroup>
                                        <option value="146">Shillong</option>
                                        <option value="147">Meghalaya - Other</option>
                                        <optgroup class="optGrp" label="------Mizoram------"></optgroup>
                                        <option value="149">Aizawl</option>
                                        <option value="150">Mizoram - Other</option>
                                        <optgroup class="optGrp" label="------Nagaland------"></optgroup>
                                        <option value="152">Dimapur</option>
                                        <option value="153">Nagaland - Other</option>
                                        <optgroup class="optGrp" label="------Orissa------"></optgroup>
                                        <option value="155">Bhubaneshwar</option>
                                        <option value="156">Cuttack</option>
                                        <option value="338">Jharsuguda</option>
                                        <option value="157">Paradeep</option>
                                        <option value="158">Puri</option>
                                        <option value="159">Rourkela</option>
                                        <option value="337">Sambalpur</option>
                                        <option value="160">Orissa - Other</option>
                                        <optgroup class="optGrp" label="------Punjab------"></optgroup>
                                        <option value="162">Amritsar</option>
                                        <option value="163">Bathinda</option>
                                        <option value="164">Chandigarh</option>
                                        <option value="165">Jalandhar</option>
                                        <option value="166">Ludhiana</option>
                                        <option value="167">Mohali</option>
                                        <option value="168">Pathankot</option>
                                        <option value="169">Patiala</option>
                                        <option value="170">Punjab - Other</option>
                                        <optgroup class="optGrp" label="------Rajasthan------"></optgroup>
                                        <option value="172">Ajmer</option>
                                        <option value="345">Barmer</option>
                                        <option value="240">Bhilwara</option>
                                        <option value="173">Jaipur</option>
                                        <option value="174">Jaisalmer</option>
                                        <option value="175">Jodhpur</option>
                                        <option value="176">Kota</option>
                                        <option value="339">Neemrana</option>
                                        <option value="177">Udaipur</option>
                                        <option value="178">Rajasthan - Other</option>
                                        <optgroup class="optGrp" label="------Sikkim------"></optgroup>
                                        <option value="180">Gangtok</option>
                                        <option value="181">Sikkim - Other</option>
                                        <optgroup class="optGrp" label="------Tamil Nadu------"></optgroup>
                                        <option value="183">Chennai</option>
                                        <option value="184">Coimbatore</option>
                                        <option value="185">Cuddalore</option>
                                        <option value="186">Erode</option>
                                        <option value="187">Hosur</option>
                                        <option value="188">Madurai</option>
                                        <option value="189">Nagercoil</option>
                                        <option value="190">Ooty</option>
                                        <option value="191">Salem</option>
                                        <option value="192">Thanjavur</option>
                                        <option value="193">Tirunelveli</option>
                                        <option value="194">Trichy</option>
                                        <option value="195">Tuticorin</option>
                                        <option value="196">Vellore</option>
                                        <option value="197">Tamil Nadu - Other</option>
                                        <optgroup class="optGrp" label="------Telangana------"></optgroup>
                                        <option value="249">Adilabad</option>
                                        <option value="368">Bhadrachalam</option>
                                        <option value="369">Godavarikhani</option>
                                        <option value="370">Hanumakonda</option>
                                        <option value="17">Hyderabad / Secunderabad</option>
                                        <option value="286">Karimnagar</option>
                                        <option value="288">Khammam</option>
                                        <option value="371">Kodad</option>
                                        <option value="372">Kothagudem</option>
                                        <option value="373">Mahaboobnagar</option>
                                        <option value="352">Mahabubnagar</option>
                                        <option value="374">Mancherial</option>
                                        <option value="353">Medak</option>
                                        <option value="355">Nalgonda</option>
                                        <option value="21">Nizamabad</option>
                                        <option value="354">Rangareddy</option>
                                        <option value="357">Razole</option>
                                        <option value="375">Sangareddy</option>
                                        <option value="376">Siddipet</option>
                                        <option value="377">Suryapet</option>
                                        <option value="356">Tuni</option>
                                        <option value="27">Warangal</option>
                                        <option value="366">Telangana - Other</option>
                                        <optgroup class="optGrp" label="------Tripura------"></optgroup>
                                        <option value="199">Agartala</option>
                                        <option value="200">Tripura - Other</option>
                                        <optgroup class="optGrp" label="------Union Territories------"></optgroup>
                                        <option value="202">Chandigarh</option>
                                        <option value="203">Dadra &amp; Nagar Haveli - Silvassa</option>
                                        <option value="204">Daman &amp; Diu</option>
                                        <option value="205">Delhi</option>
                                        <option value="243">Lakshadweep</option>
                                        <option value="206">Pondicherry</option>
                                        <optgroup class="optGrp" label="------Uttar Pradesh------"></optgroup>
                                        <option value="208">Agra</option>
                                        <option value="209">Aligarh</option>
                                        <option value="210">Allahabad</option>
                                        <option value="211">Bareilly</option>
                                        <option value="340">Bijnor</option>
                                        <option value="212">Faizabad</option>
                                        <option value="213">Ghaziabad</option>
                                        <option value="214">Gorakhpur</option>
                                        <option value="350">Greater Noida</option>
                                        <option value="215">Kanpur</option>
                                        <option value="216">Lucknow</option>
                                        <option value="217">Mathura</option>
                                        <option value="218">Meerut</option>
                                        <option value="219">Moradabad</option>
                                        <option value="220">Noida</option>
                                        <option value="333">Saharanpur</option>
                                        <option value="221">Varanasi / Banaras</option>
                                        <option value="222">Uttar Pradesh - Other</option>
                                        <optgroup class="optGrp" label="------Uttaranchal------"></optgroup>
                                        <option value="224">Dehradun</option>
                                        <option value="336">Haldwani</option>
                                        <option value="343">Kashipur</option>
                                        <option value="225">Roorkee</option>
                                        <option value="226">Uttaranchal - Other</option>
                                        <optgroup class="optGrp" label="------West Bengal------"></optgroup>
                                        <option value="228">Asansol</option>
                                        <option value="347">Burdwan</option>
                                        <option value="229">Durgapur</option>
                                        <option value="230">Haldia</option>
                                        <option value="231">Kharagpur</option>
                                        <option value="232">Kolkata</option>
                                        <option value="233">Siliguri</option>
                                        <option value="234">West Bengal - Other</option>
                                        <optgroup class="optGrp" label="------Other------"></optgroup>
                                        <option value="9999">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for=""></label>
                                <div class="col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Outside India</label>
                                    </div>
                                </div>
                            </div>
                            <p>Contact Numbers:At least one among Mobile and Landline numbers is mandatory</p>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="mobile">Mobile:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Phone">Landline no:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Landline" placeholder="Enter Landline Number">
                                </div>
                            </div>
                        </div>
                        <div class="block-a">
                            <h4>Current Professional Details</h4>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="experienceYear">Total&nbsp;Experience:</label>
                                <div class="col-sm-10 form-inline">
                                    <select class="form-control" id="sel2">
                                        <option value="-1">Year</option>
                                        <option value="99">Fresher</option>
                                        <option value="00">0</option>
                                        <option value="01">1</option>
                                        <option value="02">2</option>
                                        <option value="03">3</option>
                                        <option value="04">4</option>
                                        <option value="05">5</option>
                                        <option value="06">6</option>
                                        <option value="07">7</option>
                                        <option value="08">8</option>
                                        <option value="09">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">30+</option>
                                    </select>&nbsp;Years
                                    <span id="experienceMonthSpan">
									<select class="form-control" id="sel3">
										<option value="-1">Month</option>
										<option value="00">0</option>
										<option value="01">1</option>
										<option value="02">2</option>
										<option value="03">3</option>
										<option value="04">4</option>
										<option value="05">5</option>
										<option value="06">6</option>
										<option value="07">7</option>
										<option value="08">8</option>
										<option value="09">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
									</select>&nbsp;Months
								</span>
                                    <i id="rawTotalExperienceErr-error"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="industryTypeId">Current&nbsp;Industry:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="sel4">
                                        <option value="-1">Select</option>
                                        <option value="8">Accounting/Finance</option>
                                        <option value="32">Advertising/PR/MR/Events</option>
                                        <option value="33">Agriculture/Dairy</option>
                                        <option value="56">Animation</option>
                                        <option value="30">Architecture/Interior Designing</option>
                                        <option value="4">Auto/Auto Ancillary</option>
                                        <option value="46">Aviation / Aerospace Firms</option>
                                        <option value="14">Banking/Financial Services/Broking</option>
                                        <option value="7">BPO/ITES</option>
                                        <option value="50">Brewery / Distillery</option>
                                        <option value="65">Broadcasting</option>
                                        <option value="60">Ceramics /Sanitary ware</option>
                                        <option value="6">Chemicals/PetroChemical/Plastic/Rubber</option>
                                        <option value="12">Construction/Engineering/Cement/Metals</option>
                                        <option value="10">Consumer Durables</option>
                                        <option value="18">Courier/Transportation/Freight</option>
                                        <option value="42">Defence/Government</option>
                                        <option value="26">Education/Teaching/Training</option>
                                        <option value="55">Electricals / Switchgears</option>
                                        <option value="13">Export/Import</option>
                                        <option value="47">Facility Management</option>
                                        <option value="41">Fertilizers/Pesticides</option>
                                        <option value="9">FMCG/Foods/Beverage</option>
                                        <option value="57">Food Processing</option>
                                        <option value="31">Fresher/Trainee</option>
                                        <option value="35">Gems &amp; Jewellery</option>
                                        <option value="49">Glass</option>
                                        <option value="61">Heat Ventilation Air Conditioning</option>
                                        <option value="2">Hotels/Restaurants/Airlines/Travel</option>
                                        <option value="16">Industrial Products/Heavy Machinery</option>
                                        <option value="17">Insurance</option>
                                        <option value="63">Internet/Ecommerce</option>
                                        <option value="15">IT-Hardware &amp; Networking</option>
                                        <option value="25">IT-Software/Software Services</option>
                                        <option value="48">KPO / Research /Analytics</option>
                                        <option value="66">Leather</option>
                                        <option value="36">Legal</option>
                                        <option value="19">Media/Dotcom/Entertainment</option>
                                        <option value="20">Medical/Healthcare/Hospital</option>
                                        <option value="54">Mining</option>
                                        <option value="37">NGO/Social Services</option>
                                        <option value="21">Office Equipment/Automation</option>
                                        <option value="23">Oil and Gas/Power/Infrastructure/Energy</option>
                                        <option value="43">Paper</option>
                                        <option value="22">Pharma/Biotech/Clinical Research</option>
                                        <option value="38">Printing/Packaging</option>
                                        <option value="58">Publishing</option>
                                        <option value="39">Real Estate/Property</option>
                                        <option value="34">Recruitment</option>
                                        <option value="24">Retail</option>
                                        <option value="40">Security/Law Enforcement</option>
                                        <option value="28">Semiconductors/Electronics</option>
                                        <option value="44">Shipping/Marine</option>
                                        <option value="53">Steel</option>
                                        <option value="52">Strategy /Management Consulting Firms</option>
                                        <option value="64">Sugar</option>
                                        <option value="27">Telcom/ISP</option>
                                        <option value="3">Textiles/Garments/Accessories</option>
                                        <option value="45">Tyres</option>
                                        <option value="51">Water Treatment / Waste Management</option>
                                        <option value="59">Wellness/Fitness/Sports</option>
                                        <option value="29">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="funcAreaId">Functional&nbsp;Area</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="sel4">
                                        <option value="-1">Select</option>
                                        <option value="1">Accounts / Finance / Tax / CS / Audit</option>
                                        <option value="46">Agent</option>
                                        <option value="81">Analytics &amp; Business Intelligence</option>
                                        <option value="2">Architecture / Interior Design</option>
                                        <option value="6">Banking / Insurance</option>
                                        <option value="5">Content / Journalism</option>
                                        <option value="7">Corporate Planning / Consulting</option>
                                        <option value="21">Engineering Design / R&amp;D</option>
                                        <option value="10">Export / Import / Merchandising</option>
                                        <option value="42">Fashion / Garments / Merchandising</option>
                                        <option value="45">Guards / Security Services</option>
                                        <option value="4">Hotels / Restaurants</option>
                                        <option value="12">HR / Administration / IR</option>
                                        <option value="62">IT Software - Client Server</option>
                                        <option value="72">IT Software - Mainframe</option>
                                        <option value="74">IT Software - Middleware</option>
                                        <option value="73">IT Software - Mobile</option>
                                        <option value="75">IT Software - Other</option>
                                        <option value="68">IT Software - System Programming</option>
                                        <option value="69">IT Software - Telecom Software</option>
                                        <option value="61">IT Software - Application Programming / Maintenance</option>
                                        <option value="63">IT Software - DBA / Datawarehousing</option>
                                        <option value="71">IT Software - E-Commerce / Internet Technologies</option>
                                        <option value="65">IT Software - Embedded /EDA /VLSI /ASIC /Chip Des.</option>
                                        <option value="64">IT Software - ERP / CRM</option>
                                        <option value="66">IT Software - Network Administration / Security</option>
                                        <option value="67">IT Software - QA &amp; Testing</option>
                                        <option value="70">IT Software - Systems / EDP / MIS</option>
                                        <option value="37">IT- Hardware / Telecom / Technical Staff / Support</option>
                                        <option value="8">ITES / BPO / KPO / Customer Service / Operations</option>
                                        <option value="13">Legal</option>
                                        <option value="15">Marketing / Advertising / MR / PR</option>
                                        <option value="18">Packaging</option>
                                        <option value="16">Pharma / Biotech / Healthcare / Medical / R&amp;D</option>
                                        <option value="19">Production / Maintenance / Quality</option>
                                        <option value="14">Purchase / Logistics / Supply Chain</option>
                                        <option value="22">Sales / BD</option>
                                        <option value="11">Secretary / Front Office / Data Entry</option>
                                        <option value="9">Self Employed / Consultants</option>
                                        <option value="82">Shipping</option>
                                        <option value="20">Site Engineering / Project Management</option>
                                        <option value="36">Teaching / Education</option>
                                        <option value="44">Ticketing / Travel / Airlines</option>
                                        <option value="39">Top Management</option>
                                        <option value="43">TV / Films / Production</option>
                                        <option value="3">Web / Graphic Design / Visualiser</option>
                                        <option value="41">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="keywords">Key&nbsp;Skills:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="keywords">Resume&nbsp;Headline:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block-a">
                            <h4>Education Details</h4>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="graduationId">Basic/Graduation:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="sel5">
                                        <option value="-1">Select</option>
                                        <option value="1">Not Pursuing Graduation</option>
                                        <option value="2">B.A</option>
                                        <option value="3">B.Arch</option>
                                        <option value="4">BCA</option>
                                        <option value="5">B.B.A</option>
                                        <option value="6">B.Com</option>
                                        <option value="7">B.Ed</option>
                                        <option value="8">BDS</option>
                                        <option value="9">BHM</option>
                                        <option value="10">B.Pharma</option>
                                        <option value="11">B.Sc</option>
                                        <option value="12">B.Tech/B.E.</option>
                                        <option value="13">LLB</option>
                                        <option value="14">MBBS</option>
                                        <option value="15">Diploma</option>
                                        <option value="16">BVSC</option>
                                        <option value="9999">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="con">
                                <p class="coll-mr pull-right" data-toggle="collapse" data-target="#demo">Add More Details</p>
                                <div class="clear"></div>
                                <div id="demo" class="collapse">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pgcourseId">Post&nbsp;Graduation:</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="sel6">
                                                <option value="-1">Select</option>
                                                <option value="1">CA</option>
                                                <option value="2">CS</option>
                                                <option value="3">ICWA (CMA)</option>
                                                <option value="4">Integrated PG</option>
                                                <option value="5">LLM</option>
                                                <option value="6">M.A</option>
                                                <option value="7">M.Arch</option>
                                                <option value="8">M.Com</option>
                                                <option value="9">M.Ed</option>
                                                <option value="10">M.Pharma</option>
                                                <option value="11">M.Sc</option>
                                                <option value="12">M.Tech</option>
                                                <option value="13">MBA/PGDM</option>
                                                <option value="14">MCA</option>
                                                <option value="15">MS</option>
                                                <option value="16">PG Diploma</option>
                                                <option value="17">MVSC</option>
                                                <option value="18">MCM</option>
                                                <option value="9999">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="keywords">Doctorate/Phd:</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="sel7">
                                                <option value="-1">Select</option>
                                                <option value="1">Ph.D/Doctorate</option>
                                                <option value="2">MPHIL</option>
                                                <option value="9999">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <h4>Other Certifications</h4>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="certification1">Diploma/Certificate:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="certification1" placeholder="Diploma/Certificate:">
                                </div>
                            </div>
                            <div class="con">
                                <p class="coll-mr pull-right" data-toggle="collapse" data-target="#demo2">Add More Certifications</p>
                                <br></br>
                                <div id="demo2" class="collapse">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="certification2">Diploma/Certificate:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="certification2" placeholder="Diploma/Certificate:">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="certification3">Diploma/Certificate:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="certification3" placeholder="Diploma/Certificate:">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="block-a">
                            <h4>Upload Resume</h4>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="attachCV">Attach&nbsp;Resume:</label>
                                <div class="col-sm-10">
                                    <input type="file" class="btn btn-default" data-size="sm">
                                    <span class="help-block">Supported Formats: doc, docx, rtf. Max file size: 300 Kb</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Save & Next</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="clear"></div>
                <div class="wgtCont text-center">
                    <div class="center_large_title">
                        <p>Get best matched Jobs on your email. No registration needed</p>
                    </div>
                    <button title="Create Job Alert" type="button" class="btn btn-primary center-b">Create a Job Alert</button>
                </div>
                <div class="clear"></div>
                <div class="top-employers">
                    <h4>Top Employers</h4>
                    <ul>
                        <li>
                            <a href="#"><img src="assets/img/emplr-logo/eric-120X45-3.gif" alt="employers"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/emplr-logo/ibm-120X45-12.gif" alt="employers"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/emplr-logo/lnt-120X45.gif" alt="employers"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/emplr-logo/makemytrip-2442015-120x45.gif" alt="employers"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/emplr-logo/novartis-120X45.gif" alt="employers"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/emplr-logo/aditya-120X45.gif" alt="employers"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/emplr-logo/airtel-120X45.gif" alt="employers"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/emplr-logo/akcgroup_120x45.gif" alt="employers"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/emplr-logo/all-120X45-29042015.gif" alt="employers"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/emplr-logo/amazon-120X45.gif" alt="employers"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/emplr-logo/amdocs-120x45-27042015.gif" alt="employers"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/emplr-logo/aricent-120X45.gif" alt="employers"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/emplr-logo/bapco_120x45.gif" alt="employers"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/img/emplr-logo/bartronics_120x45.gif" alt="employers"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>