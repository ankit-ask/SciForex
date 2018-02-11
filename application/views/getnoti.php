<html>
    <head>
        <title>pusher test</title>

        <script src="//js.pusher.com/3.1/pusher.min.js" type="text/javascript"></script>
        <script src="//code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"> 
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <script>
            var a = "<?php echo "yeeeeeeeeeee!!!!!!!" ?>";
            // alert(a);
            
            Pusher.logToConsole = true;
            var pusher = new Pusher('5d8f9cf647e88c39dd1c', {
            cluster: 'ap2',
            encrypted: true
            });

            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function(data) {
            $('div.notification').text(data.message.mess);
            if(data.message){
                document.getElementById("sound").innerHTML='<audio autoplay="autoplay">\
                <source src="<?php echo base_url() ?>/assets/sounds/to-the-point.mp3" type="audio/mpeg" />\
                <source src="<?php echo base_url() ?>/assets/sounds/to-the-point.ogg" type="audio/ogg" />\
                <embed hidden="true" autostart="true" loop="false" \
                src="<?php echo base_url() ?>/assets/sounds/to-the-point.mp3" /></audio>';
                
                toastr.success(data.message.mess+" - "+data.message.info);
                toastr.success(data.messsage.info);
            }
           
            });
        </script>    

    </head>
    <body>
        <h2><b>Notification Tutorial : </b></h2>
        <div class="notification"></div>
        <div id="sound"></div>
    </body>
</html>