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
$this->params['breadcrumbs'][]=$this->title;
?>


<div class="site-register col-md-12">

	<h1><?=  Html::encode($this->title); ?></h1>
	 <div class="col-lg-12">
	    <?php if(Yii::$app->session->hasFlash('success')): ?>
	        <div class="alert alert-success" role="alert">
	            <?= Yii::$app->session->getFlash('success') ?>
	        </div>
	    <?php endif; ?>
     </div>



	<div class="col-lg-12">
	<?php if(Yii::$app->session->hasFlash('EmailIDORContactNumberAlreadyExists')): ?>
	    <div class="alert alert-danger" role="alert">
	        <?= Yii::$app->session->getFlash('EmailIDORContactNumberAlreadyExists') ?>
	    </div>
	<?php endif; ?>
	</div>


	<p>Please Complete your registration by fill out the given fields</p>
	<?php 
		$form = ActiveForm::begin([

		'id'=>'reg-form',
		'options' => ['class' => 'form-horizontal' ,'enctype' => 'multipart/form-data'],
		'fieldConfig' => [
		'template' => "<div class=\"col-md-3 col-xs-12\">{label}</div>\n<div class=\"col-md-3 col-xs-12\">{input}</div>\n<div class=\"col-md-3 col-xs-12\">{error}</div>",
		'labelOptions' => ['class' => 'col-md-10 control-label'],
		],
		]);
	?>

	<div class="form-group">
		<h3 class="col-md-12 col-xs-12">Contact Details</h3>
		<?= $form->field($model,'FirstName')->textInput(['maxlength'=>20])?>
		<?= $form->field($model,'LastName')->textInput(['maxlength'=>10]) ?>
		<?= $form->field($model,'Email')  ?>
		<?= $form->field($model,'ContactNo') ?>
		<?= $form->field($model,'Location')->dropDownList($disData,['placeholder'=>'Select Location','class' => 'Slectlocation']); ?>
	
	</div>
	<hr>

	<div class="form-group">
		<h3 class="col-md-12 col-xs-12">Current Profile</h3>
		<?= $form->field($model, 'JobCategory')->dropDownList($jobCategory,['prompt'=>'Select JobCategory']);	?>
		<?= $form->field($model, 'Experience')->dropDownList($expData,['prompt'=>'Select Experience']);	?>
        <?= $form->field($model, 'key[Skills]')->dropDownList($skillData,['prompt'=>'Select Skills','class'=>'SlectBox','multiple' => 'true' ]);	?>
	</div>
	<hr>
	<div class="form-group">
		<h3 class="col-md-12 col-xs-12">Educational Background</h3>
		<?=  $form->field($model, 'HighestQualification')->dropDownList($eduData,['prompt'=>'Select Qualification']);	?>
	</div>
	<hr>
		<?= $form->field($model, 'UploadResume')->fileInput() ?>
		<?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
		'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6" style="margin-left: 50px;
		margin-top: 10px;">{input}</div></div>',
		]) ?>

 
  <?= $form->field($model, 'TermsAndConditions')->checkbox()?>

       


	<div class="form-group">
	     <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
	</div>


	<?php ActiveForm::end(); ?>

</div>