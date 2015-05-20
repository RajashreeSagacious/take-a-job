<?php

use yii\helpers\Html;


?>

<div class="profile-pages">
        <div class="container">
            <div class="col-md-8">
                <div class="p-block">
                    <h2><i class="fa fa-user"></i>&nbsp;Education</h2>
                    <form class="form-horizontal complete-your-profile" role="form">
						<div class="block-a">
							<div class="form-group">
								<label class="control-label col-sm-2" for="graduationId"><span class="red">*</span>Basic/Graduation:</label>
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
							<div class="form-group">
								<label class="control-label col-sm-2" for=""></label>
								<div class="col-sm-10 form-inline">
									<div class="radio">
										<label>
											<input type="radio" name="optradio">&nbsp;Full&nbsp;Time
										</label>
									</div>
									&nbsp;&nbsp;&nbsp;
									<div class="radio">
										<label>
											<input type="radio" name="optradio">&nbsp;Part&nbsp;Time
										</label>
									</div>
									&nbsp;&nbsp;&nbsp;
									<div class="radio">
										<label>
											<input type="radio" name="optradio">&nbsp;Correspondence/Distance learning
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="specialization"><span class="red">*</span>Specialization:</label>
								<div class="col-sm-10">
									<select class="form-control" id="sel5">
										<option value="-1">Select</option>
										<option value="1">1</option>
										<option value="1">2</option>
										<option value="1">3</option>
										<option value="1">4</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="specialization"><span class="red">*</span>University/Institute:</label>
								<div class="col-sm-10">
									<select class="form-control" id="sel5">
										<option value="-1">Select</option>
										<option value="1">1</option>
										<option value="1">2</option>
										<option value="1">3</option>
										<option value="1">4</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="specialization"><span class="red">*</span>Year:</label>
								<div class="col-sm-10">
									<select class="form-control" id="sel5">
										<option value="-1">Select</option>
										<option value="1">1</option>
										<option value="1">2</option>
										<option value="1">3</option>
										<option value="1">4</option>
									</select>
								</div>
							</div>
							<div class="con">
                                <p class="coll-mr pull-right" data-toggle="collapse" data-target="#demo">Add Post Graduation</p>
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
										<label class="control-label col-sm-2" for=""></label>
										<div class="col-sm-10 form-inline">
											<div class="radio">
												<label>
													<input type="radio" name="optradio">&nbsp;Full&nbsp;Time
												</label>
											</div>
											&nbsp;&nbsp;&nbsp;
											<div class="radio">
												<label>
													<input type="radio" name="optradio">&nbsp;Part&nbsp;Time
												</label>
											</div>
											&nbsp;&nbsp;&nbsp;
											<div class="radio">
												<label>
													<input type="radio" name="optradio">&nbsp;Correspondence/Distance learning
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-2" for="specialization"><span class="red">*</span>Specialization:</label>
										<div class="col-sm-10">
											<select class="form-control" id="sel5">
												<option value="-1">Select</option>
												<option value="1">1</option>
												<option value="1">2</option>
												<option value="1">3</option>
												<option value="1">4</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-2" for="specialization"><span class="red">*</span>University/Institute:</label>
										<div class="col-sm-10">
											<select class="form-control" id="sel5">
												<option value="-1">Select</option>
												<option value="1">1</option>
												<option value="1">2</option>
												<option value="1">3</option>
												<option value="1">4</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-2" for="specialization"><span class="red">*</span>Year:</label>
										<div class="col-sm-10">
											<select class="form-control" id="sel5">
												<option value="-1">Select</option>
												<option value="1">1</option>
												<option value="1">2</option>
												<option value="1">3</option>
												<option value="1">4</option>
											</select>
										</div>
									</div>
                                    
									<div class="con">
										<p class="coll-mr pull-right" data-toggle="collapse" data-target="#demo02">Add Doctorate/PhD</p>
										<div class="clear"></div>
										<div id="demo02" class="collapse">
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
											<div class="form-group">
												<label class="control-label col-sm-2" for=""></label>
												<div class="col-sm-10 form-inline">
													<div class="radio">
														<label>
															<input type="radio" name="optradio">&nbsp;Full&nbsp;Time
														</label>
													</div>
													&nbsp;&nbsp;&nbsp;
													<div class="radio">
														<label>
															<input type="radio" name="optradio">&nbsp;Part&nbsp;Time
														</label>
													</div>
													&nbsp;&nbsp;&nbsp;
													<div class="radio">
														<label>
															<input type="radio" name="optradio">&nbsp;Correspondence/Distance learning
														</label>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="specialization"><span class="red">*</span>Specialization:</label>
												<div class="col-sm-10">
													<select class="form-control" id="sel5">
														<option value="-1">Select</option>
														<option value="1">1</option>
														<option value="1">2</option>
														<option value="1">3</option>
														<option value="1">4</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="specialization"><span class="red">*</span>University/Institute:</label>
												<div class="col-sm-10">
													<select class="form-control" id="sel5">
														<option value="-1">Select</option>
														<option value="1">1</option>
														<option value="1">2</option>
														<option value="1">3</option>
														<option value="1">4</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="specialization"><span class="red">*</span>Year:</label>
												<div class="col-sm-10">
													<select class="form-control" id="sel5">
														<option value="-1">Select</option>
														<option value="1">1</option>
														<option value="1">2</option>
														<option value="1">3</option>
														<option value="1">4</option>
													</select>
												</div>
											</div>
										</div>
									</div>
                                </div>
                            </div>
						</div>
						<div class="block-a">
							<div class="form-group">
								<label class="control-label col-sm-2" for="specialization"></label>
								<div class="col-sm-10">
									<button data-toggle="collapse" data-target="#demo03" type="button" class="btn btn-default">Add Diploma/Certificate</button>
								</div>
							</div>
							<div id="demo03" class="collapse"  class="con">
								<div class="form-group">
									<label class="control-label col-sm-2" for="specialization">Diploma/Certificate:</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="">
										<span class="help-block coll-mr pull-right">Delete</span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="specialization">Diploma/Certificate:</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="">
										<span class="help-block coll-mr pull-right">Delete</span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="specialization">Diploma/Certificate:</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="">
										<span class="help-block coll-mr pull-right">Delete</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="specialization"></label>
								<div class="col-sm-10 form-inline">
									<button data-toggle="collapse" data-target="#demo03" type="button" class="btn btn-default">Save Changes</button>
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
    