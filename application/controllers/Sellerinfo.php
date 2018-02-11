<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sellerinfo extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
    {
      parent::__construct();
      #$this->load->helper('url');
      $this->load->model('Seller_models');
    }

	public function base_url(){
     return "http://localhost/SciForex/";
    }

	public function login()
	{
		$err = array('name' => '', 'email' => '', 'phone' => '');
		$seller = array('name' => '', 'email' => '', 'phone' => '');
		$data['err'] = $err;
		$data['seller'] = $seller;
		$this->load->view('login', $data);
	}

	public function thanks()
	{
		$this->load->view('thankyou');
	}

	public function updateprof()
	{
		$this->load->view('thankyou_updateprofile');
	}

	public function prof()
	{
		$err = array('pancard' => '', 'aadharcard' => '', 'rbino' => '', 'businessname' => '',
	    'businessaddress' => '', 'businesstype' => '', 'pincode' => '');

	    $seller_more = array('pancard' => '', 'aadharcard' => '', 'rbino' => '', 'businessname' => '',
	    'businessaddress' => '', 'businesstype' => '', 'pincode' => '');

	    if(isset($_GET['phone'])){
	    	$phone = $_GET['phone'];
	    }
	    else{
	    	$phone = null;
	    }

	    $data['err'] = $err;
	    $data['phone'] = $phone;
		$data['seller_more'] = $seller_more;

		$this->load->view('update_profile',$data);
	}

	public function basicinfo()
	{
		$err = array('name' => '', 'email' => '', 'phone' => '');
		$seller = array('name' => '', 'email' => '', 'phone' => '');
		$flag = true;

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];

			if ($name == null){
	            $err['name'] = '*Please Enter Name';
	            $flag = false;
	          }
	          else{
	            if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
	              $err['name'] = '*Please Enter Only Alphabets';
	              $flag = false;
	            }
	        }

	        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err['email'] = '*Invalid email format';
            $flag = false;
          	}

          	if ($phone == null){
	            $err['phone'] = '*Please Enter Mobileno';
	            $flag = false;
	          }
	          else{
	            if(!preg_match('/^\d+\.?\d*$/', $phone)){
	              $err['phone'] = '*Please Enter Only Numbers';
	              $flag = false;
	            }
	            else{
	              if(strlen((string)$phone)!=10){
	                $err['phone'] = '*Please enter ten digit mobile number';
	                $flag = false;
	              }
	            }
	        }

	        $seller['name'] = $name;
	        $seller['email'] = $email;
	        $seller['phone'] = $phone;

	        if($flag){

	        	$result = $this->Seller_models->insert_seller($seller);
                if($result[0]){
                  $to = $email;
				  $subject = 'SciForex Seller Registraion';
				  $message = '<html><body>
				  <pre>Hello Sir,</pre>
				  <pre>Hope you are doing well!</pre> 
				  <pre>Please click on the link to complete the registraion process</pre>
				  <pre><a src="'.'http://localhost/SciForex/index.php/Sellerinfo/prof?phone='.$phone.'"'.
				  'Click me to complete the registration process</a> <pre>Note :</pre> 
				  <pre>You have to carry all the valid ID proofs for the verification purpose, when our person reachs to your door, Thanks! </pre> </body></html>';
			      $headers = 'From: webmaster@example.com' . "\r\n" .
					'Reply-To: webmaster@example.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();

				  mail($to, $subject, $message, $headers);	
                  session_start();
                  $_SESSION['name'] = $name;	
                  header('location:'.$this->base_url()."index.php/Sellerinfo/thanks".$this->login());
                }

	        }
	        else{
	        	$data['err'] = $err;
	        	$data['seller'] = $seller;
	        	echo "<script>alert('Kindly check again somewhere you are mistaken!')</script>";
	        	$this->load->view('login',$data);
	        }
		}
	}

	public function additionalinfo(){
		$err = array('pancard' => '', 'aadharcard' => '', 'rbino' => '', 'businessname' => '',
	    'businessaddress' => '', 'businesstype' => '', 'pincode' => '');

	    $seller_more = array('pancard' => '', 'aadharcard' => '', 'rbino' => '', 'businessname' => '',
	    'businessaddress' => '', 'businesstype' => '', 'pincode' => '');

	    $flag = true;

	    if($_SERVER['REQUEST_METHOD'] == 'POST'){

	    	$pancard = $_POST['pancard'];
	    	if(isset($_POST['aadharcard'])){
	    		$aadharcard = $_POST['aadharcard'];
	    	}
	    	else{
	    		$aadharcard = null;
	    	}
	    	$rbino = $_POST['rbino'];
	    	$businessname = $_POST['businessname'];
	    	$businessaddress = $_POST['businessaddress'];
	    	$businesstype = $_POST['businesstype'];
	    	$pincode = $_POST['pincode'];
	    	$phone = $_GET['phone'];

	    	if ($pancard == null){
	            $err['pancard'] = '*Please Enter Pancard Number';
	            $flag = false;
	           }
	          else{
	            if(!preg_match('/^[a-zA-Z0-9\s]+$/', $pancard)){
	              $err['pancard'] = '*Please Enter Only Alphanumeric';
	              $flag = false;
	            }
	            else{
	              if(strlen($pancard)!=10){
	                $err['pancard'] = '*Please enter ten digit Pancard number';
	                $flag = false;
	              }
	            }
	        }

	        if ($aadharcard != null){
	          
	            if(!preg_match('/^\d+\.?\d*$/', $aadharcard)){
	              $err['aadharcard'] = '*Please Enter Only Numbers';
	              $flag = false;
	            }
	            else{
	              if(strlen((string)$aadharcard)!=12){
	                $err['aadharcard'] = '*Please enter 12 digit AadharCard number';
	                $flag = false;
	              }
	            }
	        }

	        if ($rbino == null){
	            $err['rbino'] = '*Please Enter RBI Number';
	            $flag = false;
	          }
	          else{
	            if(!preg_match('/^\d+\.?\d*$/', $rbino)){
	              $err['rbino'] = '*Please Enter Only Numbers';
	              $flag = false;
	            }
	            else{
	              if(strlen((string)$rbino)>18){
	                $err['rbino'] = '*Please enter valid rbi number';
	                $flag = false;
	              }
	            }
	        }

	        if ($businessname == null){
	            $err['businessname'] = '*Please Enter Business Name';
	            $flag = false;
	          }
	          else{
	            if(!preg_match('/^[a-zA-Z\s]+$/', $businessname)){
	              $err['businessname'] = '*Please Enter Only Alphabets';
	              $flag = false;
	            }
	        }

	        if ($businessaddress == null) {
	        	$err['businessaddress'] = '*Please Enter Business Address';
	            $flag = false;	        
	        }

	        if ($businesstype == null) {
	        	$err['businesstype'] = '*Please Select Business Type';
	            $flag = false;	        
	        }

	        if ($pincode == null){
	            $err['pincode'] = '*Please Enter Pincode Number';
	            $flag = false;
	          }
	          else{
	            if(!preg_match('/^\d+\.?\d*$/', $pincode)){
	              $err['pincode'] = '*Please Enter Only Numbers';
	              $flag = false;
	            }
	            else{
	              if(strlen((string)$pincode) != 6){
	                $err['pincode'] = '*Please enter 6 digit Pincode number';
	                $flag = false;
	              }
	            }
	        }

	        $seller_more['pancard'] = $pancard;
	        $seller_more['aadharcard'] = $aadharcard;
	        $seller_more['rbino'] = $rbino;
	        $seller_more['businessname'] = $businessname;
	        $seller_more['businessaddress'] = $businessaddress;
	        $seller_more['businesstype'] = $businesstype;
	        $seller_more['pincode'] = $pincode;

	        if($flag){
	        	$result = $this->Seller_models->insertmore_seller($seller_more, $phone);
                if($result[0]){
                	session_start();
                  	$_SESSION['phone'] = $phone;	
                  	header('location:'.$this->base_url()."index.php/Sellerinfo/updateprof".$this->prof());
                }	
	        }
	        else{

	        	$data['err'] = $err;
	        	$data['seller_more'] = $seller_more;
	        	$data['phone'] = $phone;
	        	echo "<script>alert('Kindly check again somewhere you are mistaken!')</script>";
	        	$this->load->view('update_profile',$data);

	        }

		}
		else{
			header('location:'.$this->base_url()."index.php/Sellerinfo/updateprof".$this->prof());
		}
	}
}