<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SearchForm;
use app\models\RegisterForm;
use app\models\UserRegistartion;
use yii\web\HttpException;
use yii\helpers\ArrayHelper;												
use app\models\Experience;
use app\models\Education;
use app\models\JobCategory;
use app\models\Skills;
use app\models\JobMainCategory;
use app\models\TjJobCategory;
use app\models\TjIndustry;
use app\models\TjDistrict;
use yii\web\UploadedFile;
use app\models\ForgotpassForm;
use app\models\UserOtpValidation;
use app\models\ChangepassForm;
use app\models\OtpvalidationForm;
use linslin\yii2\curl;
use app\models\TjSalary;
use app\models\UserLogin;
use yii\db\Expression;




class SiteController extends Controller
{
public function init()   
    {

     // $session = Yii::$app->session;
   //Yii::$app->session['userid'] = '';
   //Yii::$app->session['userid'] = 200;

  // echo "==^^^==>".Yii::$app->session['userid'];
   //Yii::$app->session['userid'] ="";
// Yii::$app->session['userid']; // Prints "value"
/*echo '<pre>';
print_r(Yii::$app->session['userid']);*/
     //$session->set('userid', 200);
      //$session->get('userid');
   /* if(Yii::$app->session['userid']){
      echo "==111==>".Yii::$app->session['userid'];
    }else{
       $model = new LoginForm();
       Yii::$app->response->redirect(['site/login']);  */
                               // return $this->redirect('login');
   

      /* $this->render('login', [
                'model' => $model,
            ]);*/
 //   }
    

   }
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
		$model = new SearchForm();
		
		$data['model'] = $model;
		$data['search_result'] = '';
		
		$post = Yii::$app->request->post();	

		$exp = Experience::find()->all();
		$listData = ArrayHelper::map($exp,'tj_exp_id','tj_exp_years');
		$data['listData'] = $listData;

		$skll = Skills::find()->all();
		$skillData = ArrayHelper::map($skll,'tj_sk_id','tj_sk_name');   
		$data['skillData'] = $skillData;

		$catag = JobMainCategory::find()->all();
		$catagData = ArrayHelper::map($catag,'tj_jmc_id','tj_jmc_name');
		$data['catagData']=$catagData;	

        $Ddata = TjDistrict::find()->orderBy('tj_dt_districtname')->all();
        $disData = ArrayHelper::map($Ddata,'tj_dt_districtId','tj_dt_districtname');
        $data['disData'] = $disData;

        $jcdata=TjJobCategory::find()->all();
        $jobData=ArrayHelper::map($jcdata,'tj_jc_id','tj_jc_name');
        $data['jobData']=$jobData;
    
        $Idata=TjIndustry::find()->all();
        $indData=ArrayHelper::map($Idata,'tj_ind_id','tj_ind_name');
        $data['indData']=$indData;

        $Sala=TjSalary::find()->all();
        $salData=ArrayHelper::map($Sala,'tj_sr_id','tj_sr_name');
        $data['salData']=$salData;
		
