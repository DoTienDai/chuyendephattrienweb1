<?php
// id_encoder.php

// Hàm mã hóa ID người dùng
function encodeUserId($id) {
    return base64_encode($id);
}

// Hàm giải mã ID người dùng
function decodeUserId($encodedId) {
    return base64_decode($encodedId);
}
?>
