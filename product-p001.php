<?php
require('lib/header.php');
?>

<?php
$product_num = "p001";
$conn = mysqli_connect("127.0.0.1:3306","root","1234","shopping_mall");
$sql = "SELECT * FROM shopping_mall.product WHERE 상품번호=\"$product_num\"";
$result = mysqli_fetch_array(mysqli_query($conn, $sql));
$product_name = $result['상품이름'];
$product_detail = $result['상품설명'];
$product_price = $result['가격'];
echo"
    <!-- Breadcrumb Begin -->
    <div class=\"breadcrumb-option\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumb__links\">
                        <a href=\"./index.php\"><i class=\"fa fa-home\"></i> Home</a>
                        <span>Essential structured blazer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details Section Begin -->
    <section class=\"product-details spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"product__details__pic\">
                                <img data-hash=\"product\" class=\"product__big__img\" src=\"img/product/details/$product_num.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"product__details__text\">
                        <h3>$product_name</h3>
                        <div class=\"product__details__price\">$product_price</div>
                        <p>$product_detail</p>
                        <div class=\"product__details__button\">
                            <div class=\"quantity\">
                                <span>Quantity:</span>
                                <div class=\"pro-qty\">
                                    <input type=\"text\" value=\"1\">
                                </div>
                            </div>
                            <a href=\"#\" class=\"cart-btn\"><span class=\"icon_bag_alt\"></span> Add to cart</a>
                            <ul>
                                <li><a href=\"#\"><span class=\"icon_heart_alt\"></span></a></li>
                                <li><a href=\"#\"><span class=\"icon_adjust-horiz\"></span></a></li>
                            </ul>
                        </div>
                        <div class=\"product__details__widget\">
                            <ul>
                                <li>
                                    <span>Availability:</span>
                                    <div class=\"stock__checkbox\">
                                        <label for=\"stockin\">
                                            In Stock
                                            <input type=\"checkbox\" id=\"stockin\">
                                            <span class=\"checkmark\"></span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <span>Available color:</span>
                                    <div class=\"color__checkbox\">
                                        <label for=\"red\">
                                            <input type=\"radio\" name=\"color__radio\" id=\"red\" checked>
                                            <span class=\"checkmark\"></span>
                                        </label>
                                        <label for=\"black\">
                                            <input type=\"radio\" name=\"color__radio\" id=\"black\">
                                            <span class=\"checkmark black-bg\"></span>
                                        </label>
                                        <label for=\"grey\">
                                            <input type=\"radio\" name=\"color__radio\" id=\"grey\">
                                            <span class=\"checkmark grey-bg\"></span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <span>Available size:</span>
                                    <div class=\"size__btn\">
                                        <label for=\"xs-btn\" class=\"active\">
                                            <input type=\"radio\" id=\"xs-btn\">
                                            xs
                                        </label>
                                        <label for=\"s-btn\">
                                            <input type=\"radio\" id=\"s-btn\">
                                            s
                                        </label>
                                        <label for=\"m-btn\">
                                            <input type=\"radio\" id=\"m-btn\">
                                            m
                                        </label>
                                        <label for=\"l-btn\">
                                            <input type=\"radio\" id=\"l-btn\">
                                            l
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <span>Promotions:</span>
                                    <p>Free shipping</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"product__details__tab\">
                        <ul class=\"nav nav-tabs\">
                        </ul>
                        <div class=\"tab-content\">
                        <img data-hash=\"product_detail\" class=\"product__big__img\" src=\"img/product/details/$product_num-detail.jpg\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\"> 
            <!-- Product Details Section End --> ";
?>
                <div class="blog__details__comment">
                    <h5>3 Comment</h5>
                    <a href="#" class="leave-btn">Leave a comment</a>
                    <div class="blog__comment__item">
                        <div class="blog__comment__item__pic">
                            <img src="img/blog/details/comment-1.jpg" alt="">
                        </div>
                        <div class="blog__comment__item__text">
                            <h6>Brandon Kelley</h6>
                            <p>Duis voluptatum. Id vis consequat consetetur dissentiet, ceteros commune perpetua
                            mei et. Simul viderer facilisis egimus tractatos splendi.</p>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Seb 17, 2019</li>
                                <li><i class="fa fa-heart-o"></i> 12</li>
                                <li><i class="fa fa-share"></i> 1</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog__comment__item blog__comment__item--reply">
                        <div class="blog__comment__item__pic">
                            <img src="img/blog/details/comment-2.jpg" alt="">
                        </div>
                        <div class="blog__comment__item__text">
                            <h6>Brandon Kelley</h6>
                            <p>Consequat consetetur dissentiet, ceteros commune perpetua mei et. Simul viderer
                            facilisis egimus ulla mcorper.</p>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Seb 17, 2019</li>
                                <li><i class="fa fa-heart-o"></i> 12</li>
                                <li><i class="fa fa-share"></i> 1</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog__comment__item">
                        <div class="blog__comment__item__pic">
                            <img src="img/blog/details/comment-3.jpg" alt="">
                        </div>
                        <div class="blog__comment__item__text">
                            <h6>Brandon Kelley</h6>
                            <p>Duis voluptatum. Id vis consequat consetetur dissentiet, ceteros commune perpetua
                            mei et. Simul viderer facilisis egimus tractatos splendi.</p>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Seb 17, 2019</li>
                                <li><i class="fa fa-heart-o"></i> 12</li>
                                <li><i class="fa fa-share"></i> 1</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

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