        if ($model->load(Yii::$app->request->post()))
        {  
            if(isset($_POST['search-button']))
            {                  
              if($_POST['search-button']==0)
              {
                $data['search_result']=$model->search($post);
                return $this->render('search_result', $data);
              }
              elseif($_POST['search-button']==1)
              {                     
                $data['search_result']=$model->advancesearch($post);
                return $this->render('search_result', $data);                   
              }
            }         	
        } 
        else
        {
            $data['search_result'] =$model->search('');
            return $this->render('index',$data);
        }        
        return $this->render('index');   
    }
    public function actionRegister()
    {
        $postData = Yii::$app->request->post();
        $usermodel = new UserRegistartion();
        $file1 = UploadedFile::getInstance($usermodel,'UploadResume');  
       
        if ($file1 != ""){ 
            foreach ($file1 as  $value){
                $rows[] = $value;
            }
            $content = file_get_contents($rows[1]);
            $data['fileData'] = $file1;
            $data['fileContent'] = $content;
        }

            $experience = Experience::find()->all();
            $expData = ArrayHelper::map($experience,'tj_exp_id','tj_exp_years');

            $education = Education::find()->all();
            $eduData = ArrayHelper::map($education,'tj_edu_id','tj_edu_title');

            $jobcategory = JobCategory::find()->all();
            $jobCategory = ArrayHelper::map($jobcategory,'tj_jc_id','tj_jc_name');

            $skill = Skills::find()->all();
            $skillData = ArrayHelper::map($skill,'tj_sk_id','tj_sk_name');   

            $districtName = TjDistrict::find()->orderBy('tj_dt_districtname')->all();
            $districtNameData = ArrayHelper::map($districtName,'tj_dt_districtId','tj_dt_districtname');

            $data['disData'] = $districtNameData;            
            $data['model'] = $usermodel;
            $data['expData'] = $expData;
            $data['eduData'] = $eduData;
            $data['jobCategory'] = $jobCategory;
            $data['skillData'] = $skillData;
            if(isset($postData['UserRegistartion'])){
                $postData['UserRegistartion']['UploadResume'] =$rows[0]; 
                $usermodel->load($postData);
          
                $browser = Yii::$app->request->userAgent; 
                $userIP = Yii::$app->request->userIP;
                $rowCount = $usermodel->find()->where(['tj_users_email' => $postData['UserRegistartion']['tj_users_email']])->count();
                if($rowCount == 0){
                    $digits = 4;
                    $random_No =  rand(pow(10, $digits-1), pow(10, $digits)-1);
                    $pas = $this->randomPassword();
                    $genpwd = Yii::$app->getSecurity()->generatePasswordHash($pas);
                    $mail_Id = $postData['UserRegistartion']['tj_users_email'];   
                    $phone = $postData['UserRegistartion']['tj_users_phone'];
                    $userName = $postData['UserRegistartion']['tj_users_fname']."_".$postData['UserRegistartion']['tj_users_lname'];
                    $usermodel->tj_users_fname=$postData['UserRegistartion']['tj_users_fname'];
                    $usermodel->tj_users_lname=$postData['UserRegistartion']['tj_users_lname'];
                    $usermodel->tj_users_email=$mail_Id;
                    $usermodel->tj_users_uname=$userName;
                    $usermodel->tj_users_phone=$phone;
                    $usermodel->tj_users_ip_address=$userIP;
                    $usermodel->tj_users_location=$postData['UserRegistartion']['tj_users_location'];
                    $usermodel->tj_users_job_category=$postData['UserRegistartion']['tj_users_job_category'];
                    $usermodel->tj_users_experience=$postData['UserRegistartion']['tj_users_experience'];
                    $usermodel->tj_users_skills=implode(',',$postData['UserRegistartion']['tj_users_skills']);
                    $usermodel->tj_users_qualification=$postData['UserRegistartion']['tj_users_qualification'];
                    $usermodel->tj_users_resume_name=$rows[0];
                    $usermodel->tj_users_resume_type=$rows[2];  
                    $usermodel->tj_users_resume_content=$content;   
                    $usermodel->tj_users_browser_name=$browser;  
                    $usermodel->tj_users_pwd=$genpwd;
                    $usermodel->tj_users_phone_otp=$random_No;
                   
                    $usermodel->tj_users_resume_path="";
                    $usermodel->tj_users_register_date=new Expression('NOW()');
                    if($usermodel->save()){
                            $lastInsertID = $usermodel->tj_id;
                            $datetime = date('m/d/Y h:i:s a', time());
                            $timestamp = strtotime($datetime);
                            $dir='upload/'.$lastInsertID;
                            $dir_resume='upload/'.$lastInsertID.'/resume';
                            $dir_image='upload/'.$lastInsertID.'/image';
                            $dir_certificate='upload/'.$lastInsertID.'/certificate';

                            if((mkdir( $dir, 0777, true)) && (mkdir($dir_resume, 0777, true))){
                               //$file1->saveAs($dir_resume.'/'.$userName.'_takeajob_'.$timestamp.'_'.$rows[0]);
                               $file1->saveAs($dir_resume.'/'.$userName.'_takeajob_'.$timestamp.'_'.$rows[0]);
                             }
                            else{
                              die('Failed to create folders...'); }
                              
                               $send_mail = $this->sendEmail($mail_Id , $pas);
                               $smsVerify = $this->send_sms($phone , $mail_Id,$random_No);
                               Yii::$app->session['otpuserid'] = $lastInsertID;
                               Yii::$app->session['pageName'] = "registartion";
                               // Yii::$app->response->redirect(['site/dashboard','id' => 1, 'var1' => 'test']);  
                               return $this->redirect('otp_validation');
                        }
                    else
                       $data['errormessage'] = "There is some Problem in Registartion !";                    
                }
              else
                  $data['errormessage'] = "Email id already exist !";
            }
          return $this->render('register', $data);
        }
	
	
	public function actionViewjob($d)
    { 
        $session = Yii::$app->session;
       $session->remove('userid'); 
       /*   $session->set('userid',2);*/
         $id=$d;
		$model = new SearchForm();
        $user_id=$session->get('userid');
        if ($user_id != '')
        {
          $data['saved'] = $model->insert_job_view($user_id , $id); 
          $data['applied'] = $model->get_applied($user_id , $id);          
        }

        $data['user_id'] = $user_id;
        $data['job_id'] = $id;

		$detail = $model->view_job($id);
		$skll = Skills::find()->all();		
		$skillData = ArrayHelper::map($skll,'tj_sk_id','tj_sk_name');  
		
		$data['skillData'] = $skillData;		 
		$data['job_details'] = $detail['job_de'];
		$data['comp_details'] = $detail['com_de'];		
		
		return $this->render('viewjob',$data);
    }	

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $UserLoginModel = new UserLogin();
        $res = $UserLoginModel->load(Yii::$app->request->post()) || $UserLoginModel->remenberMe();
        if($res == 1)
            {                           
              $userData = UserOtpValidation::findOne(Yii::$app->session['userid']);
              if($userData->tj_users_phone_verify_status == 0){ 
                    if($userData->tj_users_register_date <= strtotime('-24 hours')){ 
                           $digits = 4;
                           $random_No =  rand(pow(10, $digits-1), pow(10, $digits)-1);
                           $userData->tj_users_phone_otp=$random_No; 
                           if($userData->update()){
                               $phone_no = $userData->tj_users_phone;
                               $mail_Id = $userData->tj_users_email;
                               $smsVerify = $this->send_sms($phone_no,$mail_Id,$random_No);
                           }
                    }
                    Yii::$app->session['otpuserid'] = Yii::$app->session['userid'];
                    Yii::$app->session['pageName'] = "login";   
                    return $this->redirect('otp_validation'); 
               }
              elseif($userData->tj_users_phone_verify_status == 1){
                      if($userData->tj_users_change_pass_status == 0)                
                         return $this->redirect('changepass');    
                      else
                         return $this->redirect('employer');
                }           
        }   
        return $this->render('login', ['model' => $UserLoginModel]);        
    }


    public function actionLogout()
    {
        Yii::$app->user->logout();
         Yii::$app->session->clear();
         Yii::$app->session->destroy(); 

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->redirect('about');
    }
	


    public function actionMap()
    {
        return $this->render('map');
    }	


    public function send_sms($phone_no,$mail_Id,$random_No)
    {      
            $model = new RegisterForm;
           /* $Ph_No = $phone_no;
            $email_addr = $mail_Id;*/
           /* $digits = 4;
            $random_No =  rand(pow(10, $digits-1), pow(10, $digits)-1);*/
            $ch = curl_init();
            $user = "chetankumar@sagaciousinfosystems.com:chetan123";
            $receipientno = $phone_no;
            $senderID = "TEST SMS"; 
            $msgtxt = "Unic Code for one time ". $random_No .", Valid for 2 Hours-- SAGACIOUS INFOSYSTEMS"; 
            curl_setopt($ch,CURLOPT_URL,  "http://api.mvaayoo.com/mvaayooapi/MessageCompose");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
            $buffer = curl_exec($ch);
            if (empty ($buffer))
            { 
                 echo " buffer is empty "; 
            }else{

               return true; 
               // return $rs= $model->updateOTP($phone_no,$random_No,$mail_Id);
              
            } 
            curl_close($ch);  
    }

    public function randomPassword() 
    {
            $alphabet = "abcd0123@#$%&";
            $pass = array();
            $alphaLength = strlen($alphabet) - 1; 
            for ($i = 0; $i < 12; $i++)
             {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
             }
            return implode($pass);
    }

    public function sendEmail($mail_Id , $paswrd)
    {
      
        Yii::$app->mailer->compose()
             ->setFrom('takeajob@sagaciousinfosystems.com')
             ->setTo($mail_Id)
             ->setSubject('Generated Password')
             ->setTextBody('Your Password is '.$paswrd.' ')
             ->send();
  
    }
    public function actionOtp_validation(){
       $model = new UserOtpValidation();
       $data['model'] = $model;
       $post = Yii::$app->request->post();
         if(isset($post['UserOtpValidation'])){ 
              $user_Otp = $post['UserOtpValidation']['tj_users_phone_otp'];
              $otpUser =  $model->findOne(Yii::$app->session['otpuserid']);
            
                 if($otpUser->tj_users_phone_otp != $user_Otp){
                  Yii::$app->session->setFlash('Otperror','Invalid OTP,Enter Correct OTP');
                 }
                 else{
                      $otpUser->tj_users_phone_verify_status=1;
                      if($otpUser->update()){
                          if(Yii::$app->session['pageName'] == "registartion"){
                             return $this->redirect('login');
                           }
                           elseif($otpUser->tj_users_change_pass_status == 0){
                              return $this->redirect('changepass');
                           }
                           else{  
                            //profile/snapshot
                            return $this->redirect('updateprofile');
                          }
                      }
                }
          }     
         return $this->render('otp_validation',$data);
    }

    public function actionRegenerateotp()
    {   $modelogin = new LoginForm();
         $session = Yii::$app->session;

         $uid = $session->get('userid');
    $data = $modelogin->checkPhoneValidation($uid); 
    $phone_no = $data[0]['tj_users_phone'];
    $mail_Id = $data[0]['tj_users_email'];
        
        $this->send_sms($phone_no,$mail_Id);
        Yii::$app->session->setFlash('Otpmessage','One time password(OTP) will be send to your mobile');
          return $this->redirect('otp_validation');
         
    }


