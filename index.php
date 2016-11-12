<?php 
require('dbconfig.php');?>
<!DOCTYPE html>
<html>
    <head>
        <title>Workshop=TUHIN</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <body>
        
        <?php 

         ?>
        
        <div class="container">
            <h2> All Student Data</h2>
            <a type="button" class="btn btn-success" href="form.php">ADD</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Registration No</th>
                    </tr>
                </thead>
                <tbody>
                	

                	<?php 
                	$sql="Select *From info";
                	$result=$conn->query($sql);
                	if($result->num_rows>0){

					while($row=$result->fetch_assoc()){
							echo '<tr class="danger">
							<td>'.$row["name"].'</td>
							<td>'.$row["email"].'</td>
							<td>'.$row["dept"].'</td>
							<td>'.$row["reg"].'</td>
							</tr>';
						}

                	}



                 ?>


                </tbody>




        </div>
    </body>

</html>

 