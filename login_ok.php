<?php
$conn = mysqli_connect("127.0.0.1:3306","root","1234","shopping_mall");

if(!isset($_POST['user_id']) || !isset($_POST['user_pw'])) exit;
$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];

$sql = "SELECT * FROM shopping_mall.user WHERE id=\"$_POST[user_id]\"";
$result = mysqli_fetch_array(mysqli_query($conn, $sql));

if(!($result)) {
        echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
        exit;
}
if($result['password'] != $user_pw) {
        echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
        exit;
}
session_start();
$_SESSION['user_id'] = $user_id;
?>
<meta http-equiv='refresh' content='0;url=index.php'>