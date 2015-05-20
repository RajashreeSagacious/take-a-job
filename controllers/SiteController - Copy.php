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
use app\models\ChangepassForm;
use app\models\OtpvalidationForm;
use linslin\yii2\curl;
use app\models\TjSalary;




class SiteController extends Controller
{
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
$usermodel = new UserRegistartion();




 $models->tj_users_fname = "Ayurgenen";
        $models->save();
        print_r($models->getErrors());
        echo "success";
        $model = new RegisterForm();

        $request = Yii::$app->request;
        $file1 = UploadedFile::getInstance($model,'UploadResume');

        $post = $request->post();
        if ($file1 != "")
        {
            foreach ($file1 as  $value)
            {
                $rows[] = $value;
            }
            $content = file_get_contents($rows['1']);
            $data['fileData'] = $file1;
            $data['fileContent'] = $content;
        }

            $experience = Experience::find()->all();
            $expData = ArrayHelper::map($experience,'tj_exp_id','tj_exp_years');

            $education = Education::find()->all();
            $eduData = ArrayHelper::map($education,'tj_edu_id','tj_edu_title');

            $jobcategory = JobCategory::find()->all();
            $jobCategory = ArrayHelper::map($jobcategory,'tj_jc_id','tj_jc_name');

            $skll = Skills::find()->all();
            $skillData = ArrayHelper::map($skll,'tj_sk_id','tj_sk_name');   

            $Ddata = TjDistrict::find()->orderBy('tj_dt_districtname')->all();
            $disData = ArrayHelper::map($Ddata,'tj_dt_districtId','tj_dt_districtname');
            $data['disData'] = $disData;             

            $data['model'] = $model;
            $data['expData'] = $expData;
            $data['eduData'] = $eduData;
            $data['jobCategory'] = $jobCategory;
            $data['skillData'] = $skillData;

            if (isset($post['RegisterForm'])) 
            {
                
                $phone_no = $post['RegisterForm']['ContactNo'];
                $mail_Id  = $post['RegisterForm']['Email'];
                $res = $model->savedata($post['RegisterForm'],$rows,$content);
                $id = Yii::$app->db->getLastInsertID();
                $session = Yii::$app->session;
                $session->set('user_last_id', $id);

                if (($res != "") && ($res != 2))
                { 
                     $pas = $this->randomPassword();
                     $paswrd = Yii::$app->getSecurity()->generatePasswordHash($pas);
                     $send_mail = $this->sendEmail($mail_Id , $pas);
                     $pwdUpdate = $model->updatePwd($paswrd , $mail_Id);
                   
                     if($pwdUpdate == 1)
                       {  
                             $smsVerify = $this->send_sms($phone_no , $mail_Id);
                             return $this->redirect('otp_validation');
                       }
               }else if ($res ==  2){
                
                 Yii::$app->session->setFlash('EmailIDORContactNumberAlreadyExists','EmailID OR Contact Number Already Exists');
                 return $this->refresh();
               }
            
            }else{

                 return $this->render('register', $data);
          }
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
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
       // if ($model->load(Yii::$app->request->post()) && $model->login()) {

        $model = new LoginForm();
        $rs = $model->load(Yii::$app->request->post()) && $model->login();
        // 
        if($rs == 1)
            {
                $session = Yii::$app->session;
                $uid = $session->get('userid');
                $pstatus =  $model->checkPhoneValidation($uid);

                   $stat = $pstatus[0]['tj_users_phone_verify_status'];
              
                if($stat == 0)
                { 
                   echo"==>".  $otpvalidate = $model->checkotpExpireDate($uid);
               if($otpvalidate == 0)
                      {
                       
                 
                         $phone_no = $pstatus[0]['tj_users_phone'];
                         $mail_Id = $pstatus[0]['tj_users_email'];
                         $smsVerify = $this->send_sms($phone_no , $mail_Id);
                         return $this->redirect('otp_validation'); 
                      }else{
                           
                        return $this->redirect('otp_validation');     
                      }

                }else if($stat == 1){
                  $changepass_stat = $pstatus[0]['tj_users_change_pass_status'];
                        if($changepass_stat == 0)                
                    return $this->redirect('changepass');    
                else
                    return $this->redirect('employer');

                }

           
           
        } 
            return $this->render('login', [
                'model' => $model,
            ]);
        
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

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
	


    //  public function actionProfile()
    // {
    //     return $this->render('employer');
    // }


    public function actionMap()
    {
        return $this->render('map');
    }	


    public function send_sms($phone_no,$mail_Id)
    {       
       
            $model = new RegisterForm;
            $Ph_No = $phone_no;
            $email_addr = $mail_Id;
            $digits = 4;
            $random_No =  rand(pow(10, $digits-1), pow(10, $digits)-1);
            $ch = curl_init();
            $user = "chetankumar@sagaciousinfosystems.com:chetan123";
            $receipientno = $Ph_No;
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

               return  $rs= $model->updateOTP($Ph_No,$random_No,$email_addr);
              
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

    public function  sendEmail($mail_Id , $paswrd)
    {
       
        Yii::$app->mailer->compose()
             ->setFrom('takeajob@sagaciousinfosystems.com')
             ->setTo($mail_Id)
             ->setSubject('Generated Password')
             ->setTextBody('Your Password is '.$paswrd.' ')
             ->send();
  
    }
    public function actionOtp_validation()
    {
                  
       $model = new OtpvalidationForm();
       $data['model'] = $model;
       $session = Yii::$app->session;
       $user_id = $session->get('user_last_id');
       if($user_id == ""){
        $user_id = $session->get('userid');
       }
       $post = Yii::$app->request->post();
         if (isset($post['OtpvalidationForm'])) 
           {

               $user_Otp = $post['OtpvalidationForm']['EnterOTP'];
 
              $rs = $model->verifyOTP($user_id);
              $otp = $rs[0]['tj_users_phone_otp'];
                 if($otp!= $user_Otp)
                 {
                  Yii::$app->session->setFlash('Otperror','Invalid OTP,Enter Correct OTP');
                 }else{
                   $pstaus=$model->updatePhonestatus($user_id); 
                    return $this->redirect('login');
                   
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
