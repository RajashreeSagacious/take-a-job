<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
//use yii\captcha\Captcha;

use app\assets\AppAsset;
AppAsset::register($this);


 
$this->title ='Login';
/*$this->params['breadcrumbs'][]=$this->title;*/
?>

<div class="profile-pages">
        <div class="container">
            <div class="col-md-8">
                <div class="p-block">
                    <ul class="breadcrumb">
                        <li><a href="./Register_files/saved_resource">Home</a></li>
                        <li class="active">Login</li>
                    </ul>
                  <h1>
 <i class="fa fa-check-square-o space1"></i>
<span class="space">Login</span>
</h1>
    <p>Please Complete your registration by fill out the given fields</p>
    <?php 
    $form = ActiveForm::begin([
    'id'=>'reg-form',
    'options' => ['class' => 'form-horizontal complete-your-profile' ,'enctype' => 'multipart/form-data',"role"=>"form"],
    'fieldConfig' => [
    'template' => "

    {label}\n <div class=\"col-sm-10\">{input}{error}</div>",
    'labelOptions' => ['class' => 'control-label col-sm-2'],
    'errorOptions' => ['class' => 'help-block help-block-error '],
    'inputOptions' => ['class' => 'form-control'],

    ],
    ]);
?>
							
<div class="block-a">  
    <p><?= $form->field($model, 'loggedinBy')->radioList(array('0'=>'Eamil',1=>'Phone')); ?></p>
    <?= $form->field($model, 'email_or_Phone' ) ?>
    <?= $form->field($model, 'Password')->passwordInput() ?>
    <?= $form->field($model, 'RememberMe', [
    'template' => "<div class=\"col-lg-offset-1 col-lg-3\" id=\"loginform-rememberme\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",])->checkbox() ?>     
     <?= Html::submitButton('Login', ['class' => 'login btn btn-default']) ?>
         <span class="help-block"><?= Html::a('ForgotPassword', ['/site/forgotpass']) ?></span>
    	 <span class="help-block">New to TakeAJob? <?= Html::a('Register a New Membership', ['/site/register']) ?></span>                
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






</div>
</div>

















