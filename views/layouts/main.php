<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo Yii::$app->homeUrl; ?>images/fav.png" type="image/x-icon" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
	<div id="header-top">
			<div class="container">
		
			<div  class="socialmedia">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <!--aniamtionstart-->
         <ul>
            
           <li> <a href="#" class=" iconFa fa fa-facebook "></a></li>
            <li> <a href="#" class=" icongo fa fa-google-plus"></a></li>
           <li> <a href="#" class=" iconli fa fa-linkedin"></a></li>
             <li><a href="#" class=" iconti fa fa-twitter"></a></li>
            <li> <a  href="#" class="iconya fa fa-rss"></a></li>   
            </ul> 
        </div>
      </div>
    </div>

    <ul class="rowT">
					<li class="fa fa-envelope"><span class="ritT"><a href="#">contact@takeajob.com</a></span>
					</li>
					<li class=" fa fa-phone"><span class="ritT"><a href="#">+1 800 559 6580</a></span>
					</li>
				</ul>
			
			</div>
		
		</div>
		
<div class="clearfix"></div>


<!--<div id="header">

<div class="container">


</div>

</div>-->
       
<div class="clearfix"></div>		
    <div class="headinn">
        <div class="container">
            <div class="logo"><a href="<?php echo Yii::$app->homeUrl; ?>site/index">
			<?php $path = Yii::$app->homeUrl . 'images/'; ?>
			<?= Html::img($path.'logo.png', ['alt'=>'Take a Job', 'class'=>'taj', 'width'=>'220px']);?> 
            </div>
            <div class="nav-container" style="float:right">
                <nav> <a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-bars"></i> 
					Menu</a>
                    <ul class="menu">
                        <li><a class="homer" href="<?php echo Yii::$app->homeUrl; ?>site/index">HOME</a>
                            <ul class="sub-menu">
                                <li><a href="#">Sub-Menu 1</a>
                                </li>
                                <li><a href="#">Sub-Menu 2</a>
                                </li>
                                <li><a href="#">Sub-Menu 3</a>
                                </li>
                                <li><a href="#">Sub-Menu 4</a>
                                </li>
                                <li><a href="#">Sub-Menu 5</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">PAGES</a>
                            <ul class="sub-menu">
                                <li><a href="#">Sub-Menu 1</a>
                                </li>
                                <li><a href="#">Sub-Menu 2</a>
                                    <ul>
                                        <li><a href="#">Sub Sub-Menu 1</a>
                                        </li>
                                        <li><a href="#">Sub Sub-Menu 2</a>
                                        </li>
                                        <li><a href="#">Sub Sub-Menu 3</a>
                                        </li>
                                        <li><a href="#">Sub Sub-Menu 4</a>
                                        </li>
                                        <li><a href="#">Sub Sub-Menu 5</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Sub-Menu 3</a>
                                    <ul>
                                        <li><a href="#">Sub Sub-Menu 1</a>
                                        </li>
                                        <li><a href="#">Sub Sub-Menu 2</a>
                                        </li>
                                        <li><a href="#">Sub Sub-Menu 3</a>
                                        </li>
                                        <li><a href="#">Sub Sub-Menu 4</a>
                                        </li>
                                        <li><a href="#">Sub Sub-Menu 5</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">POST A JOB</a>
                            <ul class="sub-menu">
                                <li><a href="#">Sub-Menu 1</a>
                                </li>
                                <li><a href="#">Sub-Menu 2</a>
                                    <ul>
                                        <li><a href="#">Sub Sub-Menu 1</a>
                                        </li>
                                        <li><a href="#">Sub Sub-Menu 2</a>
                                        </li>
                                        <li><a href="#">Sub Sub-Menu 3</a>
                                        </li>
                                        <li><a href="#">Sub Sub-Menu 4</a>
                                        </li>
                                        <li><a href="#">Sub Sub-Menu 5</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Sub-Menu 3</a>
                                    <ul>
                                        <li><a href="#">Sub Sub-Menu 1</a>
                                        </li>
                                        <li><a href="#">Sub Sub-Menu 2</a>
                                        </li>
                                        <li><a href="#">Sub Sub-Menu 3</a>
                                        </li>
                                        <li><a href="#">Sub Sub-Menu 4</a>
                                        </li>
                                        <li><a href="#">Sub Sub-Menu 5</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"> POST A RESUME</a>
                        </li>
                        <li><a href="#">BLOG</a>
                        </li>
                        <li><a href="#">SHORTCODES</a>
                        </li>
                        <li><a href="#">CONTACT US</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    
    
    <div class="formLInk">
            <div class="container">
                <div class="formlist">
                    <ul>
                        <li><a href="#">All Jobs</a>
                        </li>
                        <li><a href="#">Jobs by Company</a>
                        </li>
                        <li><a href="#">Jobs by Category</a>
                        </li>
                        <li><a href="#">Jobs by Location</a>
                        </li>
                        <li><a href="#">Jobs by Designation</a>
                        </li>
                        <li><a href="#">Jobs by Skill</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
		
        <div style=" width:100%;">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div><div style="clear:both"></div>
    	
