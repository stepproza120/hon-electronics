<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="pop1.css">
</head>
<body>
<!-- Develop here -->
<img src="Transparent_Kung_Fu_Panda_PNG_Clip_Art_Image.png" alt="character_2" class="img-character1">
	<img src="pandafat.png" alt="character_2" class="img-character2">
	<div class="footer-content-manu">
		<div class="footer-content-midded">
			<img class="img-footer-mg-10" src="panda.png" />
			<span class="span-footer-color-warning">Copyright by pirate-th</span>
		</div>
	</div>



	<div class="container">
		<div class="con-login-lg">
			<img class="title" src="//pirate-th.com/new/assets/login/acsystem.png" />
			<form action="register_db.php" method="post" class="formLogin" id="frmregister" autocomplete="off" class="mt-4">
			 <?php include('errors.php'); ?>   
			 <?php if (isset($_SESSION['errors'])) : ?>
            <div class="errors">
                <h3>
                    <?php
                        echo $_SESSION['errors'];
                        unset($_SESSION['errors']);
                    ?>
                </h3>
            </div>
        <?php endif ?>    
            <label class="username" for="username">Username</label>
				<input type="text" id="username" name="username" class="font-th" placeholder="เฉพาะตัวอักษรและตัวเลขเท่านั้น" minlength="4" required>
				<label for="email" class="mt-3">Email</label>
				<input type="email" id="email" name="email" class="font-th" placeholder="ที่อยู่อีเมลของคุณ" required>
				<label for="password_1" class="mt-3">Password</label>
				<input type="password" id="password" name="password_1" class="font-th" placeholder="รหัสผ่านต้องมีอย่างน้อย 6 ตัวอักษร" minlength="6" required>
				<label for="password_2" class="mt-3">RE-ENTER PASSWORD</label>
				<input type="password" id="conpassword" name="password_2" class="font-th" placeholder="ป้อนรหัสผ่านอีกครั้งเพื่อยืนยัน" minlength="6" required>
				<!-- Google reCAPTCHA widget -->
                <!-- <div class="g-recaptcha" data-sitekey="6LeUhcIUAAAAAMukUwuapV9si0R4pzzcUgSWw63j" data-badge="bottomright" data-size="invisible" data-callback="setResponse"></div> -->
                <!-- <br> -->
                <!-- <input type="hidden" id="captcha-response" name="captcha-response" /> -->
                <button type="submit" name="reg_user" class="btn" ><img src="logout.png" alt="" class="img" ></button>
                <!-- <a href="#" class="mt-3" onclick="onClickLogin()"> -->
					<!-- <img src="//pirate-th.com/new/assets/main/regisac.png" alt="btn-codeitem" =class"img-box-btn-submit" onmouseover="hover(this, '//pirate-th.com/new/assets/main/regisac-on.png');" onmouseout="tabUnhover('receive-item', this, '//pirate-th.com/new/assets/main/regisac.png');" style="width: 151px;" /> -->
				<!-- </a> -->
				<!-- <button type="submit" id="btnregis" name="reg_user" style="display: none;"></button> -->
            </form>
            <p type="text" class="username" name="username" class="font-th">มีบัญชีใช่มั้ย  <a href="login.php"><span class="username">Login !</span></a></p>
		</div>
	</div>

</body>
</html>