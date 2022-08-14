<?php
include_once 'db_crud.php';

$sql = "DELETE FROM comentarii WHERE id='".$_GET['id']."' ";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    echo $sql;
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
header("Location: posts.php");
?>

