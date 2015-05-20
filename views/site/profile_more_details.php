<?php

use yii\helpers\Html;


?>

<div class="profile-pages">
        <div class="container">
            <div class="col-md-8">
                <div class="p-block">
                    <h2><i class="fa fa-user"></i>&nbsp;Other&nbsp;Details</h2>
                    <form class="form-horizontal complete-your-profile" role="form">
						<div class="block-a">
							<h4>Languages Known</h4>
							<div class="form-group">
								<label class="control-label col-sm-2" for="lang">Language:<span class="red">*</span></label>
								<div class="col-sm-10">
									<table class="table">
										<thead>
											<tr>
												<th>Language</th>
												<th>Proficiency</th>
												<th>Read</th>
												<th>Write</th>
												<th>Speak</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<input type="text" class="form-control" id="text">
												</td>
												<td>
													<select name="LANGPROF[0]" class="textbox2 form-control">
														<option value="-1" selected="selected">Select</option>
														<option value="1">Beginner</option>
														<option value="2">Proficient</option>
														<option value="3">Expert</option>
													</select>
												</td>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">
														</label>
													</div>
												</td>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">
														</label>
													</div>
												</td>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">
														</label>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<input type="text" class="form-control" id="text">
												</td>
												<td>
													<select name="LANGPROF[0]" class="textbox2 form-control">
														<option value="-1" selected="selected">Select</option>
														<option value="1">Beginner</option>
														<option value="2">Proficient</option>
														<option value="3">Expert</option>
													</select>
												</td>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">
														</label>
													</div>
												</td>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">
														</label>
													</div>
												</td>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">
														</label>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<input type="text" class="form-control" id="text">
												</td>
												<td>
													<select name="LANGPROF[0]" class="textbox2 form-control">
														<option value="-1" selected="selected">Select</option>
														<option value="1">Beginner</option>
														<option value="2">Proficient</option>
														<option value="3">Expert</option>
													</select>
												</td>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">
														</label>
													</div>
												</td>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">
														</label>
													</div>
												</td>
												<td>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">
														</label>
													</div>
												</td>
											</tr>

										</tbody>
									</table>
									<p class="cursor-pointer"><strong>Add More Languages</strong></p>
								</div>
							</div>
						</div> 
						<div class="block-a">
							<h4>Desired&nbsp;Job&nbsp;Details</h4>
							<div class="form-group  required">
                                <label class="control-label col-sm-2" for="title">Job&nbsp;Type:</label>
                                <div class="col-sm-10 form-inline">
									<div class="checkbox">
									  <label><input type="checkbox" value="">&nbsp;Permanent</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" value="">&nbsp;Temporary/Contractual</label>
									</div>
								</div>
                            </div>
							<div class="form-group">
                                <label class="control-label col-sm-2" for="title">Employment&nbsp;Type:</label>
                                <div class="col-sm-10 form-inline">
									<div class="checkbox">
									  <label><input type="checkbox" value="">&nbsp;Full Time</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" value="">&nbsp;Part Time</label>
									</div>
								</div>
                            </div>
						</div>
						<div class="block-a">
							<h4>Affirmative&nbsp;Action</h4>
							<div class="form-group">
                                <label class="control-label col-sm-2" for="title">Categories:</label>
                                <div class="col-sm-10">
									<select class="form-control" id="sel1">
										<option>Select</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									  </select>
								</div>
                            </div>
							<div class="form-group">
                                <label class="control-label col-sm-2" for="title">Physically&nbsp;Challenged:</label>
                                <div class="col-sm-10">
									<label class="radio-inline">
										<input type="radio" name="optradio">Yes
									</label>
									<label class="radio-inline">
										<input type="radio" name="optradio">No
									</label>
								</div>
                            </div>
							<div class="form-group">
                                <label class="control-label col-sm-2" for="title">Description:</label>
                                <div class="col-sm-10">
									<textarea class="form-control" rows="5" id="comment"></textarea>
								</div>
                            </div>
						</div>
						<div class="block-a">
							<h4>Work&nbsp;Authorization</h4>
							<div class="form-group">
                                <label class="control-label col-sm-2" for="title">Categories:</label>
                                <div class="col-sm-10">
									<select class="form-control" id="sel1">
										<option>Select</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
								</div>
                            </div>
							<div class="form-group">
                                <label class="control-label col-sm-2" for="title">Other&nbsp;Countries:</label>
                                <div class="col-sm-10">
									<select multiple class="form-control" id="sel1">
										<option>Select</option>
										<option>India</option>
										<option>Australia</option>
										<option>England</option>
										<option>USA</option>
									</select>
								</div>
                            </div>
							<div class="form-group">
                                <label class="control-label col-sm-2" for="save"></label>
                                <div class="col-sm-10">
									<button type="button" class="btn btn-default">Save Changes</button>
									<button type="button" class="btn btn-link">Cancel</button>
								</div>
                            </div>
						</div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
				<h4>Update Profile</h4>
                <div class="clear"></div>
				<div class="side-menu01">
					<ul>
						<li><a href="http://192.168.1.222/saga/ApplicationTeam/yii/syam/takeajob_frontend_stage/web/site/profile_snapshot">Outline/Snapshot</a></li>
						<li><a href="http://192.168.1.222/saga/ApplicationTeam/yii/syam/takeajob_frontend_stage/web/site/profile_summary">Summary</a></li>
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
    