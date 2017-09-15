<?php

	//database stuff, if I can ever get admin
	
	$authorized = TRUE; //temporary until we get DB setup
	
	//do login check - this will set $authorized to TRUE|FALSE
	
	if($authorized) {
        //we are good
    } else {
        //we are not good
        header("location:/login.php"); //kick them to the login page without any ifs, ands, or buts
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>LUSOA DB</title>
        
        <?require('inc/navbar.php');?>
        
    </head>

    <body>
    Hello World
    </body>

</html>
