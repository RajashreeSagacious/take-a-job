<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha

?>

<div class="profile-pages">
        <div class="container">
            <div class="col-md-8">
                <div class="p-block">
                    <h2>Employer/Designation</h2>
                    <form class="form-horizontal complete-your-profile" role="form">
					<p>Add Employer/Designation to your profile. To edit an existing Employer/Desigination please click <a href="#">here</a></p>
                        <div class="block-a">
							<div class="form-group field-registerform-firstname required">
                                <label class="control-label col-sm-2" for="title"><span class="red">*</span>Employer&nbsp;Name:</label>
                                <div class="col-sm-10">
									<textarea class="form-control" rows="3" maxchars="250" oname="Profile-summary" valtype="Profile-summary" name="Profile-summary" id="Profile-summary"></textarea>
								</div>
                            </div>
							<div class="form-group field-registerform-firstname required">
                                <label class="control-label col-sm-2" for="title"></label>
                                <div class="col-sm-10 form-inline">
									<div class="radio">
									  <label><input type="radio" name="optradio">&nbsp;Current&nbsp;Employer</label>
									</div>&nbsp;&nbsp;
									<div class="radio">
									  <label><input type="radio" name="optradio">&nbsp;Previous&nbsp;Employer</label>
									</div>&nbsp;&nbsp;
									<div class="radio">
									  <label><input type="radio" name="optradio" disabled>&nbsp;Other&nbsp;Employer</label>
									</div>
								</div>
                            </div>
							<div class="form-group field-registerform-firstname required">
                                <label class="control-label col-sm-2" for="title"><span class="red">*</span>Duration</label>
                                <div class="col-sm-10 form-inline">
									<select class="form-control" id="sel1">
										<option>Month</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
									<select class="form-control" id="sel1">
										<option>Year</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
									to
									<select class="form-control" id="sel1">
										<option>Month</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
									<select class="form-control" id="sel1">
										<option>Year</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
								</div>
                            </div>
							<div class="form-group field-registerform-firstname required">
                                <label class="control-label col-sm-2" for="title"><span class="red">*</span>Designation:</label>
                                <div class="col-sm-10">
									<textarea class="form-control" rows="3" maxchars="250" oname="Profile-summary" valtype="Profile-summary" name="Profile-summary" id="Profile-summary"></textarea>
								</div>
                            </div>
							<div class="form-group field-registerform-firstname required">
                                <label class="control-label col-sm-2" for="title">Job&nbsp;Profile:</label>
                                <div class="col-sm-10">
									<textarea class="form-control" rows="3" maxchars="250" oname="Profile-summary" valtype="Profile-summary" name="Profile-summary" id="Profile-summary"></textarea>
									<span class="help-block">Minimum of 6 characters</span>
								</div>
                            </div>
							<div class="form-group field-registerform-firstname required">
                                <label class="control-label col-sm-2" for="title"></label>
                                <div class="col-sm-10 form-inline">
									<button type="button" class="btn btn-default">Save Changes</button>
									<button type="button" class="btn btn-link">Cancel</button>
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
						<li><?= Html::a('Forgot Password', ['site/profile_snapshot']) ?>Outline/Snapshot</a></li>
						<li><a href="#">Summary</a></li>
						<li><a href="#">Employer/Desigination</a></li>
						<li><a href="#">Attached Resume</a></li>
						<li><a href="#">Projects</a></li>
						<li><a href="#">It Skills</a></li>
						<li><a href="#">Education</a></li>
						<li><a href="#">More Details</a></li>
					</ul>
				</div>
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
    