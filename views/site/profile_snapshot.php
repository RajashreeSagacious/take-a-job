<?php

use yii\helpers\Html;


?>

<div class="profile-pages">
        <div class="container">
            <div class="col-md-8">
                <div class="p-block">
                    <h2><i class="fa fa-user"></i>&nbsp;Profile Snapshot</h2>
                    <form class="form-horizontal complete-your-profile" role="form">
                        <div class="block-a">
                            <div class="form-group field-registerform-firstname required">
                                <label class="control-label col-sm-2" for="profilesnapshot-firstname">Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" id="profilesnapshot-firstname" class="form-control" name="RegisterForm[FirstName] " maxlength="20" placeholder="First Name">
									<div class="help-block help-block-error "></div>
								</div>
                            </div>
							<div class="form-group field-registerform-firstname required">
                                <label class="control-label col-sm-2" for="title"><span class="red">*</span>Resume&nbsp;Headline:</label>
                                <div class="col-sm-10">
									<textarea class="form-control" rows="1" maxchars="250" oname="Resume headline" valtype="title" name="title" id="title"></textarea>
									<div class="help-block help-block-error "></div>
									<span class="help-block">Your Resume Headline is the first thing Recruiters will see.</span>
								</div>
                            </div>
							<div class="form-group field-registerform-firstname required">
								<label class="control-label col-sm-2" for="title"><span class="red">*</span>Current&nbsp;Location:</label>
                                <div class="col-sm-10 form-inline">
									<select id="cityId" class="form-control" name="cityId" valtype="citySel">
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
									<div class="checkbox">
									  <label><input type="checkbox" value=""> Outside India</label>
									</div>
									<div class="help-block help-block-error "></div>
								</div>
                            </div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="preferred-location:">Preferred&nbsp;Location:</label>
								<div class="col-sm-10">
									<select class="form-control" id="preferred-location">
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
								<label class="control-label col-sm-2" for="industry"><span class="red">*</span>Industry:</label>
								<div class="col-sm-10">
									<select class="form-control" id="industry">
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
								<label class="control-label col-sm-2" for="funcAreaId"><span class="red">*</span>Functional&nbsp;Area:</label>
								<div class="col-sm-10">
									<select class="form-control" id="funcAreaId">
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
								<label class="control-label col-sm-2" for="role"><span class="red">*</span>Role:</label>
								<div class="col-sm-10">
									<select id="role" class="form-control" name="roleId">
									
										<option value="-1">Select</option>
										<optgroup id="optg_1" class="optGrp" label="------Programming &amp; Design------"></optgroup>
										<option value="75.1">Software Developer</option>
										<option value="75.2">Team Lead/Tech Lead</option>
										<option value="75.3">System Analyst</option>
										<option value="75.4">Tech Architect</option>
										<option value="75.5">Database Architect/Designer</option>
										<option value="75.6">Project Lead</option>
										<option value="75.7">Testing Engnr</option>
										<option value="75.8">Product Mgr</option>
										<option value="75.9">Graphic/Web Designer</option>
										<option value="75.10">Release Mgr</option>
										<optgroup id="optg_2" class="optGrp" label="------Admin/Maintenance/Security/Datawarehousing------"></optgroup>
										<option value="75.11">DBA</option>
										<option value="75.12">Network Admin</option>
										<option value="75.13">System Admin</option>
										<option value="75.14">System Security</option>
										<option value="75.15">Tech Support Engnr</option>
										<option value="75.16">Maintenance Engnr</option>
										<option value="75.17">Webmaster</option>
										<option value="75.18">IT/Networking-Mgr</option>
										<option value="75.19">Information Systems(MIS)-Mgr</option>
										<optgroup id="optg_3" class="optGrp" label="------System Design/Implementation/ERP/CRM------"></optgroup>
										<option value="75.20">System Integration Technician</option>
										<option value="75.21">Business Analyst</option>
										<option value="75.22">Datawarehousing Technician</option>
										<option value="75.23">Outside Technical Consultant</option>
										<option value="75.24">Functional Outside Consultant</option>
										<option value="75.25">EDP Analyst</option>
										<optgroup id="optg_4" class="optGrp" label="------QA/Testing/Documentation------"></optgroup>
										<option value="75.26">Technical Writer</option>
										<option value="75.27">Instructional Designer</option>
										<option value="75.28">Technical Documentor</option>
										<option value="75.29">QA/QC Exec.</option>
										<option value="75.30">QA/QC Mgr</option>
										<optgroup id="optg_5" class="optGrp" label="------Project Management------"></optgroup>
										<option value="75.31">Project Mgr-IT/Software</option>
										<optgroup id="optg_6" class="optGrp" label="------Senior Management------"></optgroup>
										<option value="75.32">Program Mgr</option>
										<option value="75.33">Head/VP/GM-Quality</option>
										<option value="75.34">Head/VP/GM-Technology(IT)/CTO</option>
										<option value="75.35">CIO</option>
										<optgroup id="optg_7" class="optGrp" label="------Other------"></optgroup>
										<option value="75.36">Trainer/Faculty</option>
										<option value="75.37">Trainee</option>
										<option value="75.38">Fresher</option>
										<option value="75.39">Outside Consultant</option>
										<option value="75.40">IT/Technical Content Developer</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="db"><span class="red">*</span>Date&nbsp;of&nbsp;Birth:</label>
								<div class="col-sm-10 form-inline">
									<select id="dobdate" name="DOBDAY" class="form-control">
										<option value="-1" selected="selected">Day</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
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
										<option value="31">31</option>
									</select>
									<select id="dobmonth" name="DOBMONTH" class="form-control">
										<option value="-1" selected="selected">Month</option>
										<option value="1">Jan</option>
										<option value="2">Feb</option>
										<option value="3">Mar</option>
										<option value="4">Apr</option>
										<option value="5">May</option>
										<option value="6">Jun</option>
										<option value="7">Jul</option>
										<option value="8">Aug</option>
										<option value="9">Sep</option>
										<option value="10">Oct</option>
										<option value="11">Nov</option>
										<option value="12">Dec</option>
									</select>
									<select id="dobyear" name="DOBYEAR" class="form-control">
										<option value="-1" selected="selected">Year</option>
										<option value="1997">1997</option>
										<option value="1996">1996</option>
										<option value="1995">1995</option>
										<option value="1994">1994</option>
										<option value="1993">1993</option>
										<option value="1992">1992</option>
										<option value="1991">1991</option>
										<option value="1990">1990</option>
										<option value="1989">1989</option>
										<option value="1988">1988</option>
										<option value="1987">1987</option>
										<option value="1986">1986</option>
										<option value="1985">1985</option>
										<option value="1984">1984</option>
										<option value="1983">1983</option>
										<option value="1982">1982</option>
										<option value="1981">1981</option>
										<option value="1980">1980</option>
										<option value="1979">1979</option>
										<option value="1978">1978</option>
										<option value="1977">1977</option>
										<option value="1976">1976</option>
										<option value="1975">1975</option>
										<option value="1974">1974</option>
										<option value="1973">1973</option>
										<option value="1972">1972</option>
										<option value="1971">1971</option>
										<option value="1970">1970</option>
										<option value="1969">1969</option>
										<option value="1968">1968</option>
										<option value="1967">1967</option>
										<option value="1966">1966</option>
										<option value="1965">1965</option>
										<option value="1964">1964</option>
										<option value="1963">1963</option>
										<option value="1962">1962</option>
										<option value="1961">1961</option>
										<option value="1960">1960</option>
										<option value="1959">1959</option>
										<option value="1958">1958</option>
										<option value="1957">1957</option>
										<option value="1956">1956</option>
										<option value="1955">1955</option>
										<option value="1954">1954</option>
										<option value="1953">1953</option>
										<option value="1952">1952</option>
										<option value="1951">1951</option>
										<option value="1950">1950</option>
										<option value="1949">1949</option>
										<option value="1948">1948</option>
										<option value="1947">1947</option>
										<option value="1946">1946</option>
										<option value="1945">1945</option>
										<option value="1944">1944</option>
										<option value="1943">1943</option>
										<option value="1942">1942</option>
										<option value="1941">1941</option>
										<option value="1940">1940</option>
										<option value="1939">1939</option>
										<option value="1938">1938</option>
										<option value="1937">1937</option>
										<option value="1936">1936</option>
										<option value="1935">1935</option>
										<option value="1934">1934</option>
										<option value="1933">1933</option>
										<option value="1932">1932</option>
										<option value="1931">1931</option>
										<option value="1930">1930</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="gender"><span class="red">*</span>Gender:</label>
								<div class="col-sm-10">
									<select id="gender" name="GENDER" class="form-control">
										<option value="-1" selected="selected">Select</option>
										<option value="M">Male</option>
										<option value="F">Female</option>
									</select>
								</div>
							</div>
                        </div>
						<div class="block-a">
							<div class="form-group">
								<label class="control-label col-sm-2" for="experienceYear"><span class="red">*</span>Total&nbsp;Experience:</label>
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
								<label for="ctclacs" id="lbl_ctc" class="col-sm-2"><span class="red">*</span>Annual Salary:</label>
								<div class="col-sm-10 form-inline">
									<select id="ctclacs" name="CTCLACS" class="form-control anul-sl-text">
										<option value="-1" selected="selected">Select</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
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
										<option value="31">31</option>
										<option value="32">32</option>
										<option value="33">33</option>
										<option value="34">34</option>
										<option value="35">35</option>
										<option value="36">36</option>
										<option value="37">37</option>
										<option value="38">38</option>
										<option value="39">39</option>
										<option value="40">40</option>
										<option value="41">41</option>
										<option value="42">42</option>
										<option value="43">43</option>
										<option value="44">44</option>
										<option value="45">45</option>
										<option value="46">46</option>
										<option value="47">47</option>
										<option value="48">48</option>
										<option value="49">49</option>
										<option value="50">50</option>
										<option value="51">50+</option>
									</select><span>&nbsp;Lakhs</span>
									<select id="ctcthousands" name="CTCTHOUSANDS" class="form-control ">
										<option value="-1" selected="selected">Select</option>
										<option value="0">0</option>
										<option value="5">5</option>
										<option value="10">10</option>
										<option value="15">15</option>
										<option value="20">20</option>
										<option value="25">25</option>
										<option value="30">30</option>
										<option value="35">35</option>
										<option value="40">40</option>
										<option value="45">45</option>
										<option value="50">50</option>
										<option value="55">55</option>
										<option value="60">60</option>
										<option value="65">65</option>
										<option value="70">70</option>
										<option value="75">75</option>
										<option value="80">80</option>
										<option value="85">85</option>
										<option value="90">90</option>
										<option value="95">95</option>
									</select>&nbsp;Thousands
									<input id="ctctype_i" value="I" name="CTCTYPE" checked="checked" type="radio"><span>&nbsp;Rupees</span>
									<input id="ctctype_u" value="U" name="CTCTYPE" type="radio"><span>&nbsp;USD</span>
									<span class="help-block">Please mention your correct salary to get relevant job offers.
