<?php
    session_start();
    if(!empty($_POST["email"]) && !empty($_POST["name"]) && !empty($_POST["pswd"]) && !empty($_POST["rpswd"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pswd = $_POST["pswd"];
        $rpswd = $_POST["rpswd"];
        $address = $_POST["address"];
        require_once '../connection.php';
        $select = "SELECT * FROM nguoidung WHERE Email='$email'";
        $redult = mysqli_query($conn,$select);
        if(mysqli_num_rows($redult)>0){
            $_SESSION["notify-email"] = "Địa chỉ email đã được đăng ký";
            header('Location: register.php');
        }
        else if($_POST["rpswd"] == $_POST["pswd"]){
            $insert = "INSERT INTO nguoidung(TenND, Email, MatKhau, DiaChi, MaLQ) VALUES('$name','$email','$pswd','$address','2')";
            mysqli_query($conn,$insert);
            $_SESSION['notify-regis'] = "Đăng ký thành công";
            header("Location: register.php");
        }
        else{
            $_SESSION["notify-rpswd"] = "Mật khẩu không trùng khớp";
            header('Location: register.php');
        }
    }
    else{
        if(empty($_POST["name"])){
            $_SESSION["notify-name"] = "Thông tin Họ và tên là cần thiết";
        }
        if(empty($_POST["email"])){
            $_SESSION["notify-email"] = "Địa chỉ Email không hợp lệ";
        }
        if(empty($_POST["pswd"])){
            $_SESSION["notify-pswd"] = "Bạn chưa nhập mật khẩu";
        }
        if(empty($_POST["rpswd"])){
            $_SESSION["notify-rpswd2"] = "Bạn chưa nhập lại mật khẩu";
        }
        header('Location: register.php');
    }
?>