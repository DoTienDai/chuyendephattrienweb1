<?php
require_once 'models/UserModel.php';
require_once 'id_encoder.php'; // Bao gồm file mã hóa ID
// $secret = "key";
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $userModel->deleteUserById($id);//Delete existing user
}

// Giải mã ID từ URL
if (!empty($_GET['id'])) {
    $decodedId = decodeUserId($_GET['id']);
    
    // Kiểm tra xem ID đã giải mã có hợp lệ không
    if (is_numeric($decodedId)) {
        $user = $userModel->findUserById($decodedId);
    } else {
        // Nếu ID không phải là số, thông báo lỗi
        echo "ID không hợp lệ.";
        exit;
    }
}

header('location: list_users.php');
?>