<footer id="footer">
        <div class="container">
            <div id="footer-widgets">
                <div class="row">
                    


<div class="col-xs-12 col-sm-6 col-md-3 widget-container">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h4 class="footer-widget-title fa-animated ">Information</h4>
                            <div class="menu-useful-links-container">
                                <ul id="menu-useful-links" class="">
                                    <li><a href="#"> About Us</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Resources</a></li>
                                    
                                    <li><a href="#">Careers with Us</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">FAQs</a></li>

                                    
                                     <li><a href="#">Summons / Notices</a></li>
                                    <li><a href="#">Grievances</a></li>
                                    <li><a href="#">Fraud Alert</a></li>
                              

                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- /.col-md-3 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 widget-container">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h4 class="footer-widget-title fa-animated ">Jobseekers</h4>
                            <div class="menu-useful-links-container">
                                <ul id="menu-useful-links" class="">
                                    <li><a href="#"> Register Now</a></li>
                                    <li><a href="#">Search Jobs</a></li>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Report a Problem</a></li>
                                    
                                    <li><a href="#">Blogs</a></li>
                                    <li><a href="#">Security Advice</a></li>
                                    <li><a href="#">Mobile Site</a></li>
                                    <li><a href="#">Fast Forward</a></li>

                                    
                                     <li><a href="#">Resume Writing</a></li>
                                    <li><a href="#">Profile Enhancement</a></li>
                                    <li><a href="#">Recruiter Reach</a></li>
                                    <li><a href="#">Jobs For You</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-2 -->
                    

