<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use Yii\bootstrap\Carousel;
use app\assets\AppAsset;

	$link = $_SERVER['REQUEST_URI'];
$url='';

  $this->registerJs(
    'window.asd =  $(".SlectBox").SumoSelect({ csvDispCount: 4 });  
    window.asd =  $(".SlectBoxAd").SumoSelect({ csvDispCount: 4 }); 
   $(".advance_lcation").select2({        });
    $(".Slectlocation").select2({ 
    maximumSelectionSize: 2,
    });
   $(".serach_class").css("display", "block");
    '
  );
  $this->title ='Take A Job';
?>
<!--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>-->
  <div class="baner">    
      <div class="container">
           <div class="row">
              <div class="banerinco">
                  <h1>Your first step in climbing up the service ladder</h1>
                  <div class="form-register-small">
                      <div class="serach_class"  style="display: none;">
                          <?php  
                              $form = ActiveForm::begin([
                              'id' => 'search-form',
                              'fieldConfig' => [
                              'template' => "{input}",
                              'inputOptions'=>['class'=>'form-control input-sm'],
                              ],
                              ]); 
                          ?>
                          <div class="inputtopbox">                             
                            <div class="col-xs-12 col-md-2">
                              <?=   $form->field($model, 'key[skills]')->dropDownList($skillData,['placeholder'=>'Keywords,Skills,Designation','class'=>'SlectBox','multiple' => 'true',]);    ?>
                            </div>
                            <div class="col-xs-12 col-md-2 ritmove">
                              <?=   $form->field($model, 'key[loc]')->dropDownList($disData,['placeholder'=>'Location','class'=>'Slectlocation','multiple' => 'true','style' => '']);    ?>  
                            </div>
                            <div class="col-xs-12 col-md-3 ritinput"> 
                              <?=    $form->field($model, 'ecp')->dropDownList($listData,['prompt'=>'Select Experience']);    ?>
                            </div>
                            <div class="col-xs-12 col-md-3 ritinput2">
                              <?= $form->field($model, 'jb_cat')->dropDownList($catagData,['prompt'=>'Select Job Category']); ?>
                            </div>
                            <div class="searchbtn col-xs-12 col-md-1 submitbu">
                              <?= Html::submitButton('Search Now', ['class' => 'btn01 btn-search', 'name' => 'login-button','name' => 'search-button','value'=>'0',]) ?>
                              <div class="ad_search" data-toggle="modal" data-target="#myModal" style=" cursor:pointer; width:150px; padding-top:10px;" >
                                Advanced Search 
                              </div>
                            </div>                            
                          </div>
                             <?php 
                            ActiveForm::end(); 
                            ?>
                      </div>
                  </div>                   
              </div>
              <div class="teaxtBox">
                  <div class="rgisterform">

                      <form class="formH">
                          <div class="form-group">
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email ID to Register">
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Create Password">
                              <p>
                                  <input type="checkbox"> I agree to the <span style="color:#99bf38;">Terms and Conditions</span>
                              </p>
                              <div class="cvbut">Post Your CV</div>
                              
                              
                              <div class="row sgin">
                       
                       
                         <?= Html::a('Forgot password', ['/site/forgotpass'], ['class'=>'homer']) ?>
                         <br>
                 
                          <span  class="regist">New to takeajob?
                          <?= Html::a('Register a New membership', ['/site/register'], ['class'=>'homer',"style"=>"padding-left:4px;"]) ?></span>
                          
                          
                          </div>
                                                    
                                

                              
                              
                              
                          </div>
                      </form>
                  </div>
                  <div class="clr"></div>                    
              </div>
          </div>
      </div>
  </div>

