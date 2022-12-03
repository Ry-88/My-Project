<?php session_start();
include('signin.php');
?>

<!doctype html>
<html lang= "en">

<head> 
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title> تسجيل الدخول </title>
    <link rel="stylesheet" href="Style.css">

</head>

<body>
   <form class="" action="" >

   </form>
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
            <hr id="hr" class="hr_log">
        </div>

        <div class="info_log">
            <h2>
                تسجيل الدخول
            </h2>
            <hr class="hr_login">
            <form action="Login.php" method="post">
            <div class="mail">
                <ul class="ul_in">
                    <li class="name_icon">......
                    </li>
                    <li>اسم المستخدم:</li>
            </ul>
            <input type="text" class="mail_text" name="uname" placeholder="اسم المستخدم" value="" required="">
            </div>
            
            <div class="pass">
                <ul class="ul_in">
                    <li class="pass_icon">......
                    </li>
                    <li>كلمة المرور:</li>
            </ul>
            <input type="password" class="pass_text" name="password1" placeholder="كلمة المرور" value="" required="">
            </div>

            <div class="choose_path">
                <ul class="ul_in">
                    <li class="lastname_icon">......
                    </li>
                    <li> نوع الدخول:</li>
                </ul>
                <select name="path" class="path" >
                <option value="">اختر نوع الدخول</option>
                    <option value="trainee">متدرب</option>
                    <option value="trainers">مدرب</option>
                </select>
            </div>
            <div class="ihave"> <?php if(isset($errors['pth'])){ echo $errors['pth'];} ?> </div>
            <hr class="hr_login">
            <p class="ihave"> <?php if(isset($errors['ero'])){ echo $errors['ero'];} ?> </p>
            <input type="submit" name="login" value="تسجيل الدخول" class="click_log">
                <div> لا تملك حساب؟  <a class="ihave" href="register.php"> تسجيل </a> </div>
            </form>
         </div>
            
    </div>

    <script src="script.js"></script>

    <?php include('footer.php'); ?>

</body>

</html>
<?php if(isset($_SESSION['reg'])){
    $msg = $_SESSION['reg'];
    echo "<script type='text/javascript'>alert('$msg');</script>";
    unset($_SESSION['reg']);
} ?>