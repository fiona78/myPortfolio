<?php
include('config/initialise.php');

print_r($_GET);
if (isset($_GET['page'])== true){//if page='value' is set/defined, then give that value to $page
	$page = $_GET['page'];//eg. in URL (page=about) so $page = about

} else {
	//else, use a default value of home to go to home page
	$page ='home';
	
}
$controller_path = 'application/controllers/'.$page.'_controller.php';
if(file_exists($controller_path)) {//this checks if file exists  
//file does exist
include($controller_path);
} else {
	//file does not exist and include 404 error page
	include('application/controllers/404.php');	
};
?>