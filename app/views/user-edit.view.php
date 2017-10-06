<?php 
	require('partials/head.php');
?>

<div class="container">
	<h1> Edit Users </h1>
	<form action="/users/edit" method="post">
		<input type="text" name="id" value="<?php echo $_GET['id'] ?>">
	  	<div class="form-group">
	    	<label for="name">Name: </label>
	    	<input type="text" class="form-control" value="<?php echo $user[0]->name; ?>" id="email" name="name">
	 	 </div>
	  	<div class="form-group">
	    	<label for="phone">Phone:</label>
	    	<input type="text" class="form-control" value="<?php echo $user[0]->phone; ?>" id="pwd" name="phone">
	  	</div>
	  	<div class="form-group">
	    	<label for="pwd">Address:</label>
	    	<input type="text" class="form-control" value="<?php echo $user[0]->address; ?>" id="pwd" name="address">
	  	</div>
	  	<div class="form-group text-center">
	  		<button type="submit" class="btn btn-success">Edit</button>
	  	</div>
	</form>
</div>

<?php 
	require('partials/footer.php');
?>	
