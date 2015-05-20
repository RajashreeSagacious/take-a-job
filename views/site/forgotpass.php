<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;





$this->title ='Forgot Password';
//$this->params['breadcrumbs'][]=$this->title;

?>

<div class="col-lg-12">
    <?php if(Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= Yii::$app->session->getFlash('success') ?>
        </div>
    <?php endif; ?>
</div>
<div class="col-lg-12">
    <?php if(Yii::$app->session->hasFlash('error')): ?>
        <div class="alert alert-danger" role="alert">
            <?= Yii::$app->session->getFlash('error') ?>
        </div>
    <?php endif; ?>
</div>


<div class="profile-pages">
        <div class="container">
            <div class="col-md-8">
                <div class="p-block">

<h1><?=  Html::encode($this->title); ?></h1>
<p>Enter email address to receive an email with the link to reset your password. </p>
<?php $form = ActiveForm::begin([
    'id'=>'forgotpass-form',
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
  
     <?= $form->field($model,'Email')  ?>
      <label class="control-label col-sm-2" for="submit"></label>
     <?= Html::submitButton('Submit',['class' =>'btn btn-default','name'=>'reg-button'] ) ?>
      
 </div>
    
<?php  ActiveForm::end(); ?>
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











