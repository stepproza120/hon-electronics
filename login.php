<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="pop1.css">
</head>
<body>
<!-- Develop here -->
<img src="Transparent_Kung_Fu_Panda_PNG_Clip_Art_Image.png" alt="character_2" class="img-character1">
	<img src="pandafat.png" alt="character_2" class="img-character2">
	<div class="footer-content-manu">
		<div class="footer-content-midded">
			<img class="img-footer-mg-10" src="panda.png" />
			<span class="span-footer-color-warning">bynot</span>
		</div>
	</div>



	<div class="container">
		<div class="con-login-lg">
			<img class="title" src="//pirate-th.com/new/assets/login/acsystem.png" />
			<form action="login_db.php" method="post" class="formLogin" id="frmregister" autocomplete="off" class="mt-4">
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
				
				<label for="password" class="mt-3">Password</label>
				<input type="password" id="conpassword" name="password" class="font-th" placeholder="ป้อนรหัสผ่าน" minlength="6" required>
				<!-- Google reCAPTCHA widget -->
                <!-- <div class="g-recaptcha" data-sitekey="6LeUhcIUAAAAAMukUwuapV9si0R4pzzcUgSWw63j" data-badge="bottomright" data-size="invisible" data-callback="setResponse"></div> -->
                <!-- <br> -->
                <!-- <input type="hidden" id="captcha-response" name="captcha-response" />
                
                <a href="#" class="mt-3" onclick="onClickLogin()">
					<img src="loginye.png" alt="btn-codeitem" class="img-box-btn-submit" onmouseover="hover(this, '//pirate-th.com/new/assets/main/regisac-on.png');" onmouseout="tabUnhover('receive-item', this, '//pirate-th.com/new/assets/main/regisac.png');" style="width: 151px;" />
				</a>
				<button type="submit" id="btnregis" name="reg_user" style="display: none;"></button> -->
                <button type="submit" name="login_user" class="btn" ><img src="loginye.png" alt="" class="img_login" ></button>
            </form>
            <p type="text" class="username" name="username" class="font-th">ยังไม่มีบัญชีใช่มั้ย  <a href="register.php"><span class="username">สมัครที่นี่เลย !</span></a></p>
		</div>
	</div>

</body>
</html>