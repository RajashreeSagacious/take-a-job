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
						<li class="active">Login</li>
					</ul>
                    <h2><i class="fa fa-user space1"></i> Login</h2>
                    <p>Sign in to start your session</p>
					<form id="login-form" class="form-horizontal" action="/saga/ApplicationTeam/yii/takeajob_frontend_stage/web/site/login" method="post">
                        <div class="block-a">
							<h4>Contact Details</h4>
                            <div class="form-group field-registerform-firstname required">
                                <label class="control-label col-sm-2" for="loginform-email_or_phone">Email&nbsp;Or&nbsp;Phone</label>
                                <div class="col-sm-10">
                                    <input id="loginform-email_or_phone" class="form-control" name="LoginForm[email_or_Phone]" type="text">
									<div class="help-block help-block-error "></div>
								</div>
                            </div>
							<div class="form-group field-registerform-lastname required">
                                <label class="control-label col-sm-2" for="loginform-password">Password</label>
                                <div class="col-sm-10">
                                    <input id="loginform-password" class="form-control" name="LoginForm[password]" type="password">
									<div class="help-block help-block-error "></div>
								</div>
                            </div>
							<div class="form-group">
                                <label class="control-label col-sm-2" for="loginform-rememberme"></label>
                                <div class="col-sm-10">
                                    <label><input id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked="" type="checkbox"> Remember Me</label>
								</div>
                            </div>
							<div class="form-group">
                                <label class="control-label col-sm-2" for="loginform-rememberme"></label>
                                <div class="col-sm-10">
									<button type="button" class="login btn btn-default">&nbsp;&nbsp;Login&nbsp;&nbsp;</button>
									<span class="help-block">New to TakeAJob?  <a class="space" href="/saga/ApplicationTeam/yii/takeajob_frontend_stage/web/site/register">Register a New membership</a></span>                
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
                            <a href="#"><img src="../../web/images/employers-logo/aditya.gif"></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/employers-logo/ibm-120X45-12.gif" alt="employers"></a>
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






</div>
</div>

















