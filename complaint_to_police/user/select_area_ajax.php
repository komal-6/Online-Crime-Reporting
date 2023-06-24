<option>select</option>
<?php 
require '../common/connection.php';

$city=$_POST['city'];
$select="select * from area_tbl where ISACTIVE=1 and CID=$city";
$query= mysqli_query($conn,$select);

if (mysqli_num_rows($query)>0) {

	while ($row=mysqli_fetch_assoc($query)) {
 ?>
 <option value="<?php echo $row['ID']; ?>"><?php echo $row['AREA_NAME']; ?></option>
 <?php 
}
  
}
 ?>