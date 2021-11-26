<php>
$conn = mysqli_connect("127.0.0.1:3306","root","1234","shopping_mall");
$sql = "SELECT * FROM shopping_mall.user WHERE id="qwer"";
$result = mysqli_fetch_array(mysqli_query($conn, $sql));
$name = $result['성명']
$phone = $result['폰번호']
$ad = $result['주소']
$height = $result['키']
$weight = $result['몸무게']
$size = $result['평소옷치수']
$sex = $result['성별']
echo "asdf";
<?php>