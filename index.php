<?php 
    session_start();

    if(!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="pop.css">
    
</head>
<body>
    <img src="Transparent_Kung_Fu_Panda_PNG_Clip_Art_Image.png" alt="character_2" class="img-character1">
	<img src="pandafat.png" alt="character_2" class="img-character2">
            <div class="footer-content-manu">
		        <div class="footer-content-midded">
			        <img class="img-footer-mg-10" src="panda.png" />
			        <span class="span-footer-color-warning">อ่าน ทำไม ครับ</span>
		        </div>
	        </div>

            <div class="container">
		<div class="con-login">
			<img class="title" src="//pirate-th.com/new/assets/login/acsystem.png" />
			<form class="formLogin" id="frmlogin"><br>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <a href="hon.html"><span class="username"><img src="wx.png" alt="" class="img_login" ></span></a>
            <a href="index.php?logout='1'"><span class="username"><img src="logoutpop.png" alt="" class="img_login2" ></span></a>
            
	
				
				
		</div>
	</div>

</body>
</html>