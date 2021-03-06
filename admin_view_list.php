<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" href="admin_view_list.css">
    
  </head>
  <body>

<div class="main-div">
<a class="btn btn-primary" href="admin_search.php" role="button">Search single data</a>
<br>
<br>
<h1>List of employee candidate</h1>
<div class ="center-div">

<div class="table-responsive">
<table class="table table-bordered">
<thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>email</th>
<th>designation</th>
<th>dateofjoining</th>
<th>phone</th>
<th>address</th>
</tr>
</thead>
<tbody>
<?php

/*if (isset($_GET['emp_designation'])) {
    $desg = $_GET['emp_designation'];*/
    $con = mysqli_connect("localhost", "root", "", "attendance");

  
  $sql= "SELECT * FROM employee_details where emp_check ='1'";
    $query=mysqli_query($con,$sql);
    $emp_chk="";
    
      while($res=mysqli_fetch_array($query)){
        $emp_chk=$res['emp_designation'];
      }
      $sql_query="SELECT * FROM employee_details where emp_designation ='$emp_chk'";
      $r1=mysqli_query($con, $sql_query);
      $id_use="";
      $name_use="";
      $email_use="";
      $dseg_use="";
      $doj_use="";
      $phone_use="";
      $address_use="";
     
      
      while($row = mysqli_fetch_array($r1)){
        $id_use=$row['emp_id'];
        $name_use=$row['emp_name'];
        $email_use=$row['emp_email'];
        $dseg_use=$row['emp_designation'];
        
        $doj_use=$row['emp_dateofjoining'];
        $phone_use=$row['emp_phone'];
        $address_use=$row['emp_address'];
      


?>

<tr>
<td><?php echo $id_use?></td>
<td><?php echo $name_use?></td>
<td><?php echo $email_use?></td>
<td><?php echo $dseg_use?></td>
<td><?php echo $doj_use?></td>
<td><?php echo $phone_use?></td>
<td><?php echo $address_use?></td>
</tr>
<?php 
}


?>

</tbody>
</table>
</div>
</div>
</div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
  </body>
</html>
