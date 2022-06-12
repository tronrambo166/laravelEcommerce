<?php   
session_start();
include "universals/sessions.php";



	setcookie('log','logged',time()-(86400),'/');
	//setcookie('logstd','logged',time()-(86400),'/');
	
     Session::destroy();




?>