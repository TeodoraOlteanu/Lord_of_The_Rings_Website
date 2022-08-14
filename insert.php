<?php
include_once 'db_crud.php';
if(isset($_POST['save']))
{	 
	 $title = $_POST['title'];
	 $type = $_POST['type'];
	 $content = $_POST['content'];
	 $sql = "INSERT INTO comentarii (title,type,content)
	 VALUES ('$title','$type','$content')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
header("Location: posts.php");
?>