<?php 
  // session_start();
  // if(isset($_SESSION['phone'])){
  //   header('Location: http://localhost/SciForex/index.php/Sellerinfo/updateprof');
  // }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/update_profile.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/login.css">
<script type="text/javascript" src="<?php echo base_url() ?>/assets/js/update_profile.js"></script>
<body>

  <h2 style="margin-top: 15px;">Final Step</h2>
<form action="<?php echo base_url() ?>index.php/Sellerinfo/additionalinfo?phone=<?php echo $phone ?>" method="post" enctype="multipart/form-data" style="margin-top: -30px;">
  <section class="left">
     <div class="input-container">
      <label for="address">*Buisness Address</label>
      <input type="text" name="businessaddress" value="<?php echo $seller_more['businessaddress']; ?>" placeholder="Enter your Business Address here" required/><span class="error" style="color: red; font-size: 15px;"><?php echo $err['businessaddress'] ?></span>
    </div>
    <div class="input-container">
      <label for="buisness">*Buisness Name</label>
      <input type="text" name="businessname" value="<?php echo $seller_more['businessname']; ?>" placeholder="Enter your Business name here" required/><span class="error" style="color: red; font-size: 15px;"><?php echo $err['businessname'] ?></span>
    </div>
    <div class="input-container">
       <label for="Buisness_type">*Buisness Type</label>
       <select  onchange="java_script_:show(this.options[this.selectedIndex].value)" name="businesstype" class="input-container" required>
         <option>Pvt Ltd.</option>
         <option>Partnership</option>
         <option>Individual</option>
         <option>Proprietor</option>
       </select>
    </div>
    <div id='hiddenDiv'  class="input-container">
      <label for="ADHAR" required>*ADHAR CARD NO.</label>
      <input type="number" name="aadharcard" value="<?php echo $seller_more['aadharcard']; ?>" placeholder="Enter your Aadhar Card Number here" required/><span class="error" style="color: red; font-size: 15px;"><?php echo $err['aadharcard'] ?></span>
    </div>
  </section>
  <section class="right">
    <div class="input-container">
      <label for="PAN">*PAN CARD NO.</label>
      <input type="text" name="pancard" value="<?php echo $seller_more['pancard']; ?>" placeholder="Enter your Pan Card Number here" required/><span class="error" style="color: red; font-size: 15px;"><?php echo $err['pancard'] ?></span>
    </div>
    <div class="input-container">
      <label for="phone">*RBI LICENSE NO.</label>
      <input type="number" name="rbino" value="<?php echo $seller_more['rbino']; ?>" placeholder="Enter your RBI Number here" required/><span class="error" style="color: red; font-size: 15px;"><?php echo $err['rbino'] ?></span>
    </div>
    <div class="input-container">
      <label for="pin">*PIN CODE</label>
      <input type="text" name="pincode" value="<?php echo $seller_more['pincode']; ?>" placeholder="Enter your Pin Code Number here" required/><span class="error" style="color: red; font-size: 15px;"><?php echo $err['pincode'] ?></span>
    </div>
    <div class="input-container">
      <label>Note :</label>
      At the time of verification there may be the possibility of checking more documents apart of these. Please kindly support and do maintain the copies of all these documents.
    </div>
  </section>
  <div class="send-container">
   <Button class="btn btn-info">Send</Button>
    </div>
  
</form>

</body>
</html>