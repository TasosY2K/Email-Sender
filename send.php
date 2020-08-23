<!--
 _____                _ _         
|  ___|              (_) |        
| |__ _ __ ___   __ _ _| |        
|  __| '_ ` _ \ / _` | | |        
| |__| | | | | | (_| | | |        
\____/_| |_| |_|\__,_|_|_|        
                                  
 _____                _           
/  ___|              | |          
\ `--.  ___ _ __   __| | ___ _ __ 
 `--. \/ _ \ '_ \ / _` |/ _ \ '__|
/\__/ /  __/ | | | (_| |  __/ |   
\____/ \___|_| |_|\__,_|\___|_|   
                                                        
By r00t_us3r_198 & d3pl01t
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Email Sender</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Email Sender" />
        <link rel="shortcut icon" href="assets/icon.png">
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
    </head>
    <body>
        <p>Email Sender</p>
        <?php
        if(!empty($_POST)) {
            $to = $_POST['to'];
            $from = $_POST['from'];
            $message = $_POST['message'];
            $subject = $_POST['subject'];
            $headers = "From: " . $from;
            $password = $_POST['pass'];
            if((string) $password == (string) 'sexonthecity35')
            $mail = mail($to,$subject,$message,$headers,$from);
        }

        if($mail) {
            echo "Email has been successfully sent to ".$to;
        } else {
            echo "Email failed to be sent";
        }
        ?>
        <audio autoplay="true" src="assets/music.mp3">
    </body>
</html>