<?php 
if (empty($_FILES)) {
	exit("no find");
	
}echo $_FILES['pic']['error'] == 0 ?'success':'fail';





 ?>