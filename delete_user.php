<?php 
include('koneksi.php');

$user_id = $_POST['idProduct'];
$sql = "DELETE FROM product WHERE idProduct='$user_id'";
$delQuery =mysqli_query($koneksi,$sql);
if($delQuery==true)
{
	 $data = array(
        'status'=>'success',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'failed',
      
    );

    echo json_encode($data);
} 

?>