<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

use app\assets\AppAsset; 
$this->registerJs(
       'window.asd = $(".SlectBox").SumoSelect({ csvDispCount: 4 });
    $(".Slectlocation").select2();
      '
);
$this->title ='Register';
?> 



<div class="profile-pages">
  <div class="container">
      <div class="col-md-8">
          <div class="p-block">
  					<ul class="breadcrumb">
    						<li><a href="./Register_files/saved_resource">Home</a></li>
    						<li class="active">Register</li>
  					</ul>
            <h1>
                <i class="fa fa-check-square-o space1"></i>
                <span class="space">Register</span>
            </h1>
            <h3><?php if(isset($errormessage)){echo "<b style='color:red'>".$errormessage."</b>";}?><h3>
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
        <h4>Contact Details</h4>
            <?php echo $form->field($model,'tj_users_fname')->textInput(['maxlength'=>50])->label('FirstName'); ?>
            <?= $form->field($model,'tj_users_lname')->textInput(['maxlength'=>25])->label('LastName') ?>
            <?= $form->field($model,'tj_users_email')->label('Email')  ?>
            <?= $form->field($model,'tj_users_phone')->label('ContactNo') ?>
            <?= $form->field($model,'tj_users_location')->dropDownList($disData,['prompt'=>'Select Location', 'id'=>'registerform-location','class' => 'form-control'])->label('Location'); ?>
			</div>

      <div class="block-a" id="cur-pro">
		 <h4>Current Profile</h4>
           <?= $form->field($model, 'tj_users_job_category')->dropDownList($jobCategory,['prompt'=>'Select JobCategory'])->label('JobCategory');   ?>
           <?= $form->field($model, 'tj_users_experience')->dropDownList($expData,['prompt'=>'Select Experience'])->label('Experience'); ?>
           <?= $form->field($model, 'tj_users_skills')->dropDownList($skillData,['class'=>'SlectBox','multiple' => 'true' ])->label('Key Skills');   ?>
	  </div>

      <div class="block-a">
		<h4>Educational Background</h4>
    <div class="form-group form-controler field-registerform-uploadresume ">
           <?=  $form->field($model, 'tj_users_qualification')->dropDownList($eduData,['prompt'=>'Select Qualification'])->label('Highest Qualification');   ?>
      		   
	       <?= $form->field($model, 'UploadResume')->fileInput() ?>
	   </div>
   </div>

  <div class="block-a">

    <div class="form-group field-registerform-verifycode ">
          <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
  'template' => '<div  id="registerform-verifycode-image" class="col-lg-3">{image}</div><div id="registerform-verifycode" class="col-lg-6 ">{input}</div>',
  ]) ?>
        <div class="checkbox01">
        
          <?= $form->field($model, 'TermsAndConditions')->checkbox()?>
      </div>
    </div>
  
  
    <div class="form-group submit">
      <label class="control-label col-sm-2" for="submit"></label>
        <?= Html::submitButton('&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;', ['class' => 'btn btn-default', 'name' => 'contact-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>
  </div>

       </div>
</div>  

            <div class="col-md-4">
                <h1>Sponsors</h1>
                <div class="green">
                  <div class="row">
                    <div id="nt-example1-container">                    
                      <?= Html::a(Html::img('@web/images/111.jpg', [ 'alt' => 'Jobs Ads', 'class' => 'rightImgblink responsive'])) ?>
                    <?php /*  <div class="companyLoGo">
                        <ul>
                          <li><?= Html::a(Html::img('@web/images/employers-logo/aditya.gif', [ 'alt' => 'Aditya'])) ?></li>
                          <li><?= Html::a(Html::img('@web/images/employers-logo/airtel.gif', [ 'alt' => 'All'])) ?></li>
                          <li><?= Html::a(Html::img('@web/images/employers-logo/akcgroup.gif', [ 'alt' => 'Aricent'])) ?></li>
                          <li><?= Html::a(Html::img('@web/images/employers-logo/all.gif', [ 'alt' => 'Bapco'])) ?></li>
                          <li><?= Html::a(Html::img('@web/images/employers-logo/amazon.gif', [ 'alt' => 'Ustglobal'])) ?></li>
                          <li><?= Html::a(Html::img('@web/images/employers-logo/ion.gif', [ 'alt' => 'Wipro'])) ?></li>

                          <li><?= Html::a(Html::img('@web/images/employers-logo/wipro.gif', [ 'alt' => 'Aditya'])) ?></li>
                          <li><?= Html::a(Html::img('@web/images/employers-logo/vivo3.gif', [ 'alt' => 'All'])) ?></li>
                          <li><?= Html::a(Html::img('@web/images/employers-logo/exxon.gif', [ 'alt' => 'Aricent'])) ?></li>
                          <li><?= Html::a(Html::img('@web/images/employers-logo/dtdc.gif', [ 'alt' => 'Bapco'])) ?></li>
                          <li><?= Html::a(Html::img('@web/images/employers-logo/lifestyle.gif', [ 'alt' => 'Ustglobal'])) ?></li>
                          <li><?= Html::a(Html::img('@web/images/employers-logo/flsmidth.gif', [ 'alt' => 'Wipro'])) ?></li>

                         <!-- <li><?= Html::a(Html::img('@web/images/employers-logo/ibm.gif', [ 'alt' => 'Aditya'])) ?></li>
                          <li><?= Html::a(Html::img('@web/images/employers-logo/oracle.gif', [ 'alt' => 'All'])) ?></li>
                          <li><?= Html::a(Html::img('@web/images/employers-logo/wills.gif', [ 'alt' => 'Aricent'])) ?></li>
                          <li><?= Html::a(Html::img('@web/images/employers-logo/bapco.gif', [ 'alt' => 'Bapco'])) ?></li>
                          <li><?= Html::a(Html::img('@web/images/employers-logo/aricent.gif', [ 'alt' => 'Ustglobal'])) ?></li>
                          <li><?= Html::a(Html::img('@web/images/employers-logo/xerox.gif', [ 'alt' => 'Wipro'])) ?></li>-->
                        </ul>  
                      </div> */ ?>
                    </div>
                  </div>
                </div>
              </div>

         </div>
    </div>
   <?php if(isset($errormessage))
            echo "<script>alert('".$errormessage."')</script>";
      ?>
   
 
 