 <?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\db\ActiveRecord;


$this->title ='Login';
$this->params['breadcrumbs'][]=$this->title;
?>
<div class="site-login marginview">
<h1><i class="fa fa-user space1"></i><span class="space">Login</span></h1>
<p class="login-box-msg"><b>Sign in to start your session</b></p>
		
              
	
<?php
$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
    'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],

]) ?>
<?= $form->field($model, 'email_or_Phone' ) ?>
<?= $form->field($model, 'password')->passwordInput() ?>
<?= Html::a('Forgot Password?', ['/site/forgotpass'], ['class' => 'forget show1']) ?>

<?= $form->field($model, 'rememberMe', [
        'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
    ])->checkbox() ?>     
<div class="col-lg-offset-1 col-lg-11">
<?= Html::submitButton('Login', ['class' => 'login']) ?>
     
</div>
<p style='margin-top:80px;' >New to TakeAJob?  <?= Html::a('Register a New membership', ['/site/register'], ['class'=>'space']) ?></p>  
<?php ActiveForm::end() ?>
</div>

