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
                        <span>회원정보 수정</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <?php
        $conn = mysqli_connect("127.0.0.1:3306","root","1234","shopping_mall");
        $sql = "SELECT * FROM shopping_mall.user WHERE id=\"{$_SESSION['user_id']}\"";
        $result = mysqli_fetch_array(mysqli_query($conn, $sql));
        $name = $result['성명'];
        $phone = $result['폰번호'];
        $ad = $result['주소'];
        $height = $result['키'];
        $weight = $result['몸무게'];
        $size = $result['평소옷치수'];
        $sex = $result['성별'];
    ?>

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <form action="change_userdetail.php" class="checkout__form" method="POST">
                <div class="row">
                    <div class="col-lg-8">
                        <h5>회원정보 수정</h5>
                        <div class="row">
                            <div class="col-lg-12">
                            <?php
                            echo "
                                <div class=\"checkout__form__input\">
                                    <p>이름</p>
                                    <input type=\"text\" name='user_name' value=$name>
                                </div>
                                <div class=\"checkout__form__input\">
                                    <p>폰번호</p>
                                    <input type=\"text\" name='user_phone' value=$phone>
                                </div>
                                <div class=\"checkout__form__input\">
                                    <p>주소</p>
                                    <input type=\"text\" name='user_ad' value=$ad>
                                </div>
                                <div class=\"checkout__form__input\">
                                    <p>키</p>
                                    <input type=\"text\" name='user_height' value=$height>
                                </div>
                                <div class=\"checkout__form__input\">
                                    <p>몸무게</p>
                                    <input type=\"text\" name='user_weight' value=$weight>
                                </div>
                                <div class=\"checkout__form__input\">
                                    <p>평소 옷치수</p>
                                    <input type=\"text\" name='user_size' value=$size> 
                                </div>
                                <div class=\"checkout__form__checkbox\">
                                    <p>성별</p> ";
                                    if ($sex == "남"){
                                    echo "
                                    <input type=\"checkbox\" value=\"남\" name='user_sex' checked> 남
                                    <input type=\"checkbox\" value=\"여\" name='user_sex'> 여 ";
                                    }
                                    if ($sex == "여"){
                                        echo "
                                        <input type=\"checkbox\" value=\"남\" name='user_sex'> 남
                                        <input type=\"checkbox\" value=\"여\" name='user_sex' checked> 여 ";
                                        }
                                    if ($sex == NULL){
                                            echo "
                                            <input type=\"checkbox\" value=\"남\" name='user_sex'> 남
                                            <input type=\"checkbox\" value=\"여\" name='user_sex'> 여 ";
                                    }
                            ?>
                                </div>
                                <button type="submit" class="site-btn">수정</button>
                            </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
        <!-- Checkout Section End -->

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