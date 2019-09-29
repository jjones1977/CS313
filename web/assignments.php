<!DOCTYPE html>
<html>
    
    <head>
        <script src="homepagejs.js"></script>
        <link rel="stylesheet" type="text/css" href="homepagecss.css">
        <title>Homepage</title>
    </head>
    
    <body>
        <?php
           date_default_timezone_set('America/Los_Angeles');
           $date = date('m-d-y');
           $day = date('l');
           echo 'The current date is '.$day;
           echo ', '.$date;
        ?>
        
        <p>Coming Soon</p>
    </body>
    
</html>