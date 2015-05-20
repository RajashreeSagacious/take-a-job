<?php

namespace app\models;

use Yii;
use yii\base\Model;

	class SearchForm extends Model
	{
		public $key=array();
		public $loc=array();
		public $ecp;
		public $jb_cat;

        public $a_keyskills=array();
        public $a_loc1;
        public $a_wexp;
        public $a_sal=array();
        public $a_ind;
        public $a_jobc;
        public $a_jobt;
        public $a_sortby;
		
		public function rules()
		{
			return [
				[['key[]','loc','ecp','jb_cat'], 'trim'],				
			];
    }
    
    public function search($post)
    {             
        $where = '';
        $val = '';
        if($post != '')
        {
            $val = $post['SearchForm'];
            $key_value_array = $val['key'];

            if($key_value_array['skills'] != '')
            {
				$key_valu = '';
				foreach ($key_value_array['skills'] as $key => $value) {
					$value = $value;
					$key_valu.='`tj_jl_keyskills` like \'%,'.$value.',%\' or ';
				}
				$key_valu = substr($key_valu, 0, -3);
				$key_valu = "(".$key_valu.")";
				$where.= $key_valu.' and ';
            }

           if($key_value_array['loc'] != '')
            {
                $location_value = '';
                foreach ($key_value_array['loc'] as $key => $value) {
                    $value = $value;
                     $location_value.='`tj_jl_location` like \'%'.$value.'%\' or ';
                }
                 $location_value = substr( $location_value, 0, -3);
                 $location_value = "(". $location_value.")";
                $where.=  $location_value.' and ';
            }

            if($val['ecp'] != '')
            {	
				$where.= ' (`tj_jl_experience` = \''. $val['ecp'].'\') and ';  
            } 

        }
        if($val != '')	
            $data['cat'] = $val['jb_cat'];
        else 
            $data['cat'] = 0;
        $ord = 'ORDER BY `tj_jl_added_date` DESC';   
		
        if($where != '')
        {
            $where = 'where '.$where;
            $where = substr($where, 0, -4);  
            $where.= ' and `tj_jl_status`="1"';  
        } 
        else   $where = "where `tj_jl_status`='1' ";   

         $limit=" limit 0,5";

        $sql = "select * from tj_job_list ".$where." ".$ord." ". $limit ;
        $all = Yii::$app->db->createCommand($sql);         
        $data['all'] = $all->queryAll(); 
              
        if($where != '')
        $where_main = $where.' and ';
       
        $sql = "select * from tj_job_list ".$where_main."  `tj_jl_main_category` ='1'  ".$ord." ". $limit  ;
        $Contract = Yii::$app->db->createCommand($sql);        
        $data['Contract'] = $Contract ->queryAll(); 

        $sql = "select * from tj_job_list ".$where_main  ." `tj_jl_main_category` ='2' ".$ord." ". $limit   ;
        $Freelance = Yii::$app->db->createCommand($sql);        
        $data['Freelance'] = $Freelance ->queryAll(); 

        $sql = "select * from tj_job_list ".$where_main  ." `tj_jl_main_category` ='3' ".$ord." ". $limit   ;
        $Full_Time = Yii::$app->db->createCommand($sql);         
        $data['Full_Time'] = $Full_Time->queryAll(); 
              
        $sql = "select * from tj_job_list ".$where_main  ." `tj_jl_main_category` ='4' ".$ord." ". $limit  ;
        $Part_Time = Yii::$app->db->createCommand($sql);         
        $data['Part_Time'] = $Part_Time->queryAll();        
        return $data;
    }
	
	public function view_job($id)
    {
        $sql = "select * from tj_job_list where tj_jl_id=$id";
        $job_de = Yii::$app->db->createCommand($sql);         
        $job_de = $job_de->queryAll(); 
        $job_de = $job_de[0];

        $mai = $job_de['tj_jl_main_category'];
        $sql1 = "select * from tj_job_main_category where tj_jmc_id=$mai";
        $maincat = Yii::$app->db->createCommand($sql1);      
        $main_cat = $maincat->queryAll();

        unset($job_de['tj_jl_main_category']);
        $job_de['tj_jl_main_category'] = $main_cat[0]['tj_jmc_name'];
        $cata = $job_de['tj_jl_category'];
        $sql1 = "select * from tj_job_category where tj_jc_id=$cata";
        $maincat = Yii::$app->db->createCommand($sql1);         
        $main_cat = $maincat->queryAll();

        unset($job_de['tj_jl_category']);
        $job_de['tj_jl_category'] = $main_cat[0]['tj_jc_name'];

        $cata = $job_de['tj_jl_sub_category'];
        $sql1 = "select * from tj_job_sub_category where tj_jsc_id=$cata";
        $maincat = Yii::$app->db->createCommand($sql1);         
        $main_cat = $maincat->queryAll();

        unset($job_de['tj_jl_sub_category']);
        $job_de['tj_jl_sub_category'] = $main_cat[0]['tj_jsc_name'];
        $cata = $job_de['tj_jl_experience'];
        $sql1 = "select * from tj_experience where tj_exp_id=$cata";
        $maincat = Yii::$app->db->createCommand($sql1);         
        $main_cat = $maincat->queryAll();

        unset($job_de['tj_jl_experience']);
        $job_de['tj_jl_experience'] = $main_cat[0]['tj_exp_years'];

        $sql = "select * from tj_company where `tj_cm_id`=".$job_de['tj_jl_company_id'];
        $maincat = Yii::$app->db->createCommand($sql);  
        $com_de = $maincat->queryAll();

        $data['job_de'] = $job_de;
        $data['com_de'] = $com_de[0];
         
        return $data;
    }
     public function advancesearch($post)
    {
        $where='';
        $val='';
        if($post!='')
        {
            $val=$post['SearchForm'];              
                 
            $key_value_array = $val['key'];
        
            if($key_value_array['a_keyskills'] != '')
            {
                $key_valu = '';
                foreach ($key_value_array['a_keyskills'] as $key => $value)
                {
                    $value = $value;
                    $key_valu.='`tj_jl_keyskills` like \'%,'.$value.',%\' or ';
                }
                $key_valu = substr($key_valu, 0, -3);
                $key_valu = "(".$key_valu.")";
                $where.= $key_valu.' and ';
            }           
                
            if($key_value_array['a_loc1'] != '')
            {
                $location_value = '';
                foreach ($key_value_array['a_loc1'] as $key => $value) {
                    $value = $value;
                     $location_value.='`tj_jl_location` like \'%'.$value.'%\' or ';
                }
                 $location_value = substr( $location_value, 0, -3);
                 $location_value = "(". $location_value.")";
                $where.=  $location_value.' and ';
            }
                     
            if($val['a_wexp']!=''){ 
                     $where.=' `tj_jl_experience` = \''. $val['a_wexp'].'\' and ';    }
            if($val['a_ind']!=''){  
                     $where.=' `tj_jl_industry` = \''. $val['a_ind'].'\' and ';    }  
            if($val['a_jobc']!=''){
                $where.=' `tj_jl_category` = \''. $val['a_jobc'].'\' and '; }     
            if($val['a_sal']!='' && $val['a_sal'][0]!='' && $val['a_sal'][1]!='')
            {
                if($val['a_sal'][0]!='')
                {
                    $where.=' `tj_jl_min_salary` >='.$val['a_sal'][0].' and ';
                }
                else
                {
                     $where.=' `tj_jl_min_salary` >=1 and ';
                }
                if($val['a_sal'][1]!='')
                {
                    $where.=' `tj_jl_max_salary` <='.$val['a_sal'][1].' and ';
                }
                else
                {
                     $where.=' `tj_jl_max_salary` <=31 and ';
                }

            }        
          
                
        }

        if($val!='')
        {              
            if($val['a_jobt']=='')
            {
                $data['cat']=0;
            }
            else
            {
                $data['cat']=$val['a_jobt'][0];
            }
                   
        }
        else 
        {
            $data['cat']=0;
        }
            
        $ord='';
        if($val!='')
        {
            if($val['a_sortby']!='')
            {                    
               foreach ($val['a_sortby'] as $key => $value)
               {
                   if($key==0)
                   {
                       $ord.='ORDER BY `tj_jl_added_date` DESC';                             
                   }                          
                  else if($key==1)
                   {
                      if($ord!='')
                          $ord.= ' , `tj_jl_added_date` ASC';
                      else 
                          $ord='ORDER BY `tj_jl_added_date` ASC';
                   }  
                }                      
            }
        } 
         
        if($where!='')
        {
            $where='where '.$where;
            $where= substr($where, 0, -4);  
             $where.= ' and `tj_jl_status`="1"'; 
        } 
        else {  $where.= ' where `tj_jl_status`="1"'; }

        $limit=" limit 0,5";

        
        $sql="select * from tj_job_list ".$where." ".$ord." ". $limit ;
        $all= Yii::$app->db->createCommand($sql);         
        $data['all']= $all->queryAll(); 
              
        if($where!='')
            $where_main=$where.' and ';
        else 
            $where_main='where '.$where;       

       $sql="select * from tj_job_list ".$where_main."  `tj_jl_main_category` =1  ".$ord." ". $limit  ;
       $Contract = Yii::$app->db->createCommand($sql);        
       $data['Contract']= $Contract ->queryAll(); 


       $sql="select * from tj_job_list ".$where_main  ." `tj_jl_main_category` =2 ".$ord." ". $limit   ;
       $Freelance = Yii::$app->db->createCommand($sql);        
       $data['Freelance']= $Freelance ->queryAll(); 


       $sql="select * from tj_job_list ".$where_main  ." `tj_jl_main_category` =3 ".$ord." ". $limit   ;
       $Full_Time= Yii::$app->db->createCommand($sql);         
       $data['Full_Time']= $Full_Time->queryAll(); 
      
       $sql="select * from tj_job_list ".$where_main  ." `tj_jl_main_category` =4 ".$ord." ". $limit   ;
       $Part_Time= Yii::$app->db->createCommand($sql);         
       $data['Part_Time']= $Part_Time->queryAll(); 
        return $data;
    }

     public function insert_job_view($user_id , $job_id)
    {
        $connection = Yii::$app->db; 
        $general_model = new General();  
        $ip=$general_model->get_client_ip();
        $sql_user_view = "select count(*) as cnt from tj_job_view where `tj_jv_user_id`='$user_id' and `tj_jv_job_id`='$job_id'";
        $query = Yii::$app->db->createCommand($sql_user_view);
        $rows = $query->queryAll();
        $row_count =  $rows[0]['cnt'];
        $rowcount = 0;

        if($row_count == 0)
        {
            $sql = "insert into tj_job_view(`tj_jv_user_id`,`tj_jv_job_id`,`tj_jv_viewed_date`,`tj_jv_ip`)values('$user_id','$job_id',date(now()),'$ip')";
            $command = $connection->createCommand($sql);        
            $rowcount = $command->execute();
        }

        $sql_user_view = "select count(*) as cnt from tj_job_saved where `tj_js_user_id`='$user_id' and `tj_js_job_id`='$job_id'";
        $query = Yii::$app->db->createCommand($sql_user_view);
        $rows = $query->queryAll();
        return $rows[0]['cnt'];          
    }


     public function insert_job_save($user_id , $job_id)
    {
    
        $connection = Yii::$app->db; 
        $general_model = new General();  
        $ip=$general_model->get_client_ip();

        $sql_user_view = "select count(*) as cnt from tj_job_saved where `tj_js_user_id`='$user_id' and `tj_js_job_id`='$job_id'";
        $query = Yii::$app->db->createCommand($sql_user_view);
        $rows = $query->queryAll();
        $row_count =  $rows[0]['cnt'];
        $rowcount = 0;

        if($row_count == 0)
        {        
            $sql = "insert into tj_job_saved(`tj_js_user_id`,`tj_js_job_id`,`tj_js_saved_date`,`tj_js_ip`)values('$user_id','$job_id',date(now()),'$ip')";
            $command = $connection->createCommand($sql);        
            $rowcount = $command->execute();
         }
        return $rowcount;    
    }

    public function insert_job_applied($user_id , $job_id)
    {
        
        $connection = Yii::$app->db; 
        $general_model = new General();  
        $ip=$general_model->get_client_ip();
        
        $sql_user_view = "select count(*) as cnt from tj_job_applied where `tj_ja_user_id`='$user_id' and `tj_ja_job_id`='$job_id'";
        $query = Yii::$app->db->createCommand($sql_user_view);
        $rows = $query->queryAll();
        $row_count =  $rows[0]['cnt'];
        $rowcount = 0;

        if($row_count == 0)
        {       
            $sql = "insert into tj_job_applied(`tj_ja_user_id`,`tj_ja_job_id`,`tj_ja_applied_date`,`tj_ja_ip`)values('$user_id','$job_id',date(now()),'$ip')";
            $command = $connection->createCommand($sql);        
            $rowcount = $command->execute();
        }
        return $rowcount;    
    }

    public function get_applied($user_id , $job_id)
    {
        $sql_user_view = "select count(*) as cnt from tj_job_applied where `tj_ja_user_id`='$user_id' and `tj_ja_job_id`='$job_id'";
        $query = Yii::$app->db->createCommand($sql_user_view);
        $rows = $query->queryAll();
        return $rows[0]['cnt'];  
    }

}

?>
