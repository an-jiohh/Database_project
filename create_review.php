<?php
$conn = mysqli_connect("127.0.0.1:3306","root","1234","shopping_mall");

session_start();

$checksql = "SELECT * FROM shopping_mall.review WHERE id = \"{$_SESSION['user_id']}\" AND 상품번호 = \"{$_POST['product']}\"";
$check = mysqli_fetch_array(mysqli_query($conn, $checksql));
if(!isset($check)){
    $sql = "INSERT INTO shopping_mall.review (상품번호, 제목, 내용, 구매옷치수,id) VALUES (\"{$_POST['product']}\", \"{$_POST['review_name']}\" , \"{$_POST['review_main']}\" , \"{$_POST['size']}\", \"{$_SESSION['user_id']}\" )";
    mysqli_query($conn, $sql);
}
else{
$sql = "UPDATE shopping_mall.review
SET 제목 = \"{$_POST['review_name']}\", 내용 = \"{$_POST['review_main']}\"
where id = \"{$_SESSION['user_id']}\" AND 상품번호 = \"{$_POST['product']}\" ";
$result = mysqli_query($conn, $sql);
}
?>
<meta http-equiv='refresh' content='0;url=purchase_list.php'>