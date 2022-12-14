<?php
    session_start();
?>    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop bán sách</title>
    <link rel="stylesheet" href="../ASSET/CSS/reset.css">
    <link rel="stylesheet" href="../ASSET/CSS/main.css">
    <link rel="stylesheet" href="../ASSET/FONT/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="../ASSET/CSS/selector.css">
</head>

<body>
    <div class="Header_main">
        <header>
        <?php
            require_once '../header.php';
        ?>
        </header>
        <div class="main">
            <div class="main_top">
                <div class="main_top-row-left">
                    <ul class="main_top-left-list">
                        <li class="main_top-left-item">
                            <i class="main_top-left-icon fa-solid fa-bars"></i>
                            <span class="main_top-left-category">Danh Mục Sách</span>
                            <a class="main_top-left-list-a" >
                                <i class="main_top-left-link-icon fa-solid fa-check"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="main_top-row-right">
                    <ul class="main_top-right-list">
                        <li class="main_top-right-item main_top-right-item-hotline">
                            <i class="fa-solid fa-phone"></i>
                            <span>Hotline: 0345158101</span>
                        </li>
                        <li class="main_top-right-item">
                            <a href="../main/feedback.php?spid=1" class="main_top-right-list main_top_right-a">
                                <i class="fa-solid fa-headset"></i>
                                <span class="main_top_right-span">Hỗ trợ trực tuyến</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container_parent">
                <div class="container">
                    <!-- <div class="container-list-parent">
                        <ul class="container_list">
                            <li class="container_list-item">
                                <a href="container_list-link" title="Sách Bán Chạy">Sách Bán Chạy</a>
                                <a href="container_list-link-icon" title="Sách Bán Chạy">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Sách Mới Phát Hành">Sách Mới Phát Hành</a>
                                <a href="container_list-link-icon" title="Sách Bán Chạy">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a 
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Sách Sắp Phát Hành">Sách Sắp Phát Hành</a>
                                <a href="container_list-link-icon" title="Sách Sắp Phát Hành">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Sách Kinh Tế">Sách Kinh Tế</a>
                                <a href="container_list-link-icon" title="Sách Kinh Tế">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Sách Văn Học">Sách Văn Học</a>
                                <a href="container_list-link-icon" title="Sách Văn Học">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Sách Thiếu Nhi">Sách Thiếu Nhi</a>
                                <a href="container_list-link-icon" title="Sách Thiếu Nhi">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Sách Tin Học">Sách Tin Học</a>
                                <a href="container_list-link-icon" title="Sách Tin Học">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Sách Ngoại Ngữ">Sách Ngoại Ngữ</a>
                                <a href="container_list-link-icon" title="Sách Ngoại Ngữ">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Sách Chuyên Ngành">Sách Chuyên Ngành</a>
                                <a href="container_list-link-icon" title="Sách Chuyên Ngành">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Tạp Chí - Văn Phòng Phẩm">Tạp Chí - Văn Phòng
                                    Phẩm</a>
                                <a href="container_list-link-icon" title="Tạp Chí - Văn Phòng">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Đời sống - Pháp luật">Đời sống - Pháp luật
                                </a>
                                <a href="container_list-link-icon" title="Đời sống - Pháp luậty">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Tạp Chí Bóng Bánh">Tạp Chí Bóng Bánh</a>
                                <a href="container_list-link-icon" title="Tạp Chí Bóng Bánh">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Tiểu Thuyết">Tiểu Thuyết</a>
                                <a href="container_list-link-icon" title="Tiểu Thuyết">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Sách Giáo Khoa - Giáo Trình">Giáo Trình - SGK</a>
                                <a href="container_list-link-icon" title="Giáo Trình - SGK">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Manga">Manga</a>
                                <a href="container_list-link-icon" title="Manga">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                    <?php
                        require_once '../category.php'; 
                    ?>
                    <div class="container-banner-parent">
                        <div class="container-banner-top-img">
                            <div class="container-banner-top-left">
                                <a  class="container-banner-bot-img-a">
                                    <img class="container-img-1"
                                        src="https://www.vinabook.com/images/thumbnails/promo/802x480/363119_forbes110.jpg"
                                        alt="a">
                                </a>
                            </div>
                            <div class="container-banner-top-right">
                                <div class="container-banner-top-right-t">
                                    <a  class="container-banner-bot-img-a">
                                        <img class="container-img-2"
                                            src="https://www.vinabook.com/images/thumbnails/promo/802x480/363501_bschehon.jpg"
                                            alt="">
                                    </a>
                                </div>
                                <div class="container-banner-top-right-b">
                                    <a  class="container-banner-bot-img-a">
                                        <img class="container-img-2"
                                            src="https://www.vinabook.com/images/thumbnails/promo/802x480/363192_thintibentri.jpg"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="container-banner-bot-img">
                            <div class="container-banner-bot-img-in">
                                <img class="container-img-2"
                                    src="https://www.vinabook.com/images/thumbnails/promo/802x480/363107_thayicucsng.jpg"
                                    alt="">
                            </div>
                            <div class="container-banner-bot-img-in">
                                <img class="container-img-2"
                                    src="https://www.vinabook.com/images/thumbnails/promo/802x480/363104_qgkn1.jpg"
                                    alt="">
                            </div>
                            <div class="container-banner-bot-img-in">
                                <img class="container-img-2"
                                    src="https://www.vinabook.com/images/thumbnails/promo/802x480/363109_haimtcagianh1.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="main_product">
                <div class="product-left">

                    <div class="product-left_title">
                        <span>Sách Dạy Đời</span>
                    </div>
                    <div class="product-left_all-box">
                        <div class="product-left_box">
                            <div class="product-left_info-book-all">
                                <div class="box_image-container">
                                    <img class="product-left_img"
                                        src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                        alt="Sự im lặng của bầy cừu(2022)">
                                </div>
                                <div class="box_info-book">
                                    <div class="box_title-small">
                                        <a class="product-left_box_title" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Sự Im Lặng Của Bầy Cừu
                                        </a>
                                        <span>Thomas Harris</span>
                                    </div>
                                    <div class="box_content-book">
                                        <a class="box_content-book-a" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Những cuộc phỏng vấn ở xà lim với kẻ ăn thịt người ham thích trò đùa trí
                                            tuệ,...
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box_info-price">
                                <div class="box_info-price_discount">-15%</div>
                                <div class="box_info-price_new-price">98.000đ</div>
                                <div class="box_info-price_old-price">114.000đ</div>
                            </div>
                        </div>
                        <div class="product-left_box">
                            <div class="product-left_info-book-all">
                                <div class="box_image-container">
                                    <img class="product-left_img"
                                        src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                        alt="Sự im lặng của bầy cừu(2022)">
                                </div>
                                <div class="box_info-book">
                                    <div class="box_title-small">
                                        <a class="product-left_box_title" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Sự Im Lặng Của Bầy Cừu
                                        </a>
                                        <span>Thomas Harris</span>
                                    </div>
                                    <div class="box_content-book">
                                        <a class="box_content-book-a" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Những cuộc phỏng vấn ở xà lim với kẻ ăn thịt người ham thích trò đùa trí
                                            tuệ,...
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="box_info-price">
                                <div class="box_info-price_discount">-15%</div>
                                <div class="box_info-price_new-price">98.000đ</div>
                                <div class="box_info-price_old-price">114.000đ</div>
                            </div>
                        </div>

                        <div class="product-left_box">
                            <div class="product-left_info-book-all">
                                <div class="box_image-container">
                                    <img class="product-left_img"
                                        src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                        alt="Sự im lặng của bầy cừu(2022)">
                                </div>
                                <div class="box_info-book">
                                    <div class="box_title-small">
                                        <a class="product-left_box_title" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Sự Im Lặng Của Bầy Cừu
                                        </a>
                                        <span>Thomas Harris</span>
                                    </div>
                                    <div class="box_content-book">
                                        <a class="box_content-book-a" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Những cuộc phỏng vấn ở xà lim với kẻ ăn thịt người ham thích trò đùa trí
                                            tuệ,...
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="box_info-price">
                                <div class="box_info-price_discount">-15%</div>
                                <div class="box_info-price_new-price">98.000đ</div>
                                <div class="box_info-price_old-price">114.000đ</div>
                            </div>
                        </div>

                        <div class="product-left_box">
                            <div class="product-left_info-book-all">
                                <div class="box_image-container">
                                    <img class="product-left_img"
                                        src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                        alt="Sự im lặng của bầy cừu(2022)">
                                </div>
                                <div class="box_info-book">
                                    <div class="box_title-small">
                                        <a class="product-left_box_title" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Sự Im Lặng Của Bầy Cừu
                                        </a>
                                        <span>Thomas Harris</span>
                                    </div>
                                    <div class="box_content-book">
                                        <a class="box_content-book-a" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Những cuộc phỏng vấn ở xà lim với kẻ ăn thịt người ham thích trò đùa trí
                                            tuệ,...
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="box_info-price">
                                <div class="box_info-price_discount">-15%</div>
                                <div class="box_info-price_new-price">98.000đ</div>
                                <div class="box_info-price_old-price">114.000đ</div>
                            </div>
                        </div>

                        <div class="product-left_box">
                            <div class="product-left_info-book-all">
                                <div class="box_image-container">
                                    <img class="product-left_img"
                                        src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                        alt="Sự im lặng của bầy cừu(2022)">
                                </div>
                                <div class="box_info-book">
                                    <div class="box_title-small">
                                        <a class="product-left_box_title" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Sự Im Lặng Của Bầy Cừu
                                        </a>
                                        <span>Thomas Harris</span>
                                    </div>
                                    <div class="box_content-book">
                                        <a class="box_content-book-a" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Những cuộc phỏng vấn ở xà lim với kẻ ăn thịt người ham thích trò đùa trí
                                            tuệ,...
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="box_info-price">
                                <div class="box_info-price_discount">-15%</div>
                                <div class="box_info-price_new-price">98.000đ</div>
                                <div class="box_info-price_old-price">114.000đ</div>
                            </div>
                        </div>

                        <div class="product-left_box">
                            <div class="product-left_info-book-all">
                                <div class="box_image-container">
                                    <img class="product-left_img"
                                        src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                        alt="Sự im lặng của bầy cừu(2022)">
                                </div>
                                <div class="box_info-book">
                                    <div class="box_title-small">
                                        <a class="product-left_box_title" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Sự Im Lặng Của Bầy Cừu
                                        </a>
                                        <span>Thomas Harris</span>
                                    </div>
                                    <div class="box_content-book">
                                        <a class="box_content-book-a" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Những cuộc phỏng vấn ở xà lim với kẻ ăn thịt người ham thích trò đùa trí
                                            tuệ,...
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box_info-price">
                                <div class="box_info-price_discount">-15%</div>
                                <div class="box_info-price_new-price">98.000đ</div>
                                <div class="box_info-price_old-price">114.000đ</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-right">
                    <div class="product-right_title">
                        <span>Sách Mới Nhập Về</span>
                    </div>
                    <div class="product-right_column">
                        <ul class="product-right_list">
                            <li class="product-right_item">
                                <div class="product-right_info-book-all">
                                    <div class="list_image-container">
                                        <img class="product-right_img"
                                            src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                            alt="Sự im lặng của bầy cừu(2022)">
                                    </div>
                                    <div class="list_info-book">
                                        <div class="list_title-small">
                                            <a class="product-right_list_title"
                                                title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)" >
                                                Sự Im Lặng Của Bầy Cừu
                                            </a>
                                            <span>Thomas Harris</span>
                                        </div>
                                        <div class="list_content-book">
                                            <div class="list_info-price_new-price">98.000đ</div>
                                            <div class="list_info-price_old-price">114.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-right_item">
                                <div class="product-right_info-book-all">
                                    <div class="list_image-container">
                                        <img class="product-right_img"
                                            src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                            alt="Sự im lặng của bầy cừu(2022)">
                                    </div>
                                    <div class="list_info-book">
                                        <div class="list_title-small">
                                            <a class="product-right_list_title"
                                                title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)" >
                                                Sự Im Lặng Của Bầy Cừu
                                            </a>
                                            <span>Thomas Harris</span>
                                        </div>
                                        <div class="list_content-book">
                                            <div class="list_info-price_new-price">98.000đ</div>
                                            <div class="list_info-price_old-price">114.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-right_item">
                                <div class="product-right_info-book-all">
                                    <div class="list_image-container">
                                        <img class="product-right_img"
                                            src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                            alt="Sự im lặng của bầy cừu(2022)">
                                    </div>
                                    <div class="list_info-book">
                                        <div class="list_title-small">
                                            <a class="product-right_list_title"
                                                title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)" >
                                                Sự Im Lặng Của Bầy Cừu
                                            </a>
                                            <span>Thomas Harris</span>
                                        </div>
                                        <div class="list_content-book">
                                            <div class="list_info-price_new-price">98.000đ</div>
                                            <div class="list_info-price_old-price">114.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-right_item">
                                <div class="product-right_info-book-all">
                                    <div class="list_image-container">
                                        <img class="product-right_img"
                                            src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                            alt="Sự im lặng của bầy cừu(2022)">
                                    </div>
                                    <div class="list_info-book">
                                        <div class="list_title-small">
                                            <a class="product-right_list_title"
                                                title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)" >
                                                Sự Im Lặng Của Bầy Cừu
                                            </a>
                                            <span>Thomas Harris</span>
                                        </div>
                                        <div class="list_content-book">
                                            <div class="list_info-price_new-price">98.000đ</div>
                                            <div class="list_info-price_old-price">114.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-right_item">
                                <div class="product-right_info-book-all">
                                    <div class="list_image-container">
                                        <img class="product-right_img"
                                            src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                            alt="Sự im lặng của bầy cừu(2022)">
                                    </div>
                                    <div class="list_info-book">
                                        <div class="list_title-small">
                                            <a class="product-right_list_title"
                                                title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)" >
                                                Sự Im Lặng Của Bầy Cừu
                                            </a>
                                            <span>Thomas Harris</span>
                                        </div>
                                        <div class="list_content-book">
                                            <div class="list_info-price_new-price">98.000đ</div>
                                            <div class="list_info-price_old-price">114.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main_product">
                <div class="product-left">

                    <div class="product-left_title">
                        <span>Sách Dạy Đời</span>
                    </div>
                    <div class="product-left_all-box">
                        <div class="product-left_box">
                            <div class="product-left_info-book-all">
                                <div class="box_image-container">
                                    <img class="product-left_img"
                                        src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                        alt="Sự im lặng của bầy cừu(2022)">
                                </div>
                                <div class="box_info-book">
                                    <div class="box_title-small">
                                        <a class="product-left_box_title" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Sự Im Lặng Của Bầy Cừu
                                        </a>
                                        <span>Thomas Harris</span>
                                    </div>
                                    <div class="box_content-book">
                                        <a class="box_content-book-a" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Những cuộc phỏng vấn ở xà lim với kẻ ăn thịt người ham thích trò đùa trí
                                            tuệ,...
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box_info-price">
                                <div class="box_info-price_discount">-15%</div>
                                <div class="box_info-price_new-price">98.000đ</div>
                                <div class="box_info-price_old-price">114.000đ</div>
                            </div>
                        </div>
                        <div class="product-left_box">
                            <div class="product-left_info-book-all">
                                <div class="box_image-container">
                                    <img class="product-left_img"
                                        src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                        alt="Sự im lặng của bầy cừu(2022)">
                                </div>
                                <div class="box_info-book">
                                    <div class="box_title-small">
                                        <a class="product-left_box_title" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Sự Im Lặng Của Bầy Cừu
                                        </a>
                                        <span>Thomas Harris</span>
                                    </div>
                                    <div class="box_content-book">
                                        <a class="box_content-book-a" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Những cuộc phỏng vấn ở xà lim với kẻ ăn thịt người ham thích trò đùa trí
                                            tuệ,...
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="box_info-price">
                                <div class="box_info-price_discount">-15%</div>
                                <div class="box_info-price_new-price">98.000đ</div>
                                <div class="box_info-price_old-price">114.000đ</div>
                            </div>
                        </div>

                        <div class="product-left_box">
                            <div class="product-left_info-book-all">
                                <div class="box_image-container">
                                    <img class="product-left_img"
                                        src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                        alt="Sự im lặng của bầy cừu(2022)">
                                </div>
                                <div class="box_info-book">
                                    <div class="box_title-small">
                                        <a class="product-left_box_title" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Sự Im Lặng Của Bầy Cừu
                                        </a>
                                        <span>Thomas Harris</span>
                                    </div>
                                    <div class="box_content-book">
                                        <a class="box_content-book-a" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Những cuộc phỏng vấn ở xà lim với kẻ ăn thịt người ham thích trò đùa trí
                                            tuệ,...
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="box_info-price">
                                <div class="box_info-price_discount">-15%</div>
                                <div class="box_info-price_new-price">98.000đ</div>
                                <div class="box_info-price_old-price">114.000đ</div>
                            </div>
                        </div>

                        <div class="product-left_box">
                            <div class="product-left_info-book-all">
                                <div class="box_image-container">
                                    <img class="product-left_img"
                                        src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                        alt="Sự im lặng của bầy cừu(2022)">
                                </div>
                                <div class="box_info-book">
                                    <div class="box_title-small">
                                        <a class="product-left_box_title" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Sự Im Lặng Của Bầy Cừu
                                        </a>
                                        <span>Thomas Harris</span>
                                    </div>
                                    <div class="box_content-book">
                                        <a class="box_content-book-a" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Những cuộc phỏng vấn ở xà lim với kẻ ăn thịt người ham thích trò đùa trí
                                            tuệ,...
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="box_info-price">
                                <div class="box_info-price_discount">-15%</div>
                                <div class="box_info-price_new-price">98.000đ</div>
                                <div class="box_info-price_old-price">114.000đ</div>
                            </div>
                        </div>

                        <div class="product-left_box">
                            <div class="product-left_info-book-all">
                                <div class="box_image-container">
                                    <img class="product-left_img"
                                        src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                        alt="Sự im lặng của bầy cừu(2022)">
                                </div>
                                <div class="box_info-book">
                                    <div class="box_title-small">
                                        <a class="product-left_box_title" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Sự Im Lặng Của Bầy Cừu
                                        </a>
                                        <span>Thomas Harris</span>
                                    </div>
                                    <div class="box_content-book">
                                        <a class="box_content-book-a" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Những cuộc phỏng vấn ở xà lim với kẻ ăn thịt người ham thích trò đùa trí
                                            tuệ,...
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="box_info-price">
                                <div class="box_info-price_discount">-15%</div>
                                <div class="box_info-price_new-price">98.000đ</div>
                                <div class="box_info-price_old-price">114.000đ</div>
                            </div>
                        </div>

                        <div class="product-left_box">
                            <div class="product-left_info-book-all">
                                <div class="box_image-container">
                                    <img class="product-left_img"
                                        src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                        alt="Sự im lặng của bầy cừu(2022)">
                                </div>
                                <div class="box_info-book">
                                    <div class="box_title-small">
                                        <a class="product-left_box_title" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Sự Im Lặng Của Bầy Cừu
                                        </a>
                                        <span>Thomas Harris</span>
                                    </div>
                                    <div class="box_content-book">
                                        <a class="box_content-book-a" title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)"
                                            >
                                            Những cuộc phỏng vấn ở xà lim với kẻ ăn thịt người ham thích trò đùa trí
                                            tuệ,...
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box_info-price">
                                <div class="box_info-price_discount">-15%</div>
                                <div class="box_info-price_new-price">98.000đ</div>
                                <div class="box_info-price_old-price">114.000đ</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-right">
                    <div class="product-right_title">
                        <span>Sách Mới Nhập Về</span>
                    </div>
                    <div class="product-right_column">
                        <ul class="product-right_list">
                            <li class="product-right_item">
                                <div class="product-right_info-book-all">
                                    <div class="list_image-container">
                                        <img class="product-right_img"
                                            src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                            alt="Sự im lặng của bầy cừu(2022)">
                                    </div>
                                    <div class="list_info-book">
                                        <div class="list_title-small">
                                            <a class="product-right_list_title"
                                                title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)" >
                                                Sự Im Lặng Của Bầy Cừu
                                            </a>
                                            <span>Thomas Harris</span>
                                        </div>
                                        <div class="list_content-book">
                                            <div class="list_info-price_new-price">98.000đ</div>
                                            <div class="list_info-price_old-price">114.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-right_item">
                                <div class="product-right_info-book-all">
                                    <div class="list_image-container">
                                        <img class="product-right_img"
                                            src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                            alt="Sự im lặng của bầy cừu(2022)">
                                    </div>
                                    <div class="list_info-book">
                                        <div class="list_title-small">
                                            <a class="product-right_list_title"
                                                title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)" >
                                                Sự Im Lặng Của Bầy Cừu
                                            </a>
                                            <span>Thomas Harris</span>
                                        </div>
                                        <div class="list_content-book"> 
                                            <div class="list_info-price_new-price">98.000đ</div>
                                            <div class="list_info-price_old-price">114.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-right_item">
                                <div class="product-right_info-book-all">
                                    <div class="list_image-container">
                                        <img class="product-right_img"
                                            src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                            alt="Sự im lặng của bầy cừu(2022)">
                                    </div>
                                    <div class="list_info-book">
                                        <div class="list_title-small">
                                            <a class="product-right_list_title"
                                                title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)" >
                                                Sự Im Lặng Của Bầy Cừu
                                            </a>
                                            <span>Thomas Harris</span>
                                        </div>
                                        <div class="list_content-book">
                                            <div class="list_info-price_new-price">98.000đ</div>
                                            <div class="list_info-price_old-price">114.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-right_item">
                                <div class="product-right_info-book-all">
                                    <div class="list_image-container">
                                        <img class="product-right_img"
                                            src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                            alt="Sự im lặng của bầy cừu(2022)">
                                    </div>
                                    <div class="list_info-book">
                                        <div class="list_title-small">
                                            <a class="product-right_list_title"
                                                title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)" >
                                                Sự Im Lặng Của Bầy Cừu
                                            </a>
                                            <span>Thomas Harris</span>
                                        </div>
                                        <div class="list_content-book">
                                            <div class="list_info-price_new-price">98.000đ</div>
                                            <div class="list_info-price_old-price">114.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-right_item">
                                <div class="product-right_info-book-all">
                                    <div class="list_image-container">
                                        <img class="product-right_img"
                                            src="https://www.vinabook.com/images/thumbnails/product/115x/372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg"
                                            alt="Sự im lặng của bầy cừu(2022)">
                                    </div>
                                    <div class="list_info-book">
                                        <div class="list_title-small">
                                            <a class="product-right_list_title"
                                                title="Sự Im Lặng Của Bầy Cừu (Tái Bản 2022)" >
                                                Sự Im Lặng Của Bầy Cừu
                                            </a>
                                            <span>Thomas Harris</span>
                                        </div>
                                        <div class="list_content-book">
                                            <div class="list_info-price_new-price">98.000đ</div>
                                            <div class="list_info-price_old-price">114.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
    <footer>
        <footer class="footer_top">
            <div class="footer_top-nav">
                <h3 class="footer_top-heading">CHĂM SÓC KHÁCH HÀNG</h3>
                <ul class="footer_top-list">
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                </ul>
            </div>
            <div class="footer_top-nav">
                <h3 class="footer_top-heading">GIỚI THIỆU</h3>
                <ul class="footer_top-list">
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                </ul>
            </div>
            <div class="footer_top-nav">

            </div>
            <div class="footer_top-nav">
                <h3 class="footer_top-heading">THEO DÕI</h3>
                <ul class="footer_top-list">
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                </ul>
            </div>
            <div class="footer_top-nav">
                <h3 class="footer_top-heading">DANH MỤC</h3>
                <ul class="footer_top-list">
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                </ul>
            </div>
        </footer>
        <footer class="footer_bot">
            <p class="footer_bot-text footer_bot-address">Địa chỉ: Vĩnh Long. Tổng đài hỗ trợ: 0345158101 - Email:
                20004014@st.vlute.edu.vn
            </p>
            <p class="footer_bot-text footer_bot-license">© 2022 Bản quyền thuộc về TC</p>
        </footer>
    </footer> 
</body>
</html>
<?php
?>