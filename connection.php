 <?php 
if(isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST']=='localhost'){
	$conn=new mysqli("localhost","root","","db_mycranium");
}
// elseif(isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST']=='localhost:8080'){
// 	$conn=new mysqli("localhost","root","","db_mycranium");
// }
else{
	$conn=new MySQLi("localhost","bssrauoj_craniumapp","Ic@nsee1","bssrauoj_craniumapp");
}
if($conn->connect_errno){
	echo "connection failed";
}
date_default_timezone_set('Asia/Kolkata');
?> 
                                                                   