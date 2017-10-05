<?php 
	require('partials/head.php');
?>
<h1>Users </h1>
<form action="users" method="post" accept-charset="utf-8">
	<input type="text" name="name" value="">
	<button type="submit">Submit</button>	
</form>
<?php 
foreach ($users as $key => $value) {
	echo $value->name."</br>";
}
?>
<?php 
	require('partials/footer.php');
?>	
