<?php  
session_start();
include('add.php');
?>

<!doctype html>
<html lang= "en">

<head> 
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title> إنشاء حساب </title>
    <link rel="stylesheet" href="Style.css">

</head>

<body>
   
    <div class="B_ground_login">
        <div class="back_g_log">
            
        <div id="myheader" class="header">
            <div class="lists">
                <a class="name" href="Home.php">منصة نجاح
                </a>
                <div class="gets">
                    <a href="Login.php" class="login">
                        تسجيل الدخول
                    </a>
                    <a  href="register.php" class="reg">
                        إنشاء حساب
                    </a>
                 </div>
                <ul class="ulhome"> 
                    <li id="one"> <a href="Home.php" href="#one">  
                        الصفحة الرئيسية </a>
                    </li>
                        <li id="tow" >
                            <a onclick="changeHr()" href="Home.php #div_courses">الدورات
                            </a> 
                        </li>
                    
                    <li id="four">
                        <a href="about.php">عن نجاح</a>
                    </li>
                </ul>
            </div>
            <hr id="hr" class="hr_animate_reg">
        </div>

        <div class="info_reg">
            <h2>
                التسجيل
            </h2>
            <hr class="hr_login">
            <form action="register.php" method="POST">
            <div class="mail">
                <ul class="ul_in">
                    <li class="name_icon">......
                    </li>
                    <li>الاسم الاول:</li>
            </ul>
            <input type="text" class="mail_text" name="first_name" placeholder="الاسم الاول" value="" required="">
            </div>
            
            <div class="lastname">
                <ul class="ul_in">
                    <li class="lastname_icon">......
                    </li>
                    <li>الاسم الاخير:</li>
            </ul>
            <input type="text" class="pass_text" name="last_name" placeholder="الاسم الاخير" value="" required="" >
            </div>

            <div class="lastname">
                <ul class="ul_in">
                    <li class="lastname_icon">......
                    </li>
                    <li>اسم المستخدم:</li>
            </ul>
            <input type="text" class="pass_text" name="uname" placeholder="اسم المستخدم" value=""  required="">
            </div>

            <div class="choose_path">
                <ul class="ul_in">
                    <li class="lastname_icon">......
                    </li>
                    <li> اختر المسار:</li>
                </ul>
                <select name="path" class="path" >
                <option value="">اختر مسار</option>
                    <option value="trainee">متدرب</option>
                    <option value="trainers">مدرب</option>
                </select>
            </div>

            <div class="mail">
                <ul class="ul_in">
                    <li class="mail_icon">......
                    </li>
                    <li>الايميل:</li>
            </ul>
            <input type="email" class="mail_text" name="email" placeholder="الايميل" value="" required="">
            </div>

            <div class="mail">
                <ul class="ul_in">
                    <li class="phone_icon">......
                    </li>
                    <li>رقم الجوال:</li>
            </ul>
            <input type="tel" class="mail_text" name="phone_number" placeholder="رقم الجوال" value="" required="" >
            </div>

            <div class="pass">
                <ul class="ul_in">
                    <li class="pass_icon">......
                    </li>
                    <li>كلمة المرور:</li>
            </ul>
            <input type="password" class="pass_text" name="password1" placeholder="كلمة المرور" value="" required="">
            </div>

            <div class="pass">
                <ul class="ul_in">
                    <li class="pass_icon_con">......
                    </li>
                    <li>تأكيد كلمة المرور:</li>
            </ul>
            <input type="password" class="pass_text" name="password2" placeholder="تأكيد كلمة المرور" value="" required="" >
            </div>

            <hr class="hr_login">
            <input type="submit" class="click_log" name="submit" value="تـسـجـيـل">
            <div> هل تملك حساب؟  <a class="ihave" href="Login.php"> تسجيل الدخول </a> </div>
         </div>
        </form>

    </div>
    <script src="script.js"></script>

    <?php include('footer.php'); ?>
   
</body>

</html>