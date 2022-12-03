<?php session_start();
include('add.php');
?>

<!doctype html>
<html lang= "en">

<head> 
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title> تغيير كلمة المرور</title>
    <link rel="stylesheet" href="Style.css">

</head>

<body>

    <div class="B_ground_login">
        <div class="back_g_log">
            
        <header id="myheader" class="header">
            <div class="lists">
                <a class="name" href="Home-trainee.php">منصة نجاح
                </a>
                <div class="gets_log">
                <?php if(isset($_SESSION['name'])): ?>
                            <h4 class="hello"> مرحباً <?php echo $_SESSION['name']; ?></h4>
                </div>
                <?php endif ?>
                    <ul class="ulhomet"> 
                        <li id="one"> <a href="Home-trainee.php" href="#one">  
                            الصفحة الرئيسية </a>
                        </li>
                        <li id="tow">
                            <a href="Home-trainee.php #div_courses">الدورات
                            </a>
                        </li>
                        <li id="three">
                            <a href="personal page.php">الصفحة الشخصية</a>
                        </li>
                        <li id="four">
                            <a href="about.php">عن نجاح</a>
                        </li>
                    </ul>
                    
                    <div class="log-out">
                    <form action="header-t.php" method="GET">
                        <input type="submit" class='logout' value="تسجيل الخروج" name="logout">
                    </form>
                    </div>
            </div>
            <hr class="hr_per">
        </header>

        <div class="info_log">
            <h2>
                تغيير كلمة المرور
            </h2>
            <hr class="hr_login">
            <form action="changepass.php" method="post">

            <div class="mail_p">
                        <label>كلمة المرور القديمة</label>
                    <input type="password" class="mail_text_p" name="passold" placeholder="كلمة المرور القديمة" required>
                    <div class="ihave"> <?php if(isset($errors['1'])){ echo $errors['1'];} ?> </div>
                </div>
            <br>
            <div class="mail_p">
                        <label>كلمة المرور الجديدة</label>
                    <input type="password" class="mail_text_p" name="passnew" placeholder="كلمة المرور الجديدة"  required>
                    <div class="ihave"> <?php if(isset($errors['2'])){ echo $errors['2'];} ?> </div>
                </div>
            <br>
            <div class="mail_p">
                        <label>اعد ادخال كلمة المرور الجديدة</label>
                    <input type="password" class="mail_text_p" name="passcon" placeholder="تأكيد كلمة المرور" required >
                    <div class="ihave"> <?php if(isset($errors['3'])){ echo $errors['3'];} ?> </div>
                </div>
            <hr class="hr_login">
            
            <input type="submit" name="changepass" value="تـغـيـيـر" class="click_change"><a href="personal page.php" class="click_change"> الـغـاء </a>
                
            </form>
         </div>
            
    </div>

    <script src="script.js"></script>

    <?php include('footer.php'); ?>

</body>

</html>