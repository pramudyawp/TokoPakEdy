<?php include('koneksi.php');
$idProduct = $_POST['idProduct'];
$sql = "SELECT * FROM product WHERE idProduct='$idProduct' LIMIT 1";
$query = mysqli_query($koneksi,$sql);
$row = mysqli_fetch_assoc($query);
echo json_encode($row);
?>
