<!DOCTYPE html>
<html lang="en" class="no-js" ng-app="Angular">

<head>
    <meta charset="utf-8">
	<title>Biding </title>
	<meta name="description" content="">
	<!-- Latest compiled and minified CSS -->
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/header.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/tabs.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/footer.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/live.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/profile.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/services.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/rates.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/modal.css">

<!-- <link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/tabs.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link rel="stylesheet" type="text/css" href="css/live.css">
<link rel="stylesheet" type="text/css" href="css/profile.css">
<link rel="stylesheet" type="text/css" href="css/services.css">
<link rel="stylesheet" type="text/css" href="css/rates.css">
<link rel="stylesheet" type="text/css" href="css/modal.css"> -->

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

  <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/livemin.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/profile.js"></script>
<script src="<?php echo base_url() ?>assets/js/order.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/hiw.js"></script>
<script type="text/JavaScript" src='<?php echo base_url() ?>assets/js/state.js'></script>
<script type="text/JavaScript" src='<?php echo base_url() ?>assets/js/state2.js'></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/modal.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/sell.js"></script>

<!-- <script type="text/javascript" src="js/livemin.js"></script>
<script type="text/javascript" src="js/profile.js"></script>
<script src="js/order.js"></script>
<script type="text/javascript" src="js/hiw.js"></script>
<script type="text/JavaScript" src='js/state.js'></script>
<script type="text/javascript" src="js/modal.js"></script>
<script type="text/javascript" src="js/sell.js"></script> -->
</head>
<body>
	<div class="container-fluid headersize">
    <!-- Second navbar for categories -->
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Works</a></li>
          
            <li><button data-toggle="modal" data-target="#registermodal" class="btn btn-primary center-block">Join Us</button></li>
         
              <li><button class="btn btn-primary" data-toggle="modal" data-target="#myModalFullscreen" contenteditable="false">What we do?</button></li>

          </ul>

         
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
</div>

<!---  ------------------------Live Rate Section ---------------------- -->
   <div class="live-container" ng-controller="liveRates" ng-init="init()">
     <div id="slideshow">
            <div class="slides">
                <ul>
                    <li id="slide-one">
                       <div class="live-rate-head"> <h2>Live Rates</h2></div>
                        <div class="col-sm-2 col-md-2" ng-model="usd">USD: {{rates.quotes.USDINR}}</div>
                        <div class="col-sm-2 col-md-2" ng-model="eur">EUR: {{eur}}</div>
                        <div class="col-sm-2 col-md-2" ng-model="aed">AED: {{aed}}</div>
                        <div class="col-sm-2 col-md-2">GBP: {{gbp}}</div>
                        <div class="col-sm-2 col-md-2">SGD: {{sgd}}</div>
                        <div class="col-sm-2 col-md-2">AUD: {{aud}}</div>
                       
                    </li>
                       
                </ul>
            </div>
            <ul class="slides-nav">
                <li class="on"><a href="#slide-one">Slide one</a></li>
                <li><a href="#slide-two">Slide two</a></li>
                <li><a href="#slide-three">Slide three</a></li>
            </ul>
        </div>       
    </div>
    <!-- ------------------------- end-------------------------- -->     
    <!--- Tab Section---------------------------- -->


<!-- login signup_____________------------------------------- -->







