<?php 
	require('partials/head.php');
?>
<h1>Submit Your Name</h1>
<form action="names" method="post" accept-charset="utf-8">
	<input type="text" name="name" value="">
	<button type="submit">Submit</button>	
</form>
<?php 
foreach ($users as $key => $value) {
	echo $value->name;
}
?>
<?php 
	require('partials/footer.php');
?>	