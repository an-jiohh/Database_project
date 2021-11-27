<?php
$conn = mysqli_connect("127.0.0.1:3306","root","1234","shopping_mall");

session_start();
$user = $_SESSION['user_id'];

$sql = "INSERT INTO shopping_mall.shoping_cart (상품번호,id,구매옷치수) VALUES (\"{$_POST['product']}\", \"$user\", \"{$_POST['size']}\")";
mysqli_query($conn, $sql);

?>
<meta http-equiv='refresh' content='0;url=shop-cart.php'>