<!-- --------------------------------------------------- -->
   
      <div class="tab_container box1">
      <input id="tab1" type="radio" name="tabs" checked>
      <label for="tab1"><i class="fa fa-code"></i><span>Buy Forex</span></label>

  <input id="tab5" type="radio" name="tabs">
      <label for="tab5"><i class="fa fa-envelope-o"></i><span>Sell Forex</span></label>

      <input id="tab2" type="radio" name="tabs">
      <label for="tab2"><i class="fa fa-pencil-square-o"></i><span>Rates</span></label>

      <input id="tab3" type="radio" name="tabs">
      <label for="tab3"><i class="fa fa-bar-chart-o"></i><span>Services</span></label>

      <input id="tab4" type="radio" name="tabs">
      <label for="tab4"><i class="fa fa-folder-open-o"></i><span>Profile</span></label>

    


      <section id="content1" class="tab-content">
    
            <div class="container">
  <div class="row" ng-controller="currencyconverterINR">
      
        <!-- panel preview -->
        <div class="col-sm-5">
            <h4>Add payment:</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group ">
                        <label for="concept" class="col-sm-3 control-label">Location</label>
                       <!--  <div class="col-sm-5" id="selection">
                            
                            <select class="form-control" id="location" onchange='selectCity(this.value)' name="location">
                               <option value="" disabled selected hidden>State</option>
                                <option>Indore</option>
                                <option>Ujjain</option>
                            </select>
                            <div id="dumdiv">
								<a id="dum"></a>
							</div>
                            
                        </div> -->
                        <!-- <div class="col-sm-4">
                           <select class="form-control" id="location" name="location">
                               <option value="" disabled selected hidden>City</option>
                                <option>Indore</option>
                                <option>Ujjain</option>
                            </select>
                        </div> -->
                        	<div class='resp_code frms'>
								              <div id="selection">
									                 <div class="col-sm-5">
										                  <select class="form-control" id="states" onchange='selectCity(this.value)'>		
										                  </select>
									                  </div>
									                  <div class="col-sm-4">
										                  <select class="form-control" id="cities" name="cities">
											                     <option>SELECT CITY</option>
										                  </select>
									                  </div>	
								              </div>
								              <div id="dumdiv">
									               <a id="dum"></a>
								              </div>
							            </div>
                    </div>
                    <div>
	                    <div class="form-group">
	                        <label for="description" class="col-sm-3 control-label">Currency</label>
	                        <div class="col-sm-9">
	                         
	                            <select class="form-control" id="currency" name="currency" ng-change="showHint1(name, val)" ng-model="name" capitalize>
	                               <option>USD</option>
	                                <option>EUR</option>
	                                <option>AED</option>
	                            </select>
	                        </div>
	                    </div> 
	                    <div class="form-group">
	                        <label for="amount" class="col-sm-3 control-label">Amount</label>
	                        <div class="col-sm-9">
	                            <input type="number" class="form-control" id="amount" name="amount" ng-change="calValue1(val)" ng-model="val">
	                        </div>
	                    </div>
	                </div>    
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="status" name="status">
                                <option>Paid</option>
                                <option>Unpaid</option>
                            </select>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Method</label>
                        <div class="col-sm-9">
                          
                             <select class="form-control" id="option" name="option">
                                <option>NEFT</option>
                                <option>COD</option>
                            </select>
                        </div>
                    </div>   
                    <div class="form-group">
                        <div class="col-sm-12 text-right">
                            <button type="button"  class="btn btn-default preview-add-button">
                                <span class="glyphicon glyphicon-plus"></span> Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>            
        </div> <!-- / panel preview -->
        <div class="col-sm-7">
            <h4>Preview:</h4>
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table preview-table">
                            <thead>
                                <tr>
                                    <th>Location</th>
                                    <th>Currency</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Method</th>
                                </tr>
                            </thead>
                            <tbody></tbody> <!-- preview content goes here-->
                        </table>
                    </div>                            
                </div>
            </div>
            <div class="row text-right">
                <div class="col-xs-12">
                    <h4>Total Amount: <strong>{{netamt}} Rs<!-- <span class="preview-total"></span> --></strong></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr style="border:1px dashed #dddddd;">
                    <button type="button" class="btn btn-primary btn-block button -green center">Order Now</button>
                </div>                
            </div>
             <div class="row">
                <div class="col-xs-12">
                    <hr style="border:1px color:orange dashed #dddddd;">
                    <button type="button" class="btn btn-primary btn-block button -sun center">Request Better Rate</button>
                </div>                
            </div>
        </div>
           </div>
</div>

      </section>
