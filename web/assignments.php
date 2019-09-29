<!DOCTYPE html>
<html>
    
    <head>
        <script src="homepagejs.js"></script>
        <link rel="stylesheet" type="text/css" href="homepagecss.css">
        <title>Homepage</title>
    </head>
    
    <body>
        <?php
           date_default_timezone_set('PHP');
           $date = date('m-d-y');
           $time = date('H:i:s');
           $day = date('l');
           echo 'The current day is'.$day;
           echo 'The current date is'.$date;
           echo 'The current time is'.$time;
        ?>
        
        <p>Coming Soon</p>
    </body>
    
</html>