<!-- Advance Search Model -->

  <div class="modal fade" id="myModal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 9999999; background: rgba(0,0,0,0.8);">
    <div class="modal-dialog" style=" height:0px;"  >
      <div class="modal-content">
        <div class="modal-header" style="padding:30px; background-color:#515050; color:#fff;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="myModalLabel"style=" text-align:center;">Advanced Search</h4>
        </div>

        <div class="modal-body">
          <?php                                          
            $form = ActiveForm::begin(['id' => 'ad_se_form','fieldConfig' => ['template' => "<div class=\" col-md-4 search-inner\" style=''>{label}</div><div class=\"col-md-8 search-inner\" style=' margin-top:10px;' >{input}</div>",
            'inputOptions'=>['class'=>'form-control input-sm'],],]);
          ?>

            <?= 
            $form->field($model, 'key[a_keyskills]')->dropDownList($skillData,['placeholder'=>'Keywords,Skills,Designation','class'=>'SlectBoxAd','multiple' => 'true','allowClear' => 'true'])->label('Keyskills');    ?>
 
            <?=  
            $form->field($model, 'key[a_loc1]', [
            'inputOptions' => ['placeholder' => 'Select the city you want to work in','class' => ' poPup advance_lcation','multiple' => 'true','style'=>'width:100%;'],
            ])->textInput()->label('Location')->dropDownList($disData,['prompt'=>'Select the city you want to work in']); 
            ?>
      
            <?= 
            $form->field($model, 'a_wexp',[
            'inputOptions' => ['placeholder' => 'Enter your work experience', 'class' => ''],
            ])->hint('In Lakhs')->label('Work Experience')->dropDownList($listData,['prompt'=>'Select your work experience', 'style'=>'height: 38px; width:100%;']); 
            ?>
         
            <?=$form->field($model, 'a_sal[]', [
            'inputTemplate' => '<div class="input-group">{input}<span class="input-group-addon ">Min</span>{input}<span class="input-group-addon">Max</span></div>',])->label('Expected Salary')->dropDownList($salData,['prompt'=>'Select'])->hint('In Lakhs'); 
            ?>
          
            <?=  
            $form->field($model, 'a_ind',[
            'inputOptions' => ['placeholder' => 'Select the industry you want to work',],
            ])->label('Industry')->dropDownList($indData,['prompt'=>'Select the industry you want to work']);
            ?> 
      
            <?=  
            $form->field($model, 'a_jobc', ['inputOptions' => ['placeholder' => 'Select the area of your expertise',],])->textInput()->label('Job Category')->dropDownList($jobData,['prompt'=>'Select the area of your expertise']); 
            ?>       

          <div class="col-md-12" style=" border-bottom: solid 1px #ededef;">          
            <?= 
            $form->field($model, 'a_jobt')->inline()->checkboxList($catagData)->label('Job type');
            ?>           
          </div>

          <div class="col-md-12"  style=" border-bottom: solid 1px #ededef;">
            <?= 
            $form->field($model, 'a_sortby')->inline()->checkboxList(['a' => 'Date', 'b' => 'Relevency'])->label('Sort Jobs By'); 
            ?>        
          </div>
         <div style="clear:both"></div>

          <div class="searchbutton">
            <?= 
            Html::submitButton('Advance Search', ['class' => ' advanceSearch btn-search ','name' => 'search-button','value'=>'1','style'=>' margin-top:20px;'],array('name' => 'button2')) 
            ?>
          </div>
         
          <?php 
          ActiveForm::end(); 
          ?>
        </div>
      </div>
    </div>
  </div>

