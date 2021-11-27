<?php
$conn = mysqli_connect("127.0.0.1:3306","root","1234","shopping_mall");

session_start();
$sql = "SELECT * 
FROM shopping_mall.shoping_cart
WHERE id= \"{$_SESSION['user_id']}\"";
$result = mysqli_query($conn, $sql);    
while ($row = mysqli_fetch_array($result)){
    $product = $row['상품번호'];
    $shoping_size = $row['구매옷치수'];
    $sql = "INSERT INTO shopping_mall.purchase_list (상품번호,id,구매옷치수) VALUES (\"$product\", \"{$_SESSION['user_id']}\", \"$shoping_size\")";
    mysqli_query($conn, $sql);
}
?>
<meta http-equiv='refresh' content='0;url=purchase_list.php'>