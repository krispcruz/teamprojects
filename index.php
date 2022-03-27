<html>
<head>
<meta name="viewport" content="width=device-width" />
<title>Raspberry Pi WiFi Controlled Camera</title>
</head>
       <body>
       <center><h1>Control Camera using Raspberry Pi Webserver</h1>      
         <form method="get" action="index.php">                
            <input type="submit" style = "font-size: 14 pt" value="OFF" name="off">
            <input type="submit" style = "font-size: 14 pt" value="ON" name="on">
         </form>​​​
                         </center>
<?php
    shell_exec("/usr/local/bin/gpio -g mode 27 out");
    if(isset($_GET['off']))
        {
                        echo "LED is off";
                        shell_exec("/usr/local/bin/gpio -g write 27 0");
        }
            else if(isset($_GET['on']))
            {
                        echo "Taking a picture...";
                        shell_exec("raspistill --output ~/var/www/html/webservercapture.jpg -w 3280 -h 2464");
            }
?>
   </body>
</html>