Recruiters take your salary into account when searching your profile and shortlisting it.</span>
								</div>
							</div>
							<div class="form-group">
								<label for="mobile" id="lbl_ctc" class="col-sm-2"><span class="red">*</span>Mobile&nbsp;No:</label>
								<div class="col-sm-10">
									<input name="mobile" maxlength="15" id="mobile" value="" valtype="mobile" class="form-control" type="text">
								</div>
								<div class="help-block help-block-error "></div>
							</div>
							<div class="form-group">
								<label for="landline" id="lbl_ctc" class="col-sm-2">Landline&nbsp;No:</label>
								<div class="col-sm-2">
									<input name="landline" maxlength="15" id="landline" value="" valtype="landline" class="form-control" type="text">
								</div>
								<div class="col-sm-3">
									<input name="landline" maxlength="15" id="landline" value="" valtype="landline" class="form-control" type="text">
								</div>
								<div class="col-sm-5">
									<input name="landline" maxlength="15" id="landline" value="" valtype="landline" class="form-control" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-2"><span class="red">*</span>Email:</label>
								<div class="col-sm-10">
									<input name="email" maxlength="15" id="email" value="" valtype="email" class="form-control" type="email">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="marital-status">Permanent&nbsp;Address:</label>
								<div class="col-sm-10">
									<textarea class="form-control" rows="5" id="comment"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="home-twon" class="col-sm-2">Home&nbsp;Town/City:</label>
								<div class="col-sm-10">
									<input name="email" maxlength="15" id="email" value="" valtype="email" class="form-control" type="email">
								</div>
							</div>
							<div class="form-group">
								<label for="pincode" class="col-sm-2">Pincode:</label>
								<div class="col-sm-10">
									<input name="pincode" maxlength="15" id="pincode" value="" valtype="pincode" class="form-control" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="maritalStatus" class="col-sm-2">Marital&nbsp;Status:</label>
								<div class="col-sm-10">
									<select name="maritalStatus" id="msritalStatus" class="form-control">
										<option value="-1">Select</option>
										<option value="N">Single/unmarried</option>
										<option value="M">Married</option>
										<option value="W">Widowed</option>
										<option value="D">Divorced</option>
										<option value="S">Separated</option>
										<option value="O">Other</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="key-skills" class="col-sm-2">Key&nbsp;Skills:</label>
								<div class="col-sm-10">
									<input name="key-skills" maxlength="15" id="key-skills" value="" valtype="key-skills" class="form-control" type="text">	
								</div>
							</div>
							<div class="form-group">
								<label for="button" class="col-sm-2"></label>
								<div class="col-sm-5 form-inline">
									<button type="button" class="btn btn-default">&nbsp;&nbsp;&nbsp;Save&nbsp;&nbsp;&nbsp;</button>
									<button type="button" class="btn btn-default">&nbsp;&nbsp;&nbsp;Cancel&nbsp;&nbsp;&nbsp;</button>
								</div>
							</div>
						</div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
				<h4>Profile Summary</h4>
                <div class="clear"></div>
				<div class="side-menu01">
					<ul>
						<li><a href="#">Outline/Snapshot</a></li>
						<li><a href="#">Summary</a></li>
						<li><a href="#">Employer/Desigination</a></li>
						<li><a href="#">Attached Resume</a></li>
						<li><a href="#">Projects</a></li>
						<li><a href="#">It Skills</a></li>
						<li><a href="#">Education</a></li>
						<li><a href="#">More Details</a></li>
					</ul>
				</div>
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
							<a href="#"> <?= Html::img('@web/images/employers-logo/tech-mahindra.png', [ 'alt' => 'tech-mahindra', ]); ?></a>
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
    