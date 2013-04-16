<?php
	 $ip = $_SERVER['REMOTE_ADDR'];
					//identifiants en local (pour melki, a modifier chez vous)
	if($ip=='127.0.0.1')			
	{
				$connSQL['hote']="localhost";
				$connSQL['util']="root";
				$connSQL['pass']="nokill";
				$connSQL['base']="harry";
	}
	else
	{
				//identifiant online
				$connSQL['hote']="mysql51-81.perso";
				$connSQL['util']="harrywisbdd";
				$connSQL['pass']="LNsdcvR9";
				$connSQL['base']="harrywisbdd";

	}
					
?>