<div class="col-xs-12 col-sm-6 col-md-3 widget-container">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h4 class="footer-widget-title fa-animated ">Browse Jobs</h4>
                            <div class="menu-useful-links-container">
                                <ul id="menu-useful-links" class="">
                                    <li><a href="#"> Browse All Jobs</a></li>
                                    <li><a href="#">Premium MBA Jobs</a></li>
                                    <li><a href="#">Premium Engineering Jobs</a></li>
                                    <li><a href="#">Govt. Jobs</a></li>
                                    
                                    <li><a href="#">International Jobs</a></li>
                                    <li><a href="#">Jobs by Company</a></li>
                                    <li><a href="#">Jobs by Category</a></li>
                                    <li><a href="#">Jobs by Designation</a></li>

                                    
                                     <li><a href="#">Jobs by Location</a></li>
                                    <li><a href="#">Jobs by Skill</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 widget-container">
                        <div id="text-4" class="widget widget_text">
                            <h4 class="footer-widget-title fa-animated">Employers</h4>
                            
                            
                             <ul id="menu-useful-links" class="">
                                    <li><a href="#"> Post Jobs</a></li>
                                    <li><a href="#">Access Database</a></li>
                                    <li><a href="#">Manage Responses</a></li>
                                    <li><a href="#">Buy Online</a></li>
                                    
                                    <li><a href="#">Report a Problem</a></li>
                                    <li><a href="#">Recruiters from USA, call</a></li>
                                    <li><a href="#">Toll Free # 1866-557-3340l</a></li>
                                                                       
                                </ul>                            
                            <div class="textwidget">
                               
                              <a href="" target="blank"><i class="media-footer footer-twitt"></i></a>
                                <a href="" target="blank"><i class="media-footer footer-fb"></i></a>
                                <a href="" target="blank"><i class="media-footer footer-linkedin"></i></a>
                                <a href="" target="blank"><i class="media-footer footer-yahoo"></i></a>
                                <a href="" target="blank"><i class="media-footer footer-blog"></i></a>
                                <a href="" target="blank"><i class="media-footer footer-rss"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#footer-widgets -->
        </div>
        <!-- /.container -->


        <!-- /#footer-text -->
    </footer>	
    
    
   <div class=" bottopmfooter">
   <div class="container">
   
      <p>All rights reserved @ 2015 take a job</p>
   </div>   
   </div> 


     <div class = "modal fade InDown" id = "loginModal" role = "dialog" style="z-index: 9999999;">
        <div class = "modal-dialog">
            <div class = "modal-content">
                <div class = "modal-header" style = "padding:1px 35px;">
                    <button type = "button" class = "close" data-dismiss = "modal">&times;</button>
                    <h4 style = "color:red;"><span class = "glyphicon glyphicon-unlock"></span> Login</h4>
                </div>

                <div class = "modal-body" >            
                    <div class = "row  col-md-offset-2 col-sm-offset-2" style = "margin-bottom:25px ;" >
                        <ul class = "nav nav-tabs col-md-12 col-xs-12 " id ='tab' style = "border-bottom: 0px; margin: 0 80px auto;" >
                          <li class = "active"><a data-toggle="tab" href = "#sectionA">Email</a></li>
                          <li class = ""><a data-toggle = "tab" href = "#sectionB">Mobile</a></li>     
                        </ul>
                    </div>

                    <div class = "tab-content ">
                        <div id = "sectionA" class = "tab-pane fade active in "> 
                            <form class = "form-horizontal" role = "form" method = "post">                             
                                    <div style = "margin-bottom: 20px" class = "input-group col-md-7 col-lg-7  col-md-offset-2 col-sm-7 col-sm-offset-2">
                                        <span class = "glyphicon glyphicon-envelope input-group-addon"></span>
                                        <input type = "email" class = "form-control" id = "usremail" style =" margin-top: 1px;margin-bottom: -1px;" placeholder = "Enter email" required>                                        
                                    </div>                                
                            
                                    <div style = "margin-bottom: 20px" class = "input-group col-md-7 col-lg-7  col-md-offset-2 col-sm-7 col-sm-offset-2">
                                        <span class = "glyphicon glyphicon-lock input-group-addon"></span>
                                        <input type = "password" class = "form-control" id = "psw" style=" margin-top: 1px;margin-bottom: -1px;" placeholder = "Enter password" required>                                        
                                    </div>  

                                    <div class = " col-md-offset-4 col-sm-offset-4">                            
                                        <a href = "#"> <p class="text-center">Forgot Password?</p></a>
                                    </div>

                                    <div style = "margin-top:50px">
                                        <p style = "text-align: center;"><input type = "submit" class = "btn btn-default btn-success " value = "Login"></p>
                                    </div>
                            </form>
                        </div>        

                        <div id = "sectionB" class = "tab-pane fade">                         
                            <form role = "form">
                                    <div style = "margin-bottom: 20px" class = "input-group col-md-7 col-lg-7  col-md-offset-2 col-sm-7 col-sm-offset-2">
                                        <span class = "glyphicon glyphicon-earphone input-group-addon"></span>
                                        <input type = "text" class = "form-control" id = "usrnumber" style = "margin-top: 1px;margin-bottom: -1px;" placeholder = "Enter Mobile number" required>                                        
                                    </div>                                
                             
                                    <div style = "margin-bottom: 20px" class = "input-group col-md-7 col-lg-7  col-md-offset-2 col-sm-7 col-sm-offset-2">
                                        <span class = "glyphicon glyphicon-lock input-group-addon"></span>
                                        <input type = "password" class = "form-control" id = "psw" style = " margin-top: 1px;margin-bottom: -1px;" placeholder = "Enter password" required>                                        
                                    </div>

                                    <div class = " col-md-offset-4 col-sm-offset-4">                            
                                        <a href = "#"> <p class = "text-center">Forgot Password?</p></a>
                                    </div>

                                    <div style = "margin-top:50px">
                                        <p style = "text-align: center;"><input type = "submit" class = "btn btn-default btn-success" value = "Login"></p>
                                    </div>
                            </form>                         
                        </div>                   
                    </div>  
                            <h6 class = "text-center" style = "margin-top:20px">Not a member as yet? <a href = "#">Sign Up</a></h6>                                              
                </div>
                  

            </div> 
        </div>
    </div> 

