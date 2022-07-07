<?php
include "koneksi.php";

$request = $_SERVER['REQUEST_METHOD'];

switch ($request) {
    case 'GET':

        $query = mysqli_query($koneksi, "SELECT * FROM cart")->num_rows;

        echo json_encode($query);
        # code...
        break;

    case 'POST':

        switch ($_POST['proses']) {
            case 'add': 
                
                $id = $_POST['id'];

                $query = mysqli_query($koneksi, "SELECT * FROM cart WHERE idProduct ='$id' ");
                $checkCount = $query->num_rows;

                while($row = mysqli_fetch_object($query)){
                    $qty = $row->qty;
                }

                if($checkCount == 0){

                    $save = mysqli_query($koneksi, "INSERT INTO cart (idProduct, qty) VALUES ('$id', '1') ");
                
                    if($save){
                        echo json_encode(["message" => "success"]);
                    }else{
                        echo json_encode(["message" => "failed"]);
                    }
                }else if ($checkCount > 0){

                    $qty += 1;

                    $update = mysqli_query($koneksi, "UPDATE cart SET qty = '$qty' WHERE idProduct = '$id' ");
                
                    if($update){
                        echo json_encode(["message" => "success"]);
                    }else{
                        echo json_encode(["message" => "failed"]);
                    }
                }


                break;

            case 'delete':

                $id = $_POST['id'];
                
                    $delete = mysqli_query($koneksi, "DELETE FROM cart WHERE idProduct = '$id' ");
                
                    if($delete){
                        echo json_encode(["message" => "success"]);
                    }else{
                        echo json_encode(["message" => "failed"]);
                    }
                break;
            
            default:
                break;
        }

    break;
    
    default:
        break;
}