<!---------------------------------------------- -->
      <section id="content2" class="tab-content">
          <div id="page-wrap">
            <div class="group">
      <h3>Static Rates</h3>
      
      <table>
        <thead>
        <tr>
          <th>Countary</th>
          <th>Flag</th>
          <th>Sell Rate</th>
          <th>Buy Rate</th>
          
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>BRAZIL</td>
          <td><img src="http://img.fifa.com/images/flags/4/bra.png" alt="BRAZIL"></td>
          <td>0</td>
          <td>0</td>
          
          
        </tr>
        <tr>
          <td>CROATIA</td>
          <td><img src="http://img.fifa.com/images/flags/4/cro.png" alt="CROATIA"></td>
          <td>0</td>
          <td>0</td>
          
          
        </tr>
        <tr>
          <td>MEXICO</td>
          <td><img src="http://img.fifa.com/images/flags/4/mex.png" alt="MEXICO"></td>
          <td>0</td>
          <td>0</td>
          
          
        </tr>
        <tr>
          <td>CAMEROON</td>
          <td><img src="http://img.fifa.com/images/flags/4/cmr.png" alt="CAMEROON"></td>
          <td>0</td>
          <td>0</td>
          
          
        </tr>
        </tbody>
      </table> 
      
    </div>
</div>

      </section>

      <section id="content3" class="tab-content">
        
            <div class="service-container">
    <div class="singleservice">  
    <img class="serviceicon" src="http://www.freeiconspng.com/uploads/book-stack-icon--icon-search-engine-16.png">
    <h2 class="servicetitle">
    Book Covers
    </h2>
E-book or print, my goal is to make a captivating image that is true to your novel.
    </div>
    <div class="singleserviceb">  
    <img class="serviceicon" src="http://free-icon-rainbow.com/i/icon_00079/icon_000790_256.png">
    <h2 class="servicetitle">
    VECTOR GRAPHICS
    </h2>
From app icons to illustrations, look sharp with scalable, crisp, and lively graphics.
    </div>
    <div class="singleservice">  
    <img class="serviceicon" src="http://www.iconninja.com/files/642/213/85/idea-and-creativity-symbol-of-a-lightbulb-icon.svg">
    <h2 class="servicetitle">
    BRANDING
    </h2>  
Logos, business cards, signage, or social media, let's build an adventure.
    </div>
        <div class="singleserviceb">  
    <img class="serviceicon" src="http://www.clipartbest.com/cliparts/Kin/L9M/KinL9MRzT.png">
    <h2 class="servicetitle">
    VOICEOVER
    </h2>
E-book or print, my goal is to make a captivating image that is true to your novel.
    </div>
    <div class="singleservice">  
    <img class="serviceicon" src="http://simpleicon.com/wp-content/uploads/computer-2.png">
    <h2 class="servicetitle">
    Web Design
    </h2>
From app icons to illustrations, look sharp with scalable, crisp, and lively graphics.
    </div>
    <div class="singleserviceb">  
    <img class="serviceicon" src="http://www.pngmart.com/files/1/Video-Icon-PNG-Clipart.png">
    <h2 class="servicetitle">
    MOTION DESIGN
    </h2>  
Logos, business cards, signage, or social media, let's build an adventure.
    </div>
</div>
      </section>

      <section id="content4" class="tab-content">
  
