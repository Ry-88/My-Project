<?php  session_start();  include('signin.php'); if(empty($_SESSION['name'])){
    header('location: Home.php');}
    if($_SESSION['path'] == "trainee"){ header('location: Home-trainee.php'); }
     ?>

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
                        <a onclick="changeHr()" href="#div_courses">الدورات
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
                <form action="Home-trainers.php" method="GET">
                    <input type="submit" class='logout' value="تسجيل الخروج" name="logout">
                </form>
                </div>
        </div>
        <hr id="hr" class="hrt">
</header>

            <div class="message">
                <div class="animate1">
                    مرحباً بك في منصة نجاح
                </div>
                <p class="animate2">
                    حيث للنجاح لذة تنسيك مرارة الصعاب<br>
                     في منصة نجاح نطمح ان نقدم لك شيء تستفيد منه ويضيف الى معرفتك شيئاً ثميناً
                </p>
            </div>

            <?php include('home-t.php'); ?>
            
        </div>
        
        </div>
    </div>

    <script src="script.js"></script>

    <?php include('footer.php'); ?>

</body>

</html>
<?php

 if(isset($_SESSION['msg'])){ $msg = $_SESSION['msg'];
    echo "<script type='text/javascript'>alert('$msg');</script>"; unset($_SESSION['msg']); } 
?>