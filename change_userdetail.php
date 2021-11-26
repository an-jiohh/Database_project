<?php
$conn = mysqli_connect("127.0.0.1:3306","root","1234","shopping_mall");

session_start();
$user = $_SESSION['user_id'];
$sql = "UPDATE shopping_mall.user 
SET 성명 = \"{$_POST['user_name']}\", 주소 = \"{$_POST['user_ad']}\", 키 = {$_POST['user_height']},
몸무게 = {$_POST['user_weight']}, 평소옷치수 = \"{$_POST['user_size']}\", 폰번호 = \"{$_POST['user_phone']}\", 성별 = \"{$_POST['user_sex']}\"
where id = \"$user\" ";

$result = mysqli_query($conn, $sql);
?>
<meta http-equiv='refresh' content='0;url=user_detail.php'>