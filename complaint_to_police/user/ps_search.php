<?php  
require '../common/connection.php';
// if ($_POST["psname"]=="") {
// 	echo "Error!!! Please Enter Police Station Name";
// 	exit();
// }
// else{
// 	$psname=$_POST["psname"];
// }
	
if ($_POST["city"]=="") {
	echo "Error!!!Please Select City";
	exit();
}
else{
	$city=$_POST["city"]; 
}

if ($_POST["area"]=="") {
  echo "Error!!!Please Select Area";
  exit();
}
else{
	$area=$_POST["area"];
}


$Select="select * from policestation_tbl where 
 CITY_ID='".$city."' and AREA_ID='".$area."' and ISACTIVE=1 ";
$query=mysqli_query($conn,$Select);
if (mysqli_num_rows($query)>0) {
while ($row=mysqli_fetch_assoc($query)) {
	
?>
Police Station Name
<input type="text" name="txt_pid" value="<?php echo$row['ID']; ?>">
<input type="" name="" class="form-control" value="<?php echo $row['PS_NAME']; ?>" disabled>
<?php 
}
}

else
{
	echo "Data not Found";
}

 ?>