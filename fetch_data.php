<?php include('koneksi.php');

$output= array();
$sql = "SELECT * FROM product ";

$totalQuery = mysqli_query($koneksi,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'idProduct',
	1 => 'product',
	2 => 'kategori',
	3 => 'price',
	4 => 'image',
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE product like '%".$search_value."%'";
	$sql .= " OR kategori like '%".$search_value."%'";
	$sql .= " OR price like '%".$search_value."%'";
	$sql .= " OR image like '%".$search_value."%'";
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY idProduct desc";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}	

$query = mysqli_query($koneksi,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
	$sub_array[] = $row['idProduct'];
	$sub_array[] = $row['product'];
	$sub_array[] = $row['kategori'];
	$sub_array[] = $row['price'];
	$sub_array[] = $row['image'];
	$sub_array[] = '<a href="javascript:void();" data-id="'.$row['idProduct'].'"  class="btn btn-info btn-sm editbtn" >Ubah</a>  <a href="javascript:void();" data-id="'.$row['idProduct'].'"  class="btn btn-danger btn-sm deleteBtn" >Hapus</a>';
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);
