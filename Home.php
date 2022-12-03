<!doctype html>
<html lang= "en">

<head> 
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title> منصة نجاح التعليمية-الصفحة الرئيسية</title>
    <link rel="stylesheet" href="Style.css">

</head>

<body>
   
    <div class="B_ground">
        <div class="back_g">

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
                        <li>
                            <a onclick="changeHr1()" href="#div_courses">الدورات
                            </a> 
                        </li>
                    
                    <li id="four">
                        <a href="about.php">عن نجاح</a>
                    </li>
                </ul>
            </div>
            <hr id="hr1" class="hr_animate">
        </div>

            <div class="message">
                <div class="animate1">
                    مرحباً بك في منصة نجاح
                </div>

                <p class="animate2">
                    حيث للنجاح لذة تنسيك مرارة الصعاب<br>
                    هدفنا في منصة نجاح ان نقدم لك شيء تستفيد منه ويضيف الى معرفتك شيئاً ثميناً
                </p>

            </div>

            <?php  include('home-te.php'); ?>
            
        </div>
        
        </div>
    </div>
    
    <script src="script.js"></script>

    <?php include('footer.php'); ?>

</body>

</html>