<?php
// echo dirname(__FILE__);

require(dirname(__FILE__).'/vendor/autoload.php');
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $input = $_POST['input1'];
    $options = array(
        'cluster' => 'ap2',
        'encrypted' => true
      );
      $pusher = new Pusher\Pusher(
        '5d8f9cf647e88c39dd1c',
        '200b0996c193a81b7896',
        '463727',
        $options
      );
    $msg = array('mess'=>'Bidding Started','info'=>$input);
    $data['message'] = $msg;
    $pusher->trigger('my-channel', 'my-event', $data);
}


  
?>

<html>
    <head>
        <title>Send Noti</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="input1" value="Click on button to Participate" hidden>
            Get Better Rate : <input type="submit" value="submit" name="button">
        </form>
    </body>
</html
