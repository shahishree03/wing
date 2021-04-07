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
    <center>
        <h1> Search for single data /record</h1>
        <div class="container">
            <form action="" method ="POST">
            <input type ="text"  class="btn" name="emp_id" placeholder="Enter By Id">
            <input type="submit" name="search" class="btn" value="search by id">
</form>


<?php 

$con = mysqli_connect("localhost", "root", "", "attendance");

if(isset($_POST['search']))
{
$id=$_POST["emp_id"];
$query="SELECT * FROM employee_details where emp_id='$id'";
$query_run=mysqli_query($con,$query);
$emp_id="";
$emp_name="";
$emp_email="";
$emp_designation="";
$emp_dateofjoining="";
$emp_phone="";
$emp_address="";?>

<table>

<tr>
<th>Id</th>
<th>Name</th>
<th>email</th>
<th>designation</th>
<th>dateofjoining</th>
<th>phone</th>
<th>address</th>
</tr>
<br>

<?php
while($row=mysqli_fetch_array($query_run))
{
  $emp_id=$row['emp_id'];
  $emp_name=$row['emp_name'];
  $emp_email=$row['emp_email'];
  $emp_designation=$row['emp_designation'];
  $emp_dateofjoining=$row['emp_dateofjoining'];
  $emp_phone=$row['emp_phone'];
  $emp_address=$row['emp_address'];
    ?>
    
<tr>
<td><?php echo $emp_id?></td>
<td><?php echo $emp_name?></td>
<td><?php echo $emp_email?></td>
<td><?php echo $emp_designation?></td>
<td><?php echo $emp_dateofjoining?></td>
<td><?php echo $emp_phone?></td>
<td><?php echo $emp_address?></td>
</tr>
<?php
}
}
?>

</table>
        </div>
    </center>
  </head>
  <body>
  </body>
</html>
