    <?php 
  require '../common/connection.php';
  if (!isset($_GET['id'])) {
    header("location:area_view.php");
    exit();
  }
    $id=$_GET['id'];
    $update="update area_tbl set ISACTIVE=2 where ID=$id";
    $query=mysqli_query($conn,$update);
    if ($query) {
    echo "updated";
    header("location:area_view.php");
    exit();
    }
    else{
    	echo "error";
    }
 ?>