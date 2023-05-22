
<?php 
include "connect.php";
$maKH = $_POST['maKH'];
$startDate = $_POST['startDate'];
$night = $_POST['night'];
$sophong = $_POST['sophong'];



$query = "INSERT INTO `orderapp`( `maKH`, `startDate`, `night`, `sophong`) VALUES (?,?,?,?)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ssss", $maKH, $startDate, $night, $sophong);
$result = mysqli_stmt_execute($stmt);

if ($result == true){
    $arr = [
        'success' => true,
        'message' => 'Thanh cong'
    ];
}else{
    $arr = [
        'success' => false,
        'message' => 'Khong thanh cong'
    ];
}
 print_r(json_encode($arr));
?>

