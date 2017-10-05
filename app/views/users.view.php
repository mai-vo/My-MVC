<?php 
	require('partials/head.php');
?>


<div class="container">
	<h1> Add Users </h1>
	<form action="users" method="post">
	  	<div class="form-group">
	    	<label for="name">Name: </label>
	    	<input type="text" class="form-control" id="email" name="name">
	 	 </div>
	  	<div class="form-group">
	    	<label for="phone">Phone:</label>
	    	<input type="text" class="form-control" id="pwd" name="phone">
	  	</div>
	  	<div class="form-group">
	    	<label for="pwd">Address:</label>
	    	<input type="text" class="form-control" id="pwd" name="address">
	  	</div>
	  	<div class="form-group text-center">
	  		<button type="submit" class="btn btn-success">Submit</button>
	  	</div>
	</form>


  	<h2>Users Table</h2>           
  	<table class="table table-bordered">
    	<thead>
      		<tr>
        		<th>Name</th>
        		<th>Phone</th>
        		<th>Address</th>
     		 </tr>
    	</thead>
    	<tbody>
    		<?php 
    			foreach ($users as $item) {
    				
    			
    		?>
      		<tr>
        		<td><?php echo $item->name ?></td>
        		<td><?php echo $item->phone ?></td>
        		<td><?php echo $item->address ?></td>
      		</tr>
	    	<?php } ?>
    	</tbody>
 	</table>
</div>

<?php 
	require('partials/footer.php');
?>	