<!-- End of Advance Seacrch Model -->
  <style type="text/css">
  .select2-drop{
    z-index: 2147483647;
  }
  </style>

  <div id="job-search">
    <div class="container">
      <div id="demo">
        <div id="owl-demo" class="owl-carousel">
            <div class="item">
               <li>
               <?= Html::img('@web/images/employers-logo/tech-mahindra.png', [ 'alt' => 'tech-mahindra', ]); ?>
            </div>
            <div class="item">
               <li>
               <?= Html::img('@web/images/employers-logo/novartis.png', [ 'alt' => 'novartis',]) ?>
            </div>
            <div class="item">
              <li>
              <?= Html::img('@web/images/employers-logo/deloitte.png', [ 'alt' => 'deloitte',]) ?>
            </div>
            <div class="item">
              <li>
              <?= Html::img('@web/images/employers-logo/ericsson.png', [ 'alt' => 'ericsson',]) ?>
            </div>
            <div class="item">
              <li>
              <?= Html::img('@web/images/employers-logo/ibm.png', [ 'alt' => 'IBM',]) ?>
            </div>
            <div class="item">
              <li>
              <?= Html::img('@web/images/employers-logo/tech-mahindra.png', [ 'alt' => 'tech-mahindra',]) ?>
            </div>
            <div class="item">
              <li>
              <?= Html::img('@web/images/employers-logo/novartis.png', [ 'alt' => 'novartis',]) ?>
            </div>
            <div class="item">
              <li>
              <?= Html::img('@web/images/employers-logo/deloitte.png', [ 'alt' => 'deloitte',]) ?>
            </div>
            <div class="item">
              <li>
              <?= Html::img('@web/images/employers-logo/ericsson.png', [ 'alt' => 'ericsson',]) ?>
            </div>
            <div class="item">
              <li>
              <?= Html::img('@web/images/employers-logo/ibm.png', [ 'alt' => 'ibm',]) ?>
            </div>
        </div>
      </div>
    </div>
  </div>
    
  <div class="jobview">
      <div class="container">
          <div class="row">
            <div class="col-md-8">
                    <!-- Main component for a primary marketing message or call to action -->
                    <h3><i class="fa fa-suitcase"></i>&nbsp;Recent Jobs</h3>

                    <ul class="nav nav-tabs job-list responsive " id="myTab">
                        <li class="active"><a title="" data-original-title="" class="deco-none misc-class" href="#all-job">All</a></li>
                        <li class="test-class"><a title="" data-original-title="" class="deco-none" href="#fulltime-job">Full Time</a></li>
                        <li class="test-class"><a title="" data-original-title="" class="deco-none" href="#parttime-job">Part Time</a></li>
                        <li class="test-class"><a title="" data-original-title="" href="#contract-job">Contract</a></li>
                        <li class="test-class"><a title="" data-original-title="" class="deco-none" href="#freelance-job">Freelance</a></li>
                    </ul>
                    <div class="tab-content margin-b responsive ">

                        <div class="tab-pane active" id="all-job">
                            <div id="all_jobs" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false" style="display: block;">
                                <a title="" data-original-title="" class="job-listing-permalink"> </a>
                                 <?php
                                if (empty($search_result['all']))
                                  {  ?>
                                    <div class='job-listing-row col-md-12 clearfix' style='text-align:center'>We could not find any matching jobs for your search criteria.</div>
                                  <?php } 
                                else {
                                foreach ($search_result['all'] as $key => $value) {                   
                                  if($value['tj_jl_main_category'] == 1)
                                   $ti='Contract';
                                  else if($value['tj_jl_main_category'] == 2)
                                   $ti='Freelance';
                                  else if($value['tj_jl_main_category'] == 3)
                                   $ti='Full Time';
                                  else if($value['tj_jl_main_category'] == 4)
                                   $ti='Part Time';

                                  $exp_val= explode(",", $value['tj_jl_keyskills']);
                                  $key_skills='';
                                  foreach ($exp_val as $expkey => $expvalue) {
                                    if($expvalue!='')
                                    $key_skills.= $skillData[$expvalue].",";
                                  }
                                  $key_skills = substr($key_skills, 0, -1); 
                                  ?>
                                   <div class="job-listing-row clearfix">
                                      <a title="" data-original-title="" class="job-listing-permalink">
                                          <div class="job-company-logo">
                                          <?php 
                                           if($value['tj_jl_company_logo'] != '') 
                                           { ?> 
                                            <img src="<?php echo Yii::$app->homeUrl.''.$value['tj_jl_company_logo']; ?>" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="<?php echo $value['tj_jl_company_name']; ?>" height="24" width="80">
                                             <?php
                                              }
                                              else{  //echo $value['tj_jl_company_name']; 
                                             echo substr($value['tj_jl_company_name'],0,15)."..";   }?>
                                          </div>
                                      </a>
                                      <a class="job-listing-name changecolor" data-html="true" rel="tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $value['tj_jl_job_details']; ?>" href="<?php echo Yii::$app->homeUrl; ?>site/viewjob?d=<?php echo $value['tj_jl_id']; ?>">
                                          <h4><?php echo strtoupper($value['tj_jl_title']); ?></h4>
                                          <p class="job-listing-summary"><?php echo strtoupper(substr($key_skills,0,20)).".."; ?></p>
                                      </a>
                                      <div class="number-f-job">
                                          <i class="fa fa-map-marker"></i>  <?php echo $disData[$value['tj_jl_location']]; ?>   
                                      </div>
                                      <div class="job-listing-type">
                                          <i class="fa fa-fw fa-user"></i><?php echo  $ti; ?>
                                          </div>
                                      <div class="appl-job">
                                          <a title="" data-original-title="" href="<?php echo Yii::$app->homeUrl; ?>site/viewjob?d=<?php echo $value['tj_jl_id']; ?>"><i class="fa fa-external-link"></i></a>
                                      </div>
                                    </div>
                                
                                <?php  } 
                                  }
                                  ?>
                            </div>
                        </div>

                        <div class="tab-pane" id="fulltime-job">
                            <div id="all_jobs" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false" style="display: block;">
                                <a title="" data-original-title="" class="job-listing-permalink"> </a>
                                 <?php
                                if (empty($search_result['Full_Time']))
                                  {  ?>
                                    <div class='job-listing-row col-md-12 clearfix' style='text-align:center'>We could not find any matching jobs for your search criteria.</div>
                                  <?php } 
                                else {
                                foreach ($search_result['Full_Time'] as $key => $value) {                   
                                  if($value['tj_jl_main_category'] == 1)
                                   $ti='Contract';
                                  else if($value['tj_jl_main_category'] == 2)
                                   $ti='Freelance';
                                  else if($value['tj_jl_main_category'] == 3)
                                   $ti='Full Time';
                                  else if($value['tj_jl_main_category'] == 4)
                                   $ti='Part Time';

                                  $exp_val= explode(",", $value['tj_jl_keyskills']);
                                  $key_skills='';
                                  foreach ($exp_val as $expkey => $expvalue) {
                                    if($expvalue!='')
                                    $key_skills.= $skillData[$expvalue].",";
                                  }
                                  $key_skills = substr($key_skills, 0, -1); 
                                  ?>
                                   <div class="job-listing-row clearfix">
                                      <a title="" data-original-title="" class="job-listing-permalink">
                                          <div class="job-company-logo">
                                          <?php 
                                           if($value['tj_jl_company_logo'] != '') 
                                           { ?> 
                                            <img src="<?php echo Yii::$app->homeUrl.''.$value['tj_jl_company_logo']; ?>" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="<?php echo $value['tj_jl_company_name']; ?>" height="24" width="80">
                                             <?php
                                              }
                                              else{  //echo $value['tj_jl_company_name']; 
                                             echo substr($value['tj_jl_company_name'],0,15)."..";   }?>
                                          </div>
                                      </a>
                                      <a class="job-listing-name changecolor" data-html="true" rel="tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $value['tj_jl_job_details']; ?>" href="<?php echo Yii::$app->homeUrl; ?>site/viewjob?d=<?php echo $value['tj_jl_id']; ?>">
                                          <h4><?php echo strtoupper($value['tj_jl_title']); ?></h4>
                                          <p class="job-listing-summary"><?php echo strtoupper(substr($key_skills,0,20)).".."; ?></p>
                                      </a>
                                      <div class="number-f-job">
                                          <i class="fa fa-map-marker"></i>  <?php echo $disData[$value['tj_jl_location']]; ?>   
                                      </div>
                                      <div class="job-listing-type">
                                          <i class="fa fa-fw fa-user"></i><?php echo  $ti; ?>
                                          </div>
                                      <div class="appl-job">
                                          <a title="" data-original-title="" href="<?php echo Yii::$app->homeUrl; ?>site/viewjob?d=<?php echo $value['tj_jl_id']; ?>"><i class="fa fa-external-link"></i></a>
                                      </div>
                                    </div>
                                
                                <?php  } 
                                  }
                                  ?>                     
                            </div>
                        </div>
                        <div class="tab-pane" id="parttime-job">
                            <div id="all_jobs" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false" style="display: block;">
                                <a title="" data-original-title="" class="job-listing-permalink"> </a>
                                 <?php
                                if (empty($search_result['Part_Time']))
                                  {  ?>
                                    <div class='job-listing-row col-md-12 clearfix' style='text-align:center'>We could not find any matching jobs for your search criteria.</div>
                                  <?php } 
                                else {
                                foreach ($search_result['Part_Time'] as $key => $value) {                   
                                  if($value['tj_jl_main_category'] == 1)
                                   $ti='Contract';
                                  else if($value['tj_jl_main_category'] == 2)
                                   $ti='Freelance';
                                  else if($value['tj_jl_main_category'] == 3)
                                   $ti='Full Time';
                                  else if($value['tj_jl_main_category'] == 4)
                                   $ti='Part Time';

                                  $exp_val= explode(",", $value['tj_jl_keyskills']);
                                  $key_skills='';
                                  foreach ($exp_val as $expkey => $expvalue) {
                                    if($expvalue!='')
                                    $key_skills.= $skillData[$expvalue].",";
                                  }
                                  $key_skills = substr($key_skills, 0, -1); 
                                  ?>
                                   <div class="job-listing-row clearfix">
                                      <a title="" data-original-title="" class="job-listing-permalink">
                                          <div class="job-company-logo">
                                          <?php 
                                           if($value['tj_jl_company_logo'] != '') 
                                           { ?> 
                                            <img src="<?php echo Yii::$app->homeUrl.''.$value['tj_jl_company_logo']; ?>" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="<?php echo $value['tj_jl_company_name']; ?>" height="24" width="80">
                                             <?php
                                              }
                                              else{  //echo $value['tj_jl_company_name']; 
                                             echo substr($value['tj_jl_company_name'],0,15)."..";   }?>
                                          </div>
                                      </a>
                                      <a class="job-listing-name changecolor" data-html="true" rel="tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $value['tj_jl_job_details']; ?>" href="<?php echo Yii::$app->homeUrl; ?>site/viewjob?d=<?php echo $value['tj_jl_id']; ?>">
                                          <h4><?php echo strtoupper($value['tj_jl_title']); ?></h4>
                                          <p class="job-listing-summary"><?php echo strtoupper(substr($key_skills,0,20)).".."; ?></p>
                                      </a>
                                      <div class="number-f-job">
                                          <i class="fa fa-map-marker"></i>  <?php echo $disData[$value['tj_jl_location']]; ?>   
                                      </div>
                                      <div class="job-listing-type">
                                          <i class="fa fa-fw fa-user"></i><?php echo  $ti; ?>
                                          </div>
                                      <div class="appl-job">
                                          <a title="" data-original-title="" href="<?php echo Yii::$app->homeUrl; ?>site/viewjob?d=<?php echo $value['tj_jl_id']; ?>"><i class="fa fa-external-link"></i></a>
                                      </div>
                                    </div>
                                
                                <?php  } 
                                  }
                                  ?>                             
                            </div>
                        </div>
                        <div class="tab-pane" id="contract-job">
                            <div id="all_jobs" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false" style="display: block;">
                                <a title="" data-original-title="" class="job-listing-permalink"> </a>
                                 <?php
                                if (empty($search_result['Contract']))
                                  {  ?>
                                    <div class='job-listing-row col-md-12 clearfix' style='text-align:center'>We could not find any matching jobs for your search criteria.</div>
                                  <?php } 
                                else {
                                foreach ($search_result['Contract'] as $key => $value) {                   
                                  if($value['tj_jl_main_category'] == 1)
                                   $ti='Contract';
                                  else if($value['tj_jl_main_category'] == 2)
                                   $ti='Freelance';
                                  else if($value['tj_jl_main_category'] == 3)
                                   $ti='Full Time';
                                  else if($value['tj_jl_main_category'] == 4)
                                   $ti='Part Time';

                                  $exp_val= explode(",", $value['tj_jl_keyskills']);
                                  $key_skills='';
                                  foreach ($exp_val as $expkey => $expvalue) {
                                    if($expvalue!='')
                                    $key_skills.= $skillData[$expvalue].",";
                                  }
                                  $key_skills = substr($key_skills, 0, -1); 
                                  ?>
                                   <div class="job-listing-row clearfix">
                                      <a title="" data-original-title="" class="job-listing-permalink">
                                          <div class="job-company-logo">
                                          <?php 
                                           if($value['tj_jl_company_logo'] != '') 
                                           { ?> 
                                            <img src="<?php echo Yii::$app->homeUrl.''.$value['tj_jl_company_logo']; ?>" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="<?php echo $value['tj_jl_company_name']; ?>" height="24" width="80">
                                             <?php
                                              }
                                              else{  //echo $value['tj_jl_company_name']; 
                                             echo substr($value['tj_jl_company_name'],0,15)."..";   }?>
                                          </div>
                                      </a>
                                      <a class="job-listing-name changecolor" data-html="true" rel="tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $value['tj_jl_job_details']; ?>" href="<?php echo Yii::$app->homeUrl; ?>site/viewjob?d=<?php echo $value['tj_jl_id']; ?>">
                                          <h4><?php echo strtoupper($value['tj_jl_title']); ?></h4>
                                          <p class="job-listing-summary"><?php echo strtoupper(substr($key_skills,0,20)).".."; ?></p>
                                      </a>
                                      <div class="number-f-job">
                                          <i class="fa fa-map-marker"></i>  <?php echo $disData[$value['tj_jl_location']]; ?>   
                                      </div>
                                      <div class="job-listing-type">
                                          <i class="fa fa-fw fa-user"></i><?php echo  $ti; ?>
                                          </div>
                                      <div class="appl-job">
                                          <a title="" data-original-title="" href="<?php echo Yii::$app->homeUrl; ?>site/viewjob?d=<?php echo $value['tj_jl_id']; ?>"><i class="fa fa-external-link"></i></a>
                                      </div>
                                    </div>
                                
                                <?php  } 
                                  }
                                  ?>                  
                            </div>
                        </div>
                        <div class="tab-pane" id="freelance-job">
                            <div id="all_jobs" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false" style="display: block;">
                               <a title="" data-original-title="" class="job-listing-permalink"> </a>
                                 <?php
                                if (empty($search_result['Freelance']))
                                  {  ?>
                                    <div class='job-listing-row col-md-12 clearfix' style='text-align:center'>We could not find any matching jobs for your search criteria.</div>
                                  <?php } 
                                else {
                                foreach ($search_result['Freelance'] as $key => $value) {                   
                                  if($value['tj_jl_main_category'] == 1)
                                   $ti='Contract';
                                  else if($value['tj_jl_main_category'] == 2)
                                   $ti='Freelance';
                                  else if($value['tj_jl_main_category'] == 3)
                                   $ti='Full Time';
                                  else if($value['tj_jl_main_category'] == 4)
                                   $ti='Part Time';

                                  $exp_val= explode(",", $value['tj_jl_keyskills']);
                                  $key_skills='';
                                  foreach ($exp_val as $expkey => $expvalue) {
                                    if($expvalue!='')
                                    $key_skills.= $skillData[$expvalue].",";
                                  }
                                  $key_skills = substr($key_skills, 0, -1); 
                                  ?>
                                   <div class="job-listing-row clearfix">
                                      <a title="" data-original-title="" class="job-listing-permalink">
                                          <div class="job-company-logo">
                                          <?php 
                                           if($value['tj_jl_company_logo'] != '') 
                                           { ?> 
                                            <img src="<?php echo Yii::$app->homeUrl.''.$value['tj_jl_company_logo']; ?>" class="attachment-jobboard-company-logo-thumbnail wp-post-image" alt="<?php echo $value['tj_jl_company_name']; ?>" height="24" width="80">
                                             <?php
                                              }
                                              else{  //echo $value['tj_jl_company_name']; 
                                             echo substr($value['tj_jl_company_name'],0,15)."..";   }?>
                                          </div>
                                      </a>
                                      <a class="job-listing-name changecolor" data-html="true" rel="tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $value['tj_jl_job_details']; ?>" href="<?php echo Yii::$app->homeUrl; ?>site/viewjob?d=<?php echo $value['tj_jl_id']; ?>">
                                          <h4><?php echo strtoupper($value['tj_jl_title']); ?></h4>
                                          <p class="job-listing-summary"><?php echo strtoupper(substr($key_skills,0,20)).".."; ?></p>
                                      </a>
                                      <div class="number-f-job">
                                          <i class="fa fa-map-marker"></i>  <?php echo $disData[$value['tj_jl_location']]; ?>   
                                      </div>
                                      <div class="job-listing-type">
                                          <i class="fa fa-fw fa-user"></i><?php echo  $ti; ?>
                                          </div>
                                      <div class="appl-job">
                                          <a title="" data-original-title="" href="<?php echo Yii::$app->homeUrl; ?>site/viewjob?d=<?php echo $value['tj_jl_id']; ?>"><i class="fa fa-external-link"></i></a>
                                      </div>
                                    </div>
                                
                                <?php  } 
                                  }
                                  ?>                  
                            </div>
                        </div>
                    </div>
                </div>
            

              <div class="col-md-4">
                <h1>Sponsors</h1>
                <div class="green">
                  <div class="row">
                    <div id="nt-example1-container">                    
                      <?= Html::a(Html::img('@web/images/111.jpg', [ 'alt' => 'Jobs Ads', 'class' => 'rightImgblink responsive'])) ?>
                       <!-- <div class="companyLoGo">
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
          </div>
      </div>
  </div>

  <div class="parele">
    <div class="container">
      <h1>Job Status Updates</h1>
      <div class='animatedParent'>
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <div class=" animated bounceInDown count-box">7</div>
            <h5>JOBS POSTED</h5>
          </div>
          <div class="col-xs-6 col-md-3">
            <div class="animated bounceInRight slow  count-box ">15</div>
            <h5>POSITIONS FILLED</h5>
          </div>
          <div class="col-xs-6 col-md-3">
            <div class="animated bounceInLeft slow count-box ">15</div>
            <h5>COMPANIES</h5>
          </div>
          <div class="col-xs-6 col-md-3">
            <div class="animated bounceInDown count-box ">1305</div>
            <h5>MEMBERS</h5>
          </div>   
        </div>
      </div>
    </div>
  </div>
  
  <div class="wayto">
    <div class="container">
      <h1>Easiest Way to Use</h1>
      <div class="row">
        <div class="col-xs-12 col-xs-6 col-md-3">
          <h5>Register</h5>
          <div class="step-image">
            <span class="SPtop">
            <?= Html::img('@web/images/step-icon-1.png', [ 'alt' => 'deloitte','class' => 'fa-animated ']) ?></span>
          </div>
        </div>
        <div class="col-xs-12 col-xs-6 col-md-3">
          <h5>Login</h5>
          <div class="step-image">
            <span class="SPtop">
            <?= Html::img('@web/images/step-icon-2.png', [ 'alt' => 'deloitte','class' => 'fa-animated ']) ?></span>
          </div>
        </div>
        <div class="col-xs-12 col-xs-6 col-md-3">

          <h5>Update Profile</h5>
          <div class="step-image">
            <span class="SPtop"> 
            <?= Html::img('@web/images/step-icon-3.png', [ 'alt' => 'deloitte','class' => 'fa-animated ']) ?></span>
          </div>
        </div>
        <div class="col-xs-12 col-xs-6 col-md-3">
          <h5>Search Jobs</h5>
          <div class="step-image">
            <span class="SPtop">
            <?= Html::img('@web/images/step-icon-4.png', [ 'alt' => 'deloitte','class' => 'fa-animated ']) ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pePO">
  </div>

<?php 

  $this->registerJs(
  "   $('#myTab a').click(function(e) {
            e.preventDefault();
            $(this).tab('show');
        });
 $('a').tooltip();

    
"
);

