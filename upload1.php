
<form action="upload1.php" enctype="multipart/form-data" method="POST">

<table>
	<tr>
		<td>
		<input name="uploadedimage" type="file">
		</td>
	</tr>
	<tr>
		<td>
		<input name="UploadNow" type="submit" value="Upload Image">
		</td>
	</tr>
</table>
</form>

<?php
include("con1.php");
session_start();

$name1=$_SESSION['name1'];

if(isset($_POST['UploadNow']))
{
	function GetImageExtension($imagetype)
	{
		if(empty($imagetype)) return false;
 
		switch($imagetype)
		{
			case 'image/bmp' :return '.bmp';
			case 'image/gif' :return '.gif';
			case 'image/jpeg':return '.jpg';
			case 'image/png' :return '.png';
  
			default:
			return false;
	    }
    }

	if(!empty($_FILES["uploadedimage"]["name"]))
	{
				$file_name=$_FILES["uploadedimage"]["name"];
				$temp_name=$_FILES["uploadedimage"]["tmp_name"];
				$imgtype=$_FILES["uploadedimage"]["type"];
  
				$ext=GetImageExtension($imgtype);
  
				$imagename=date("d-m-y")."-".time().$ext;
				$target_path="upload/".$imagename;
  
			if(move_uploaded_file($temp_name,$target_path))
				{
					$query_upload="update register set img= '".$target_path."'where username='".$name1."'";
					mysql_query($query_upload) or die("error in $query_upload==  ----> ".mysql_error());
					echo "Image update successfully ";
				}
			else
				{
					exit("Error while uploading image on the server ");
				}
	}
}
?>
<a href="securepage.php">Back </a>








