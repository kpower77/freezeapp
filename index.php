<?php include("includes/header.php") ?>
<?php include("includes/nav.php") ?>

<div class="jumbotron">
	<?php //display_message(); ?>
	<h1 class="text-center"> SyncroSoft</h1>
</div>


<?php 

$sql = "SELECT * FROM users";
$result = query($sql);

confirm($result);

$row = fetch_array($result);

echo $row['username']; //pulling username from database


?>


<?php include("includes/footer.php") ?>