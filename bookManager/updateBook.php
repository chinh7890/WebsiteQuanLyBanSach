<?php
session_start();
    $id = $_GET['sid'];
    require_once '../connection.php';
    $selectall = "SELECT sach.MaSach, sach.TenSach, sach.MoTa, sach.AnhMinhHoa,
    tacgia.TenTG, theloaisach.TenTL, nhaxuatban.TenNXB, sach.Gia, sach.GiamGia, sach.SoluongTon 
    FROM sach 
    INNER JOIN tacgia ON sach.MaTG = tacgia.MaTG
    INNER JOIN theloaisach ON sach.MaTL = theloaisach.MaTL
    INNER JOIN nhaxuatban ON sach.MaNXB = nhaxuatban.MaNXB 
    WHERE MaSach = '$id'";
    $result = mysqli_query($conn,$selectall);
    $rowBook = mysqli_fetch_assoc($result);
    $author = $rowBook['TenTG'];
    $category = $rowBook['TenTL'];
    $publisher = $rowBook['TenNXB'];
    $image = $rowBook['AnhMinhHoa'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../ASSET/CSS/reset.css">
    <link rel="stylesheet" href="../ASSET/CSS/userManager.css">
    <link rel="stylesheet" href="../ASSET/FONT/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="../ASSET/CSS/addBook.css">
</head>

<body>
    <header>
        <h1 class="header_heading">Trang quản lý</h1>
        <div class="header_right">
            <a class="header_right-homepage header_right-a" href="../main/index.php">
                <i class="fa-solid fa-house-chimney"></i>
                Trang chủ
            </a>
            <a class="header_right-logout header_right-a" href="../authencation/login.php">
                Đăng xuất
            </a>
        </div>
    </header>
    <main>
        <div class="container">
            <?php require_once '../menu.php' ?>
            <div class="crud-user">
                <h3 class="crud-user_heading">Sửa thông tin</h1>
                    <!--CRUD -->
                        <form action="bookView.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="sid" value="<?php echo $_GET['sid'] ?>">
                            <div class="crud-user_add-container">
                                <div class="crud-user_add">
                                    <div class="crud-user_add-name">
                                        <span class="crud-user_add-name lb_username lb_title">Tên Sách:</span> <br>
                                        <span class="crud-user_add-name lb_email lb_decribe">Mô tả:</span><br>
                                        <span class="crud-user_add-name lb_avatar lb_image">Ảnh minh họa:</span><br>
                                        <span class="crud-user_add-name lb_avatar lb_author">Tác giả:</span><br>
                                        <span class="crud-user_add-name lb_address lb_category">Thể Loại:</span><br>
                                        <span class="crud-user_add-name lb_password lb_publisher">Nhà xuất bản:</span><br>
                                        <span class="crud-user_add-name lb_role lb_price">Giá:</span>
                                        <span class="crud-user_add-name lb_role lb_discount">Giảm giá:</span>
                                        <span class="crud-user_add-name lb_role lb_amount">Số lượng tồn:</span>
                                    </div>  
                                    <div class="crud-user_add-value">
                                        <input class="crud-user_add-value title_value" type="text" name="title" value="<?php
                                        if(!isset($_SESSION["notifi-title"])){
                                            echo $rowBook['TenSach']; 
                                        }
                                         ?>"> <br>
                                        <textarea class="crud-user_add-value" name="decribe" id="" cols="30" rows="10"><?php
                                        if(!isset($_SESSION["notifi-decribe"])){
                                            echo $rowBook['MoTa']; 
                                        }
                                         ?></textarea><br>
                                        <div class="crud-user_add-container">
                                            <div>
                                                <?php
                                                    echo'<div style="background-image: url(../ASSET/IMG/'.$rowBook['AnhMinhHoa'].'");" class="update-img">   
                                                    </div>';                                       
                                                ?>
                                            </div>
                                            <input class="crud-user_add-value add_file" value="<?php echo $image ?>" type="file" name="image" id=""><br>
                                        </div>
                                        <select class="crud-user_add-value ip_value" name="author[]" id=""><br>
                                        <?php 
                                            echo"<option value='".$author."'>" .$author. "</option>";
                                            $selectsql = "SELECT TenTG FROM tacgia WHERE NOT TenTG='$author'";
                                            $result = mysqli_query($conn,$selectsql);
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo"<option value='".$row['TenTG']."'>" .$row['TenTG']. "</option>"; }
                                        ?> 
                                        </select> 
                                        <select class="crud-user_add-value ip_value" name="category[]" id=""><br>
                                        <?php 
                                            echo"<option value='".$category."'>" .$category. "</option>";
                                            $selectsql = "SELECT TenTL FROM theloaisach WHERE NOT TenTL='$category'";
                                            $result = mysqli_query($conn,$selectsql);
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo"<option value='".$row['TenTL']."'>" .$row['TenTL']. "</option>"; }
                                        ?> 
                                        </select>
                                        <select class="crud-user_add-value ip_value sl_publisher" name="publisher[]" id=""><br>
                                        <?php 
                                            echo"<option value='".$publisher."'>" .$publisher. "</option>";
                                            $selectsql = "SELECT TenNXB FROM nhaxuatban WHERE NOT TenNXB='$publisher'";
                                            $result = mysqli_query($conn,$selectsql);
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo"<option value='".$row['TenNXB']."'>" .$row['TenNXB']. "</option>"; }
                                        ?>
                                        </select>             
                                        <div class="nb_value-container">
                                            <input class="crud-user_add-value nb_value" type="number" name="price" value="<?php
                                            if(!isset($_SESSION["notifi-price"])){
                                                echo $rowBook['Gia']; 
                                            } 
                                             ?>">
                                            <span class="lb_value">(VND)</span>
                                        </div>
                                        <div class="nb_value-container">
                                            <input class="crud-user_add-value nb_value" type="number" name="discount" id="" value="<?php echo $rowBook['GiamGia']; ?>">
                                            <span class="lb_value">(%)</span>
                                        </div>
                                        <div class="nb_value-container">
                                            <input class="crud-user_add-value nb_value" type="number" name="amount" id="" value="<?php
                                            if(!isset($_SESSION["notifi-amount"])){
                                                echo $rowBook['SoluongTon']; 
                                            } 
                                             ?>">
                                            <span class="lb_value">(quyển)</span>
                                        </div>
                                    </div>
                                    <div class="notifii">
                                        <label for="" class="highlight hl-title">
                                            <?php
                                                if(isset($_SESSION["notifi-title"])){
                                                    echo $_SESSION["notifi-title"];
                                                    unset($_SESSION["notifi-title"]);
                                                }
                                            ?>
                                        </label><br>
                                        <label for="" class="highlight hl-decribe">
                                        <?php
                                                if(isset($_SESSION["notifi-decribe"])){
                                                    echo $_SESSION["notifi-decribe"];
                                                    unset($_SESSION["notifi-decribe"]);
                                                }
                                            ?>
                                        </label><br>
                                        <label for="" class="highlight hl-price">
                                        <?php
                                                if(isset($_SESSION["notifi-price"])){
                                                    echo $_SESSION["notifi-price"];
                                                    unset($_SESSION["notifi-price"]);
                                                }
                                            ?>
                                        </label>
                                        <label for="" class="highlight hl-amount">
                                        <?php
                                                if(isset($_SESSION["notifi-amount"])){
                                                    echo $_SESSION["notifi-amount"];
                                                    unset($_SESSION["notifi-amount"]);
                                                }
                                            ?>
                                        </label>
                                    </div>
                                </div>  
                            </div>
                            <div class="add_save-exit">
                                <input onclick="return confirm('Thêm thông tin và rời khỏi đây?')" class="add-save add_save-exit--btn" type="submit" name="submit" value="Lưu">
                                <a href="bookView.php">
                                    <input onclick="return confirm('Bạn muốn hủy mà không thêm thông tin?')" class="add-exit add_save-exit--btn" type="button" value="Hủy">
                                </a>
                            </div>
                        </form>
            </div>
        </div>
    </main>
</body>
</html>
