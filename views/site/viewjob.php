<?php 

use yii\helpers\Html;
$this->title ='Job Details';
?>
<div>&nbsp;

</div>
<div class="container">
<div class="col-md-8 col-xs-12">
<div class="col-md-12 col-xs-12 jobapply">
<div class="jobtitle col-md-12 col-xs-12">
<h4 class="jobtitlehead"> <?php echo strtoupper($job_details['tj_jl_title']); ?></h4>
<h6 class="jobtitleloc">@<?php echo $comp_details['tj_cm_city']; ?>  </h6>
</div>
<div class="jobcate col-xs-12 col-md-12">
<h6 class="col-md-12 col-xs-12">Category : <?php echo $job_details['tj_jl_category']; ?>    </h6>
<h6 class="col-md-12 col-xs-12">Job Type :  <?php echo $job_details['tj_jl_main_category']; ?>    </h6>

<h6 class="col-md-12 col-xs-12">Salary :   <?php
                             if ($job_details['tj_jl_salary'] != '' ) 
                                echo $job_details['tj_jl_salary'];
                             else 
                                echo 'Not Disclosed';?></h6>
<h6 class="col-md-12 col-xs-12" >Experience(s) : <?php echo  $job_details['tj_jl_experience'];?></h6>
<h6 class="col-md-6 col-xs-12 jobtitlecom"><?php echo $comp_details['tj_cm_company_name']; ?>    </h6> &nbsp;&nbsp;&nbsp;&nbsp;

        <?php 
                                if ($user_id != '') 
                                { 
                                    if ($applied == 0)
                                    {
                                        echo '<button class = "btn  jobtitlebtn" id = "apply_btn"  style = "padding: 5px 12px; width:156px;">Apply</button>'; 
                                    }
                                    else 
                                        echo '<button class = "btn  jobtitlebtn" id = "applied_btn"  style = "padding: 5px 12px; width:156px;">Applied</button>';
                                }
                                else
                                { ?>
                                 <a href="login">
                                    <button class = "btn btn-apply-job jobtitlebtn"  style = "padding: 5px 12px;" id="login_appply">Login to Apply</button>
                                 </a>
                                <!-- <button class = "btn btn-apply-job"  style = "padding: 5px 12px;"  data-toggle="modal" data-target="#loginModal" >Login to Apply</button>-->
                                <?php  
                                }?>


</div>


</div>

<div class="col-md-12" >
&nbsp;
</div>
<div class="col-md-12 col-xs-12 col-sm-12 jobtitleoverview">
<div class="jobtitle  col-md-12 ">
<h4 class="jobtitlehead" >Overview</h4>

<div class="jobcate col-md-12">
<p class="jobtitleph">
<?php echo $job_details['tj_jl_company_details']; ?>
</p></div>
<br />
<br />
<br />
<br /></div>
<div class="col-md-12">
<div class="col-md-2 col-xs-12 jobtitlekey">
<h6>Key skills :
</h6>
</div>
<div class="col-md-10 col-xs-12 jobtitleskils">
<?php
$exp_val = explode( ",", $job_details['tj_jl_keyskills']);
$i=0;
   foreach ($exp_val as $expkey=> $expvalue){ 
    
    if($expvalue!=''){
        if($i<=5){
	?>
<span class="col-md-3 col-xs-12"><?php echo ucfirst ($skillData[$expvalue]); ?>
</span>
<?php } $i++;} }?>

</div>	

</div>
<div>
&nbsp;

</div>
<div class="hidden-xs" >
<div class="col-md-12 col-xs-6 col-sm-6">
<div class="col-md-3 col-xs-12 jobtitleover">
<h6 >Salary : </h6>

</div>
<div class="col-md-3 col-xs-12 jobtitleover">
<h6>Category :
</h6>
</div>
<div class="col-md-3 col-xs-12 jobtitleover">
<h6>Subcategory :
</h6>
</div>
<div class="col-md-3 col-xs-12 jobtitleover">
<h6>Added On :

</h6>
</div>

</div>


<div class="col-md-12 col-xs-6 col-sm-6">
<div class="col-md-3 col-xs-12 jobtitlesub">
<h6 ><?php if ($job_details['tj_jl_salary'] != '' ) echo $job_details['tj_jl_salary']; else echo 'Not Disclosed';?>
</h6>

</div>
<div class="col-md-3 col-xs-12 jobtitlesub">
<h6><?php echo $job_details['tj_jl_category']; ?>
</h6>
</div>
<div class="col-md-3 col-xs-12 jobtitlesub">
<h6><?php echo $job_details['tj_jl_sub_category']; ?>
</h6>
</div>
<div class="col-md-3 col-xs-12 jobtitlesub">
<h6> <?php echo $job_details['tj_jl_added_date']; ?> 
</h6>

</div>

</div></div>
<div>&nbsp;

</div>
<div>&nbsp;

</div>

<div class="col-md-12 jobtitledetails">
<div class="col-md-12 col-xs-12">
<h4 class="jobtitleabt">About <?php echo $comp_details['tj_cm_company_name']; ?></h4>
</div>
<div  class="col-md-8 col-xs-12 jobtitleph">

