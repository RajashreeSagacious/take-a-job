<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

use app\assets\AppAsset;
AppAsset::register($this);

 $this->registerJsFile('../js/jquery.sumoselect.js');
   $this->registerCssFile('../css/sumoselect.css');
 $this->registerJs(
       'window.asd = $(".SlectBox").SumoSelect({ csvDispCount: 4 });
	$(".Slectlocation").select2();
      '
);
$this->title ='Register';
/*$this->params['breadcrumbs'][]=$this->title;*/
?>

<div class="container">

<div class="row">



<div class="profile-pages">
        <div class="container">
            <div class="col-md-8">
                <div class="p-block">
					<ul class="breadcrumb">
						<li><a href="./Register_files/saved_resource">Home</a></li>
						<li class="active">Register</li>
					</ul>
                    <h2>Register</h2>
                    <p>Please Complete your registration by fill out the given fields</p>
					<form id="reg-form" class="form-horizontal complete-your-profile " role="form" action="./Register_files/Register.html " method="post " enctype="multipart/form-data ">
                        <div class="block-a">
							<h4>Contact Details</h4>
                            <div class="form-group field-registerform-firstname required">
                                <label class="control-label col-sm-2" for="registerform-firstname">First&nbsp;Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" id="registerform-firstname" class="form-control" name="RegisterForm[FirstName] " maxlength="20" placeholder="First Name">
									<div class="help-block help-block-error "></div>
								</div>
                            </div>
							<div class="form-group field-registerform-lastname required">
                                <label class="control-label col-sm-2" for="registerform-lastname">Last&nbsp; Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" id="registerform-lastname" class="form-control" name="RegisterForm[LastName] " maxlength="10" placeholder="Last Name">
									<div class="help-block help-block-error "></div>
								</div>
                            </div>
							<div class="form-group field-registerform-email required">
                                <label class="control-label col-sm-2" for="registerform-email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="text" id="registerform-email" class="form-control " name="RegisterForm[Email] " placeholder="Email">
									<div class="help-block help-block-error "></div>
								</div>
                            </div>
							<div class="form-group field-registerform-contactno required">
                                <label class="control-label col-sm-2" for="registerform-contactno">Contact&nbsp;No:</label>
                                <div class="col-sm-10">
                                    <input type="text" id="registerform-contactno " class="form-control " name="RegisterForm[ContactNo] " placeholder="Contact No">
									<div class="help-block help-block-error "></div>
								</div>
                            </div>
							<div class="form-group field-registerform-location required">
                                <label class="control-label col-sm-2" for="registerform-location">Location:</label>
                                <div class="col-sm-10">
                                    <select id="registerform-location" class="Slectlocation form-control" name="RegisterForm[Location]" placeholder="Select Location">
										<option value="547">Adilabad</option>
										<option value="565">Agra</option>
										<option value="141">Ahmedabad</option>
										<option value="348">Ahmednagar</option>
										<option value="403">Aizawl</option>
										<option value="478">Ajmer</option>
										<option value="349">Akola</option>
										<option value="283">Alappuzha</option>
										<option value="566">Aligarh</option>
										<option value="298">Alirajpur</option>
										<option value="567">Allahabad</option>
										<option value="640">Almora</option>
										<option value="479">Alwar</option>
										<option value="174">Ambala</option>
										<option value="568">Ambedkar Nagar</option>
										<option value="350">Amravati</option>
										<option value="142">Amreli</option>
										<option value="456">Amritsar</option>
										<option value="143">Anand</option>
										<option value="4">Anantapur</option>
										<option value="207">Anantnag</option>
										<option value="422">Angul</option>
										<option value="17">Anjaw</option>
										<option value="299">Anuppur</option>
										<option value="61">Araria</option>
										<option value="144">Aravalli</option>
										<option value="515">Ariyalur</option>
										<option value="62">Arwal</option>
										<option value="300">Ashoknagar</option>
										<option value="569">Auraiya</option>
										<option value="63">Aurangabad</option>
										<option value="351">Aurangabad</option>
										<option value="570">Azamgarh</option>
										<option value="253">Bagalkot</option>
										<option value="641">Bageshwar</option>
										<option value="571">Baghpat</option>
										<option value="572">Bahraich</option>
										<option value="34">Baksa</option>
										<option value="301">Balaghat</option>
										<option value="423">Balangir</option>
										<option value="424">Balasore</option>
										<option value="573">Ballia</option>
										<option value="100">Balod</option>
										<option value="101">Baloda Bazar</option>
										<option value="574">Balrampur</option>
										<option value="102">Balrampur</option>
										<option value="145">Banaskantha (Palanpur)</option>
										<option value="575">Banda</option>
										<option value="208">Bandipora</option>
										<option value="254">Bangalore Rural</option>
										<option value="255">Bangalore Urban</option>
										<option value="64">Banka</option>
										<option value="653">Bankura</option>
										<option value="480">Banswara</option>
										<option value="576">Barabanki</option>
										<option value="209">Baramulla</option>
										<option value="481">Baran</option>
										<option value="577">Bareilly</option>
										<option value="425">Bargarh</option>
										<option value="482">Barmer</option>
										<option value="457">Barnala</option>
										<option value="35">Barpeta</option>
										<option value="302">Barwani</option>
										<option value="103">Bastar</option>
										<option value="578">Basti</option>
										<option value="458">Bathinda</option>
										<option value="352">Beed</option>
										<option value="65">Begusarai</option>
										<option value="256">Belgaum</option>
										<option value="257">Bellary</option>
										<option value="104">Bemetara</option>
										<option value="303">Betul</option>
										<option value="426">Bhadrak</option>
										<option value="66">Bhagalpur</option>
										<option value="353">Bhandara</option>
										<option value="483">Bharatpur</option>
										<option value="146">Bharuch</option>
										<option value="147">Bhavnagar</option>
										<option value="484">Bhilwara</option>
										<option value="579">Bhim Nagar</option>
										<option value="304">Bhind</option>
										<option value="175">Bhiwani</option>
										<option value="67">Bhojpur</option>
										<option value="305">Bhopal</option>
										<option value="258">Bidar</option>
										<option value="105">Bijapur</option>
										<option value="259">Bijapur</option>
										<option value="580">Bijnor</option>
										<option value="485">Bikaner</option>
										<option value="106">Bilaspur</option>
										<option value="195">Bilaspur</option>
										<option value="654">Birbhum</option>
										<option value="383">Bishnupur</option>
										<option value="229">Bokaro</option>
										<option value="36">Bongaigaon</option>
										<option value="148">Botad</option>
										<option value="427">Boudh</option>
										<option value="581">Budaun</option>
										<option value="210">Budgam</option>
										<option value="582">Bulandshahr</option>
										<option value="354">Buldhana</option>
										<option value="486">Bundi</option>
										<option value="655">Burdwan (Bardhaman),</option>
										<option value="306">Burhanpur</option>
										<option value="68">Buxar</option>
										<option value="37">Cachar</option>
										<option value="130">Central Delhi</option>
										<option value="260">Chamarajanagar</option>
										<option value="196">Chamba</option>
										<option value="642">Chamoli</option>
										<option value="643">Champawat</option>
										<option value="404">Champhai</option>
										<option value="583">Chandauli</option>
										<option value="384">Chandel</option>
										<option value="99">Chandigarh</option>
										<option value="355">Chandrapur</option>
										<option value="18">Changlang</option>
										<option value="230">Chatra</option>
										<option value="584">Chatrapati Sahuji Mahraj Nagar</option>
										<option value="516">Chennai</option>
										<option value="307">Chhatarpur</option>
										<option value="308">Chhindwara</option>
										<option value="149">Chhota Udepur</option>
										<option value="261">Chickmagalur</option>
										<option value="262">Chikballapur</option>
										<option value="38">Chirang</option>
										<option value="263">Chitradurga</option>
										<option value="585">Chitrakoot</option>
										<option value="5">Chittoor</option>
										<option value="487">Chittorgarh</option>
										<option value="385">Churachandpur</option>
										<option value="488">Churu</option>
										<option value="517">Coimbatore</option>
										<option value="656">Cooch Behar</option>
										<option value="518">Cuddalore</option>
										<option value="6">Cuddapah</option>
										<option value="428">Cuttack</option>
										<option value="127">Dadra &amp; Nagar Haveli</option>
										<option value="150">Dahod</option>
										<option value="657">Dakshin Dinajpur (South Dinajpur)</option>
										<option value="264">Dakshina Kannada</option>
										<option value="128">Daman</option>
										<option value="309">Damoh</option>
										<option value="151">Dangs (Ahwa)</option>
										<option value="107">Dantewada (South Bastar)</option>
										<option value="69">Darbhanga</option>
										<option value="658">Darjeeling</option>
										<option value="39">Darrang</option>
										<option value="310">Datia</option>
										<option value="489">Dausa</option>
										<option value="265">Davangere</option>
										<option value="644">Dehradun</option>
										<option value="429">Deogarh</option>
										<option value="231">Deoghar</option>
										<option value="586">Deoria</option>
										<option value="152">Devbhoomi Dwarka</option>
										<option value="311">Dewas</option>
										<option value="557">Dhalai</option>
										<option value="108">Dhamtari</option>
										<option value="232">Dhanbad</option>
										<option value="312">Dhar</option>
										<option value="519">Dharmapuri</option>
										<option value="266">Dharwad</option>
										<option value="40">Dhemaji</option>
										<option value="430">Dhenkanal</option>
										<option value="490">Dholpur</option>
										<option value="41">Dhubri</option>
										<option value="356">Dhule</option>
										<option value="19">Dibang Valley</option>
										<option value="42">Dibrugarh</option>
										<option value="43">Dima Hasao</option>
										<option value="411">Dimapur</option>
										<option value="520">Dindigul</option>
										<option value="313">Dindori</option>
										<option value="129">Diu</option>
										<option value="211">Doda</option>
										<option value="233">Dumka</option>
										<option value="491">Dungarpur</option>
										<option value="109">Durg</option>
										<option value="70">East Champaran (Motihari)</option>
										<option value="131">East Delhi</option>
										<option value="392">East Garo Hills</option>
										<option value="7">East Godavari</option>
										<option value="393">East Jaintia Hills</option>
										<option value="20">East Kameng</option>
										<option value="394">East Khasi Hills</option>
										<option value="21">East Siang</option>
										<option value="511">East Sikkim</option>
										<option value="234">East Singhbhum</option>
										<option value="284">Ernakulam</option>
										<option value="521">Erode</option>
										<option value="587">Etah</option>
										<option value="588">Etawah</option>
										<option value="589">Faizabad</option>
										<option value="176">Faridabad</option>
										<option value="459">Faridkot</option>
										<option value="590">Farrukhabad</option>
										<option value="177">Fatehabad</option>
										<option value="460">Fatehgarh Sahib</option>
										<option value="591">Fatehpur</option>
										<option value="461">Fazilka</option>
										<option value="462">Ferozepur</option>
										<option value="592">Firozabad</option>
										<option value="267">Gadag</option>
										<option value="357">Gadchiroli</option>
										<option value="431">Gajapati</option>
										<option value="212">Ganderbal</option>
										<option value="153">Gandhinagar</option>
										<option value="432">Ganjam</option>
										<option value="235">Garhwa</option>
										<option value="110">Gariaband</option>
										<option value="593">Gautam Buddha Nagar</option>
										<option value="71">Gaya</option>
										<option value="594">Ghaziabad</option>
										<option value="595">Ghazipur</option>
										<option value="154">Gir Somnath</option>
										<option value="236">Giridih</option>
										<option value="44">Goalpara</option>
										<option value="237">Godda</option>
										<option value="45">Golaghat</option>
										<option value="558">Gomati</option>
										<option value="596">Gonda</option>
										<option value="358">Gondia</option>
										<option value="72">Gopalganj</option>
										<option value="597">Gorakhpur</option>
										<option value="268">Gulbarga</option>
										<option value="238">Gumla</option>
										<option value="314">Guna</option>
										<option value="8">Guntur</option>
										<option value="463">Gurdaspur</option>
										<option value="178">Gurgaon</option>
										<option value="315">Gwalior</option>
										<option value="46">Hailakandi</option>
										<option value="197">Hamirpur</option>
										<option value="598">Hamirpur</option>
										<option value="492">Hanumangarh</option>
										<option value="316">Harda</option>
										<option value="599">Hardoi</option>
										<option value="645">Haridwar</option>
										<option value="269">Hassan</option>
										<option value="600">Hathras</option>
										<option value="270">Haveri</option>
										<option value="239">Hazaribag</option>
										<option value="359">Hingoli</option>
										<option value="179">Hisar</option>
										<option value="659">Hooghly</option>
										<option value="317">Hoshangabad</option>
										<option value="464">Hoshiarpur</option>
										<option value="660">Howrah</option>
										<option value="548">Hyderabad</option>
										<option value="285">Idukki</option>
										<option value="386">Imphal East</option>
										<option value="387">Imphal West</option>
										<option value="318">Indore</option>
										<option value="319">Jabalpur</option>
										<option value="433">Jagatsinghapur</option>
										<option value="493">Jaipur</option>
										<option value="494">Jaisalmer</option>
										<option value="434">Jajpur</option>
										<option value="465">Jalandhar</option>
										<option value="601">Jalaun</option>
										<option value="360">Jalgaon</option>
										<option value="361">Jalna</option>
										<option value="495">Jalore</option>
										<option value="661">Jalpaiguri</option>
										<option value="213">Jammu</option>
										<option value="155">Jamnagar</option>
										<option value="240">Jamtara</option>
										<option value="73">Jamui</option>
										<option value="111">Janjgir-Champa</option>
										<option value="112">Jashpur</option>
										<option value="602">Jaunpur</option>
										<option value="74">Jehanabad</option>
										<option value="320">Jhabua</option>
										<option value="180">Jhajjar</option>
										<option value="496">Jhalawar</option>
										<option value="603">Jhansi</option>
										<option value="435">Jharsuguda</option>
										<option value="497">Jhunjhunu</option>
										<option value="181">Jind</option>
										<option value="498">Jodhpur</option>
										<option value="47">Jorhat</option>
										<option value="156">Junagadh</option>
										<option value="604">Jyotiba Phule Nagar (J.P. Nagar)</option>
										<option value="113">Kabirdham (Kawardha)</option>
										<option value="157">Kachchh</option>
										<option value="75">Kaimur (Bhabua)</option>
										<option value="182">Kaithal</option>
										<option value="436">Kalahandi</option>
										<option value="49">Kamrup</option>
										<option value="48">Kamrup Metropolitan</option>
										<option value="522">Kanchipuram</option>
										<option value="437">Kandhamal</option>
										<option value="198">Kangra</option>
										<option value="114">Kanker (North Bastar)</option>
										<option value="605">Kannauj</option>
										<option value="286">Kannur</option>
										<option value="606">Kanpur Dehat</option>
										<option value="607">Kanpur Nagar</option>
										<option value="608">Kanshiram Nagar (Kasganj)</option>
										<option value="523">Kanyakumari</option>
										<option value="466">Kapurthala</option>
										<option value="452">Karaikal</option>
										<option value="499">Karauli</option>
										<option value="50">Karbi Anglong</option>
										<option value="214">Kargil</option>
										<option value="51">Karimganj</option>
										<option value="549">Karimnagar</option>
										<option value="183">Karnal</option>
										<option value="524">Karur</option>
										<option value="287">Kasaragod</option>
										<option value="215">Kathua</option>
										<option value="76">Katihar</option>
										<option value="321">Katni</option>
										<option value="609">Kaushambi</option>
										<option value="438">Kendrapara</option>
										<option value="439">Kendujhar (Keonjhar)</option>
										<option value="77">Khagaria</option>
										<option value="550">Khammam</option>
										<option value="322">Khandwa</option>
										<option value="323">Khargone</option>
										<option value="158">Kheda (Nadiad)</option>
										<option value="440">Khordha</option>
										<option value="559">Khowai</option>
										<option value="241">Khunti</option>
										<option value="199">Kinnaur</option>
										<option value="412">Kiphire</option>
										<option value="78">Kishanganj</option>
										<option value="216">Kishtwar</option>
										<option value="271">Kodagu</option>
										<option value="242">Koderma</option>
										<option value="413">Kohima</option>
										<option value="52">Kokrajhar</option>
										<option value="272">Kolar</option>
										<option value="405">Kolasib</option>
										<option value="362">Kolhapur</option>
										<option value="662">Kolkata</option>
										<option value="288">Kollam</option>
										<option value="115">Kondagaon</option>
										<option value="273">Koppal</option>
										<option value="441">Koraput</option>
										<option value="116">Korba</option>
										<option value="117">Korea (Koriya)</option>
										<option value="500">Kota</option>
										<option value="289">Kottayam</option>
										<option value="290">Kozhikode</option>
										<option value="9">Krishna</option>
										<option value="525">Krishnagiri</option>
										<option value="217">Kulgam</option>
										<option value="200">Kullu</option>
										<option value="218">Kupwara</option>
										<option value="10">Kurnool</option>
										<option value="184">Kurukshetra</option>
										<option value="22">Kurung Kumey</option>
										<option value="610">Kushinagar (Padrauna)</option>
										<option value="201">Lahaul &amp; Spiti</option>
										<option value="53">Lakhimpur</option>
										<option value="611">Lakhimpur - Kheri</option>
										<option value="79">Lakhisarai</option>
										<option value="297">Lakshadweep</option>
										<option value="612">Lalitpur</option>
										<option value="243">Latehar</option>
										<option value="363">Latur</option>
										<option value="406">Lawngtlai</option>
										<option value="219">Leh</option>
										<option value="244">Lohardaga</option>
										<option value="23">Lohit</option>
										<option value="24">Longding</option>
										<option value="414">Longleng</option>
										<option value="25">Lower Dibang Valley</option>
										<option value="26">Lower Subansiri</option>
										<option value="613">Lucknow</option>
										<option value="467">Ludhiana</option>
										<option value="407">Lunglei</option>
										<option value="80">Madhepura</option>
										<option value="81">Madhubani</option>
										<option value="526">Madurai</option>
										<option value="551">Mahabubnagar</option>
										<option value="614">Maharajganj</option>
										<option value="118">Mahasamund</option>
										<option value="453">Mahe</option>
										<option value="185">Mahendragarh</option>
										<option value="159">Mahisagar</option>
										<option value="615">Mahoba</option>
										<option value="616">Mainpuri</option>
										<option value="291">Malappuram</option>
										<option value="663">Malda</option>
										<option value="442">Malkangiri</option>
										<option value="408">Mamit</option>
										<option value="202">Mandi</option>
										<option value="324">Mandla</option>
										<option value="325">Mandsaur</option>
										<option value="274">Mandya</option>
										<option value="468">Mansa</option>
										<option value="617">Mathura</option>
										<option value="618">Mau</option>
										<option value="443">Mayurbhanj</option>
										<option value="552">Medak</option>
										<option value="619">Meerut</option>
										<option value="160">Mehsana</option>
										<option value="186">Mewat</option>
										<option value="620">Mirzapur</option>
										<option value="469">Moga</option>
										<option value="415">Mokokchung</option>
										<option value="416">Mon</option>
										<option value="621">Moradabad</option>
										<option value="161">Morbi</option>
										<option value="326">Morena</option>
										<option value="54">Morigaon</option>
										<option value="470">Muktsar</option>
										<option value="364">Mumbai City</option>
										<option value="365">Mumbai Suburban</option>
										<option value="119">Mungeli</option>
										<option value="82">Munger (Monghyr)</option>
										<option value="664">Murshidabad</option>
										<option value="622">Muzaffarnagar</option>
										<option value="83">Muzaffarpur</option>
										<option value="275">Mysore</option>
										<option value="444">Nabarangpur</option>
										<option value="665">Nadia</option>
										<option value="55">Nagaon</option>
										<option value="527">Nagapattinam</option>
										<option value="501">Nagaur</option>
										<option value="366">Nagpur</option>
										<option value="646">Nainital</option>
										<option value="84">Nalanda</option>
										<option value="56">Nalbari</option>
										<option value="553">Nalgonda</option>
										<option value="528">Namakkal</option>
										<option value="367">Nanded</option>
										<option value="368">Nandurbar</option>
										<option value="120">Narayanpur</option>
										<option value="162">Narmada (Rajpipla)</option>
										<option value="327">Narsinghpur</option>
										<option value="369">Nashik</option>
										<option value="163">Navsari</option>
										<option value="85">Nawada</option>
										<option value="471">Nawanshahr</option>
										<option value="445">Nayagarh</option>
										<option value="328">Neemuch</option>
										<option value="11">Nellore</option>
										<option value="132">New Delhi</option>
										<option value="1">Nicobar</option>
										<option value="529">Nilgiris</option>
										<option value="554">Nizamabad</option>
										<option value="666">North 24 Parganas</option>
										<option value="2">North and Middle Andaman</option>
										<option value="133">North Delhi</option>
										<option value="134">North East Delhi</option>
										<option value="395">North Garo Hills</option>
										<option value="139">North Goa</option>
										<option value="512">North Sikkim</option>
										<option value="560">North Tripura</option>
										<option value="135">North West Delhi</option>
										<option value="446">Nuapada</option>
										<option value="370">Osmanabad</option>
										<option value="245">Pakur</option>
										<option value="292">Palakkad</option>
										<option value="246">Palamu</option>
										<option value="502">Pali</option>
										<option value="187">Palwal</option>
										<option value="188">Panchkula</option>
										<option value="164">Panchmahal (Godhra)</option>
										<option value="623">Panchsheel Nagar</option>
										<option value="189">Panipat</option>
										<option value="329">Panna</option>
										<option value="27">Papum Pare</option>
										<option value="371">Parbhani</option>
										<option value="667">Paschim Medinipur (West Medinipur)</option>
										<option value="165">Patan</option>
										<option value="293">Pathanamthitta</option>
										<option value="472">Pathankot</option>
										<option value="473">Patiala</option>
										<option value="86">Patna</option>
										<option value="647">Pauri Garhwal</option>
										<option value="530">Perambalur</option>
										<option value="417">Peren</option>
										<option value="418">Phek</option>
										<option value="624">Pilibhit</option>
										<option value="648">Pithoragarh</option>
										<option value="454">Pondicherry</option>
										<option value="220">Poonch</option>
										<option value="166">Porbandar</option>
										<option value="625">Prabuddh Nagar</option>
										<option value="12">Prakasam</option>
										<option value="503">Pratapgarh</option>
										<option value="626">Pratapgarh</option>
										<option value="531">Pudukkottai</option>
										<option value="221">Pulwama</option>
										<option value="372">Pune</option>
										<option value="668">Purba Medinipur (East Medinipur)</option>
										<option value="447">Puri</option>
										<option value="87">Purnia (Purnea)</option>
										<option value="669">Purulia</option>
										<option value="627">RaeBareli</option>
										<option value="276">Raichur</option>
										<option value="373">Raigad</option>
										<option value="121">Raigarh</option>
										<option value="122">Raipur</option>
										<option value="330">Raisen</option>
										<option value="331">Rajgarh</option>
										<option value="167">Rajkot</option>
										<option value="123">Rajnandgaon</option>
										<option value="222">Rajouri</option>
										<option value="504">Rajsamand</option>
										<option value="532">Ramanathapuram</option>
										<option value="223">Ramban</option>
										<option value="247">Ramgarh</option>
										<option value="277">Ramnagara</option>
										<option value="628">Rampur</option>
										<option value="248">Ranchi</option>
										<option value="555">Rangareddy</option>
										<option value="332">Ratlam</option>
										<option value="374">Ratnagiri</option>
										<option value="448">Rayagada</option>
										<option value="224">Reasi</option>
										<option value="333">Rewa</option>
										<option value="190">Rewari</option>
										<option value="396">Ri Bhoi</option>
										<option value="191">Rohtak</option>
										<option value="88">Rohtas</option>
										<option value="649">Rudraprayag</option>
										<option value="474">Rupnagar</option>
										<option value="168">Sabarkantha (Himmatnagar)</option>
										<option value="334">Sagar</option>
										<option value="629">Saharanpur</option>
										<option value="89">Saharsa</option>
										<option value="249">Sahibganj</option>
										<option value="409">Saiha</option>
										<option value="533">Salem</option>
										<option value="90">Samastipur</option>
										<option value="225">Samba</option>
										<option value="449">Sambalpur</option>
										<option value="375">Sangli</option>
										<option value="475">Sangrur</option>
										<option value="630">Sant Kabir Nagar</option>
										<option value="631">Sant Ravidas Nagar</option>
										<option value="91">Saran</option>
										<option value="476">SAS Nagar (Mohali)</option>
										<option value="376">Satara</option>
										<option value="335">Satna</option>
										<option value="505">Sawai Madhopur</option>
										<option value="336">Sehore</option>
										<option value="388">Senapati</option>
										<option value="337">Seoni</option>
										<option value="561">Sepahijala</option>
										<option value="250">Seraikela-Kharsawan</option>
										<option value="410">Serchhip</option>
										<option value="338">Shahdol</option>
										<option value="632">Shahjahanpur</option>
										<option value="339">Shajapur</option>
										<option value="92">Sheikhpura</option>
										<option value="93">Sheohar</option>
										<option value="340">Sheopur</option>
										<option value="203">Shimla</option>
										<option value="278">Shimoga</option>
										<option value="341">Shivpuri</option>
										<option value="226">Shopian</option>
										<option value="633">Shravasti</option>
										<option value="634">Siddharth Nagar</option>
										<option value="342">Sidhi</option>
										<option value="506">Sikar</option>
										<option value="251">Simdega</option>
										<option value="377">Sindhudurg</option>
										<option value="343">Singrauli</option>
										<option value="204">Sirmaur (Sirmour)</option>
										<option value="507">Sirohi</option>
										<option value="192">Sirsa</option>
										<option value="94">Sitamarhi</option>
										<option value="635">Sitapur</option>
										<option value="534">Sivaganga</option>
										<option value="57">Sivasagar</option>
										<option value="95">Siwan</option>
										<option value="205">Solan</option>
										<option value="378">Solapur</option>
										<option value="636">Sonbhadra</option>
										<option value="450">Sonepur</option>
										<option value="193">Sonipat</option>
										<option value="58">Sonitpur</option>
										<option value="670">South 24 Parganas</option>
										<option value="3">South Andaman</option>
										<option value="136">South Delhi</option>
										<option value="397">South Garo Hills</option>
										<option value="140">South Goa</option>
										<option value="513">South Sikkim</option>
										<option value="562">South Tripura</option>
										<option value="137">South West Delhi</option>
										<option value="398">South West Garo Hills</option>
										<option value="399">South West Khasi Hills</option>
										<option value="508">Sri Ganganagar</option>
										<option value="13">Srikakulam</option>
										<option value="227">Srinagar</option>
										<option value="124">Sukma</option>
										<option value="637">Sultanpur</option>
										<option value="451">Sundargarh</option>
										<option value="96">Supaul</option>
										<option value="125">Surajpur</option>
										<option value="169">Surat</option>
										<option value="170">Surendranagar</option>
										<option value="126">Surguja</option>
										<option value="389">Tamenglong</option>
										<option value="171">Tapi (Vyara),</option>
										<option value="477">Tarn Taran</option>
										<option value="28">Tawang</option>
										<option value="650">Tehri Garhwal</option>
										<option value="379">Thane</option>
										<option value="535">Thanjavur</option>
										<option value="536">Theni</option>
										<option value="294">Thiruvananthapuram</option>
										<option value="537">Thoothukudi (Tuticorin)</option>
										<option value="390">Thoubal</option>
										<option value="295">Thrissur</option>
										<option value="344">Tikamgarh</option>
										<option value="59">Tinsukia</option>
										<option value="29">Tirap</option>
										<option value="538">Tiruchirappalli</option>
										<option value="539">Tirunelveli</option>
										<option value="540">Tiruppur</option>
										<option value="541">Tiruvallur</option>
										<option value="542">Tiruvannamalai</option>
										<option value="543">Tiruvarur</option>
										<option value="509">Tonk</option>
										<option value="419">Tuensang</option>
										<option value="279">Tumkur</option>
										<option value="510">Udaipur</option>
										<option value="60">Udalguri</option>
										<option value="651">Udham Singh Nagar</option>
										<option value="228">Udhampur</option>
										<option value="280">Udupi</option>
										<option value="345">Ujjain</option>
										<option value="391">Ukhrul</option>
										<option value="346">Umaria</option>
										<option value="206">Una</option>
										<option value="563">Unakoti</option>
										<option value="638">Unnao</option>
										<option value="30">Upper Siang</option>
										<option value="31">Upper Subansiri</option>
										<option value="671">Uttar Dinajpur (North Dinajpur)</option>
										<option value="281">Uttara Kannada (Karwar)</option>
										<option value="652">Uttarkashi</option>
										<option value="172">Vadodara</option>
										<option value="97">Vaishali</option>
										<option value="173">Valsad</option>
										<option value="639">Varanasi</option>
										<option value="544">Vellore</option>
										<option value="347">Vidisha</option>
										<option value="545">Viluppuram</option>
										<option value="546">Virudhunagar</option>
										<option value="14">Visakhapatnam</option>
										<option value="15">Vizianagaram</option>
										<option value="556">Warangal</option>
										<option value="380">Wardha</option>
										<option value="381">Washim</option>
										<option value="296">Wayanad</option>
										<option value="98">West Champaran</option>
										<option value="138">West Delhi</option>
										<option value="400">West Garo Hills</option>
										<option value="16">West Godavari</option>
										<option value="401">West Jaintia Hills</option>
										<option value="32">West Kameng</option>
										<option value="402">West Khasi Hills</option>
										<option value="33">West Siang</option>
										<option value="514">West Sikkim</option>
										<option value="252">West Singhbhum</option>
										<option value="564">West Tripura</option>
										<option value="420">Wokha</option>
										<option value="282">Yadgir</option>
										<option value="194">Yamunanagar</option>
										<option value="455">Yanam</option>
										<option value="382">Yavatmal</option>
										<option value="421">Zunheboto</option>
									</select>
									<div class="help-block help-block-error "></div>
								</div>
                            </div>
                        </div>
						<div class="block-a">
							<h4>Current Profile</h4>
							<div class="form-group field-registerform-jobcategory required">
								<label class="col-md-2 control-label" for="registerform-jobcategory">Job&nbsp;Category:</label>
								<div class="col-sm-10">
									<select id="registerform-jobcategory" class="form-control" name="RegisterForm[JobCategory]">
										<option value="">Select JobCategory</option>
										<option value="1">Accounting Jobs</option>
										<option value="2">Interior Design Jobs</option>
										<option value="3">Bank Jobs</option>
										<option value="4">Content Writing Jobs</option>
										<option value="5">Consultant Jobs</option>
										<option value="6">Engineering Jobs</option>
										<option value="7">Export Import Jobs</option>
										<option value="8">Merchandiser Jobs </option>
										<option value="9">Security Jobs </option>
										<option value="10">HR Jobs</option>
										<option value="11">Hotel Jobs</option>
										<option value="12">Application Programming Jobs</option>
										<option value="13">Client Server Jobs</option>
										<option value="14"> DBA Jobs </option>
										<option value="15">Ecommerce Jobs</option>
										<option value="16">ERP Jobs</option>
										<option value="17">VLSI Jobs </option>
										<option value="18">Mainframe Jobs</option>
										<option value="19">Middleware Jobs</option>
										<option value="20">Mobile Jobs</option>
										<option value="21">Network administrator</option>
										<option value="22">IT Jobs</option>
										<option value="23">Testing Jobs </option>
										<option value="24">System Programming Jobs</option>
										<option value="25"> EDP Jobs </option>
										<option value="26">Telecom Jobs</option>
										<option value="27">BPO Jobs</option>
										<option value="28">Legal Jobs</option>
										<option value="29">Marketing Jobs</option>
										<option value="30">Packaging Jobs</option>
										<option value="31">Pharma Jobs</option>
										<option value="32"> Maintenance Jobs</option>
										<option value="33">Logistics Jobs </option>
										<option value="34">Sales Jobs </option>
										<option value="35">Secretary Jobs</option>
									</select>
									<div class="help-block help-block-error "></div>
								</div>
							</div>
							<div class="form-group field-registerform-experience required ">
								<label class="col-md-2 control-label" for="registerform-experience">Experience:</label>
								<div class="col-sm-10">
									<select id="registerform-experience" class="form-control" name="RegisterForm[Experience]">
										<option value="">Select Experience</option>
										<option value="1">0 - 6 Months</option>
										<option value="2">0.6 - 1 Year</option>
										<option value="3">1 - 2 years</option>
										<option value="4">2 - 3 Years </option>
										<option value="5">3 - 4 Years</option>
										<option value="6">4 - 5 Years</option>
										<option value="7">5 - 6 Years</option>
										<option value="8">6 - 7 Years</option>
										<option value="9">7 - 8 Years</option>
										<option value="10">8 -9 Years</option>
										<option value="11">9 - 10 Years</option>
										<option value="12">10 - 11 Years</option>
										<option value="13">11 -12 Years</option>
										<option value="14">12 - 13 Years</option>
										<option value="15">13 - 14 Years</option>
										<option value="16">14 - 15 Years</option>
										<option value="17">15 - 16 Years</option>
										<option value="18">16 - 17 Years</option>
										<option value="19">17 - 18 Years</option>
										<option value="20">18 - 19 Years</option>
										<option value="21">19 - 20 Years</option>
										<option value="22">20 - 21 Years</option>
										<option value="23">21 - 22 Years</option>
										<option value="24">22 - 23 Years</option>
										<option value="25">23 - 24 Years</option>
										<option value="26">24 - 25 Years</option>
										<option value="27">25 - 26 Years</option>
										<option value="28">26 - 27 Years</option>
										<option value="29">27 - 28 Years</option>
										<option value="30">28 - 29 Years</option>
										<option value="31">29 - 30 Years</option>
										<option value="32">30 + Years</option>
									</select>
									<div class="help-block help-block-error "></div>
								</div>
							</div>
							<div class="form-group field-registerform-key-skills ">
								<label class="col-md-2 control-label " for="registerform-key-skills ">Key:</label>
								<div class="col-sm-10">
									<select id="registerform-key-skills" class="SlectBox form-control" name="RegisterForm[key][Skills][]" multiple="true" size="4">
										<option value="">Select Skills</option>
										<option value="1">Php</option>
										<option value="2">html</option>
										<option value="3">yii</option>
										<option value="4">css</option>
										<option value="5">bootstrap</option>
										<option value="6">jquery</option>
										<option value="7">java</option>
										<option value="8">j2ee</option>
										<option value="9">.net</option>
										<option value="10">c#</option>
										<option value="11">c</option>
										<option value="12">Accounts</option>
										<option value="13">VLSI</option>
										<option value="14">Software Testing</option>
										<option value="15">SEO</option>
										<option value="16">SAP</option>
										<option value="17">Oracle</option>
										<option value="18">Linux</option>
										<option value="19">SQL</option>
										<option value="20">Tally</option>
										<option value="21">CAD/CAM</option>
										<option value="22">MATLAB</option>
										<option value="23">SCADA</option>
										<option value="24">Microsoft Office</option>
										<option value="25">MS DOS</option>
										<option value="26">OOPS</option>
										<option value="27">C++</option>
										<option value="28">Data Structures</option>
										<option value="29">DHTML</option>
										<option value="30">JavaScript</option>
										<option value="31">Embedded</option>
										<option value="32">PLC</option>
										<option value="33">Microcontrollers</option>
										<option value="34">Microprocessor</option>
										<option value="35">OS</option>
										<option value="36">SMO</option>
										<option value="37">Visual C++</option>
										<option value="38">JDOM</option>
										<option value="39">JCL</option>
										<option value="40">JSE</option>
										<option value="41">VSAT</option>
										<option value="42">Datawarehousing</option>
										<option value="43">FPGA</option>
										<option value="44">BPO</option>
										<option value="45">Technical Support</option>
										<option value="46">Customer Services</option>
										<option value="47">Lead Executives</option>
										<option value="48">Non-Voice Process</option>
										<option value="49">HR-Recruiter</option>
										<option value="50">HR-Manager</option>
										<option value="51">System Engineer</option>
										<option value="52">Hardware &amp; Networking</option>
										<option value="53">Adobe Page Maker</option>
										<option value="54">Autosys</option>
										<option value="55">Sales Manager</option>
										<option value="56">Graphic Design</option>
										<option value="57">Animation</option>
										<option value="58">UI Design</option>
										<option value="59">Teaching</option>
										<option value="60">Hairdressing</option>
										<option value="61">Art</option>
										<option value="62">Nursing</option>
										<option value="63">Music</option>
										<option value="64">Dance</option>
										<option value="65">Law</option>
										<option value="66">Tax Law</option>
										<option value="67">Image Processing</option>
										<option value="68">Supervisor</option>
										<option value="69">Textile Designing</option>
									</select>
									<div class="help-block help-block-error "></div>
								</div>
							</div>
						</div>
						<div class="block-a">
							<h4>Educational Background</h4>
							<div class="form-group field-registerform-highestqualification required ">
								<label class="col-md-2 control-label" for="registerform-highestqualification">Highest Qualification:</label>
								<div class="col-sm-10">
									<select id="registerform-highestqualification" class="form-control" name="RegisterForm[HighestQualification]">
										<option value="">Select Qualification</option>
										<option value="1">B.A</option>
										<option value="2">M.A</option>
										<option value="3">M.Com</option>
										<option value="4">B.Com</option>
										<option value="5">M.E</option>
										<option value="6">MBA</option>
										<option value="7">B.E</option>
										<option value="8">BBA</option>
										<option value="9">M.Sc</option>
										<option value="10">B.Sc</option>
										<option value="11">MCA</option>
										<option value="12">B.Arch</option>
										<option value="13">Ph.D</option>
										<option value="14">M.Tech</option>
										<option value="15">MBBS</option>
										<option value="16">B.Tech</option>
										<option value="17">BHM</option>
										<option value="18">HRM</option>
										<option value="19">BSc. IT</option>
										<option value="20">MSc. IT</option>
										<option value="21">MCM</option>
										<option value="22">M.Phil</option>
										<option value="23">M.Stat</option>
										<option value="24">BSc. CS</option>
										<option value="25">BFA</option>
										<option value="26">B.Lib</option>
										<option value="27">B.S.W</option>
									</select>
									<div class="help-block help-block-error "></div>
								</div>
							</div>
							<div class="form-group field-registerform-uploadresume ">
								<label class="col-md-2 control-label " for="registerform-uploadresume ">Upload&nbsp;Resume:</label>
								<div class="col-sm-10">
									<a class='blktd btn btn-default' href='javascript:;'>
										Choose File...
										<input id="registerform-uploadresume" name="RegisterForm[UploadResume]" type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' onchange='$("#upload-file-info").html($(this).val());'>
									</a> &nbsp;
									<span class='label label-info' id="upload-file-info"></span>
								</div>
							</div>
						</div>
						<div class="block-a">
							<div class="form-group field-registerform-verifycode ">
								<label class="col-md-2 control-label" for="registerform-verifycode">Verification&nbsp;Code:</label>
								<div class="col-md-3">
									<img id="registerform-verifycode-image" src="assets/img/bootstrap/captcha.png" alt="">
								</div>
								<div class="col-md-2">
									<button type="getcaptch" class="btn btn-default" name="get-captcha">Try Another</button>
								</div>
								<div class="col-md-5">
									<input id="registerform-verifycode" class="form-control col-md-7" name="RegisterForm[verifyCode]" type="text">
								</div>
							</div>
							<div class="form-group field-registerform-termsandconditions required ">
								<label class="col-md-2 control-label" for="termsandconditions"></label>
								<div class="col-md-10">
									<div class="checkbox">
										<label>
											<input name="RegisterForm[TermsAndConditions]" value="0" type="hidden">
											<input id="registerform-termsandconditions" name="RegisterForm[TermsAndConditions]" value="1" type="checkbox"> Terms And Conditions
										</label>
										<p class="help-block help-block-error"></p>
									</div>
								</div>
							</div>
							<div class="form-group submit ">
								<label class="col-md-2 control-label" for="submit"></label>
								<div class="col-md-10">
									<button type="submit" class="btn btn-default" name="contact-default">&nbsp;Submit&nbsp;</button>
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
                            <a href="#"><img src="images/employers-logo/eric-120X45-3.gif" alt="employers"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/images/emplr-logo/ibm-120X45-12.gif" alt="employers"></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/images/emplr-logo/lnt-120X45.gif" alt="employers"></a>
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






</div>
</div>

