public function actionForgotpass()
{
       $model = new ForgotpassForm();
       $data ['model'] = $model;
       $postvalue = Yii::$app->request->post();
       $Email = '';
               if($postvalue != null)
               {
                $Email = $postvalue['ForgotpassForm']['Email'];
                    if($Email == null)
                    {
                        Yii::$app->session->setFlash('error', "Email can't be empty");            
                    }else{
                        $successvalue = ($model->load($postvalue) && $model->forgotpass());
                         if ($successvalue)
                           {
                                 $pas = $this->randomPassword();
                                 $hashpaswrd = Yii::$app->getSecurity()->generatePasswordHash($pas);
                                 $send_mail = $this->sendEmail($Email , $pas);
                                 $pwdUpdate = $model->updatePwd($hashpaswrd , $Email);
                                 if($pwdUpdate)
                                    Yii::$app->session->setFlash('success', "Password has sent to you mail");
                                        
                            }
                     }
                }
        return $this->render('forgotpass', $data);
}    

//change password
        public function actionChangepass()
          {    
                $model=new ChangepassForm();
           // $this->layout='column';
                  $data['model']=$model;

                   $postvalue = Yii::$app->request->post();

                   if($postvalue != null)
                   {
                    if($postvalue['ChangepassForm']['OldPassword'] == null)
                    {
                        Yii::$app->session->setFlash('error', "Old Password can't be empty");            
                    }else if($postvalue['ChangepassForm']['NewPassword'] == null)
                    {
                        Yii::$app->session->setFlash('error', "New Password can't be empty");            
                    }else if($postvalue['ChangepassForm']['ConfirmPassword'] == null)
                    {
                        Yii::$app->session->setFlash('error', "Confirm Password can't be empty");            
                    }else if($postvalue['ChangepassForm']['NewPassword'] != $postvalue['ChangepassForm']['ConfirmPassword'])
                    {
                        Yii::$app->session->setFlash('error', "Confirm Password should match with New password");            
                    }else{
                        
                    $successvalue = $model->load($postvalue) && $model->changepass();
                    
                  if($successvalue)
                    {
                      Yii::$app->session->setFlash('success', "Password Changed Successfully");
                  }
           }
        }
                return $this->render('changepass', $data);
   
     }


}
