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
$this->title ='OtpvalidationForm';
/*$this->params['breadcrumbs'][]=$this->title;*/
?>

<link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href='assets/css/font-awesome.css' rel='stylesheet' type='text/css'>
    <link href="assets/css/commen.css" rel="stylesheet">
    <link href="assets/css/mediaquery.css" rel="stylesheet">

<div class="profile-pages">
        <div class="container">
            <div class="col-md-8">
                <div class="p-block">
                    <ul class="breadcrumb">
                        <li><a href="./Register_files/saved_resource">Home</a></li>
                        <li class="active">OTP Verification</li>
                    </ul>
                  <h1>
 <i class="fa fa-check-square-o space1"></i>
<span class="space">OTP Verification</span>
</h1>
    <p>Please Enter your One time Password Here</p>
    <?php 
    $form = ActiveForm::begin([
    'id'=>'OtpvalidationForm',
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
<div class="col-lg-12">
  <?php if(Yii::$app->session->hasFlash('Otpmessage')): ?>
      <div class="alert alert-success" role="alert">
          <?= Yii::$app->session->getFlash('Otpmessage') ?>
      </div>
  <?php endif; ?>
  </div>
<div class="col-lg-12">
  <?php if(Yii::$app->session->hasFlash('Otperror')): ?>
      <div class="alert alert-danger" role="alert">
          <?= Yii::$app->session->getFlash('Otperror') ?>
      </div>
  <?php endif; ?>
  </div>
  

      <div class="block-a">
        <h4>Phone Number Verification</h4>
       <?php //Html::activeHiddenInput($model, 'user_id'); ?>
         <?php //Html::activeHiddenInput($model, 'user_id', ['value' => $_GET['q']]) ?>
         <?= $form->field($model,'tj_users_phone_otp')->label('Enter Otp');?>
         <?= Html::submitButton('Submit', ['class' => 'btn btn-default', 'name' => 'otp-button']) ?>
             <!--  <?= Html::a('Generate OTP', ['/site/regenerateotp'], ['class'=>'homer']) ?> -->
      </div>

  <?php ActiveForm::end(); ?>

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
   


















