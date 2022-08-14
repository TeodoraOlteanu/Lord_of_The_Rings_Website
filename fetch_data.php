<?php
include('database_connection.php');
include_once 'db_crud.php';

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM comentarii
	";
	if(isset($_POST["tip"]))
	{
		$tip_filter = implode("','", $_POST["tip"]);
		$query .= "
		 WHERE type IN('".$tip_filter."')
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-sm-4 col-lg-3 col-md-3">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px;">
					<p align="center"><strong><a href="#">'. $row["title"] .'</a></strong></p>
					<p align="center">'. $row["content"] .'</p>
					<a href=delete.php?id='.$row['id'].'>Delete</a>
				</div>
			</div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>