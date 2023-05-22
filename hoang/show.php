<?php 
include "connect.php";
$maKH = $_POST['maKH'];

$status = $_POST['status'];

$query = "SELECT orderapp.*, phong.tenkhachsan, phong.giaphong, phong.image  FROM orderapp JOIN phong ON orderapp.sophong = phong.sophong WHERE maKH= ".$maKH." AND status= ".$status;

$data = mysqli_query($conn, $query);
$result = array();
while ($row = mysqli_fetch_assoc($data)){
    $result[] = ($row);
}

if(!empty($result)){
    $arr = [
        'success'=> true,
        'message' => 'thanh cong',
        'result' => $result
    ];
}else {
    $arr = [
        'success'=> false,
        'message' => 'khong thanh cong',
        'result' => $result
    ];
}

print_r(json_encode($arr));

?>