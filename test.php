<?php
$user_height = 163;
$user_weight = 63;

                                    $conn = mysqli_connect("127.0.0.1:3306","root","1234","shopping_mall");
                                    $sql =  "SELECT 구매옷치수, count(*) AS \'count\'
                                    FROM shopping_mall.review LEFT OUTER JOIN shopping_mall.user ON review.id = user.id
                                    WHERE 상품번호=\"p001\" AND (키 BETWEEN ($user_height - 3) AND ($user_height + 3)) AND (몸무게 BETWEEN ($user_weight-3) AND ($user_weight + 3))
                                    GROUP BY 구매옷치수;";
                                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($result)){
                        $count = count + $row['count'];
                        if($max_count <= $row['count']){
                        $max_count = $row['count'];
                        $max_size = $row['구매옷치수'];
                        }
                    }
                                    ?>