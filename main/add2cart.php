<?php
    session_start();
    require_once '../connection.php';
    if(isset($_GET['cid'])){
        $getId = $_GET['cid'];
        $getName = "cid";
    } 
    if(isset($_GET['aid'])){
        $getId = $_GET['aid'];
        $getName = "aid";
    } 
    if(isset($_GET['pid'])){
        $getId = $_GET['pid'];
        $getName = "pid";
    }
    if(isset($_GET['sid'])){
        $getId = $_GET['sid'];
        $getName = "sid";
    } 


    if(isset($_GET['azcid'])){
        $getId = $_GET['azcid'];
        $getName = "azcid";
    } 
    if(isset($_GET['zacid'])){
        $getId = $_GET['zacid'];
        $getName = "zacid";
    } 
    if(isset($_GET['lhcid'])){
        $getId = $_GET['lhcid'];
        $getName = "lhcid";
    } 
    if(isset($_GET['hlcid'])){
        $getId = $_GET['hlcid'];
        $getName = "hlcid";
    } 

    if(isset($_GET['azaid'])){
        $getId = $_GET['azaid'];
        $getName = "azaid";
    } 
    if(isset($_GET['zaaid'])){
        $getId = $_GET['zaaid'];
        $getName = "zaaid";
    } 
    if(isset($_GET['lhaid'])){
        $getId = $_GET['lhaid'];
        $getName = "lhaid";
    } 
    if(isset($_GET['hlaid'])){
        $getId = $_GET['hlaid'];
        $getName = "hlaid";
    } 

    if(isset($_GET['azpid'])){
        $getId = $_GET['azpid'];
        $getName = "azpid";
    } 
    if(isset($_GET['zapid'])){
        $getId = $_GET['zapid'];
        $getName = "zapid";
    } 
    if(isset($_GET['lhpid'])){
        $getId = $_GET['lhpid'];
        $getName = "lhpid";
    } 
    if(isset($_GET['hlpid'])){
        $getId = $_GET['hlpid'];
        $getName = "hlpid";
    }

    if(isset($_GET['azsid'])){
        $getId = $_GET['azsid'];
        $getName = "azsid";
    } 
    if(isset($_GET['zasid'])){
        $getId = $_GET['zasid'];
        $getName = "zasid";
    } 
    if(isset($_GET['lhsid'])){
        $getId = $_GET['lhsid'];
        $getName = "lhsid";
    } 
    if(isset($_GET['hlsid'])){
        $getId = $_GET['hlsid'];
        $getName = "hlsid";
    } 

    if(isset($_GET['id']) && $_GET['action']=="add2"){
        if(isset($_SESSION['Email-all'])){
            $select = "SELECT SoluongTon FROM sach WHERE MaSach ='$_GET[id]' and SoluongTon > 0";
            $result = mysqli_query($conn,$select);
            if(mysqli_num_rows($result)>0){
                if(!isset($_SESSION['cart'])){
                    $_SESSION['cart'] = array();
                }
                if(!in_array($_GET['id'], $_SESSION['cart'])){
                    array_push($_SESSION['cart'], $_GET['id']);
                    array_push($_SESSION['amount'], 1);
                    $_SESSION['message'] = 'Thêm sản phẩm vào giỏ hàng thành công';
                }
                else{
                    $_SESSION['message'] = 'Sản phẩm đã tồn tại trong giỏ hàng';
                }
            
                header('location: product.php?bid='.$_GET['id'].'');
            }
            else{
                $_SESSION['message'] = 'Rất tiếc sản phẩm hiện tại đã hết. Vui lòng chọn sản phẩm khác!';
                header('location: product.php?bid='.$_GET['id'].'');
            }
        }
        else{
            header("Location: ../authencation/login.php");
        }
    }
    else if(isset($_GET['id']) && $_GET['action']=="add1"){
        if(isset($_SESSION['Email-all'])){
            $select = "SELECT SoluongTon FROM sach WHERE MaSach ='$_GET[id]' and SoluongTon > 0";
            $result = mysqli_query($conn,$select);
            if(mysqli_num_rows($result)>0){
                if(!isset($_SESSION['cart'])){
                    $_SESSION['cart'] = array();
                }
                if(!in_array($_GET['id'], $_SESSION['cart'])){ 
                    array_push($_SESSION['cart'], $_GET['id']);
                    array_push($_SESSION['amount'], 1);
                    $_SESSION['message'] = 'Thêm sản phẩm vào giỏ hàng thành công';
                }
                else{
                    $_SESSION['message'] = 'Sản phẩm đã tồn tại trong giỏ hàng';
                }
            
                header('location: productList.php?'.$getName.'='.$getId.'');
            }
            else{
                $_SESSION['message'] = 'Rất tiếc sản phẩm hiện tại đã hết. Vui lòng chọn sản phẩm khác!';
                header('location: productList.php?'.$getName.'='.$getId.'');
            }
        }
        else{
            header("Location: ../authencation/login.php");
        }
    } 
    
    ///HÓA ĐƠN
    if(isset($_POST['order'])){
        if(isset($_SESSION['Email-all'])){
            $email = $_SESSION['Email-all'];
        }
        else{
            header("Location: ../authencation/login.php");
        }
                // $sqlor = "SELECT * FROM nguoidung WHERE Email = '$email'";
                // $result = mysqli_query($conn,$sqlor);
                // if(mysqli_num_rows($result)>0){
                    $row = mysqli_fetch_assoc($result);
                    $username = $_POST["name"];
                    $address = $_POST["address"];
                    $phone = $_POST['numberphone'];
                    $price = $_GET['total'];
                    $detail = $_SESSION['detail'];
                    $insertor = "INSERT INTO donhang (TenND, Email,SDT, ChiTiet, DiaChi, TongTien, NgayDH, TrangThai) VALUES('$username','$email','$phone','$detail','$address','$price',NOW(),'0')";
                    if(mysqli_query($conn,$insertor)){
                        for($i=0;$i<count($_SESSION['id-product']);$i++){
                            $idpdt = $_SESSION['id-product'][$i];
                            $selectamt = "SELECT SoluongTon FROM sach WHERE MaSach ='$idpdt'";
                            $resultamt = mysqli_query($conn,$selectamt);
                            $rowamt = mysqli_fetch_assoc($resultamt);
                            $amount = $rowamt['SoluongTon'] - $_SESSION['amount-product'][$i];
                            $updateamt = "UPDATE sach SET SoluongTon = '$amount' WHERE MaSach = '$idpdt'";
                            mysqli_query($conn,$updateamt);
                        }
                        /*chưa cập nhật số lượng hàng :(*/          
                        unset($_SESSION['cart']);
                        unset($_SESSION['amount']);
                        $_SESSION['cartnotify']="Đặt hàng thành công";
                        header("Location: ../main/cart.php");
                    // }
                }
                else{
                    unset($_SESSION['nameOfValue']);
                    header("Location: ../authencation/login.php");
                }
        
    }

?>