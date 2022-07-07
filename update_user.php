<?php 
include('koneksi.php');
$product = $_POST['product'];
$kategori = $_POST['kategori'];
$price = $_POST['price'];
$image = $_POST['image'];
$idProduct = $_POST['idProduct'];

$sql = "UPDATE `product` SET  `product`='$product' , `kategori`= '$kategori', `price`='$price',  `image`='$image' WHERE idProduct='$idProduct' ";
$query= mysqli_query($koneksi,$sql);
$lastId = mysqli_insert_id($koneksi);
if($query ==true)
{
    $data = array(
        'status'=>'true',  
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'false',
    );

    echo json_encode($data);
} 
?>