<div class="form-modal">
    
    <div class="form-toggle">
        <button id="login-toggle" onclick="toggleLogin()">log in</button>
        <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
    </div>

    <div id="login-form">
        <form>
            <input type="text" class="form-control" placeholder="Enter email or username"/>
            <input type="password" class="form-control" placeholder="Enter password"/>
            <button type="button" class="btn login">login</button>
            <p><a href="javascript:void(0)">Forgotten account</a></p>
            <hr/>
            <button type="button" class="btn -box-sd-effect"> <i class="fa fa-google fa-lg" aria-hidden="true"></i> sign in with google</button>
            <button type="button" class="btn -box-sd-effect"> <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i> sign in with linkedin</button>
            <button type="button" class="btn -box-sd-effect"> <i class="fa fa-windows fa-lg" aria-hidden="true"></i> sign in with microsoft</button>
        </form>
    </div>

    <div id="signup-form">
        <form>
            <input type="email" class="form-control" placeholder="Enter your email"/>
            <input type="text" class="form-control" placeholder="Choose username"/>
            <input type="password" class="form-control" placeholder="Create password"/>
            <button type="button" class="btn signup">create account</button>
            <p>Clicking <strong>create account</strong> means that you are agree to our <a href="javascript:void(0)">terms of services</a>.</p>
            <hr/>
            <button type="button" class="btn -box-sd-effect"> <i class="fa fa-google fa-lg" aria-hidden="true"></i> sign up with google</button>
            <button type="button" class="btn -box-sd-effect"> <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i> sign up with linkedin</button>
            <button type="button" class="btn -box-sd-effect"> <i class="fa fa-windows fa-lg" aria-hidden="true"></i> sign up with microsoft</button>
        </form>
    </div>

</div>




<!-- if user logged in ----------------------------------- -->



<!-- 

    <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">

                        <img class="img-responsive picture" src="https://www.shareicon.net/download/2016/07/10/119669_people.svg">
                        <div>
                            <h5 class="text-bold"></h5>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4 text-left">
                        <div class=" col-xs-6 tital">First Name:</div>
                        <div class=" col-xs-6 ">Aniket</div>
                        <div class="clearfix"></div>
                        <div class="bot-border"></div>

                        <div class="col-xs-6 tital ">Last Name:</div>
                        <div class="col-xs-6"> Modker</div>
                        <div class="clearfix"></div>
                        <div class="bot-border"></div>

                        <div class="col-xs-6 tital ">Email:</div>
                        <div class="col-xs-6"> abc@gmail.com</div>
                        <div class="clearfix"></div>
                        <div class="bot-border"></div>

                        <div class="col-xs-6 tital ">Location:</div>
                        <div class="col-xs-6">Indore</div>
                        <div class="clearfix"></div>
                        <div class="bot-border"></div>

                        <div class="col-xs-6 tital ">Mobile No.:</div>
                        <div class="col-xs-6">1234567890</div>
                        <div class="clearfix"></div>
                        <div class="bot-border"></div>



                    </div>
                </div>    
    </div> -->




