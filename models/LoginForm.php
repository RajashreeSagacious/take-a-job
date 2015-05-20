<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\Session;
use yii\db\Query;
use yii\db\Expression;
/**
 * LoginForm is the model behind the login form.
 */
class LoginForm extends Model
{   public $id;
    public $email_or_Phone;
    public $Password;
    public $RememberMe = true;
    public $connection;
    private $_user = false;
    public $Login_Using;
    public $loggedinBy;

     public function __construct()
    {
         $this->connection = Yii::$app->db;   
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['email_or_Phone','Password','loggedinBy'], 'required'],
            // rememberMe must be a boolean value
            ['RememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['Password', 'validatePassword'],
        ];
    }
    public function attributeLabels()
    {
        return [
            'email_or_Phone' => 'Email Or Phone',
            'loggedinBy'=>'Please Select'
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {

        if (!$this->hasErrors()) {            
             $user = $this->getUser();
            /* $hash = Yii::$app->getSecurity()->generatePasswordHash($password);
             Yii::$app->getSecurity()->validatePassword($password, $hash)*/
            if(!$user || !Yii::$app->getSecurity()->validatePassword($this->Password,$user->tj_users_pwd)){
                $sql = "insert into `tj_error_login`(`tj_error_email_or_phone`, `tj_error_password`, `tj_error_log_at`, `tj_error_ip_address`, `tj_error_browser`) values ('".$this->email_or_Phone."','".$this->Password."',NOW(),'".$_SERVER['REMOTE_ADDR']."','".$_SERVER['HTTP_USER_AGENT']."')"; 
                $command=$this->connection->createCommand($sql);
                $command->execute();
                $this->addError($attribute, 'Incorrect username or password.');

            }else{               
                 Yii::$app->session['userid'] = $user->tj_id;
                 $sql = "insert into  `tj_logger_history`(`tj_logger_user_id`, `tj_logged_in_at`, `tj_logger_Ip_address`, `tj_logger_browser`) values (".$user->tj_id.",NOW(),'".$_SERVER['REMOTE_ADDR']."','".$_SERVER['HTTP_USER_AGENT']."')";
                 $command = $this->connection->createCommand($sql);
                 $rs = $command->execute();
                 return $rs;

            }


     /*     if(!$user  || !$user->validatePassword($this->Password,$user->tj_users_pwd)){

               $ErrorLoginModel = new UserErrorLogin();
               $ErrorLoginModel->tj_error_email_or_phone=$this->email_or_Phone;
               $ErrorLoginModel->tj_error_password=$this->Password;
             //  $ErrorLoginModel->tj_error_log_at=new Expression('NOW()');
               $ErrorLoginModel->tj_error_ip_address=$_SERVER['REMOTE_ADDR'];
               $ErrorLoginModel->tj_error_browser=$_SERVER['HTTP_USER_AGENT'];
                if($ErrorLoginModel->save()){echo "Yes";exit;}else{echo "No";exit;}
                $this->addError($attribute, 'Incorrect username or password.');
                
           }
          else{
                 Yii::$app->session['userid'] = $user->tj_id;
                 $LoggedHistoryModel = new UserLoggedHistory();
                 $LoggedHistoryModel->tj_logger_user_id=$user->tj_id;
                 //$LoggedHistoryModel->tj_logged_in_at=new Expression('NOW()');
                 $LoggedHistoryModel->tj_logger_Ip_address=$_SERVER['REMOTE_ADDR'];
                 $LoggedHistoryModel->tj_logger_browser=$_SERVER['HTTP_USER_AGENT'];
                 if($ErrorLoginModel->save()){echo "Yes";exit;}else{echo "No";exit;}
                
              }  */
        }  
    }

    /**
     * Logs in a user using the provided username and password.
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->RememberMe ? 3600*24*30 : 0);
        } else {
            return false;
        }
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
public function getUser()
 {
   if(strpos($this->email_or_Phone,'@') !== false) {
        $userid = User::validatePasswordByEmail(mysql_real_escape_string($this->Password),mysql_real_escape_string($this->email_or_Phone));  
    }else{
        $userid = User::validatePasswordByPhone(mysql_real_escape_string($this->Password),mysql_real_escape_string($this->email_or_Phone));
    }
    return $userid;
 }

    /*public function getUser()
    {
        if ($this->_user === false) {	
			
            $this->_user = User::findByemail_or_Phone($this->email_or_Phone);
        }
        return $this->_user;
    }*/

    public function checkPhoneValidation($uid)
    {
     echo '123';
        $query = new Query();
        $query->select('tj_users_phone_verify_status, tj_users_change_pass_status, tj_users_phone, tj_users_email') ->from('tj_users') ->Where(['tj_id'=>$uid]);
        $rows = $query->all();
        
        return $rows;
    }

    public function checkotpExpireDate($uid)
    {

        $query = new Query();
        $query->select('tj_users_register_date, tj_users_phone, tj_users_email') ->from('tj_users') ->Where(['tj_id'=>$uid]);
        $rows = $query->all();
        if ($rows[0]['tj_users_register_date'] <= strtotime('-24 hours')) {
            // send new otp
                return 0;
        } else {
            // enter old otp
                return 1;
        }

    }


}

