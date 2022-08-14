 <?php
 require_once 'controllers/authController.php';
 include('database_connection.php');
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Posts</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="project.css">
 </head>
 <body>
     
    <!-- Page Content -->     
 <div>          							
    <div class="input-group">
        <form method="post" action="insert.php">
            Title:<br>
            <input type="text" name="title">
            <br>
            Type:<br>
            <input type="text" name="type">
            <br>
            Content:<br>
            <input type="text" name="content">
            <br><br>
            <input type="submit" name="save" value="submit">
        </form>
    </div>

    <div class="header">
        <h3>Tip</h3>
        <div class="filter">
        <?php

        $query = "SELECT DISTINCT(type) FROM comentarii ORDER BY type";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        foreach($result as $row)
        {
        ?>
        <div class="list-group-item checkbox">
            <label><input type="checkbox" class="common_selector tip" value="<?php echo $row['type']; ?>"  > <?php echo $row['type']; ?></label>
        </div>
        <?php
        }

        ?>
        </div>
    </div>
    

<div>
    <br />
    <div class="filter_data">

    <a href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
    </div>
</div>
</div>

<style>
#loading
{
text-align:center; 
background: url('loader.gif') no-repeat center; 
height: 150px;
}
</style>

<script>
$(document).ready(function(){

filter_data();

function filter_data()
{
$('.filter_data').html('<div id="loading" style="" ></div>');
var action = 'fetch_data';
var tip = get_filter('tip');
$.ajax({
url:"fetch_data.php",
method:"POST",
data:{action:action, tip:tip},
success:function(data){
    $('.filter_data').html(data);
}
});
}

function get_filter(class_name)
{
var filter = [];
$('.'+class_name+':checked').each(function(){
filter.push($(this).val());
});
return filter;
}

$('.common_selector').click(function(){
filter_data();
});

});
</script>

 </body>
 </html>
 
 