<!-- ---------------------------------------------------- -->

      </section>

      <section id="content5" class="tab-content">

              <div class="container">
  <div class="row" ng-controller="currencyconverterINR">
      
        <!-- panel preview -->
        <div class="col-sm-5">
            <h4>Add payment:</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group ">
                        <label for="concept" class="col-sm-3 control-label">Location</label>
                       <!--  <div class="col-sm-5" id="selection">
                            
                            <select class="form-control" id="location" onchange='selectCity(this.value)' name="location">
                               <option value="" disabled selected hidden>State</option>
                                <option>Indore</option>
                                <option>Ujjain</option>
                            </select>
                            <div id="dumdiv">
                <a id="dum"></a>
              </div>
                            
                        </div> -->
                        <!-- <div class="col-sm-4">
                           <select class="form-control" id="location" name="location">
                               <option value="" disabled selected hidden>City</option>
                                <option>Indore</option>
                                <option>Ujjain</option>
                            </select>
                        </div> -->
                          <div class='resp_code frms'>
                              <div id="selection">
                                   <div class="col-sm-5">
                                      <select class="form-control" id="states2" onchange='selectCity2(this.value)'>   
                                      </select>
                                    </div>
                                    <div class="col-sm-4">
                                      <select class="form-control" id="cities2" name="cities"></select>
                                    </div>  
                              </div>
                              <div id="dumdiv">
                                 <a id="dum"></a>
                              </div>
                          </div>
                    </div>
                    <div>
                      <div class="form-group">
                          <label for="description" class="col-sm-3 control-label">Currency</label>
                          <div class="col-sm-9">
                           
                              <select class="form-control" id="sellcurrency" name="sellcurrency" ng-change="showHint1(name, val)" ng-model="name" capitalize>
                                 <option selected >USD</option>
                                  <option>EUR</option>
                                  <option>AED</option>
                              </select>
                          </div>
                      </div> 
                      <div class="form-group">
                          <label for="amount" class="col-sm-3 control-label">Amount</label>
                          <div class="col-sm-9">
                              <input type="number" class="form-control" id="sellamount" name="sellamount" ng-change="calValue1(val)" ng-model="val">
                          </div>
                      </div>
                  </div>    
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="sellstatus" name="sellstatus">
                                <option>Paid</option>
                                <option>Unpaid</option>
                            </select>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Method</label>
                        <div class="col-sm-9">
                          
                             <select class="form-control" id="selloption" name="selloption">
                                <option>NEFT</option>
                                <option>COD</option>
                            </select>
                        </div>
                    </div>   
                    <div class="form-group">
                        <div class="col-sm-12 text-right">
                            <button type="button"  class="btn btn-default preview-add-button-sell">
                                <span class="glyphicon glyphicon-plus"></span> Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>            
        </div> <!-- / panel preview -->
        <div class="col-sm-7">
            <h4>Preview:</h4>
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table sell-preview-table">
                            <thead>
                                <tr>
                                    <th>Location</th>
                                    <th>Currency</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Method</th>
                                </tr>
                            </thead>
                            <tbody></tbody> <!-- preview content goes here-->
                        </table>
                    </div>                            
                </div>
            </div>
            <div class="row text-right">
                <div class="col-xs-12">
                    <h4>Total Amount: <strong>{{netamt}} Rs<!-- <span class="preview-total"></span> --></strong></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr style="border:1px dashed #dddddd;">
                    <button type="button" class="btn btn-primary btn-block button -green center">Order Now</button>
                </div>                
            </div>
             <div class="row">
                <div class="col-xs-12">
                    <hr style="border:1px color:orange dashed #dddddd;">
                    <button type="button" class="btn btn-primary btn-block button -sun center">Request Better Rate</button>
                </div>                
            </div>
        </div>
           </div>
</div>
      
   </section>

<!-- --------------------------------- -->




<div class="modal fade modal-fullscreen  footer-to-bottom" id="myModalFullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog animated zoomInLeft">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title">Procedure</h4>

            </div>
            <div class="modal-body">
               <div class="outer-container">
    <div id="wizard" class="aiia-wizard" style="display: none;">

        <div class="aiia-wizard-step">
            
            <div class="step-content">
                <p>
                    Oh... I know you'll probably say..."Why would you make a plugin that already exists?". :) Well, why not? It's true, there are some great plugins out there that do just that. In fact this plugin was inspired by the excellent "jQuery Steps" plugin, created by Rafael Staib. And I am sure that if you Google you'll find more of them...
                </p>
                <p>
                    However I decided to do one myself as an experiment and because for some reason Rafael's plugin was mising some things that I needed at the moment and there was also a bug when initializing other jQuery plugins within the Steps plugin. For example the Google maps plugin would not initialize for some reason.
                </p>
                <p>
                    With your comments and perhaps your contributions maybe I can make things better and take it to another level, so please, feel free to give your thoughts - positive and negative. I'll be very grateful.
                </p>
            </div>
        </div>

        <div class="aiia-wizard-step">
            <h1>Responsive</h1>
            <div class="step-content">
                The aiiaWizard plugin is Twitter Bootstrap 3.x oriented, thus responsive. It takes your input form elements (or any other HTML element for that matter) and breaks them down into as many steps as you set them to. In fact, in some way the result is very similar to the "Twitter Bootstrap tab plugin, but instead of tabs and corresponding content panels, you have progress buttons and steps. Steps are the elements that hold your form / HTML content.
            </div>
        </div>

        <div class="aiia-wizard-step">
            <h1>Not a carousel</h1>
            <div class="step-content">
                You can also compare this plugin to a carousel, but then again it is not a carousel. Well, maybe I'll update the plugin so that it will have different modes (tabs, slider, carousel...). But right now it serves for one purpose only and that is creating a Wizard with steps, plain and simple. The aiiaPlugin may as well be a hybrid between the Tabs Twitter Bootstrap and the carousel plugin if you like.
            </div>
        </div>

        <div class="aiia-wizard-step">
            <h1>Methods</h1>
            <div class="step-content">
                This plugin allows you to interract with it or to retrieve some information from. The following methods are available:
                <ul>
                    <li>isFinalElementShown,</li>
                    <li>previous,</li>
                    <li>next,</li>
                    <li>first,</li>
                    <li>getActiveStep</li>
                </ul>
            </div>
        </div>

        <div class="aiia-wizard-step">
            <h1>Callbacks</h1>
            <div class="step-content">
                As any good plugin, this one allows you to run your code when the plugin does something. This is a list of currently available  callbacks:
                

            </div>
        </div>

    </div>
