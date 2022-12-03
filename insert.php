<?php  
session_start();
include('add.php');
?>

<!doctype html>
<html lang= "en">

<head> 
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title> إضافة دورة</title>
    <link rel="stylesheet" href="Style.css">

</head>

<body>
   
    <div class="B_ground_login">
        <div class="back_g_log">
            
        <?php include('signin.php') ?>

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
        <hr class="hrt">
</header>

        <div class="info_reg">
            <h2>
                إضافة دورة
            </h2>
            <hr class="hr_login">
            <form action="insert.php" method="POST">
            <div class="mail">
                <ul class="ul_insert">
                    <li>اسم الدورة:</li>
            </ul>
            <input type="text" class="mail_text" name="cname" placeholder="اسم الدورة" value="" required="">
            </div>
            
            <div class="lastname">
                <ul class="ul_insert">
                    <li>محتوى الدورة:</li>
            </ul>
             <input style="margin-bottom: 5px;" type="url" class="pass_text" name="urlcon" placeholder="رابط الدورة" value="" > <br>
             <label class="file_text" for="content">ملف للدورة ان وجد</label>
             <input class="fileup" type="file" class="pass_text" name="content" placeholder="" value="" >
            </div>

            <div class="lastname">
                <ul class="ul_insert">
                    <li>مدة الدورة:</li>
            </ul>
            <input type="text" class="pass_text" name="dtime" placeholder="مدة الدورة(اختياري)" value="">
            </div>

            <div class="choose_path">
                <ul class="ul_insert">
                    <li> تاريخ الدورة:</li>
                </ul>
                <input type="date" class="pass_text" name="cdate" placeholder="تاريخ الدورة(اختياري)" value="">
            </div>

            <div class="mail">
                <ul class="ul_insert">
                    <li>وقت بدء الدورة:</li>
            </ul>
            <input type="time" class="mail_text" name="strat_time" placeholder="وقت بدء الدورة(اختياري)" value="">
            </div>

            <div class="mail">
                <ul class="ul_insert">
                    <li>وقت نهاية الدورة:</li>
            </ul>
            <input type="time" class="mail_text" name="end_time" placeholder="وقت نهاية الدورة(اختياري)" value="">
            </div>

            <div class="pass">
                <ul class="ul_insert">
                    <li>سعر الدورة:</li>
            </ul>
            <input type="number" class="pass_text" name="price" placeholder="سعر الدورة(اختياري)" value="">
            </div>

            <div class="pass">
                <ul class="ul_insert">
                    <li>متطلبات الدورة:</li>
            </ul>
            <input type="text" class="pass_text" name="name_req" placeholder="متطلبات الدورة(اختياري)" value="">
            </div>

            <hr class="hr_login">
            <input type="submit" class="click_log" name="insert" value="إضـافـة"> <a href="Home-trainers.php" class="click_change"> الـغـاء </a>
         </div>
        </form>

    </div>
    <script src="script.js"></script>

    <?php include('footer.php'); ?>
   
</body>

</html>
