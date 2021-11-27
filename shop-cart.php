<?php
require('lib/header.php');
?>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Shopping cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Cart Section Begin -->
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>     </th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php
                                    $conn = mysqli_connect("127.0.0.1:3306","root","1234","shopping_mall");
                                    $price_count = 0;
                                    $sql = "SELECT * 
                                    FROM shopping_mall.shoping_cart LEFT OUTER JOIN shopping_mall.product ON shoping_cart.상품번호 = product.상품번호
                                    WHERE id= \"{$_SESSION['user_id']}\"";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($result)){
                                        $cart_num = $row['카트번호'];
                                        $product = $row['상품번호'];
                                        $shoping_size = $row['구매옷치수'];
                                        $product_name = $row['상품이름'];
                                        $product_price = $row['가격'];
                                        $price_count = $price_count + $product_price;
                                    echo "
                                    <tr>
                                    <td class=\"cart__product__item\">
                                        <img src=\"img/product/details/$product.jpg\" width =\"90\" height=\"100\">
                                        <div class=\"cart__product__item__title\">
                                            <h6>$product_name</h6>
                                        </div>
                                    </td>
                                    <td class=\"cart__price\">         </td>
                                    <td class=\"cart__quantity\">
                                        <div class=\"pro-qty\">
                                            <input type=\"text\" value=\"1\">
                                        </div>
                                    </td>
                                    <td class=\"cart__total\">$product_price 원</td>
                                    <form action=\"delete_cart.php\" method=\"POST\">
                                    <input type=\"hidden\" name = \"cart_num\" value=\"$cart_num\">
                                    <td class=\"cart__close\">
                                    <button type=\"submit\" class=\"icon_close\"></button>
                                    </td>
                                    </form>
                                    </tr>";
                                    }
                            echo "
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-sm-6\">
                    <div class=\"cart__btn\">
                        <a href=\"#\">Continue Shopping</a>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6 col-sm-6\">
                    <div class=\"cart__btn update__btn\">
                        <a href=\"#\"><span class=\"icon_loading\"></span> Update cart</a>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"discount__content\">
                        <h6>Discount codes</h6>
                        <form action=\"#\">
                            <input type=\"text\" placeholder=\"Enter your coupon code\">
                            <button type=\"submit\" class=\"site-btn\">Apply</button>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-4 offset-lg-2\">
                    <div class=\"cart__total__procced\">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Total <span>$price_count 원</span></li>
                        </ul>
                        <a href=\"add-purchase_list.php\" class=\"primary-btn\">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section> ";
    ?>
    <!-- Shop Cart Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        cilisis.</p>
                        <div class="footer__payment">
                            <a href="#"><img src="img/payment/payment-1.png" alt=""></a>
                            <a href="#"><img src="img/payment/payment-2.png" alt=""></a>
                            <a href="#"><img src="img/payment/payment-3.png" alt=""></a>
                            <a href="#"><img src="img/payment/payment-4.png" alt=""></a>
                            <a href="#"><img src="img/payment/payment-5.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-5">
                    <div class="footer__widget">
                        <h6>Quick links</h6>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="footer__widget">
                        <h6>Account</h6>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Orders Tracking</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-8">
                    <div class="footer__newslatter">
                        <h6>NEWSLETTER</h6>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>