</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>






<!---------------------------------------------- -->

<!-- Login ----------------------------------- -->









<!-- line modal -->


<!-- Register ----------------------------- -->





<div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
 
    </div>
    <div class="modal-body">
      
            <!-- content goes here -->
 
<div class="form-modal">
    
    <div class="form-toggle">
        <button id="login-toggle-modal" onclick="modal_toggleLogin()">log in</button>
        <button id="signup-toggle-modal" onclick="modal_toggleSignup()">sign up</button>
    </div>

    <div id="login-form-modal">
        <form>
            <input type="text" class="form-control" placeholder="Enter email or username"/>
            <input type="password" class="form-control" placeholder="Enter password"/>
            <button type="button" class="btn login">login</button>
            <p><a href="javascript:void(0)">Forgotten account</a></p>
            <hr/>
            <button type="button" class="btn -box-sd-effect"> <i class="fa fa-google fa-lg" aria-hidden="true"></i> sign in with google</button>
            <button type="button" class="btn -box-sd-effect"> <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i> sign in with linkedin</button>
            <button type="button" class="btn -box-sd-effect"> <i class="fa fa-windows fa-lg" aria-hidden="true"></i> sign in with microsoft</button>
        </form>
    </div>

    <div id="signup-form-modal">
        <form>
            <input type="email" class="form-control" placeholder="Enter your email"/>
            <input type="text" class="form-control" placeholder="Choose username"/>
            <input type="password" class="form-control" placeholder="Create password"/>
            <button type="button" class="btn signup">create account</button>
            <p>Clicking <strong>create account</strong> means that you are agree to our <a href="javascript:void(0)">terms of services</a>.</p>
            <hr/>
            <button type="button" class="btn -box-sd-effect"> <i class="fa fa-google fa-lg" aria-hidden="true"></i> sign up with google</button>
            <button type="button" class="btn -box-sd-effect"> <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i> sign up with linkedin</button>
            <button type="button" class="btn -box-sd-effect"> <i class="fa fa-windows fa-lg" aria-hidden="true"></i> sign up with microsoft</button>
        </form>
    </div>

</div>
    </div>
    <div class="modal-footer">
      <div class="btn-group btn-group-justified" role="group" aria-label="group button">
       
      </div>
    </div>
  </div>
  </div>
</div>











<!-- ------------------------------------------ -->










  <footer class="footer-distributed">

      <div class="footer-left">

        <h3>Company<span>logo</span></h3>

        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Blog</a>
          ·
          <a href="#">Pricing</a>
          ·
          <a href="#">About</a>
          ·
          <a href="#">Faq</a>
          ·
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Company Name &copy; 2015</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>21 Revolution Street</span> Paris, France</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+1 555 123456</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">support@company.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>
      <!-- <div ng-controller="test">
		<div ng-repeat="item in data">
			<ul>
				<li><b>{{item.name}}</b></li>
				<li>{{item.class}}</li>
			</ul>
		</div>
		</div> -->
      

    </footer>

    <!-- ------------------------------------- -->

    <script type="text/javascript" src="<?php echo base_url() ?>bower_components/angular/angular.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>bower_components/angular-route/angular-route.js"></script>
	<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.2/angular.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/app.js"></script>
    
	
</body>
</html>
