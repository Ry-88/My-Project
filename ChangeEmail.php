<?php session_start();
include('add.php');
?>

<!doctype html>
<html lang= "en">

<head> 
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title> تغيير الايميل</title>
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
                تغيير الايميل
            </h2>
            <hr class="hr_login">
            <form action="ChangeEmail.php" method="post">

            <div class="mail_p">
                        <label>الايميل القديم</label>
                    <input type="email" class="mail_text_p" name="email" readonly="readonly"
                     value="<?php if(isset($_SESSION['name'])){ echo $_SESSION['email'];} ?>">
                </div>
            <br>
            <div class="mail_p">
                        <label>الايميل الجديد</label>
                    <input type="email" class="mail_text_p" name="email_new" placeholder="الايميل الجديد" value="" required>
                </div>
            <br>
            <div class="mail_p">
                        <label>تأكيد الايميل الجديد</label>
                    <input type="email" class="mail_text_p" name="email_newC" placeholder="تأكيد الايميل" required value="">
                </div>
            <hr class="hr_login">
            <p class="ihave"> <?php if(isset($errors['1'])){ echo $errors['1'];} ?> </p>
            <input type="submit" name="change" value="تـغـيـيـر" class="click_change"><a href="personal page.php" class="click_change"> الـغـاء </a>
                
            </form>
         </div>
            
    </div>

    <script src="script.js"></script>

    <?php include('footer.php'); ?>

</body>

</html>