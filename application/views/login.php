<?php 
  // session_start();
  // if(isset($_SESSION['name'])){
  //   header('Location: http://localhost/SciForex/index.php/Sellerinfo/thanks');
  // }
 ?>
<!DOCTYPE html>
<html>
<head>
   
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/login.css">
</head>
<body>

<div class="form-wrap">
  <form action="<?php echo base_url() ?>index.php/Sellerinfo/basicinfo/" method="post" enctype="multipart/form-data">
    <div class="title">
      <h1>LET US CONTACT YOU</h1>
    </div>
      <div class="form-item-wrap">
        <div class="form-item">
          <div class="item-title"><label  class="required" for="">NAME</label></div>
          <div class="item">
            <input type="text" name="name" value="<?php echo $seller['name'] ?>" placeholder="Enter your name here" required/>
          </div>
        </div>
        <div class="form-item">
          <div class="item-title"><label class="required" for="">EMAIL ADDRESS</label></div>
          <div class="item">
            <input type="text" name="email" value="<?php echo $seller['email'] ?>" placeholder="Enter your email here" required/>
          </div>
        </div>
        <div class="form-item">
          <div class="item-title"><label class="required" for="">PHONE NUMBER</label></div>
          <div class="item">
            <input type="text" name="phone" value="<?php echo $seller['phone'] ?>" placeholder="Enter your phone number here" required/>
          </div>
        </div>
        
        <div class="btn-wrap">
          <div class="btn-push form-wrap"></div>
          <button><span>SEND</span></button>
        </div>
    </div>
    
  </form>
</div>
</form>
</body>
</html>


