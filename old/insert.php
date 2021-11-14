<?php
$conn = mysqli_connect("127.0.0.1:3307","root","111111","login");
if ( mysqli_connect_errno() )
{
echo "DB 연결에 실패했습니다 " . mysqli_connect_error();
}
$sql = "SELECT * FROM login.user";
/*mysqli_query($conn, "
INSERT INTO user
(name, ad, ke)
    value(
        'an', 'iksan', '168')");
echo mysqli_error($conn);*/

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)){
    echo '<br>'.$row['name'].'</br>';
}
?>