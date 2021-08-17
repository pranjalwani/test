<?php
		include("formdb.php");
		$id =$_GET['id'];
		$del =mysqli_query($conn,"delete from self  where id='$id'");
		if($del)
		{
			mysqli_close($conn);
			header("location:view.php");
			exit;
		}
		else
		{
			echo "error in deleting record";
		}

?>