<?php 

  $this->registerJs(
  "
      $(document).ready(function() {
          var touch = $('#resp-menu');
          var menu = $('.menu');

          $(touch).on('click', function(e) {
              e.preventDefault();
              menu.slideToggle();
          });

          $(window).resize(function() {
              var w = $(window).width();
              if (w > 767 && menu.is(':hidden')) {
                  menu.removeAttr('style');
              }
          });

      });

      if ($(window).width() > 768) {

          // Hide all but first tab content on larger viewports
          $('.accordion__content:not(:first)').hide();

          // Activate first tab
          $('.accordion__title:first-child').addClass('active');

      } else {

          // Hide all content items on narrow viewports
          $('.accordion__content').hide();
      };

      // Wrap a div around content to create a scrolling container which we're going to use on narrow viewports
      $('.accordion__content').wrapInner('<div class=\'overflow-scrolling\'></div>');

      // The clicking action
      $('.accordion__title').on('click', function() {
          $('.accordion__content').hide();
          $(this).next().show().prev().addClass('active').siblings().removeClass('active');
      });

      /*$('a[href*=#]').click(function() {
          var href = $.attr(this, 'href');
          if (href != '#') {
              $('html, body').animate({
                  scrollTop: $(href).offset().top - 81
              }, 500, function() {
                  window.location.hash = href;
              });
          } else {
              $('html, body').animate({
                  scrollTop: 0
              }, 500, function() {
                  window.location.hash = href;
              });
          }
          return false;
      });*/

      
      var nt_title = $('#nt-title').newsTicker({
          row_height: 40,
          max_rows: 1,
          duration: 3000,
          pauseOnHover: 0
      });
      var nt_example1 = $('#nt-example1').newsTicker({
          row_height: 80,
          max_rows: 3,
          duration: 4000,
          prevButton: $('#nt-example1-prev'),
          nextButton: $('#nt-example1-next')
      });
      var nt_example2 = $('#nt-example2').newsTicker({
          row_height: 60,
          max_rows: 1,
          speed: 300,
          duration: 6000,
          prevButton: $('#nt-example2-prev'),
          nextButton: $('#nt-example2-next'),
          hasMoved: function() {
              $('#nt-example2-infos-container').fadeOut(200, function() {
                  $('#nt-example2-infos .infos-hour').text($('#nt-example2 li:first span').text());
                  $('#nt-example2-infos .infos-text').text($('#nt-example2 li:first').data('infos'));
                  $(this).fadeIn(400);
              });
          },
          pause: function() {
              $('#nt-example2 li i').removeClass('fa-play').addClass('fa-pause');
          },
          unpause: function() {
              $('#nt-example2 li i').removeClass('fa-pause').addClass('fa-play');
          }
      });
      $('#nt-example2-infos').hover(function() {
          nt_example2.newsTicker('pause');
      }, function() {
          nt_example2.newsTicker('unpause');
      });
      var state = 'stopped';
      var speed;
      var add;
      var nt_example3 = $('#nt-example3').newsTicker({
          row_height: 80,
          max_rows: 1,
          duration: 0,
          speed: 10,
          autostart: 0,
          pauseOnHover: 0,
          hasMoved: function() {
              if (speed > 700) {
                  $('#nt-example3').newsTicker('stop');
                  console.log('stop')
                  $('#nt-example3-button').text('RESULT: ' + $('#nt-example3 li:first').text().toUpperCase());
                  setTimeout(function() {
                      $('#nt-example3-button').text('START');
                      state = 'stopped';
                  }, 2500);

              } else if (state == 'stopping') {
                  add = add * 1.4;
                  speed = speed + add;
                  console.log(speed)
                  $('#nt-example3').newsTicker('updateOption', 'duration', speed + 25);
                  $('#nt-example3').newsTicker('updateOption', 'speed', speed);
              }
          }
      });

      $('#nt-example3-button').click(function() {
          if (state == 'stopped') {
              state = 'turning';
              speed = 1;
              add = 1;
              $('#nt-example3').newsTicker('updateOption', 'duration', 0);
              $('#nt-example3').newsTicker('updateOption', 'speed', speed);
              nt_example3.newsTicker('start');
              $(this).text('STOP');
          } else if (state == 'turning') {
              state = 'stopping';
              $(this).text('WAITING...');
          }
      });

      $('#owl-demo').owlCarousel({
          navigation: true
      });


    
"
);

?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
