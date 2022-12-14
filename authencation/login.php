<?php 
    session_start();
    require_once '../connection.php';
    if(isset($_COOKIE["user"])){
        $selectTT = "SELECT MatKhau FROM nguoidung WHERE Email='".$_COOKIE["user"]."'";
        $result = mysqli_query($conn,$selectTT);
        $row = mysqli_fetch_assoc($result);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script lang="javascript">
        //window.history.forward();
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../ASSET/CSS/authen.css">
    <link rel="stylesheet" href="../ASSET/CSS/reset.css">
</head>
<body>
    <div class="form-cont"><h1>Đăng nhập</h1></div>
    <div class="container">
        <form action="loginHandle.php" method="post">
            <div class="form-cont item-grid">
                <label for="">Email:</label>
                <input class="input" type="email" placeholder="Email" name="email" id="" value="<?php
                    if(isset($_COOKIE["user"]) && (!isset($_SESSION["notify-email"]) || !isset($_SESSION["notify-pswd"]))){
                        echo $_COOKIE["user"];
                    }
                    if(isset($_SESSION["email"])){
                        echo $_SESSION["email"];
                    }
                ?>">
                <label class="rpswd" for="">
                    <?php
                        if(isset($_SESSION["notify-email"])){
                            echo $_SESSION["notify-email"];
                        }
                    ?>
                </label>
            </div>
            <div class="form-cont item-grid">
                <label for="">Mật khẩu:</label>
                <input class="input" type="password" placeholder="Mật khẩu" name="pswd" id="" value="<?php
                if(isset($row["MatKhau"]) && (!isset($_SESSION["notify-email"]) || !isset($_SESSION["notify-pswd"]))){
                    echo $row["MatKhau"];
                }?>">
                <label class="rpswd" for="">
                    <?php
                        if(isset($_SESSION["notify-pswd"])){
                            echo $_SESSION["notify-pswd"];
                        }
                    ?>
                </label>
            </div>
            <div class="form-cont">
                <label for="">
                    <input type="checkbox" name="remember" id="" value="yes"
                    <?php
                        if(isset($_COOKIE["remember"])){
                            echo $_COOKIE["remember"];
                        }
                    ?>
                    >Ghi nhớ đăng nhập
                </label>
            </div>
            <div class="form-cont notifi-cont">
                <label class="notifi" for="">        
                <?php
                    if(isset($_SESSION["notify"])){
                        echo $_SESSION["notify"];
                    }
                ?>
                </label>
            </div>
            <div class="form-cont">
                <input class="btn" type="submit" value="Đăng nhập" name="submit">
            </div>
            <div class="form-cont form-cont-a">
                <a class="" href="register.php">Chưa có tài khoản?</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php
    session_destroy();
?>