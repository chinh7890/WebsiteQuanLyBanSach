<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../ASSET/CSS/authen.css">
    <link rel="stylesheet" href="../ASSET/CSS/reset.css">
</head>
<body
    <?php
        if(isset($_SESSION['notify-regis'])){
    ?>
        onload="return alert('<?php echo $_SESSION['notify-regis']; unset($_SESSION['notify-regis']);?>')";
    <?php
        }
    ?>
>
    <div class="form-cont"><h1>Đăng ký</h1></div>
    <div class="container">
        <form action="registerHandle.php" method="post">
            <div class="form-cont item-grid">
                <label for="">Họ và tên <span class="highlight-label">*</span></label>
                <input class="input" type="text" placeholder="Họ và tên" name="name" id="">
                <label class="rpswd" for="">
                    <?php
                        if(isset($_SESSION["notify-name"])){
                            echo $_SESSION["notify-name"];
                            unset($_SESSION["notify-name"]);
                        }
                    ?>
                </label>
            </div>
            <div class="form-cont item-grid">
                <label for="">Email <span class="highlight-label">*</span></label>
                <input class="input" type="email" placeholder="Email" name="email" id="">
                <label class="rpswd" for="">
                    <?php
                        if(isset($_SESSION["notify-email"])){
                            echo $_SESSION["notify-email"];
                            unset($_SESSION["notify-email"]);
                        }
                    ?>
                </label>
            </div>
            <div class="form-cont item-grid">
                <label for="">Mật khẩu <span class="highlight-label">*</span></label>
                <input class="input" type="password" placeholder="Mật khẩu" name="pswd" id="">
                <label class="rpswd" for="">
                    <?php
                        if(isset($_SESSION["notify-pswd"])){
                            echo $_SESSION["notify-pswd"];
                            unset($_SESSION["notify-pswd"]);
                        }
                    ?>
                </label>
            </div>
            <div class="form-cont item-grid">
                <label for="">Nhập lại mật khẩu <span class="highlight-label">*</span></label>
                <input class="input" type="password" placeholder="Nhập lại mật khẩu" name="rpswd" id="">
                <label class="rpswd" for="">
                    <?php
                        if(isset($_SESSION["notify-rpswd"])){
                            echo $_SESSION["notify-rpswd"];
                            unset($_SESSION["notify-rpswd"]);
                        }
                        if(isset($_SESSION["notify-rpswd2"])){
                            echo $_SESSION["notify-rpswd2"];
                            unset($_SESSION["notify-rpswd2"]);
                        }
                    ?>
                </label>
            </div>
            <div class="form-cont item-grid">
                <label for="">Địa chỉ: <span class="highlight-label">*</span></label>
                <input class="input" type="text" placeholder="Địa chỉ" name="address" id="" required>
            </div>
            <div class="form-cont">
                <input class="btn" type="submit" value="Đăng ký">
            </div>
            <div class="form-cont form-cont-a">
                <a class="" href="login.php">Đã có tài khoản?</a>
            </div>
            
        </form>
        
    </div>
</body>
</html>
<?php 
    
?>