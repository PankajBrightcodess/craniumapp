<?php 
	unset($_COOKIE["Cookie"]);
    setcookie("Cookie",$data,time() - (86400 * 90),"/");
    unset($_COOKIE["Brightcodess_com"]);
    unset($_COOKIE["EmailId"]);
    unset($_COOKIE["PHPSESSID"]);

    // echo $_COOKIE["Brightcodess_com"]; die;

    if(empty($_COOKIE['Cookie'])){
    	header('location:index.php?check=1');
    }
    else{
    	header('location:home.php');
    }

	
?>