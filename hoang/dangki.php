<?php 
include "connect.php";
$email = $_POST['email'];
$pass = $_POST['password'];
$name = $_POST['name'];

//check data
$query = "SELECT * FROM khachhang WHERE  email=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$numrow = mysqli_num_rows($result);

if ($numrow > 0){
    $arr = [
        'success' => false,
        'message' => "Email ton tai"
    ];
}else {
    // insert
    $query = "INSERT INTO khachhang (email, tenkhachhang) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $email, $name);
    mysqli_stmt_execute($stmt);

// Lấy ID của bản ghi mới được chèn vào
    $maKH = mysqli_insert_id($conn);
    $query = "INSERT INTO users (email, password, name, maKH) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $email, $pass, $name, $maKH);
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
}

print_r(json_encode($arr));

?>