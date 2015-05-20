<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

use app\assets\AppAsset;
AppAsset::register($this);
 $this->registerJs(
    '$("document").ready(function(){ 
       window.asd = $(".SlectBox").SumoSelect({ csvDispCount: 2 });
       	$(".Slectlocation").select2();
      });'
);
$this->title ='Register';
?>



<div class="container">
<div class="topheadH">
<div class="regiformleft">
<div class="site-register col-md-12">
 <h1>
 <i class="fa fa-check-square-o space1"></i>
<span class="space">Register</span>
</h1>
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
	              'template' => "<div class=\"col-md-3 col-xs-12\">{label}</div>\n<div class=\"col-md-6 col-xs-12\">{input}</div>\n<div class=\"col-md-3 col-xs-12\">{error}</div>",
	              'labelOptions' => ['class' => 'col-md-10 control-label'],
        ],
    ]);
			?>

<hr>

<div class="form-group">
		<h3 class="col-md-12 col-xs-12">Contact Details</h3>
		<?= $form->field($model,'FirstName')?>
		<?= $form->field($model,'LastName') ?>
		<?= $form->field($model,'Email')  ?>
		<?= $form->field($model,'ContactNo') ?>
		<?= $form->field($model,'Location')->dropDownList($disData,['placeholder'=>'Select Location','class' => 'Slectlocation','style' => 'width:150px']); ?>
	
	</div>
	<hr>

<div class="form-group">

   <h3 class="col-md-12 col-xs-12">Current Profile</h3>
    <?= $form->field($model, 'JobCategory')->dropDownList($jobCategory,['prompt'=>'Select JobCategory']);	?>
    <?= $form->field($model, 'Experience')->dropDownList($expData,['prompt'=>'Select Experience']);	?>
	   <?= $form->field($model, 'key[Skills]')->dropDownList($skillData,['prompt'=>'Select Skills','class'=>'SlectBox','multiple' => 'true' ]);	?>
	
</div>


<hr>
<div class="form-group" >
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
</div>


<div class="regiformright">
<?= Html::a(Html::img('@web/images/111.jpg', [ 'alt' => 'Jobs Ads', 'class' => 'rightImgblink1'])) ?>
<?php /*
<div class="companyLoGo">

	   
<ul>
<li><?= Html::a(Html::img('@web/images/employers-logo/aditya.gif', [ 'alt' => 'Aditya'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/all.gif', [ 'alt' => 'All'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/aricent.gif', [ 'alt' => 'Aricent'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/bapco.gif', [ 'alt' => 'Bapco'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/ustglobal.gif', [ 'alt' => 'Ustglobal'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/wipro.gif', [ 'alt' => 'Wipro'])) ?></li>

<li><?= Html::a(Html::img('@web/images/employers-logo/airtel.gif', [ 'alt' => 'airtel'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/akcgroup.gif', [ 'alt' => 'akcgroup'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/amazon.gif', [ 'alt' => 'amazon'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/amdocs.gif', [ 'alt' => 'amdocs'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/bartronics.gif', [ 'alt' => 'bartronics'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/biocon.gif', [ 'alt' => 'biocon'])) ?></li>


<li><?= Html::a(Html::img('@web/images/employers-logo/broadcom.gif', [ 'alt' => 'broadcom'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/broadridge.gif', [ 'alt' => 'broadridge'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/capco.gif', [ 'alt' => 'capco'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/cisco-pg.gif', [ 'alt' => 'cisco-pg'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/cog.gif', [ 'alt' => 'cog'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/deloittepanel.gif', [ 'alt' => 'deloittepanel'])) ?></li>


<li><?= Html::a(Html::img('@web/images/employers-logo/dabur.gif', [ 'alt' => 'dabur'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/ltinfotech.gif', [ 'alt' => 'ltinfotech'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/ibm.gif', [ 'alt' => 'ibm'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/indus-towers.gif', [ 'alt' => 'indus-towers'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/jda.gif', [ 'alt' => 'jda'])) ?></li>
<li><?= Html::a(Html::img('@web/images/employers-logo/informatica-pg.gif', [ 'alt' => 'informatica-pg'])) ?></li>

</ul>  
 </div>	 */ ?>	   	   
		</div>		
</div>
</div>





 