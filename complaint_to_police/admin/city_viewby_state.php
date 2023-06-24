<option><?php echo"Select"; ?></option>
<?php 
require '../common/connection.php';
//echo "id Passed";
$sid=$_POST['state_id'];

$select="select * from city_tbl where SID='".$sid."' and ISACTIVE=1";
$query=mysqli_query($conn,$select);

if (mysqli_num_rows($query)>0) {
	
	while ($row=mysqli_fetch_assoc($query)) {
		
	
 ?>
 <option value="<?php echo$row['ID']; ?>"><?php echo $row['CITY_NAME']; ?></option>
 <?php 
  }
}
  ?>
