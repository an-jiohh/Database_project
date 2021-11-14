<?php
if(!isset($_POST['user_id']) || !isset($_POST['user_pw1']) || !isset($_POST['user_pw2'])){
    echo "<script>alert('빈칸이 존재합니다.');history.back();</script>";
    exit;
}
if($_POST['user_pw1']!=$_POST['user_pw2']) {
    echo "<script>alert('비밀번호와 확인비밀번호가 같지 않습니다.');history.back();</script>";
    exit;
}

$conn = mysqli_connect("127.0.0.1:3307","root","111111","login");
$sql = "SELECT id FROM login.user WHERE id=\"$_POST[user_id]\"";
$result = mysqli_fetch_array(mysqli_query($conn, $sql));

if($result) {
    echo "<script>alert('이미 존재하는 아이디입니다.');history.back();</script>";
    exit;
}

$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw1'];

$sql = "INSERT INTO user(id, password) value(\"$user_id\", \"$user_pw\")";
$result = mysqli_query($conn, $sql);

if ($result == false)
{
echo "문제가 생겼습니다.";
}

?>
<meta http-equiv='refresh' content='0;url=login.php'>