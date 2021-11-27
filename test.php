<?php
                                    $conn = mysqli_connect("127.0.0.1:3306","root","1234","shopping_mall");
                                    $sql = "SELECT * 
                                    FROM shopping_mall.shoping_cart LEFT OUTER JOIN shopping_mall.product ON shoping_cart.상품번호 = product.상품번호
                                    WHERE id= \"{$_SESSION['user_id']}\"";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($result)){
                                        $product = $row['상품번호'];
                                        $shoping_size = $row['구매옷치수'];
                                        $product_name = $row['상품이름'];
                                        $product_price = $row['가격'];
                                    echo "
                                    <td class=\"cart__product__item\">
                                        <img src=\"imgimg/product/details/$product.jpg.jpg\" alt=\"\">
                                        <div class=\"cart__product__item__title\">
                                            <h6>$product_name</h6>
                                        </div>
                                    </td>
                                    <td class=\"cart__quantity\">
                                        <div class=\"pro-qty\">
                                            <input type=\"text\" value=\"1\">
                                        </div>
                                    </td>
                                    <td class=\"cart__total\">$product_price 원</td>
                                    <td class=\"cart__close\"><span class=\"icon_close\"></span></td> ";
                                    }
                                    ?>