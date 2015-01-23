<?php
include('db.php');
session_start();
$personid = '1'; //$session id
$path = "../../images/users/";

	$valid_formats = array("jpg", "png", "gif", "bmp");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(2048*2048))
						{
							$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
							$tmp = $_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
								//mysqli_query($liveDB,"UPDATE users SET picture = '$actual_image_name' WHERE personid = '$personid'");
									
									echo "<img src='".$path.$actual_image_name."'  class='preview img-circle img-responsive'>";
								}
							else
								echo "failed";
						}
						else
						echo "Image file max size 2 MB";					
						}
						else
						echo "Invalid file format..";	
				}
				
			else
				echo "Please select image..!";
				
			exit;
		}

?>