<p><?php echo $job_details['tj_jl_company_details']; ?></p>
</div> 

<div class="col-md-4 col-xs-12 col-sm-12">

<h4 class="col-md-12 col-xs-12 jobtitleadd"> Company Address</h4>
<h6  class="col-md-12 col-xs-12"> <span class="col-md-12 col-xs-12 col-sm-12"><?php echo $comp_details['tj_cm_address1']; ?></span></h6>
                         <!--  <span class="col-md-12 col-xs-12  col-sm-12 "> <?php echo $comp_details['tj_cm_address2']; ?></span>
                           <span class="col-md-12 col-xs-12 col-sm-12" > <?php echo $comp_details['tj_cm_city']; ?></span>
                         <span class="col-md-12 col-xs-12 col-sm-12" >   <?php echo $comp_details['tj_cm_state']; ?></span>
                          <span class="col-md-12 col-xs-12 col-sm-12" >  <?php echo $comp_details['tj_cm_zip']; ?></span>-->
<h6  class="col-md-12 col-xs-12"> Ph : <?php echo $comp_details['tj_cm_phone']; ?></h6>

</div>
<div>
<h6 class="col-md-4 col-xs-12 col-sm-12 jobtitleweb jobtitleloc">Employees:   <span class=" jobnme">   <?php if($comp_details['tj_cm_employees']!='')echo $comp_details['tj_cm_employees']; else echo "Not Specified" ?></span> </h6>
<h6 class="col-md-4 col-xs-12 col-sm-12 jobtitleweb jobtitleloc">Industry:   <span class=" jobnme">   <?php  if($comp_details['tj_cm_industry']!='')echo $comp_details['tj_cm_industry']; else echo "Not Specified"  ?></span></h6>
<h6 class="col-md-4 col-xs-12 col-sm-12 jobtitleweb jobtitleloc push-right"> <span class=" jobnme"><?php echo $comp_details['tj_cm_website_address']; ?></span></h6>
</div></div>
<div>&nbsp;

</div>
 <?php 
                                if ($user_id != '') 
                                { 
                                    if ($saved == 0)
                                    {                                
                                        echo '<button type = "button" class = "btn pull-right jobtitlebtn" id = "save_btn">Save Job</button>';
                                    }
                                    else
                                    {
                                         echo '<button type = "button" class = "btn pull-right jobtitlebtn" id = "saved_btn">Saved</button>';
                                    }
                                } 
                            ?>


</div>
</div>
  <div class="col-md-4 hidden-xs hidden-sm">
    <h1>Sponsors</h1>
    <div class="green">
      <div class="row">
        <div id="nt-example1-container">                    
          <?= Html::a(Html::img('@web/images/111.jpg', [ 'alt' => 'Jobs Ads', 'class' => 'rightImgblink responsive'])) ?>
           <!--  <div class="companyLoGo">
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

           <li><?= Html::a(Html::img('@web/images/employers-logo/ibm.gif', [ 'alt' => 'Aditya'])) ?></li>
              <li><?= Html::a(Html::img('@web/images/employers-logo/oracle.gif', [ 'alt' => 'All'])) ?></li>
              <li><?= Html::a(Html::img('@web/images/employers-logo/wills.gif', [ 'alt' => 'Aricent'])) ?></li>
              <li><?= Html::a(Html::img('@web/images/employers-logo/bapco.gif', [ 'alt' => 'Bapco'])) ?></li>
              <li><?= Html::a(Html::img('@web/images/employers-logo/aricent.gif', [ 'alt' => 'Ustglobal'])) ?></li>
              <li><?= Html::a(Html::img('@web/images/employers-logo/xerox.gif', [ 'alt' => 'Wipro'])) ?></li>
            </ul>  
          </div>-->
        </div>
      </div>
    </div>
  </div>







<?php
    $this->registerJs(    

        '$("#save_btn").click(function()
        {  
                $.ajax({url: "../general_ajax/insert_job_save?user_id='.$user_id.' & job_id='.$job_id.'",   
                    success: function(res)
                    {                    
                        if (res == 1)
                        { 
                            $("#flashmsg").html("Your job has been saved").fadeIn().delay(3000).fadeOut();
                            $("#save_btn").html("Saved");
                            $("#save_btn").off("click");
                           
                        }
                        else
                        {
                            $("#flashmsg_apply").html("<strong>Warning!</strong>Please Login first.").fadeIn().delay(3000).fadeOut();

                        }           
                    }
                });

        });

        $("#apply_btn").click(function()
        {
                $.ajax({url: "../general_ajax/insert_job_applied?user_id='.$user_id.' & job_id='.$job_id.'",   
                    success: function(res)
                    { 
                        if (res == 1)
                        { 
                            $("#flashmsg_apply").html("<strong>Success!</strong> Your job has been applied successfully.").fadeIn().delay(3000).fadeOut();
                            $("#apply_btn").html("APPLIED");
                            $("#apply_btn").off("click");
                           
                        }
                        else
                        {
                            $("#flashmsg_apply").html("<strong>Warning!</strong>Please Login first.").fadeIn().delay(3000).fadeOut();

                        }   
          
                    }
                });
           
        });'
    );
?>
