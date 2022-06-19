<?php
    session_start();
    session_destroy();
    header('location: index.php');
?>
<?php
                            session_start();
                            if (!isset($_SESSION['user'])) {
                            ?>
                            <ul>
                                <li class="top_links"><a href="#">Tài khoản<i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="./taikhoan/login.php">Đăng nhập </a></li>
                                        <li><a href="./taikhoan/singup.php">Đăng ký </a></li>
                                    </ul>
                                </li>
                            </ul>  
                            <?php } else { ?>
                                <a style="font-size:15px; color:white" href="#"><i class="fa fa-user"></i> Xin chào: <span style="font-size:15px; color:white"><?php echo $_SESSION['user'] ?></span></a>  
                                <a style="font-size:15px; color:white" href="logout.php"> Đăng xuất</a>
                            <?php } ?>