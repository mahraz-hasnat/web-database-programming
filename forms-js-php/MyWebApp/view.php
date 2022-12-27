<html>
 <title>All Registered People</title>
  <body>
  <h1>All Students</h1>
     <table>
	        <thead>
			     <tr> 
				   
					 <th>NAME</th>
					 <th>PHONE NO</th>
		 
		         </tr>
	        </thead>
			<?php
			include 'dbconnection.php';
			$view_sql= mysqli_query($con,"SELECT * FROM student");
			$array_of_datapoints = mysqli_fetch_all($view_sql, MYSQLI_ASSOC);
			
			?>
			<?php foreach($array_of_datapoints as $show):?>
			<tbody>
			     <tr> 
				    
					 <td><?php echo $show['name'] ?></td>
					 <td><?php echo $show['phoneNo'] ?></td>
		 
		         </tr>
			
			</tbody>
			<?php endforeach ; ?>
	 
	 </table>
  
  
  
  </body>
</html>