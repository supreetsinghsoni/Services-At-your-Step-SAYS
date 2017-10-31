<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->  
    <title>View Complaints</title>  
    	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">

</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
<body>  
  
<div class="table-scrol">  
    <h1 align="center">All the Complaints</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>Complaint Id</th>  
            <th>User Name</th>  
            <th>User roll number</th>  
            <th>User room</th>
            <th>Complaint</th>  
            <th>Status</th>  
            <th>Set to processed</th>
        </tr>  
        </thead>  
  
        <?php  
        include("Db_conection.php");  
        $view_complaints_query="select * from complaint";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_complaints_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $complaint_id=$row[0];  
            $user_name=$row[1];  
            $user_roll=$row[2]; 
            $user_room=$row[3]; 
            $complaint=$row[4]; 
            $status=$row[5]; 
  
  
  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $complaint_id;  ?></td>  
            <td><?php echo $user_name;  ?></td>  
            <td><?php echo $user_roll;  ?></td>  
            <td><?php echo $user_room;  ?></td>
            <td><?php echo $complaint;  ?></td>
            <td><?php echo $status;  ?></td>
            
            <td><button class="btn btn-danger">Set to processed</button></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  


<h1><a href="logout.php">Logout here</a> </h1>  

  
</body>  
  
</html> 
