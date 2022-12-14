<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="mailto:chinhnguyen6930@gmail.com?subject=Hỗ trợ tôi, another@thatsite.com, me@mysite.com&bcc=lastperson@theirsite.com&subject=Big%20News&body=Body-goes-here">mail</a>
    <a href="tel:0898058785">phoen</a>
    <?php
    $mail = 'chinhnguyen6930@gmail.com';
    check_user($mail);
    $token = bin2hex(random_bytes(16));
    $resetPasswordURL = "https://{$_SERVER['HTTP_HOST']}/resetpassword/?token=".$token;
    send_user($mail,$resetPasswordURL);
    ?>
</body>
</html>