<?php
$conn = mysqli_connect("127.0.0.1:3306","root","1234","shopping_mall");

session_start();
$user = $_SESSION['user_id'];

$sql = "DELETE FROM shopping_mall.shoping_cart WHERE 카트번호=\"{$_POST['cart_num']}\" ";
mysqli_query($conn, $sql);

?>
<meta http-equiv='refresh' content='0;url=shop-cart.php'>