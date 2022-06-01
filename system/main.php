<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="containers">
        <div class="maincontent">
            <?php
                if(isset($_REQUEST['router'])){
                    $router = $_REQUEST['router'];
                }else{
                    $router = '';
                }
                
                if($router == 'login'){
                    include("libs/login.php");
                }elseif($router == 'statistical'){
                    include("libs/statistical.php");
                }elseif($router == 'updateInfo'){
                    include("libs/updateInfo.php");
                }elseif($router == 'addcategory'){
                    include("libs/addcategory.php");
                }elseif($router == 'notification'){
                    include("libs/notification.php");
                }elseif($router == 'updateDRL'){
                    include("libs/CapNhatDRL.php");
                }elseif($router == 'detail_updateDRL'){
                    include("libs/CapNhatDRL_ChiTiet.php");
                }elseif($router == 'DuyetHB'){
                    include("libs/DuyetHB.php");
                }elseif($router == 'DuyetHB_DRL'){
                    include("libs/DuyetHB_DRL.php");
                }elseif($router == 'DuyetHB_HK'){
                    include("libs/DuyetHB_HK.php");
                }else{
                    include("libs/index.php");
                }
                
            ?>
        </div>
    </div>
</body>
</html>
