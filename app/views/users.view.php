<?php 
	require('partials/head.php');
?>


<div class="container">
  	<h2>Users Table</h2>
	<a href="users/add" title="" class="btn btn-info">Add User</a>
	</br>
	</br>
	</br>
  	<table class="table table-bordered">
    	<thead>
      		<tr>
      			<th>Id</th>
        		<th>Name</th>
        		<th>Phone</th>
        		<th>Address</th>
        		<th>Action</th>
     		 </tr>
    	</thead>
    	<tbody>
    		<?php 
    			foreach ($users as $item){	
    		?>
      		<tr>
        		<td><?php echo $item->id ?></td>
        		<td><?php echo $item->name ?></td>
        		<td><?php echo $item->phone ?></td>
        		<td><?php echo $item->address ?></td>
        		<td>
        			<a href="users/edit?id=<?php echo $item->id; ?>" title="" class="btn btn-primary">Update</a>
        			<a href="users/delete?id=<?php echo $item->id; ?>" title="" class="btn btn-danger">Delete</a>
        		</td>
      		</tr>
	    	<?php } ?>
    	</tbody>
 	</table>
</div>

<?php 
	require('partials/footer.php');
?>	
